<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;
  public function redirectTo()
  {
      //for Admin User login
      if(Auth::user()->role_as =='admin')
      {
          return 'dashboard';

      }

      //for Vendor User login
      if(Auth::user()->role_as =='vendor')
      {
          return 'vendor-dashboard';

      }

      //for Normal User login
      if(Auth::user()->role_as ==NULL)
      {
          return '/';

      }
     // else
      //{
     //     return 'home';

      //}
  }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
