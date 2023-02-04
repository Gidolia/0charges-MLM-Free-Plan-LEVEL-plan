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
            <form method="post">
              <h1>SIGN UP</h1>
              <h2>Please check your information twicw before submiting it (information will not be changed after submiting)</h2>
              <div>
                <input type="text" class="form-control" placeholder="Sponser ID" name="p_id" required="" />
              </div>
              <div>
                 <input type="submit" name="sub_p_id" class="btn btn-primary" value="Check Sponser ID">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already Have a Account?
                  <a href="login.php" class="to_register"> SIGN IN</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> 0CHARGES</h1>
                  <p>©2019 All Rights Reserved by 0CHARGES. Designed by <a href="http://www.gidolia.com/">Gidolia Pvt Ltd</a> </p>
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
