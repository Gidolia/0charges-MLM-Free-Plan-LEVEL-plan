<?php
include "config.php";
if(isset($_POST[del_id]))
{
$rf=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_POST[d_id]'");
$de=mysql_fetch_assoc($rf);
mysql_query("INSERT INTO `del_id_data` (`did_id`, `d_id`, `name`, `mobile`, `dob`, `del_date`, `wallet`, `s_id`) VALUES (NULL, '$_POST[d_id]', '$de[name]', '$de[mobile]', '$de[dob]', '$date', '$de[wallet]', '$de[s_id]');")or die("sorry something went Wrong");
mysql_query("DELETE FROM `distributor` WHERE `distributor`.`d_id` = '$_POST[d_id]'")or die("sorry something went wrong");
echo "<script>alert('ID Deleted Sucessfully');
			location.href='distributor.php';</script>";
}
?>