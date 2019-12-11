<?php
namespace App\DemoApp\VM;

use App\LiveNetworks\LocaleFormater;

class VMIndex {

    public $title;
    public $date;

    public function __constructor() {
		$format = new LocaleFormater();
        $this->title = "Test Title";
        $this->date = $format->longDate(now());
    }
    
}