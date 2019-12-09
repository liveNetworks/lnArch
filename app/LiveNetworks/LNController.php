<?php

namespace App\LiveNetworks;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LNController extends Controller {

	public $view;

	public function __construct() {
		$this->_request = Request();

		$this->_viewMime();

		return $this;
	}

	public function getView() {
		return $this->view . '.' . $this->_mime;
	}

	public function getLanguage() {
		$languages = explode(',',  $this->_request->header('Accept-Language'));
		print_r($languages);

		foreach ($languages as $lang) {
			if (array_key_exists($lang, Config::get('languages'))) {
				return $lang;
			}
		}
		return Config::get('app.fallback_locale');

	}

	public function setLanguage($lang) {
		app()->setLocale($lang);
	}


	public function _viewMime() {
		$acceptedMime = explode(',', $this->_request->header('Accept'));
		print_r($acceptedMime);


		switch ($acceptedMime[0]) {
			case 'text/html':
				$this->_mime = 'html';
				break;
			
			case 'application/xml':
				$this->_mime = 'xml';
				break;
			
			case 'application/json':
				$this->_mime = 'json';
				break;
			
			default:
				$this->_mime = 'html';
				break;
		}
	}


}
