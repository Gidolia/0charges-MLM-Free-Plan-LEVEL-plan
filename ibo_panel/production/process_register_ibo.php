<?php
include "config.php";
include "functions.php";
if(isset($_POST[register]))
{
    echo $_POST[s_id];
    $ghh=mysql_query("SELECT * FROM `distributor` WHERE `d_id`=$_POST[s_id]");
    $c=mysql_num_rows($ghh);
    $dvgd=mysql_fetch_assoc($ghh);
    echo $c;
    if($c!=0)
    {
        if(find_under_d_id($_SESSION[d_id],$_POST[s_id])==1)
        {
     $ghht=mysql_query("SELECT * FROM `distributor` WHERE `s_id`=$_POST[s_id]");
    $ct=mysql_num_rows($ghht);
   
    
$que="select max(d_id) as max from distributor";
$r=mysql_query($que) or die("query not performed");
if($r)
  {
  $row=mysql_fetch_array($r);
  $d_id=$row['max'];
  $d_id=$d_id+1;
  }
        
        mysql_query("INSERT INTO `distributor` (`d_id`, `s_id`, `name`, `mobile`, `father_name`, `dob`, `addreass`, `city`, `state`, `pin_code`, `id_status`, `balance`, `date_entry`, `date_activation`, `password`, `percentage`, `own_business`, `total_business`) VALUES ('$d_id', '$_POST[s_id]', '$_POST[ibo_name]', '$_POST[mobile]', '$_POST[father_name]', '$_POST[dob]', '$_POST[addreass]', '$_POST[city]', '$_POST[state]', '$_POST[pin_code]', 'pending', '0', '$date', '', '$_POST[password]', '5', '0', '0');")or die("sorry Something Went Wrong please try again");
        
        
        echo "<script>alert('Register Sucessfully');
			location.href='register_ibo_id.php?s_register=1&ribo_id=$d_id';</script>";
        }else{echo "<script>alert('Sponser is not in your downline');
			location.href='register_ibo_id.php';</script>";}
    }else{echo "<script>alert('Sponser id not founded in our directory');
			location.href='register_ibo_id.php';</script>";}
}



?>