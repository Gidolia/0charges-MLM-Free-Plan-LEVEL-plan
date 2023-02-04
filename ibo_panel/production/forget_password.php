<?php include "database_connect.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>0CHAREGES || Login</title>

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
              <h1>Forget Password</h1>
              <h3>We will Send your Password to Registered MOBILE Number</h3>
              <div>
                <input type="text" class="form-control" placeholder="Distributor ID" name="d_id" required="" />
              </div>
              
              <div>
                 <input type="submit" name="f_pass" class="btn btn-primary" value="Send Password">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Remembered Password?  
                  <a href="login.php" class="to_register"> Login Now </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> 0CHARGES</h1>
                  <p>©2019 All Rights Reserved by 0CHARGES.</a> </p>
                </div>
              </div>
            </form>
          </section>
        </div>

<?php
if(isset($_POST[f_pass]))
{
    $que=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_POST[id]';")or die("sorry something wentwrong");
    if(mysql_num_rows($que)!=0)
    {
        
    }
    else{echo "<script>alert('Invalid Distributor ID');
    location.href='forget_password.php';</script>";}
}

?>
      </div>
    </div>
  </body>
</html>
