<?php

// #15 関数を使ってみよう
function sayHi($name = "taguchi"){
	//echo "hi! " . $name;
	return "hi! " . $name;
}

//sayHi();

//sayHi("Tom");
//sayHi("Bob");

$s = sayHi();
var_dump($s);

?>