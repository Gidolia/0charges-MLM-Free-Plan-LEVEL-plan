<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>0CHARGES </title>

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
                <h3>Level</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Level SEVEN</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
        <?php
        $temp=array();
        $temp1=array();
        $temp2=array();
        $m=0;
        $g=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$_SESSION[d_id]'");
        while($d=mysql_fetch_assoc($g))
        {
            $gt=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$d[d_id]'");
            while($dd=mysql_fetch_assoc($gt))
            {
                $gte=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$dd[d_id]'");
                while($dde=mysql_fetch_assoc($gte))
                {
                    $gtet=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$dde[d_id]'");
                    while($ddet=mysql_fetch_assoc($gtet))
                    {
                        $gtetm=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$ddet[d_id]'");
                        while($ddetm=mysql_fetch_assoc($gtetm))
                       {
                           $gtetme=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$ddetm[d_id]'");
                            while($ddetme=mysql_fetch_assoc($gtetme))
                           {
                                $gtetmec=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$ddetme[d_id]'");
                               while($ddetmec=mysql_fetch_assoc($gtetmec))
                               {
                                    $temp[]=$ddetmec[d_id];
                                    $temp1[]=$ddetmec[name];
                                    $temp2[]=$ddetmec[id_status];
                                    $m++;
                               }
                           }
                       }
                    }
                }
            }
        }
        
        ?>
        <table class="table table-striped table-bordered">
            <thead><tr><th>Sr. no.</th><th>D ID</th><th>ID status</th><th>Name</th></tr></thead>
            <?php
            $a=0;
            for($x=0;$x<count($temp);$x++)
            { $a++; 
            if($temp2[$x]=='y'){$lk="<font color='green'>ID Activated</font>";}
            else{$lk="<font color='red'>Not Activated</font>";}
            ?>
            <tr>
                <td><?php echo $a;?></td><td><?php echo $temp[$x];?></td><td><?php echo $lk;?></td><td><?php echo $temp1[$x];?></td>
            </tr>
            <?php
            }?>
        </table>

                    </div>
                  </div>
                </div>
            </div>
            </div>

            
            
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            0CHARGES All Right Reserved.
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
