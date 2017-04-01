<?php  

// #8 if文で条件分岐をしてみよう
// 比較演算子　< > <= >= == === != !==
// 論理演算子　and && , or || , !

$score = 55;

if($score > 80){
	echo "great!";
}elseif($score > 60){
	echo "good!";
}else {
	echo "so so ...";
}


?>