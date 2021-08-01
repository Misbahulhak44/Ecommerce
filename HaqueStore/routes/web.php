<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});
Auth::routes();
Route::get('/collections', 'Frontend\CollectionController@index');

//frontend
Route::get('collection/{group_url}','Frontend\CollectionController@groupview');
Route::get('collection/{group_url}/{cate_url}','Frontend\CollectionController@categoryview');
Route::get('collection/{group_url}/{cate_url}/{subcate_url}','Frontend\CollectionController@subcategoryview');

//for normal user page to display
Route::group(['middleware' => ['auth','isUser']], function(){

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/my-profile','Frontend\UserController@myprofile');
  Route::post('/my-profile-update','Frontend\UserController@profileupdate');

});

//for Admin User page After login
Route::group(['middleware' => ['auth','isAdmin']], function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
    //for admin registered user
     Route::get('registered-user','Admin\RegisteredController@index');
     Route::get('role-edit/{id}','Admin\RegisteredController@edit');
     Route::put('role-update/{id}','Admin\RegisteredController@update');

     //route Groups
     Route::get('group','Admin\GroupController@index');//after login admin dashbord page
     Route::get('group-add','Admin\GroupController@viewpage');//this code for goto group-add page
     Route::post('group-store','Admin\GroupController@store');//this is for store data to database after save
     Route::get('group-edit/{id}','Admin\GroupController@edit');//For update group data
     Route::put('group-update/{id}','Admin\GroupController@update');//for update in group details
     Route::get('group-delete/{id}','Admin\GroupController@delete');//for delete group data
     Route::get('group-delete-records','Admin\GroupController@deletedrecords');//to show deleted records
     Route::get('group-re-store/{id}','Admin\GroupController@deletedrestore');//to restore data

     //route Category page details
     Route::get('/category','Admin\CategoryController@index');//Category main Page
     Route::get('category-add','Admin\CategoryController@create');
     Route::post('/category-store','Admin\CategoryController@store');
     Route::get('category-edit/{id}','Admin\CategoryController@edit');
     Route::put('category-update/{id}','Admin\CategoryController@update');
     Route::get('category-delete/{id}','Admin\CategoryController@delete');
     Route::get('category-delete-records','Admin\CategoryController@categorydeletedrecords');
     Route::get('category-re-store/{id}','Admin\CategoryController@deletedrestore');

     //Route for sub-category
     Route::get('sub-category','Admin\SubCategoryController@index');
     Route::post('sub-category-store','Admin\SubCategoryController@store');
     Route::get('subcategory-edit/{id}','Admin\SubCategoryController@edit');
     Route::put('sub-category-update/{id}','Admin\SubCategoryController@update');
     Route::get('subcategory-delete/{id}','Admin\SubCategoryController@delete');
     Route::get('subcategory-delete-records','Admin\SubCategoryController@deletedrecords');//to show deleted records
     Route::get('subcategory-re-store/{id}','Admin\SubCategoryController@deletedrestore');//to restore data

     //Route for products
     Route::get('product','admin\ProductController@index');

     Route::get('add-products','admin\ProductController@create');
     Route::post('store-products','admin\ProductController@store');
     Route::get('edit-products/{id}','admin\ProductController@edit');
     Route::put('update-product/{id}','Admin\ProductController@update');

});
//for Vendor User page After login
Route::group(['middleware' => ['auth','isVendor']], function(){
    Route::get('/vendor-dashboard', function(){
        return view('vendor.dashboard');
    });
});
