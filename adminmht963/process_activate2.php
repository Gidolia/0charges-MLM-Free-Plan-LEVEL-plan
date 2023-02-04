<?php
include "config.php";
if(isset($_POST[activate_submit_d]))
{
    $sel=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_POST[d_id]'");
    $df=mysql_fetch_assoc($sel);
    if($df[activate_link2]!='y')
    {
        echo "step1 started<br>";
        echo commission_distributor($_POST[d_id]);
        echo "step2 commission Distributed<br>";
        if($df[id_status]!='y')
        {
            echo "step2 started completed<br>";
            mysql_query("UPDATE `distributor` SET `id_status` = 'y' WHERE `distributor`.`d_id` = '$_POST[d_id]';")or die("its failed to activate id please contact programer");
            mysql_query("UPDATE `distributor` SET `id_status_date` = '$date' WHERE `distributor`.`d_id` = $_POST[d_id];")or die("its failed to register date please contact programer");
            echo "step Completed this pointed to thired step";
        }
        mysql_query("UPDATE `distributor` SET `activate_link2` = 'y' WHERE `distributor`.`d_id` = $_POST[d_id];")or die("its failed to register activate link please contact proagramer and dont try it again");
        mysql_query("UPDATE `distributor` SET `dimond_id_status` = 'y' WHERE `distributor`.`d_id` = $_POST[d_id];")or die("its failed to register activate diamond please contact proagramer and dont try it again");
        echo "step3 update completed";
        echo "<script>alert('ID Activated Successfully and commission Distributed Successfully');
			location.href='distributor_info.php?d_id=$_POST[d_id]';</script>";
    }
}

function commission_distributor($d_id)
{
    $amount=0;
    $d=mysql_query("SELECT s_id FROM `distributor` WHERE `d_id`='$d_id'");
    $s=mysql_fetch_assoc($d);
    ///////////////////level 1 amount 100
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$s[s_id]', '$date', '$time', '300', '1', '$d_id');");
    $df=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$s[s_id]'");
    $sf=mysql_fetch_assoc($df);
    $amount=$sf[wallet]+300;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $s[s_id];");
    $amount=0;
    
	//////////////////level 2 amount 100
    //mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sf[s_id]', '$date', '$time', '50', '2', '$d_id');");
    //$dff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sf[s_id]'");
    //$sff=mysql_fetch_assoc($dff);
    //$amount=$sff[wallet]+50;
    //mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sf[s_id];");

    $amount=0;
    
}
