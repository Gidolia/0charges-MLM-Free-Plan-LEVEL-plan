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
              <h1>Congrat! You are successfully Registered</h1>
              <div>
                  <?php
                  $ff=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$_GET[d_id]'");
                  $sdf=mysql_num_rows($ff);
                  if($sdf==0){echo "<script>alert('Sorry Something went Wrong');
			location.href='sign_up1.php';</script>"; }
                  $fd=mysql_fetch_assoc($ff);
                  ?>
                  <form class="form-horizontal form-label-left" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Distributor ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="p_id" value="<?php echo $_GET[d_id];?>" readonly required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Distributor Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="p_name" value="<?php echo $fd[name];?>" readonly required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                </form>




              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">LOGIN HERE
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
