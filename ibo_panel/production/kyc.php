<?php include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INSPIRE AURA | KYC</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
   
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <?php include "include/sidebar.php";?>
            
          </div>
        </div>

        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>KYC</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Submit Adhar Card</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx=mysql_query("SELECT * FROM `p_ia_kyc_adhar` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='c'")or die("photo query not selected");
                  $xz=mysql_num_rows($zx);
	if($xz!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Adhar Card Detail Submited Successfully</div>
<?php
} else{
$x=mysql_query("SELECT * FROM `p_ia_kyc_adhar` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='n'")or die("photo query not selected");
                  $z=mysql_num_rows($x);
	if($z!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>sorry !</b> you have not provided actual information try again</div>
<?php
}
                  $s=mysql_query("SELECT * FROM `p_ia_kyc_adhar` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='p'")or die("photo query not selected");
                  $k=mysql_num_rows($s);
	if($k!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Front</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="adharf" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Back</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="adharb" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Adhar Card Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="adhar_no" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Adharcard" name="submit_adhar">
                        </div>
                      </div>
                     </form>
<?php } }?>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bank Detail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                  
$zx=mysql_query("SELECT * FROM `p_ia_kyc_bank` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='c'")or die("photo query not selected");
                  $xz=mysql_num_rows($zx);
	if($xz!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-success"><b>SUCCESS !</b> Bank Detail Submited Successfully</div>
<?php
} else{
$x=mysql_query("SELECT * FROM `p_ia_kyc_bank` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='n'")or die("photo query not selected");
                  $z=mysql_num_rows($x);
	if($z!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-danger"><b>sorry !</b> you have not provided actual information try again or photo is not clear</div>
<?php
}
                  $s=mysql_query("SELECT * FROM `p_ia_kyc_bank` WHERE `ibo_id`='$_SESSION[ibo_id]' AND `clear`='p'")or die("photo query not selected");
                  $k=mysql_num_rows($s);
	if($k!=0)
	{ ?>
                  <br>&nbsp;<br>
             <div class="alert alert-info"><b>submited!</b> this photo may take some hour for verification</div>
<?php
}
else{ ?> 
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank Passbook photo</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="bank_pass" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="bank_name" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bank ACC No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="acc_no" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">IFSC Code.</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="ifsc" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          
                          <input type="submit" class="btn btn-success" value="Submit Bank Detail" name="bank_submit">
                        </div>
                      </div>
                     </form>
<?php } }?>
                    </div>
                  </div>
                </div>
            </div>
            
            
            
            </div>
                   <?php 
            
            
   ////////////////////////////////////////////////////////////////
   //////////////////////////////////////////////////////////////////////////////
            if(isset($_POST[submit_adhar]))
            {
            echo "123";
            	if (file_exists("../../kyc_adhar/" .$_SESSION['ibo_id']."f.jpg"))
        {
        unlink("../../kyc_adhar/" .$_SESSION['ibo_id']."f.jpg");
          echo $_SESSION['ibo_id']."f.jpg" . " already exists. ";
        }
        if (file_exists("../../kyc_adhar/" .$_SESSION['ibo_id']."b.jpg"))
        {
        unlink("../../kyc_adhar/" .$_SESSION['ibo_id']."b.jpg");
          echo $_SESSION['ibo_id']."b.jpg" . " already exists. ";
        }
        
        if(move_uploaded_file($_FILES["adharf"]["tmp_name"], "../../kyc_adhar/".$_SESSION['ibo_id']."f.jpg"))
		{
		if(move_uploaded_file($_FILES["adharb"]["tmp_name"], "../../kyc_adhar/".$_SESSION['ibo_id']."b.jpg"))
		{
            echo "Stored in: " . "../../kyc_adhar/".$fileName;
            
            mysql_query("INSERT INTO `p_ia_kyc_adhar` (`pika_id`, `ibo_id`, `adhar_front_img`, `adhar_back_img`, `adhar_no`, `date`, `time`, `clear`) VALUES (NULL, '$_SESSION[ibo_id]', 'kyc_adhar/$_SESSION[ibo_id]f.jpg', 'kyc_adhar/$_SESSION[ibo_id]b.jpg', '$_POST[adhar_no]', '$date', '$time', 'p');");
            echo "<script>alert('adhar submited Sucessfully');
		location.href='kyc.php';</script>";
            }
            }
            }
  ///////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if(isset($_POST[bank_submit]))
            {
            echo "123";
            	if (file_exists("../../kyc_bank/" .$_SESSION['ibo_id'].".jpg"))
        {
        unlink("../../kyc_bank/" .$_SESSION['ibo_id'].".jpg");
          echo $_SESSION['ibo_id'].".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["bank_pass"]["tmp_name"], "../../kyc_bank/".$_SESSION['ibo_id'].".jpg"))
		{
            echo "Stored in: " . "../../kyc_bank/".$fileName;
            mysql_query("INSERT INTO `p_ia_kyc_bank` (`pikb_id`, `ibo_id`, `bank_pass_img`, `acc_no`, `ifsc_code`, `bank_name`, `clear`, `date`, `time`) VALUES (NULL, '$_SESSION[ibo_id]', 'kyc_bank/$_SESSION[ibo_id].jpg', '$_POST[acc_no]', '$_POST[ifsc]', '$_POST[bank_name]', 'p', '$date', '$time');");
            echo "<script>alert('bank detail submited Sucessfully');
		location.href='kyc.php';</script>";
            }
            }
            ?>     
            

            

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
