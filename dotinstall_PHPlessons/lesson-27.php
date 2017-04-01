<?php

// #27 例外処理をしてみよう
// 例外を発生させて適切な処理を行なう方法

function div($a,$b){
	try{
		if($b == 0){
			throw new Exception("cannot divide by 0!");
		}
		echo $a / $b;
	} catch(Exception $e){
		echo $e->getMessage();
	}
}

div(7,2);
div(5,0);
