<?php  

// #10 switch文で条件分岐をしてみよう
$signal = "green";

switch ($signal) {
	case 'red':
		echo "stop!";
		break;
	case 'bule':
	case 'green':
		echo "go!";
		break;
	case 'yellow':
		echo "caution!";
		break;	
	default:
		echo "wrong signal";
		break;
}

?>