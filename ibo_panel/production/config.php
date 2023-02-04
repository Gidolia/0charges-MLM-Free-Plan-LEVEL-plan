<?php

include "database_connect.php";
    $que=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_SESSION[d_id]' AND `password`='$_SESSION[d_password]';");
    if(mysql_num_rows($que)==0)
    {
        echo "<script>alert('Please Login Again');
        location.href='login.php';</script>";
    }else
    $d_info=mysql_fetch_assoc($que);
    if($d_info[profile_update]=='y')
    {$profile_update=1;}
    else{$profile_update=0;}
date_default_timezone_set('Asia/Calcutta');
$time=date("h:i:sa");
$date=date("Y-m-d");
?>