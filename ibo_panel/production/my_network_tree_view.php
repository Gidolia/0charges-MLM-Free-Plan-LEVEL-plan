<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GK DEVELOPER || Tree View</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

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
                <h3>Downline Tree</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Downline Tree View</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
 <?php /*                                        <table class="table table-bordered">
                          <?php 
                          if(empty($_GET[d_id]))
	{$tr=$_SESSION[d_id];}else{$tr=$_GET[d_id];}
$sel1=mysql_query("SELECT * FROM `distributor` WHERE `d_id`='$tr';") or die("value not selected1");
$c=mysql_num_rows($sel1);
$fet1=mysql_fetch_assoc($sel1);
$tem=array(); 
$tem_n=array();

$sel12=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$fet1[d_id]';") or die("value not selected1");

while($fet12=mysql_fetch_assoc($sel12)){$tem[]=$fet12[d_id]; $tem_n[]=$fet12[name];}

$tem2=array();
$tem_n2=array(); 
$sel123=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$tem[0]';") or die("value not selected1");
while($fet123=mysql_fetch_assoc($sel123)){$tem2[]=$fet123[d_id]; $tem_n2[]=$fet123[name];}

$tem3=array();
$tem_n3=array(); 
$sel12=mysql_query("SELECT * FROM `distributor` WHERE `s_id`='$tem[1]';") or die("value not selected1");
while($fet12=mysql_fetch_assoc($sel12)){$tem3[]=$fet12[d_id]; $tem_n3[]=$fet12[name];}
?>
                        <tr><td colspan="4" align="center"><h1><i class="fa fa-user"></i></h1><?php echo $fet1[name];?></td></tr>
                        <tr>
                        <td colspan="2" align="center" width="50%">
                            <?php if(empty($tem[0])){?><a href="register_ibo_id.php?s_id=<?php echo $fet1[d_id];?>"><?php }
                            else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem[0];?>" style="color:green"><?php } ?>
                            <h1><i class="fa fa-user"></i></h1><?php echo $tem[0]." ".$tem_n[0];?></a>
                        </td>
                        <td colspan="2" align="center" width="50%">
                            <?php if(empty($tem[1])){?><a href="register_ibo_id.php?s_id=<?php echo $fet1[d_id];?>"><?php }
                            else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem[1];?>" style="color:green"><?php }
                            ?><h1><i class="fa fa-user"></i></h1><?php echo $tem[1]." ".$tem_n[1];?></a>
                        </td>
                        </tr>
                        
                        <tr><td align="center" width="25%">
                           <?php if(isset($tem[0])){?> <?php if(empty($tem2[0])){?><a href="register_d_id.php?s_id=<?php echo $tem[0];?>"><?php }
                            else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem2[0];?>" style="color:green"><?php }
                            ?><h1><i class="fa fa-user"></i></h1><?php echo $tem2[0]." ".$tem_n2[0];?></a><?php }?>
                        </td>
                        <td align="center" width="25%">
                            <?php if(isset($tem[0])){?>
                            <?php if(empty($tem2[1])){?><a href="register_ibo_id.php?s_id=<?php echo $tem[0];?>">
                                <?php }else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem2[1];?>" style="color:green"><?php }
                                ?><h1><i class="fa fa-user"></i></h1><?php echo $tem2[1]." ".$tem_n2[1];?></a><?php }?>
                        </td>
                        <td align="center" width="25%">
                            <?php if(isset($tem[1])){?>
                            <?php if(empty($tem3[0])){?><a href="register_ibo_id.php?s_id=<?php echo $tem[1];?>"><?php }
                            else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem3[0];?>" style="color:green"><?php }
                            ?><h1><i class="fa fa-user"></i></h1><?php echo $tem3[0]." ".$tem_n3[0];?></a><?php }?>
                        </td>
                        <td align="center" width="25%">
                            <?php if(isset($tem[1])){?>
                            <?php if(empty($tem3[1])){?><a href="register_ibo_id.php?s_id=<?php echo $tem[1];?>"><?php 
                            }else{?><a href="my_network_tree_view.php?d_id=<?php echo $tem3[1];?>" style="color:green"><?php }
                            ?><h1><i class="fa fa-user"></i></h1><?php echo $tem3[1]." ".$tem_n3[1];?></a></a><?php }?>
                        </td></tr>
                      </table><?php */?>
                      <iframe src="tree_view.php" height="300" width="100%"></iframe>
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
