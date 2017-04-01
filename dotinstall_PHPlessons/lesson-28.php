<?php

// #28 フォームからのデータを処理しよう

$username = '';
$err = false;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	if(strlen($username) > 8) {
		$err = true;
	}
}

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>Check username</title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" name="username" placeholder="user name" 
					value="<?php echo htmlspecialchars($username,ENT_QUOTES,'UTF-8'); ?>">
			<input type="submit" name="Check!">
			<?php if($err){ echo "Too Long!"; } ?>
		</form>
	</body>
</html>