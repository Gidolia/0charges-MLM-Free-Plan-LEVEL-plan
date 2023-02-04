<?php 
error_reporting(1);
$link = mysqli_connect("localhost","upendraf","z123456789W","freeplan") or die(mysqli_error($link));
mysql_connect("localhost","upendraf","z123456789W")or die("database not connected");
mysql_select_db("freeplan")or die("database not selected");
session_start();
date_default_timezone_set('Asia/Calcutta');
$time=date("h:i:sa");
$date=date("Y-m-d");

?>