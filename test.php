<?php include ("lock.php"); 
 $cdate=strtotime("now"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katareinfo">
    <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Responsive Table</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/table-responsive.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
       <?php include"header.php";?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row state-overview">
                  <a href="registration">
				  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="">
                                <?php 
                     					$uresult = mysql_query("SELECT * FROM user
										WHERE ad_id= $ad_id
										AND u_flag=1
										");
										echo $ucnt=mysql_num_rows($uresult);?>
                              </h1>
                              <p>Clients Registration</p>
                          </div>
                      </section>
                  </div></a>
				  <a href="audit">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa  fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                 <?php 
                     					$auresult = mysql_query("SELECT * FROM audit  
										WHERE ad_id= $ad_id
										AND aud_flag= 1
										ORDER BY  aud_id DESC");
										echo $aucnt=mysql_num_rows($auresult);?>
                              </h1>
                              <p>Audits Report</p>
                          </div>
                      </section>
                  </div>
				  </a>
				  <a href="calendar">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
					  <div class="symbol yellow">
                              <i class="fa  fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="">
                                  <?php 
                     					$wpresult = mysql_query("SELECT *
										FROM diary_case 
										WHERE ad_id= $ad_id
										AND c_flag= 1
										AND (prv_date = '$dridt' OR nxt_date='$dridt')");
										echo $wpcnt=mysql_num_rows($wpresult);?>
                              </h1>
                              <p>Work Planner</p>
                          </div>
                      </section>
                  </div>
				   </a>
				  <a href="show_voucher">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                  <?php 
                     					$vresult = mysql_query("SELECT * FROM voucher
										WHERE ad_id= $ad_id
										");
										echo $vcnt=mysql_num_rows($vresult);?>
                              </h1>
                              <p>Voucher Details</p>
                          </div>
                      </section>
                  </div></a>
              </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Criminal Records
                          </header> 
						  <div style="width: 58%;padding: 15px;" id="dynamic-table_filter">Search: <input type="text" class="form-control" aria-controls="dynamic-table"></div>
                         
                          <div class="panel-body">
                              <section id="no-more-tables">
                                                                    <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th class="numeric">Police Station</th>
                                          <th class="numeric">Case No</th>
                                          <th class="numeric">Sections of the IPC</th>
                                          <th class="numeric">Name Of Criminal</th>
                                          <th class="numeric">Known as (Nick Name)</th>
                                          <th class="numeric">Father Name</th>
                                          <th class="numeric">Surname</th>
                                          <th class="numeric">Age</th>
										  <th class="numeric">Cast</th>
                                          <th class="numeric">Sub Cast</th>
										  <th class="numeric">Arrest Date & Time</th>
                                          <th class="numeric">Convection</th>
										  <th class="numeric">Adhar No</th>
                                          <th class="numeric">Pan No</th>
										  <th class="numeric">Election Id No</th>
                                          <th class="numeric">Driving Licence No</th>
										  <th class="numeric">Moblie No</th>
                                          <th class="numeric">Crime Type (Modes Of Oprating)</th>
										  <th class="numeric">Criminal Photo </th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
									  <?php 
			  $st_sql=mysql_query("select * from criminal ");
			while ($row=mysql_fetch_array($st_sql))
				{
				$c_id=$row['c_id']; 
				$c_pstation=$row['c_pstation']; 
				$c_caseno=$row['c_caseno']; 
				$c_section=$row['c_section']; 
				$c_name=$row['c_name']; 
				$c_nickname=$row['c_nickname']; 
				$c_father=$row['c_father']; 
				$c_surname=$row['c_surname']; 
				$c_age=$row['c_age']; 
				$c_cast=$row['c_cast']; 
				$c_subcast=$row['c_subcast']; 
				$c_arrdate=$row['c_arrdate']; 
				$c_convection=$row['c_convection']; 
				$c_adhar=$row['c_adhar']; 
				$c_pan=$row['c_pan']; 
				$c_eleid=$row['c_eleid']; 
				$c_drivel=$row['c_drivel']; 
				$c_mob=$row['c_mob']; 
				$c_crime=$row['c_crime']; 
				$c_img=$row['c_img']; 
								?>
                                       <tr>
                                          <td class="numeric" data-title="Police Station"> <?php echo $c_pstation ;?></td>
                                          <td class="numeric" data-title="Case No"> <?php echo $c_caseno ;?></td>
										  <td class="numeric" data-title="Sections of the IPC"> <?php echo $c_section ;?></td>
                                          <td class="numeric" data-title="Name Of Criminal"> <?php echo $c_name ;?></td>
                                          <td class="numeric" data-title="Known as (Nick Name)"> <?php echo $c_nickname ;?></td>
										  <td class="numeric" data-title="Father Name"> <?php echo $c_father ;?></td>
                                          <td class="numeric" data-title="Surname"> <?php echo $c_surname ;?></td>
                                          <td class="numeric" data-title="Age"> <?php echo $c_age ;?></td>
										  <td class="numeric" data-title="Cast"> <?php echo $c_cast ;?></td>
                                          <td class="numeric" data-title="Sub Cast"> <?php echo $c_subcast ;?></td>
                                          <td class="numeric" data-title="Arrest Date & Time"> <?php echo $c_arrdate ;?></td>
										  <td class="numeric" data-title="Convection"> <?php echo $c_convection ;?></td>
                                          <td class="numeric" data-title="Adhar No"> <?php echo $c_adhar ;?></td>
										  <td class="numeric" data-title="Pan No"> <?php echo $c_pan ;?></td>
                                          <td class="numeric" data-title="Election Id No"> <?php echo $c_eleid ;?></td>
										  <td class="numeric" data-title="Driving Licence No"> <?php echo $c_drivel ;?></td>
                                          <td class="numeric" data-title="Moblie No"> <?php echo $c_mob ;?></td>
                                          <td class="numeric" data-title="Crime Type (Modes Of Oprating)"> <?php echo $c_crime ;?></td>
										  <td class="numeric" data-title="Criminal Photo"> <?php echo $c_img ;?></td>
                                      </tr>
									   <?php } ?>
                                    
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar2.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/pro-ac-1.png" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/avatar1.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/mail-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress progress-striped active">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; Katareinfo by Katareinfo.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="js/slidebars.min.js"></script>
    <script src="js/common-scripts.js"></script>


  </body>
</html>
