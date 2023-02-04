<?php
session_start();
unset($_SESSION[d_id]);
unset($_SESSION[password]);
header("location:login.php#signin");
?>
