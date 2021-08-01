<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use File;

class SubCategoryController extends Controller
{
    public function index()
    {
        $category =Category::where('status','!=','3')->get();
        $subcategory = Subcategory::where('status','!=','3')->get(); //3=deleted
        return view('admin.collection.subcategory.index')
        ->with('subcategory',$subcategory)
        ->with('category',$category);
    }
    public function store(Request $request)
    {
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->input('category_id');
        $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $img_file = $request->file('image');
            $img_extension =$img_file->getClientOriginalExtension();//getting image extension
            $img_filename =time().'.'.$img_extension;
            $img_file->move('uploads/subcategory/',$img_filename);
            $subcategory->image=$img_filename;
        }
        $subcategory->priority = $request->input('priority');
        $subcategory->status = $request->input('status')==true ?'1':'0';
        $subcategory->save();
        return redirect()->back()->with('status','Sub Category Save Successfully');
    }
    public function edit($id)
    {
        $category = Category::where('status','!=','3')->get();
        $subcategory = Subcategory::find($id);
        return view('admin.collection.subcategory.edit')
        ->with('subcategory',$subcategory)
        ->with('category',$category);
    }

public function update(Request $request, $id)
{
    $subcategory = Subcategory::find($id);
    $subcategory->category_id = $request->input('category_id');
    $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $filepath_image = 'uploads/subcategory/'.$subcategory->image;
            if(File::exists($filepath_image)){
                File::delete($filepath_image);
            }
            $img_file = $request->file('image');
            $img_extension =$img_file->getClientOriginalExtension();//getting image extension
            $img_filename =time().'.'.$img_extension;
            $img_file->move('uploads/subcategory/',$img_filename);
            $subcategory->image=$img_filename;
        }
        $subcategory->priority = $request->input('priority');
        $subcategory->status = $request->input('status')==true ?'1':'0';
        $subcategory->update();
          return redirect('sub-category')->with('status','Sub Category Updated Successfully');
    }
    public function delete($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->status ='3'; //3=deleted Records
        $subcategory->update();
        return redirect()->back()->with('status','SubCategory Deleted Successfully');
    }
    public function deletedrecords()
    {
        $subcategory = Subcategory::where('status','2')->get();
        return view('admin.collection.subcategory.deleted')->with('subcategory',$subcategory);
    }
    public function deletedrestore($id)
    {
        $subcategory =Subcategory::find($id);
        $subcategory->status="0";
        $subcategory->update();
        return redirect('subcategory')->with('status','Data Re-Store Successfully');
    }
}

