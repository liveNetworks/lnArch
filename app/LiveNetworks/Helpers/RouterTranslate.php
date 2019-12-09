<?php
namespace App\Helpers;
class RouterTranslate
{
	public static function translate($lang) {
		$params = \Request::route()->parameters();
		$params[env('LANG_PARAM')] = $lang;
		return route(\Route::currentRouteName(), $params);
	}
}
