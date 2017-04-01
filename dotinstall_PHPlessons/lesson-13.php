<?php  

// #13 配列を使ってみよう
// key value

$salse = array(
	'taguchi' => 200,
	'yamaguchi' => 800,
	'karasawa' => 600,
	'sasaki' => 500,
);

//　PHP 5.4 ~
$salse_php54 = [
	'taguchi' => 200,
	'yamaguchi' => 800,
	'karasawa' => 600,
	'sasaki' => 500,
];

// 要素へのアクセス
var_dump($salse_php54['taguchi']);
$salse_php54['yamaguchi'] = 900;
var_dump($salse_php54['yamaguchi']);

$colors = ["red","blue","pink"];
var_dump($colors[1]); 

?>