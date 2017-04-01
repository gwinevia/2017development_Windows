<?php

// #29 Cookieを使ってみよう
/*
	ブラウザにデータを保存できるCookieについて
	* Cookieの設定
	* Cookieの取得
	* 有効期限の設定
	* Cookieの削除
*/

//setcookie("username","taguchi");
//setcookie("username","taguchi",time()+60*60); 有効期限
setcookie("username","taguchi",time()-60*60);

echo $_COOKIE['username'];

?>