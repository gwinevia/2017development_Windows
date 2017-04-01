<?php

// #20 クラスを継承してみよう

// User
class User{

	public $name;
	public function __construct($name){
		$this->name = $name;
	}
	public function sayHi(){
		echo "hi, i am $this->name!";
	}
}

class AdminUser extends User{
	
	public function sayHello(){
		echo "hello from Admin!";
	}

	// override
	public function sayHi(){
		echo "[admin] hi, i am $this->name!";
	}
}


$tom = new User("Tom");
$steve = new AdminUser("Steve");

//echo $steve->name;
$tom->sayHi();
$steve->sayHi();
//$steve->sayHello();

?>

