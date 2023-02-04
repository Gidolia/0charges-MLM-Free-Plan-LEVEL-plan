<?php include "database_connect.php";?>
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
              <h1>SIGN UP</h1>
              <h4>Please check your information twice before submiting it (information will not be changed after submiting)</h4>
              <div>
                  <?php
                  $ff=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_GET[p_id]'");
                  $sdf=mysql_num_rows($ff);
                  if($sdf==0){echo "<script>alert('Please enter correct ');
			location.href='sign_up1.php';</script>"; }
                  $fd=mysql_fetch_assoc($ff);
                  ?>
                  <form class="form-horizontal form-label-left" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sponser ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="p_id" value="<?php echo $fd[d_id];?>" readonly required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sponser Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="p_name" value="<?php echo $fd[name];?>" readonly required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Full Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="name" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="mobile" maxlength="10" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="email" class="form-control" name="email" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="password" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">City</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="city" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="state" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <input type="submit" class="btn btn-success" value="Sign Up" name="submit_info">
                        </div>
                      </div>
                     </form>
               
<?php if(isset($_POST[submit_info]))
{
    $ggg=mysql_query("SELECT * FROM `distributor` WHERE `mobile`='$_POST[mobile]'");
    $mm=mysql_num_rows($ggg);
    if($mm<2)
    {
    $que="select max(bdr_id) as max from before_data_registration";
$r=mysql_query($que) or die("query not performed");
if($r)
  {
  $row=mysql_fetch_array($r);
  $bdr_id=$row['max'];
  $bdr_id=$bdr_id+1;
  }
    
    mysql_query("INSERT INTO `before_data_registration` (`bdr_id`, `p_id`, `name`, `mobile`, `email`, `password`, `city`, `state`) VALUES ('$bdr_id', '$_POST[p_id]', '$_POST[name]', '$_POST[mobile]', '$_POST[email]', '$_POST[password]', '$_POST[city]', '$_POST[state]');");
    
    $otp=rand(1000,9999)+15957845632587854;
    $mnhg=$_POST[mobile]+854758965425;
    
    echo "<script>location.href='signup_otp_verification.php?bdr_id=$bdr_id&sdfgh=$otp&mmm=$mnhg';</script>";
    }
    else{
        echo "<script>alert('From one mobile number you can do only two registration. Please change the number and try again');
        location.href='sign_up_form2.php?p_id=$_POST[p_id]';</script>";
    }
}

?>



              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already Have a Account?
                  <a href="login.php" class="to_register"> SIGN IN</a>
                </p>

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
