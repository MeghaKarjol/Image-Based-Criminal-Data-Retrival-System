<?php 
include("lock.php");
$profile=$_GET['source_ref'];
if(empty($_GET['source_ref'])) {
  header("location: 404");
}
else{
	$sqlup=mysql_query("SELECT u_id, u_name, u_cont, u_email, u_addr FROM  user WHERE ad_id=$ad_id
	AND u_otp LIKE '$profile'");
	$rowcnt=mysql_num_rows($sqlup);
	if($rowcnt<=0){
	header("location: 404");
	}else{
	$rowup=mysql_fetch_array($sqlup);
	$u_name = $rowup['u_name'];
	$u_cont=$rowup['u_cont'];
	$u_email=$rowup['u_email'];
	$u_id = $rowup['u_id'];
	$u_addr=$rowup['u_addr'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Dashboard </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="assets/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
	<script>
function isCharKey(evt)
      {
	 var charCode= (evt.which) ? evt.which : event.keyCode
         if (charCode!=8 &&(charCode >122  || charCode < 97) && (charCode < 65 || charCode > 90))
		 {
            	    return false;
		  }
         return true;
      }
</script>
<script>
function isNumberKey(evt)
      {
	     var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		 {
            return false;
		  }
         return true;
      }
</script>
<script type="text/javascript">
function saveprob(){ 
		var form = $("#problem-form");
		var pdesc = $("#p_desc").val();
		var fee = $("#fee").val();
		var uid = $("#uid").val();
		//alert(pdesc+"/"+fee+"/"+uid);
		if(pdesc=='' || fee=='' || uid=='')
{
	$('#error').text("Please Fill All Mandatory Fields");
		$('.toast-top-center').show();
		$('.toast-top-center').fadeOut(5000);
}
else
{
	$.ajax({
            type: 'POST',
            url: 'saveproblem.php',
            data: form.serialize(),
            success: function(data){  
			$('#problem-form')[0].reset();
			$("#proview").html(data);
			$('#sucess').text("Problem Added Sucessful");
			$('.toast-top-right').show();
			$('.toast-top-right').focus();
			$('.toast-top-right').fadeOut(5000);
			//location.replace('dashboard.php'); 
		}	                                 	  
         });                
	}
}
</script>
  </head>
  <body>
  <section id="container" class="">
<?php include("header.php");?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h1>Jonathan Smith</h1>
                              <p>jsmith@flatlab.com</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="profile."> <i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="profile-activity.html"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                              <li><a href="profile-edit.html"> <i class="fa fa-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                     <section class="panel">
                          <div class="bio-graph-heading">
                             <h2>Bio Graph</h2>
                          </div>
                          <div class="panel-body bio-graph-info">
                              
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Full Name </span>: <?php echo $u_name; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Address </span>: <?php echo $u_addr; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Age</span>: 32</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Gender </span>: Male</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>:  <?php echo $u_email; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: <?php echo $u_cont; ?></p>
                                  </div>
                              </div>
                          </div>
                      </section>
					   <section class="panel">
                          <form id="problem-form" action='javascript:;' name="problem-form" onsubmit="saveprob()"  Method="POST">
                              <textarea placeholder="Please Enter Patient Problem" id="p_desc" name="p_desc" rows="3" class="form-control input-lg p-text-area"></textarea>
                            <div class="panel-footer">
								<ul class="nav nav-pills">
                                     <li> <input type="text" class="form-control small" id="fee" maxlength="7" onKeyPress="return isNumberKey(event);" name="fee"  placeholder="Consulting Fees" value=""/></li>
									 <input type="hidden" class="form-control small" id="uid" readonly="" name="uid"  value="<?php echo $u_id; ?>"/>
                                </ul>
								<input style="margin-top:-35px !important;" type="submit" class="btn btn-danger pull-right" value="Add"/>
                            </div>
						  </form>
                      </section>
                      <section>
                          <div class="row">
                        <div class="col-lg-12">
                      <section class="panel ">
                          <header class="panel-heading">
                              Problem History
                              <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                          </header>
						  <div id="proview"></div>
						 <?php 
                     					$result = mysql_query("SELECT * FROM  problem WHERE u_id=$u_id ORDER BY p_id DESC ");
										while($row = mysql_fetch_array($result))
                     						{
                        							$p_desc=$row['p_desc'] ;
													$p_id=$row['p_id'] ;
													$p_date=date("d M Y g:ia",$row['p_date']);
													$p_fee=$row['p_fee'] ;
													$s_head=$row['s_head'] ;
                      						?>
                          <div  class="panel-body profile-activity">
                                <!--  <h5 class="pull-right">12 August 2013</h5> -->
                                  <div class="activity terques">
                                      <span>
                                          <a href="recipt?key=<?php echo md5($p_id); ?>&outh=<?php echo $row['p_date'].$p_id; ?>"><i class="fa fa-clipboard"> </i></a>
                                      </span>
                                      <div class="activity-desk">
                                          <div class="panel">
                                              <div class="panel-body">
                                                  <div class="arrow"></div>
                                                  <i class=" fa fa-clock-o"></i>
                                                  <h4><?php echo $p_date; ?></h4>
                                                  <p><?php echo $p_desc; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
							</div>
							<?php } ?>
							
                      </section>
                  </div>
                          </div>
                      </section>
                  </aside>
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
 <div id="toast-container" style="display:none; " class="toast-top-right" aria-live="polite" role="alert"><div class="toast toast-success"><div class="toast-progress" style="width: 99.9218%;"></div><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Toastr Notification</div><div id="sucess" class="toast-message"> </div></div></div>
	  <div  id="toast-container"style="display:none; " class="toast-top-center" aria-live="polite" role="alert"><div class="toast toast-error"><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Error Notification</div><div id="error" class="toast-message"></div></div></div>
     
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; katareinfo by katareinfo.
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
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
  <script>
      //knob
      $(".knob").knob();

  </script>
  </body>
</html>
