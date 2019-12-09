<?php

namespace App\LiveNetworks;

class LocaleFormater {

	private static $_format;

	private static function _load($locale) {
		return include('Locales/'.$locale.'.php');
	}

	public static function setLocale($locale) {
		self::$_format = LocaleFormater::_load($locale);
		setlocale(LC_ALL, self::$_format['locale']);

	}

	public static function shortDate($timestamp){
		return strftime(self::$_format['shortDate'], $timestamp);
	}
	public static function longDate($timestamp){
		return strftime(self::$_format['longDate'], $timestamp);
	}
}
