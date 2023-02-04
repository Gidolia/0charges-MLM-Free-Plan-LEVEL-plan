<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>0CHARGES || Commission Ledger</title>

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
                <h3>Your Commission Ledger</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Commission Ledger <small>Detail</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form class="form-horizontal form-label-left" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Wallet Ballance </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <?php echo $d_info[wallet];?>/-
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Withdrawal Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" min="0" max="<?php echo $d_info[wallet];?>" class="form-control" name="withdrawal_amount" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          <font color="red">Your withdrawal will be submited on every end the month</font>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">&nbsp;</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="submit" class="btn btn-success" name="amount_submit">
                        </div>
                      </div>
                      
                    </form>
                    
                    <?php 
                    if(isset($_POST[amount_submit]))
                    {
                        $ff=mysql_query("SELECT * FROM `request_payout_history` WHERE `d_id`='$_SESSION[d_id]' AND `clear`='n'");
                        $d=mysql_num_rows($ff);
                        if($d==0)
                        {
                    mysql_query("INSERT INTO `request_payout_history` (`rph_id`, `d_id`, `date`, `time`, `amount`, `clear`, `clear_date`, `txn_id`) VALUES (NULL, '$_SESSION[d_id]', '$date', '$time', '$_POST[withdrawal_amount]', 'n', '', '');");
                    echo "<script>alert('Your Withdrawal Requested Sucessfully Submited');
        location.href='withdrawal_request.php';</script>";
                        }
                        else{echo "<script>alert('failed! when your pending request get clear then only you can apply it next request');
        location.href='withdrawal_request.php';</script>";}
                    }
                    ?>
                    
                    
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Transtion ID</th>
                          <th>Date/Time</th>
                          <th>Amount</th>
                          <th>Level</th>
                          <th>D ID</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                          <?php 
							   
$qul="SELECT * FROM `commission` WHERE `d_id`='$_SESSION[d_id]'";
$queryl=mysql_query($qul);
while($fetchl=mysql_fetch_assoc($queryl))
{?>

                		      <tr>                                 
                                  <td><?php echo $fetchl[c_id];?></td>
								  <td><?php echo $fetchl[date]." ".$fetchl[time];?></td>
                                  <th><?php echo $fetchl[amount];?></th>
                                  <td><?php echo $fetchl[level];?></td>
                                  <td><?php echo $fetchl[n_d_id];?> </td>
                              </tr>                          

               <?php $tg=$tg+$fetchl[amount];
			  }?>
			  </tbody>
			  <tr><th>Total</th><td></td><td><h4><?php echo $tg;?></h4></td><td></td><td></td></tr>
                      
                    </table>
                  </div>
                </div>
              </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            0CHARGES All right Reserved.
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
