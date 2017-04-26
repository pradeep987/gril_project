<?php

namespace App\Http\Middleware;
use Closure;

class UserSessionChek{
	public function handle($request, Closure $next) {
		if(!$request->session()->get('userName')){
			return redirect('/');
		}
		return $next($request);
	}
}
