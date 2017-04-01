<?php

// #26 名前空間を使ってみよう
// クラス名などの衝突を避けるために使える

require "User.class.php";

use Dotinstall\Lib as Lib;

$bob = new Lib\User("Bob");
$bob->sayHi();