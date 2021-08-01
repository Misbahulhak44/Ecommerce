<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myprofile()
    {
        return view('frontend.user.profile');

    }
    public function profileupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->name = $request->input('fname');
        //$user->email = $request->input('email');
        $user->lastname = $request->input('lastname');
        $user->phone_no = $request->input('phone_no');
        $user->alt_phone_no = $request->input('alt_phone_no');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('city');
        $user->district = $request->input('district');
        $user->state = $request->input('state');
        $user->country = $request->input('country');
        $user->pincode = $request->input('pincode');

        $user->update();
        return redirect()->back()->with('status','profileupdated');

    }



}
