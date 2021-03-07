<?php include ("lock.php"); 
 $cdate=strtotime("now"); 
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
		<script type="text/javascript" src="jss/jquery.js"></script>
<script type="text/javascript" src="jss/jquery.watermarkinput.js"></script>
<script type="text/javascript">
function ser() 
{
	var searchbox = $("#searchbox").val();
	var dataString = 'searchword='+ searchbox;
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
	$("#divToPrint").html(result);
	}
});
}return false; 
}

jQuery(function($){
   $("#searchbox").Watermark("Find Criminal by All Details");
   });
</script>
   <script type="text/javascript" >
  function encrypt(){
	  alert("aaa");
	var formData = new FormData($('#loginForm')[0]);
    $.ajax({
        url: 'encrypt.php',
        type: 'POST',
        data: formData,
        async: false,
		 beforeSend: function()
		{
		$('#loginBox').attr('style', 'display: none;');
		},
        success: function (data) {
			alert(data);
         $("#divToPrint").html(data);
		
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
   </script>
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
                  <a href="#">
				  <div class="col-lg-6 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="">
                                <?php 
                     					$uresult = mysql_query("SELECT * FROM criminal
										");
										echo $ucnt=mysql_num_rows($uresult);?>
                              </h1>
                              <p>Add Criminal</p>
                          </div>
                      </section>
                  </div></a>
				  <a href="view_noti">
                  <div class="col-lg-6 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class=" fa fa-bell-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                 <?php 
                     					$auresult = mysql_query("SELECT n.n_head, n.n_desc, a.ad_fname, n.n_time, n.n_id
										FROM noti n, admin a
										WHERE n.to= $ad_id
										AND n.n_flag=1
										ORDER BY  n.n_id DESC");
										echo $aucnt=mysql_num_rows($auresult);?>
                              </h1>
                              <p>Notification</p>
                          </div>
                      </section>
                  </div>
				  </a>
              </div>
              <!-- page start-->
			 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						   <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a  onclick="PrintDiv();" href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                             
							 <form id="loginForm" action='javascript:;' name="loginForm" onsubmit="encrypt()" Method="POST" enctype="multipart/form-data">
			                          <input type="file" name="fl" id="fl" style="display: inline;">
			                    <input type="submit" class="btn btn-primary" id="login" value="Search">
						   </form>
							 <input type="text" class="form-control" style =" margin-top: 20px; "  placeholder="Find Criminal by All Details" id="searchbox"  onkeyup="ser()" />
							 
                          </header> 
						 
						 <div id="divToPrint"  style ="margin-top: 20px;" >
						 <div>
                                                                    
									  <?php 
			  $st_sql=mysql_query("select * from criminal");
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
				 $src1="data:;base64,".$c_img;
								?>
								 <div class="col-md-6 col-sm-6" >
                  <div class="panel">
                      <div class="panel-body">
                          <div class="media">
                              <a class="pull-left" href="#">
                                 <img style="" src="<?php echo $src1 ; ?>"  alt="" />
                              </a>
                              <div class="media-body">
                                  <h4><?php echo $c_name ;?> <?php echo $c_father ;?> <?php echo $c_surname ;?> <span class="text-muted small"> <br> Crime Type: <?php echo $c_crime ;?> Section: <?php echo $c_section ;?></span></h4>
                                  
                                  <address>
                                      <strong>police station: <?php echo $c_pstation ;?>, Case NO:<?php echo $c_caseno ;?>.</strong><br>
									  Age: <?php echo $c_age ;?><br>
									  Cast: <?php echo $c_cast ;?><br>
									 Sub Cast: <?php echo $c_subcast ;?><br>
                                      Adhar No: <?php echo $c_adhar ;?><br>
                                      Pan No: <?php echo $c_pan ;?> <br>
                                      <abbr title="Phone">Driving Licence No:</abbr>  <?php echo $c_drivel ;?>
                                  </address>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                                       
									   <?php } ?>
                          </div>
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
              2018 &copy; SSWP Crime Book
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

 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=600,height=600');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
  </body>
</html>
