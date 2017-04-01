<?php  

// #14 foreachを使ってみよう
// 配列の要素にアクセスするためのforeach

//　PHP 5.4 ~
$salse_php54 = [
	'taguchi' => 200,
	'yamaguchi' => 800,
	'karasawa' => 600,
	'sasaki' => 500,
];

foreach ($salse_php54 as $key => $value) {
	echo "($key) $value";
}

$colors = ["red","blue","pink"];
foreach ($colors as $value) {
	echo "$value ";
}

// foreach if while for コロン構文

foreach ($colors as $value):
	echo "$value ";
endforeach;

?>

<ul>
	<?php foreach ($colors as $value): ?>
	<li><?php echo "$value "; ?></li>
	<?php endforeach; ?>
</ul>