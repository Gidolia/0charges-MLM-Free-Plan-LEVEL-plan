<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                
              <a href="index.php" class="site_title"><img src="../../logo_h.png" class="img-circle" alt="" height="30" width="23"> <span>0CHARGES</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../logo_h.png" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $d_info[name];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Dashboard </a></li>
                  
                  <li><a href="my_network_tree_view.php"><i class="fa fa-tree"></i>Tree Structure</a></li>
                  
                  <li><a href="levels.php"><i class="fa fa-tree"></i>Level</a></li>
                  
                   <li><a href="commission_ledger.php"><i class="fa fa-money"></i> Commission Ledger</a></li>
                   
                   <li><a href="withdrawal_request.php"><i class="fa fa-money"></i> Withdrawal History</a></li>
                   
                   <li><a href="auto_pool_income.php"><i class="fa fa-money"></i> Auto Pool Income</a></li>
                   
                
                   
                   <li><a><i class="fa fa-user"></i>My Profile<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="profile_edit.php">Update Profile</a></li>
                        <li><a href="pass_change.php">Change Password</a></li>
                    </ul>
                  </li>
                 </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>