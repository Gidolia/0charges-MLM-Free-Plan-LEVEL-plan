<?php 
echo "ss";
include "config.php";
if(isset($_POST['submit_moti'])){
	$idx=floatval(strtoupper(trim($_POST['m_id'])));	
	$gc1=trim($_POST['c1_10']);
	$sql="select * from `distributor` where `d_id`='$idx';";
	$query=mysqli_query($link,$sql) or die(mysqli_error($link));
	$rows=mysqli_num_rows($query);
	if($rows>0){
		$r=@mysqli_fetch_array($query);
		$m=$r[$gc1];
		if($m=="Y"){
			$m="N";
		}else{
			$m="Y";			
		}
		$sql="UPDATE `distributor` SET `".$gc1."` = '$m' where `d_id`='$idx';";
		mysqli_query($link,$sql) or die(mysqli_error($link));
	}
}
if(isset($_GET[d_id])){
	$fg=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='".$_GET[d_id]."'");
	$fgf=mysql_fetch_assoc($fg);
}else{
	$fg=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='-1'");
	$fgf=mysql_fetch_assoc($fg);
}
?>
<table border="">
    <tr><th>D ID</th><td><?php echo $fgf[d_id];?></td></tr>
    <tr><th>Name</th><td><?php echo $fgf[name];?></td></tr>
    <tr><th>S ID</th><td><?php echo $fgf[s_id];?></td></tr>
    <tr><th>mobile</th><td><?php echo $fgf[mobile];?></td></tr>
    <tr><th>Alt mobile</th><td><?php echo $fgf[a_mobile];?></td></tr>
    <tr><th>Addreass</th><td><?php echo $fgf[addreass];?></td></tr>
    <tr><th>City</th><td><?php echo $fgf[city];?></td></tr>
    <tr><th>state</th><td><?php echo $fgf[state];?></td></tr>
    <tr><th>password</th><td><?php echo $fgf[password];?></td></tr>
    <tr><th>email</th><td><?php echo $fgf[email];?></td></tr>
    <tr><th>Father Name</th><td><?php echo $fgf[father_name];?></td></tr>
    <tr><th>Pan No.</th><td><?php echo $fgf[pan_no];?></td></tr>
    <tr><th>Bank Name</th><td><?php echo $fgf[bank_name];?></td></tr>
    <tr><th>Account No.</th><td><?php echo $fgg[acc_no];?></td></tr>
    <tr><th>Ifsc Code</th><td><?php echo $fgf[ifsc_code];?></td></tr>
    <tr><th>Id Status</th><td><?php echo $fgf[id_status];?></td></tr>
    <tr><th>Activate Date</th><td><?php echo $fgf[id_status_date];?></td></tr>
    <tr><th>Wallet</th><th><?php echo $fgf[wallet];?></th></tr>
    <tr><th>Activate ID</th><td>
        <?php 
        if($fgf[id_status]!="y")
        { ?>
        <form method="POST" action="process_activate_account.php">
            <input type="hidden" name="d_id" value="<?php echo $fgf[d_id];?>">
            <input type="submit" name="activate_submit">
        </form>
        <?php }?>
    </td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><th>Activate Diamond ID</th><td>
        <?php
        if($fgf[dimond_id_status]!="y")
        { ?>
        <form method="POST" action="process_activate2.php">
            <input type="hidden" name="d_id" value="<?php echo $fgf[d_id];?>">
            <input type="submit" name="activate_submit_d">
        </form>
        <?php }?>
    </td></tr>
<?php
$cars = array("", "Motilal", "Upstox", "Stoxkart", "Edelweiss","","","","","","","","","","",""); 	
for ($x = 1; $x <= 10; $x++) {
    if(strlen($cars[$x])>3){
		$tit=$cars[$x];
		$ccx="c$x";
		$c1=$fgf[$ccx];
		if($c1=="Y"){$c1="bgcolor='#00FF00'";}else{$c1="";}		
		echo "<tr>
		  <th $c1>$tit<br />&nbsp;</th>
		  <td $c1><br />&nbsp;
			<form method='POST' action='#'>
				<input type='hidden' name='m_id' id='m_id' value=".$fgf[d_id].">
				<input type='hidden' name='c1_10' id='c1_10' value='$ccx'>
				<input type='submit' name='submit_moti' id='submit_moti'>
			</form><br />&nbsp;
		  </td>
		</tr>";
	}
}
?>
</table> 

 <br>&nbsp;
<br>
<h2>Commission History</h2>

<table border="">
    <thead>
        <tr>
            <th>txn id</th>
            <th>Date/Time</th>
            <th>Commission</th>
            <th>New Distributor ID</th>
            
        </tr>
        <?php 
        $ds=mysql_query("SELECT * FROM `commission` WHERE `d_id`=$_GET[d_id]");
        while($ff=mysql_fetch_assoc($ds))
        {?>
          <tr><td><?php echo $ff[c_id];?></td><td><?php echo $ff[date].'/'.$ff[time];?></td><td><?php echo $ff[amount];?></td><td><?php echo $ff[n_d_id];?> </td></tr>  
          
          
          <?php
        }
        ?>
    </thead>
    
