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
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Distributor ID" name="id" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required />
              </div>
              <div>
                 <input type="submit" name="sub_login" class="btn btn-primary" value="Log in">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="sign_up1.php" class="to_register"> Create Account </a>
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
if(isset($_POST[sub_login]))
{
    $que=mysql_query("SELECT `d_id`, `password` FROM `distributor` WHERE `d_id`='$_POST[id]' AND `password`='$_POST[password]';")or die("sorry something went wrong");
    if(mysql_num_rows($que)!=0)
    {
        echo $_POST[id]."/".$_POST[password];
        $_SESSION["d_id"]=$_POST[id];
        $_SESSION["d_password"]=$_POST[password];
        echo "<script>location.href='index.php';</script>";
        
    }
    else{echo "<script>alert('Invalid user name or Password 12');
    location.href='login.php';</script>";
    }
}

?>
      </div>
    </div>
  </body>
</html>
