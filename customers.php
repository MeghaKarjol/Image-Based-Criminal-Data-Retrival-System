<?php 
include("lock.php");
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Katareinfo">
        <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>People Directory</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
	<script type="text/javascript" src="jss/jquery.js"></script>
<script type="text/javascript" src="jss/jquery.watermarkinput.js"></script>
<script type="text/javascript">
function ser() 
{
var searchbox = $("#searchbox").val();
var dataString = 'searchword='+ searchbox;
	//alert(searchbox);
if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(result)
{
$("#view").html(result);
	}
});
}return false; 
}

jQuery(function($){
   $("#searchbox").Watermark("Find Customers by Name and mobile No");
   });
</script>
    </head>

    <body>

        <section id="container" class="">
            <?php include("header.php"); ?>
                <!--main content start-->
                <section id="main-content">
                    <section class="wrapper site-min-height">
                        <!-- page start-->
                        <ul class="directory-list">
							<input  type="text"  class="input-sm form-control" placeholder="Find Customers by Name and mobile" id="searchbox"  onkeyup="ser()" >
                        </ul>
						
                        <div class="directory-info-row">
                            <div class="row" id="view">
                                <?php $sql=mysql_query("SELECT * FROM user WHERE  u_flag =1 AND ad_id=$ad_id ORDER BY  u_id DESC ");
while($row=mysql_fetch_array($sql))
{
$u_id =$row['u_id'];
$u_name =$row['u_name'];
$u_addr=$row['u_addr'];
$u_email=$row['u_email'];
$u_cont=$row['u_cont'];
$u_otp=$row['u_otp'];
?>
                                    <div  class="col-md-4 col-sm-4">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h4><?php echo $u_name; ?> <span class="text-muted small"> DB-<?php echo $u_id ;?></span></h4>
                                                        <address>
                                      <strong style="font-size: 12px;"><?php echo $u_email; ?></strong><br>
                                    <?php echo $u_addr; ?><br/>
                                      <abbr title="Phone">P:</abbr> <?php echo $u_cont; ?>
									</address>
                                                        <ul class="social-links">
                                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="profile?source_ref=<?php echo $u_otp; ?>" data-original-title="View Details"><i class="fa fa-book"></i></a></li>
                                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-comment"></i></a></li>
                                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                         <!--   <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
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
        <script src="js/slidebars.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/common-scripts.js"></script>
    </body>
    </html>