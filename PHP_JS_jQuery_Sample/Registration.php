<?php

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
		<title>研修受講予約</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="form.js"></script>
	</head>
	<body>
		<header>
		</header>

		<form>
		  <p>
		    <label for="name">氏名：</label><br/>
		    <input type="text" id="name" name="name" size="30" placeholder="user name"
		    value="<?php echo htmlspecialchars($username,ENT_QUOTES,'UTF-8'); ?>" />
		    <p id="str"></p>
		  </p>
		</form>

		<footer>
		</footer>
	</body>
</html>