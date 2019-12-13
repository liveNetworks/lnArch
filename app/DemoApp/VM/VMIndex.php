<?php
namespace App\DemoApp\VM;

class VMIndex {
	public $title;
	public $date;
	public $channels;
	
	public function __construct() {
		$this->title = "Naslov";
		$this->date = '30.12.1979';

		$c = new \StdClass();
		$c->name = 'Amazing Blues';
		$this->channels[] = $c;
		$c = new \StdClass();
		$c->name = 'Amazing Jazz';
		$this->channels[] = $c;
	}
}