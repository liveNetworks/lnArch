<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubdomainController extends LNController {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view = 'subdomain';
		return view($this->getView());
	}
}
