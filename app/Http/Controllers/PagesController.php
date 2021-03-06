<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveNetworks\LNController;

class PagesController extends LNController {

	public function __construct() {
		parent::__construct();
	}

	public function language() {
		$this->setLanguage($this->getLanguage());
		return redirect(route('index', ['lang' => $this->getLanguage()]));
	}

	public function index() {
		$this->view = 'index';
		return view($this->getView());
	}
}
