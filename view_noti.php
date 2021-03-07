<?php 
include("lock.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="katareinfo">
    <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Inbox</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" >
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

  <section id="container" class="">
     <?php include("header.php");?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--mail inbox start-->
              <div class="mail-box">
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Notifications</h3>
                      </div>
                      <div id="done" class="inbox-body">
                          <table class="table table-inbox table-hover">
                            <tbody>
							<?php 
                     					$result = mysql_query("SELECT n.n_head, n.n_desc, a.ad_fname, n.n_time, n.n_id
										FROM noti n, admin a
										WHERE n.to= $ad_id
										AND n.n_flag=1
										ORDER BY  n.n_id DESC 
										");
										$cnt=mysql_num_rows($result);
										if($cnt != Null){
										while($row = mysql_fetch_array($result))
                     						{
                        							$n_head=$row['n_head'] ;
													$n_desc=$row['n_desc'] ;
													$ass_name=$row['ad_fname'] ; ;
													$log=$row['n_time'];
													$n_id=$row['n_id'] ;
                      						?>
                              <tr class="unread">
                                  <td class="inbox-small-cells" onclick="notidone('<?php echo $n_id; ?>')"><span class="label label-danger">done</span></i></td>
								  <td class="view-message  dont-show"><?php echo $ass_name; ?></td>
                                  <td class="view-message  dont-show"><b><?php echo $n_head; ?></b> ## <?php echo $n_desc; ?></td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message  text-right"><?php include "time_ago.php";?></td>
                              </tr>
											<?php } }else{
											echo"<tr><td class='view-message  dont-show'>
                                No Pending Notification
                            </td></tr>";	} ?>
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>
              <!--mail inbox end-->
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
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

  <!-- BEGIN:File Upload Plugin JS files-->
  <script src="assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="assets/jquery-file-upload/js/jquery.fileupload.js"></script>
  <!-- The File Upload file processing plugin -->
  <script src="assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
<script type="text/javascript">	
function notidone(nid)
{
	//alert(nid);
	$.ajax({
    type:'POST',
    url:'donenoti.php',
    data:{nid:nid},
    success:function(msg){
		//alert(msg);
		$('#done').html(msg);
    }
	});
}
		 
</script>
  </body>
</html>
