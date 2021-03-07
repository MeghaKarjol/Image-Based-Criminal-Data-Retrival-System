<?php 
include("lock.php");
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katare">
    <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Katareinfo -  Admin </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

    <body>

        <section id="container" >
  <?php include("header.php"); ?>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                            Add Medicine
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" id="fform" action="add_medi.php" method="post" >
								   <div class="form-group">
								    <div  class="col-lg-2 col-sm-2 control-label">Medicine Name</div>
                                      <div class="col-lg-10">
                                       <input type="text" name="mname" id="mname" class="form-control" placeholder="Medicine Name"/>
                                      </div>
                                  </div>
								  <div class="form-group">
								    <div  class="col-lg-2 col-sm-2 control-label">Medicine Desc</div>
                                      <div class="col-lg-10">
                                       <textarea type="text" name="mdesc" id="mdesc" class="form-control" placeholder="Medicine Description"></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Add</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
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
                            </div>
                            <!-- media -->
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
                            </div>
                            <!-- media -->
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
                            </div>
                            <!-- media -->
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
                            </div>
                            <!-- media -->
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
                            </div>
                            <!-- media -->
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
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>
    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
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
<!-- validation js -->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<script type="text/javascript">
			//form validation rules
			$(document).ready(function(){
					   $("#fform").validate({
							rules: {
											mname: "required",
											mdesc:"required"
										},
							 messages: {
											mname: "Please enter Medicine Name",
											mdesc:"Please enter Medicine Description"
									},
							submitHandler: function(form) {
							alert("Medicine Added Sucessfully.");
								form.submit();
							}
						});
					});
			   
			</script>
    </body>
    </html>