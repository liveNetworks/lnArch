<?php
namespace App\DeomApp\VM;

use App\LiveNetworks\LocaleFormater;

class VMIndex {

    public $title;
    public $date;

    public function __constructor() {
        $this->title = "Test Title";
        $this->date = $format->longDate(now());
    }
    
}