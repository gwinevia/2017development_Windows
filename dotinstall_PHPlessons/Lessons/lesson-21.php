<?php

// #21 アクセス権について理解しよう
// - private: そのクラス内からのみアクセス可能
// - protected:　そのクラス＋親子クラス内からのみアクセス可能
// - public:　どこからでもアクセス可能

class User{
	// public $name;
	// private $name;
	protected $name;
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

$tom->sayHi();
$steve->sayHi();

?>

