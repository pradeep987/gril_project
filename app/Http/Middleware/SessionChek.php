<?php

namespace App\Http\Middleware;
use Closure;

class SessionChek{
	public function handle($request, Closure $next) {
		if(!$request->session()->get('loginUserName')){
			return redirect('admin');
		}
		return $next($request);
	}
}
