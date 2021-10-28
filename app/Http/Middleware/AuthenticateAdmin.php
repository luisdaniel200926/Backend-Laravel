<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Auth;

class AuthenticateAdmin extends Middleware
{

    public function handle(Request $request, Closure $next){

            //If the status is not approved redirect to login
            if(Auth::check() && Auth::user()->type != 'admin'){
                //Auth::logout();
                //abort(403);
                return redirect('home');
            }
            return $next($request);

    }
}
