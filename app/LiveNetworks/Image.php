<?php
namespace App\LiveNetworks;


use Illuminate\Http\Request;


class Image {

	public function __construct() {
		$this->_request = Request();
	}

	// function should rewrite default extension to webp if browser support it
	// ex: logo.jpg -> logo.webp, or logo.png -> logo.webp
	public static function x() {

	}


	private function acceptWebp() {
		$acceptedMime = explode(',', $this->_request->header('Accept'));
		foreach($acceptedMime as $mime) {
			if (strpos($mime, 'webp') !== false) {
				$this->ext = "webp";
			}
		}
	}
}