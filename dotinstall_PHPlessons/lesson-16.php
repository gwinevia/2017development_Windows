<?php

// #16 ローカル変数を理解しよう

$lang = "ruby";

function sayHi($name = "taguchi"){
	$lang = "php";
	echo "hi! $name from $lang";
}

sayHi("Tom");
var_dump($lang); //ruby

?>