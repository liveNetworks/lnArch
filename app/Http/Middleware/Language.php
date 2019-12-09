<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Language
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
		$lang = $request->route()->parameter(env('LANG_PARAM'));
		if (array_key_exists($lang, Config::get('languages'))) {
			App::setLocale($lang);
		}
		else {
			
		}
		return $next($request);
	}
}
