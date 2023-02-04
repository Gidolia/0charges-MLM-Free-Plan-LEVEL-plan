<?php include "database_connect.php";

$otp=$_GET[sdfgh]-15957845632587854;
$mobile=$_GET[mmm]-854758965425;
$dd='0charges registration otp '.$otp;
$dd = str_replace(' ', '%20', $dd);
//ocharg
$url = "http://sms.hspsms.com/sendSMS?username=upendra.1&message=".$dd."&sendername=SIGNUP&smstype=TRANS&numbers=".$mobile."&apikey=9971a8ca-9b56-42db-b3fb-5259f240c979";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script>alert('Otp sended sucessfully to your register mobile number');</script>";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>0CHARGES || SignUp</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Otp Verification</h1>
              <h2>otp successfully sended to your provided mobile Number</h2>
              <div>
                <input type="number" class="form-control" placeholder="OTP" name="otp" required="" />
                <input type="hidden" class="form-control" value="<?php echo $_GET[bdr_id];?>" name="bdr_id" required="" />
                <input type="hidden" class="form-control" name="sd" value="<?php echo $_GET[sdfgh];?>" required="" />
              </div>
              <div>
                 <input type="submit" name="otp_submit" class="btn btn-primary" value="Submit OTP">
                 <a href="javascript:history.go(0)">Send again otp</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

<?php
if(isset($_POST[otp_submit]))
{
    $sd=$_POST[sd]-15957845632587854;
    if($_POST[otp]==$sd)
    {
        $ss=mysql_query("SELECT * FROM `before_data_registration` WHERE `bdr_id`='$_POST[bdr_id]'");
        $as=mysql_fetch_assoc($ss);
        $que="select max(d_id) as max from distributor";
$r=mysql_query($que) or die("query not performed");
if($r)
  {
  $row=mysql_fetch_array($r);
  $d_id=$row['max'];
  $d_id=$d_id+1;
  }
        mysql_query("INSERT INTO `distributor` (`d_id`, `s_id`, `name`, `dob`, `mobile`, `a_mobile`, `addreass`, `city`, `state`, `password`, `wallet`, `father_name`, `pan_no`, `email`, `profile_update`, `bank_name`, `acc_no`, `ifsc_code`, `id_status`, `id_status_date`, `joinning_date`) VALUES ('$d_id', '$as[p_id]', '$as[name]', '', '$as[mobile]', '', '', '$as[city]', '$as[state]', '$as[password]', '', '', '', '$as[email]', '', '', '', '', '', '', '$date');");
        
        $dd='You are Successufully register your ID '.$d_id.' and your Password '.$as[password];
$dd = str_replace(' ', '%20', $dd);

$url = 'http://sms.hspsms.com/sendSMS?username=cmd&message='.$dd.'&sendername=ocharg&smstype=TRANS&numbers='.$mobile.'&apikey=e8ab1258-683f-45cf-ab3e-082efac6a9b3';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
        
        echo "<script>alert('You are sucessfully Register ');
			location.href='sucess_register.php?d_id=$d_id';</script>";
    }
    else{
        echo "<script>alert('OTP You enter is wrong Please Try Again');
			location.href='http://0charges.com/';</script>";
    }
}
?>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> 0CHARGES</h1>
                  <p>©2019 All Rights Reserved by 0CHARGES.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

<?php
if(isset($_POST[sub_p_id]))
{
    
    echo "<script> location.href='sign_up_form2.php?p_id=$_POST[p_id]';</script>";
}

?>


                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
