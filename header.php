<!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard" class="logo">CRIME<span>BOOK</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
					<?php $result = mysql_query("SELECT n.n_head, n.n_desc, a.ad_fname, n.n_time, n.n_id
										FROM noti n, admin a
										WHERE n.to= $ad_id
										AND n.n_flag=1
										ORDER BY  n.n_id DESC "); 
										$cnt=mysql_num_rows($result);
										?>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-important"><?php echo $cnt;?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
							<?php if($cnt != Null){
										while($row = mysql_fetch_array($result))
                     						{
                        							$n_head=$row['n_head'] ;
													$n_desc=$row['n_desc'] ;
													$ass_name=$row['ad_fname'] ; ;
													$log=$row['n_time'];
                      						?>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">@ <?php echo $ass_name; ?></span>
                                    <span class="time"><?php include "time_ago.php";?></span>
                                    </span>
                                    <span class="message">
                                       <?php echo $n_desc; ?>
                                    </span>
                                </a>
                            </li>
										<?php } 
										}else{
											echo"<li><a href='#'>
                                No Pending Notification
                            </a></li>";	}?>
                            <li>
                                <a href="view_noti">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username"><?php echo $user['ad_uname'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a  href="dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				 <?php if($ad_id ==1){ ?>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Add Record</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addcrime.php">Add Single Record </a></li>
                          <!-- <li><a  href="upload.php">Add Multipal Record</a></li> -->
                      </ul>
                  </li>
				 <?php } ?>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bell-o"></i>
                          <span>Notification</span>
                      </a>
                      <ul class="sub">
                          <?php if($ad_id ==1){ ?> <li><a  href="noti">Add Notification</a></li><?php } ?>
                          <li><a  href="view_noti">See All Notification</a></li>
                      </ul>
                  </li>
				  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Employee</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="employee">Add Employee</a></li>
                          <li><a  href="show_emp">Edit Employee</a></li>
                      </ul>
                  </li> -->
                  <!--multi level menu end-->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>