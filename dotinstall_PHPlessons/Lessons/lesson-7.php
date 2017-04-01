<?php  

// #7 文字列を扱ってみよう

// "" 特殊文字(\n,\t)　変数
// ''　


$name = "taguchi";
$s1 = "hello $name!\nhello again";
$s2 = 'hello $name!\nhello again';
var_dump($s1);
var_dump($s2);

// 連結 .
$s = "hello " . "world";
var_dump($s);

?>