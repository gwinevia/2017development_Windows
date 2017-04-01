<?php

// #30 セッションを使ってみよう
/*
	サーバー側にデータを保存することができるセッションについて
	* session_start()
	* $_SESSION
	* unset()
*/
// 大きなデータ、改ざんされない、中身が見られない

session_start();

//$_SESSION['username'] = 'taguchi';
//echo $_SESSION['username'];

unset($_SESSION['username']);
echo $_SESSION['username'];


?>