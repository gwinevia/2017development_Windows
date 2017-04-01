<?php  

// #9 真偽値について理解しよう

/*
# falseになる場合
	文字列:　空、"0"
	数値: 0, 0.0
	論理値:　false
	配列:　要素の数が0
	null
*/

$x = 5;
if($x){ // $x == true
	echo "great!";
}

// 三項演算子
$a = 3;
$b = 5;
$max = ($a > $b) ? $a : $b;
echo $max;

// if($a > $b){
// 	$max = $a;
// }else{
// 	$max = $b;
// }

?>