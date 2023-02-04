<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>0Charges || Index</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
<!--
.Estilo1 {
	color: #009900;
	font-weight: bold;
	font-size: 18px;
}
.Estilo9 {color: #337AB7; font-size: 18px; }
.Estilo10 {color: #0000FF}
-->
    </style>
</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include "include/sidebar.php";?>

        <!-- top navigation -->
        <?php include "include/header.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Profile</small></h3>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                We are a Company That Want to meet and give an opportunity to anyone accross the world, we belive everyone must be given
                a chance to invest in the markets, this is why we have such affordable package.
                    <?php
                             if($d_info[id_status]=='y'){$fffff="<b><font color='green'>Activated</font></b>";}
                             else{
                             $fffff="<b><font color='red'>Not Activated</font></b>";
                             }
                             if($d_info[dimond_id_status]=='y'){$fffffd="<b><font color='green'>Activated</font></b>";}
                             else{
                             $fffffd="<b><font color='red'>Not Activated</font></b>";
                             }
                             if($d_info[youtube]!='y'){echo "<script>location.href='youtube.php';</script>";}
                             ?>
                 <table class="table">
                     <tr>
                         <th width="30%">ID</th>
                         <td><?php echo $d_info[d_id];?></td>
                     </tr>
                     <tr>
                         <th>Name</th><td><?php echo $d_info[name];?></td>
                     </tr>
                     <tr>
                         <th>Mobile</th><td><?php echo $d_info[mobile];?></td>
                     </tr>
                     <tr>
                       <th>KYC <font color='red'>Pending</font></th>
                       <td><a href="profile_edit.php">
                       <button class="btn btn-success">Edit</button></a></td>
                     </tr>
                     <tr>
                       <th>&nbsp;</th>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                         <th>ID Status</th><td><?php echo $fffff;?> </td>
                     </tr>
                     <tr>
                         <th>Diamond Status</th><td><?php echo $fffffd;?> </td>
                     </tr>
                     <?php if($d_info[id_status]=='y')
                     {?>
                     <tr>
                         <th>ID Activated Date</th><td><?php echo $d_info[id_status_date];?></td>
                     </tr>
                     <?php }?>
                     <tr>
                         <th>Referal Link</th><td><textarea rows="5" cols="10" id="myInput" readonly>http://0charges.com/ibo_panel/production/sign_up_form2.php?p_id=<?php echo $_SESSION[d_id]; 
						$cars = array("", "", "", "", "","","","","","","","","","","","");
						for ($x = 1; $x <= 10; $x++) {
							$ccx="c$x";
							$c1=$d_info[$ccx];							
							if($c1=="Y"){$cars[$x]="<font color='green'>Activated</font>";}else{$cars[$x]="<font color='red'>Pending</font>";}
						}
						 ?> </textarea> <button onClick="myFunction()">Copy text</button></td>
                     </tr>
                     <tr>
                       <th colspan="2">
<table width="100%" border="0" bordercolor="#000000">
  <tr>
    <td height="38" colspan="2" bordercolor="#FFFFFF" bgcolor="#CCFF99"><div align="center" style="background:#CCFF99"><strong>Demat Account Support Time<br>9:30 AM To 7:00 PM </strong></div></td>
  </tr>
 </table><br>
 <table width="100%" border="1" bordercolor="#000000" class="table">
  <tr>
    <td colspan="2"><div align="center">ID Activation With <span class="Estilo1">Trade Plus</span><br>
    </div></td>
  </tr>
  <tr>
    <td height="60" align="center" valign="middle"><div align="center">9009405034 Aman<br>
        <a href="tel:+919009405034"><img src="phone-call-icon-png-61.png" width="30" height="30"></a></div></td>
    <td><div align="center"><strong>Currunt Status<br>
          <?php echo $cars[1];?></strong></div></td>
  </tr>
  <tr>
    <td width="50%" height="60" align="center" valign="middle"><div align="center"><a href="#">
      <button class="btn btn-success">Videos</button>
    </a></div></td>

    <td><div align="center"><a href="https://campaigns.tradeplusonline.com/campaign2/?UCC=TP947953">
      <button class="btn btn-success">Process</button>
    </a></div></td>
  </tr>
</table>
 <br>
 <table width="100%" border="1" bordercolor="#000000" class="table">
  <tr>
    <td colspan="2"><div align="center">ID Activation With <span class="Estilo1">IIFL</span><br>
    </div></td>
  </tr>
  <tr>
    <td height="60" align="center" valign="middle"><div align="center">9009405034 Aman<br>
        <a href="tel:+919009405034"><img src="phone-call-icon-png-61.png" width="30" height="30"></a></div></td>
    <td><div align="center"><strong>Currunt Status<br>
          <?php echo $cars[2];?></strong></div></td>
  </tr>
  <tr>
    <td width="50%" height="60" align="center" valign="middle"><div align="center"><a href="#">
      <button class="btn btn-success">Videos</button>
    </a></div></td>
    <td><div align="center"><a href="motilal_oswal.php">
      <button class="btn btn-success">Process</button>
    </a></div></td>
  </tr>
</table>
 <br></th>
                     </tr>
                     <tr>
                       <th colspan="2"><div align="center"><br>0Charges Customer Care: <strong><a href="tel:+919009405034">9009405034</a></strong> <br></div></th>
                     </tr>
                 </table>
                 <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            0CHARGES All Right Reserved
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
	
  </body>
</html>
