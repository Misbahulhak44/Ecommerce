<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class RegisteredController extends Controller
{
    public function index()
    {
        //$users =User::paginate(3);//use code for laravel pagination
        $users = User::all();
        //<!-- to make no of data to display in page -->
        return view('admin.users.index')->with('users',$users);

    }
    public function edit($id)
    {

        $user_roles =User::find($id);
        return view('admin.users.edit')->with('user_roles',$user_roles);

    }
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name = $request->input('name');
        $user->role_as=$request->input('roles');
        $user->isBan=$request->input('isBan');

        $user->update();

        return redirect()->back()->with('status','Role is updated');
    }


}
