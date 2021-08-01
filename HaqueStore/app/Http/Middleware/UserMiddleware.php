<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Filesystem\Cache;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isBan)
        {
            $banned = Auth::user()->isBan =="1";
            Auth::logout();

            if($banned == 1){
                $message = 'Your account has been banned .Please contact administrator. ';
            }
            return redirect()->route('login')->with('status',$message)
            ->withErrors(['email' =>'Your account has been Banned.Please contact administrator.']);
        }

        //if(Auth::check())
       // {
          //  $expiresAt = Carbon::now()->addMinutes(1);

            //Cache::put('user-is-online' .Auth::user()->id, $expiresAt);


        //}

        return $next($request);
    }
}
