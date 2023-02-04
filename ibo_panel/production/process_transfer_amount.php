<?php
include "config.php";
echo $_POST[d_id];
if(isset($_POST[confirm_transfer_amount]))
{
   $otp=$_POST[jkdnsfvojfdvjndfj]-'54152454465';
   if($_POST[otp]==$otp)
   {
///////////////////////////////////////////////////////////////////
$price=$_POST[amount];
$fghhb=2;
 $rfghh=$price-$fghhb;
$rtey=mysql_query("SELECT * FROM `p_ia_ibo` WHERE `ibo_id`=$_SESSION[ibo_id]")or die("sorry some error please try again1");
	if(mysql_num_rows($rtey)>0)
	{ $tiy=mysql_fetch_assoc($rtey);
	  $plus=$tiy[acc_bal]-$_POST[amount];
	  	
	if($plus>0)
        {
        $rteye=mysql_query("SELECT * FROM `p_ia_ibo` WHERE `ibo_id`=$_POST[ibo_id]")or die("sorry some error please try again2");
	if(mysql_num_rows($rteye)>0)
	{ $tiye=mysql_fetch_assoc($rteye);
          $pluse=$tiye[acc_bal]+$rfghh;
		
	if($pluse>0)
        {
        
        $ins="INSERT INTO `p_ia_business_volume_detail` (`ibvd_id`, `ibo_id`, `date`, `time`, `bv`, `bv_type`, `bv_get_from`, `billing_amount`, `shopee_id`) VALUES (NULL, '$_SESSION[ibo_id]', '$date', '$time', '2', 'RBV', 'transfer', '', '');";
        
        
mysql_query($ins) or die("Try again query not executed");
        mysql_query("INSERT INTO `p_ia_acc_bal_transtion_history` (`iath_id`, `ibo_id`, `amount`, `date`, `time`, `from`, `to`, `type`, `b_bal`, `a_bal`, `method`, `method_type`, `sender_note`) VALUES (NULL, '$_SESSION[ibo_id]', '$_POST[amount]', '$date', '$time', '', '$_POST[ibo_id]', '-', '$tiy[acc_bal]', '$plus', '1', 'ibo_transfer', '$_POST[Description]');")or die("transtation not recorded");
		mysql_query("UPDATE `p_ia_ibo` SET `acc_bal` = '$plus' WHERE `p_ia_ibo`.`ibo_id` = '$_SESSION[ibo_id]';") or die("balance not updated");
		
		mysql_query("INSERT INTO `p_ia_acc_bal_transtion_history` (`iath_id`, `ibo_id`, `amount`, `date`, `time`, `from`, `to`, `type`, `b_bal`, `a_bal`, `method`, `method_type`, `sender_note`) VALUES (NULL, '$_POST[ibo_id]', '$rfghh', '$date', '$time', '$_SESSION[ibo_id]', '', '+', '$tiye[acc_bal]', '$pluse', '1', 'ibo_received', '$_POST[Description]');")or die("transtation not recorded");
		mysql_query("UPDATE `p_ia_ibo` SET `acc_bal` = '$pluse' WHERE `p_ia_ibo`.`ibo_id` = '$_POST[ibo_id]';") or die("balance not updated");
		
	
		
		
		$dd='Your%20a/c%20'.$_POST[ibo_id].'%20is%20Credited%20INR%20'.$price.'%20on%20'.$date.'%20'.$time.'%20a/c%20Bal%20is%20INR%20'.$pluse.'%20Thankyou';
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=gonefs&smstype=TRANS&numbers='.$tiye[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$text = str_replace('%20', ' ', $dd);
////////////////////////////////////////////////////
mysql_query("INSERT INTO `send_sms` (`id`, `d_id`, `send_no`, `send_message`, `message_receipt`, `to_d_id`, `date`, `time`) VALUES (NULL, '$_POST[d_id]', '$tiye[mobile]', '$text', '$response', '', '$date', '$time');");
///////////////////////////////////////////
$dd='Your%20a/c%20'.$_SESSION[ibo_id].'%20is%20Debited%20INR%20'.$price.'%20on%20'.$date.'%20'.$time.'%20a/c%20Bal%20is%20INR%20'.$plus.'%20Thankyou';
$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=gonefs&smstype=TRANS&numbers='.$tiy[mobile].'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$text = str_replace('%20', ' ', $dd);
////////////////////////////////////////////////////
mysql_query("INSERT INTO `send_sms` (`id`, `d_id`, `send_no`, `send_message`, `message_receipt`, `to_d_id`, `date`, `time`) VALUES (NULL, '$d_id', '$tiy[mobile]', '$text', '$response', '', '$date', '$time');");
		
		echo "<script>alert('transfer sucessfully');
			location.href='acc_balance.php?sus=1';</script>";
	}
        else{echo "<script>alert('You Dont have balance');
			location.href='acc_balance.php?sus=1';</script>";  }
	}
	else
	{
		echo "customer_id not founded";
	}
	}
        else{echo "<script>alert('You Dont have balance');
			location.href='acc_balance.php?sus=1';</script>"; }
		
        
	}
	else
	{
		echo "customer_id not founded";
	}

       
   }
   else{echo "<script>alert('otp you enter not match please try again'); location.href='acc_balance.php?fail=1';</script>";}
}