</table>
&nbsp;<br>&nbsp;<br>
<h2>Pending Withdrawal Request</h2>
<table border="">
    <form method="post">
    <?php 
    $efvbn=mysql_query("SELECT * FROM `request_payout_history` WHERE `d_id`='$_GET[d_id]' AND `clear`='n'");
    $dcffff=mysql_fetch_assoc($efvbn);
    ?>
    <input type="hidden" name="d_id" value="<?php echo $_GET[d_id];?>">
    <tr><th>Request Payout History ID</th><td><?php echo $dcffff[rph_id];?>
    <input type="hidden" value="<?php echo $dcffff[rph_id];?>" name="rph_id"></td></tr>
    <tr><th>Amount</th><td><?php echo $dcffff[amount];?>
    <input type="hidden" name="amount" value="<?php echo $dcffff[amount];?>"> </td></tr>
    <tr><th>date</th><td><?php echo $dcffff[date];?></td></tr>
    <tr><th>account No.</th><td><input type="number" name="acc_no"></td></tr>
    <tr><th>ifsc</th><td><input type="text" name="ifsc"></td></tr>
    <tr><th>bank Txn id</th><td><input type="text" name="bank_trans_id"></td></tr>
    <tr><th>upi</th><td><select name="upi">
        <option value=" " select> </option>
        <option value="Google pay">Google Pay</option>
        <option value="Phone pay">Phone Pay</option>
        <option value="Amazon pay">Amazon Pay</option>
    </select></td></tr>
    <tr><th>Phone No.</th><td><input type="number" name="mob_no"></td></tr>
    <tr><th>Upi TXN ID</th><td><input type="text" name="upi_txn_id"></td></tr>
    <tr><th></th><td><input type="submit" name="wdwdwd"></td></tr>
    </form>
</table>
<?php
if(isset($_POST[wdwdwd]))
{
    if(isset($_POST[rph_id]))
{
    mysql_query("INSERT INTO `txn_history` (`th_id`, `d_id`, `date`, `time`, `type`, `amount`, `bank_transfer_id`, `rph_id`, `account`, `ifsc`, `upi`, `upi_mob_no`, `upi_txn_id`) VALUES (NULL, '$_POST[d_id]', '$date', '$time', '-', '$_POST[amount]', '$_POST[bank_trans_id]', '$_POST[rph_id]', '$_POST[acc_no]', '$_POST[ifsc]', '$_POST[upi]', '$_POST[mob_no]', '$_POST[upi_txn_id]');");
    $fzzzzzzzz=$fgf[wallet]-$_POST[amount];
    mysql_query("UPDATE `distributor` SET `wallet` = '$fzzzzzzzz' WHERE `distributor`.`d_id` = $_POST[d_id];");
    mysql_query("UPDATE `request_payout_history` SET `clear` = 'y' WHERE `request_payout_history`.`rph_id` = '$_POST[rph_id]';");
    echo "<script>alert('Success!! detail enter successfully');
			location.href='distributor_info.php?d_id=$_POST[d_id]';</script>";
}
}
?>
&nbsp;<br>&nbsp;<br>
<h2>Account Debit Ledger</h2>
<table border="">
    <tr><th>txn ID</th>
    <th>date</th>
    <th>Amount</th>
    <th>withdrwal ID</th>
    <th>Acc no</th>
    <th>ifsc</th>
    <th>acc txn ID</th>
    <th>UPI</th>
    <th>upi no.</th>
    <th>UPI txn id</th>
    </tr>
    <?php 
    $fvddd=mysql_query("SELECT * FROM `txn_history` WHERE `d_id`='$_GET[d_id]'");
    while($knh=mysql_fetch_assoc($fvddd))
    {
    ?>
    <tr>
        <td><?php echo $knh[th_id];?></td>
        <td><?php echo $knh[date];?></td>
        <td><?php echo $knh[amount];?></td>
        <td><?php echo $knh[rph_id];?></td>
        <td><?php echo $knh[account];?></td>
        <td><?php echo $knh[ifsc];?></td>
        <td><?php echo $knh[bank_transfer_id];?></td>
        <td><?php echo $knh[upi];?></td>
        <td><?php echo $knh[upi_mob_no];?></td>
        <td><?php echo $knh[upi_txn_id];?></td>
    </tr>
    <?php }?>
</table>




<h4 style="color:red"> Please click this button at Your Own Risk </h4>
<form method="post" action="process_id_del.php">
    <input type="hidden" name="d_id" value="<?php echo $fgf[d_id];?>">
    <input type="submit" name="del_id" value="delete id" style="color:red">
</form>
        
        
        
        
        
        