<?php  

// #11 while文でループ処理をしてみよう
// while
// do ... while 

$i = 0;
while ($i < 10) {
	echo $i;
	$i++;
}

$j = 100;
do {
	echo $j;
	$j++;
}while ($j < 10);


// #12 for文でループ処理をしてみよう
// for
// break: ループを抜ける
// continue:　それ以降の処理を実行せずに次のループに移る

for ($k = 0; $k < 10; $k++) { 
	if ($k === 5) {
		//break;
		continue;
	}
	echo $k;
}

?>