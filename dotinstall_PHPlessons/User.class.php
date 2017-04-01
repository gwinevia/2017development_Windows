<?php // use lesson-25.php , lessson-26.php

namespace Dotinstall\Lib;

class User{
	public $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function sayHi(){
		echo "hi, i am $this->name!";
	}
}