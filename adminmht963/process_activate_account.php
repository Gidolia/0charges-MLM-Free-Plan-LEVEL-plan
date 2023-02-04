<?php
include "config.php";
if(isset($_POST[activate_submit]))
{
    $sel=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_POST[d_id]'");
    $df=mysql_fetch_assoc($sel);
    if($df[activate_link1]!='y')
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
        mysql_query("UPDATE `distributor` SET `activate_link1` = 'y' WHERE `distributor`.`d_id` = $_POST[d_id];")or die("its failed to register activate link please contact proagramer and dont try it again");
        
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
    ///////////////////level 1 amount 200
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$s[s_id]', '$date', '$time', '300', '1', '$d_id');");
    $df=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$s[s_id]'");
    $sf=mysql_fetch_assoc($df);
    $amount=$sf[wallet]+300;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $s[s_id];");
    $amount=0;
    //////////////////level 2 amount 50
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sf[s_id]', '$date', '$time', '100', '2', '$d_id');");
    $dff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sf[s_id]'");
    $sff=mysql_fetch_assoc($dff);
    $amount=$sff[wallet]+100;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sf[s_id];");
    $amount=0;
    //////////////////level 3 amount 25
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sff[s_id]', '$date', '$time', '50', '3', '$d_id');");
    $dfffe=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sff[s_id]'");
    $sfffe=mysql_fetch_assoc($dfffe);
    $amount=$sfffe[wallet]+50;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sff[s_id];");
    $amount=0;
    /////////////////level 4 amonut 25
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sfffe[s_id]', '$date', '$time', '50', '4', '$d_id');");
    $dfff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sfffe[s_id]'");
    $sfff=mysql_fetch_assoc($dfff);
    $amount=$sfff[wallet]+50;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sfffe[s_id];");
    $amount=0;
    //////////////////level 5 amount 25
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sfff[s_id]', '$date', '$time', '50', '5', '$d_id');");
    $dffff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sfff[s_id]'");
    $sffff=mysql_fetch_assoc($dffff);
    $amount=$sffff[wallet]+50;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sfff[s_id];");
    $amount=0;
    ///////////////// level 6 amount 25
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sffff[s_id]', '$date', '$time', '50', '6', '$d_id');");
    $dfffff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sffff[s_id]'");
    $sfffff=mysql_fetch_assoc($dfffff);
    $amount=$sfffff[wallet]+50;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sfffff[s_id];");
    $amount=0;
    ///////////////// level 7 amount 20
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sfffff[s_id]', '$date', '$time', '30', '7', '$d_id');");
    $dffffff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sfffff[s_id]'");
    $sffffff=mysql_fetch_assoc($dffffff);
    $amount=$sffffff[wallet]+30;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sfffff[s_id];");
    $amount=0;
    //////////////// level 8 amount 20
    mysql_query("INSERT INTO `commission` (`c_id`, `d_id`, `date`, `time`, `amount`, `level`, `n_d_id`) VALUES (NULL, '$sffffff[s_id]', '$date', '$time', '20', '8', '$d_id');");
    $dfffffff=mysql_query("SELECT s_id,wallet FROM `distributor` WHERE `d_id`='$sffffff[s_id]'");
    $sfffffff=mysql_fetch_assoc($dfffffff);
    $amount=$sfffffff[wallet]+20;
    mysql_query("UPDATE `distributor` SET `wallet` = '$amount' WHERE `distributor`.`d_id` = $sffffff[s_id];");
    $amount=0;    
}
