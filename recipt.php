<?php 
include("lock.php");
$mdid=$_GET['key'];
$outh=$_GET['outh'];
$toth= substr($outh, 0, 10);
if(empty($_GET['key']) && empty($_GET['outh'])) {
  header("location: 404");
}
else{
$sqlup=mysql_query("SELECT p. * , u.u_name, u.u_cont, u.u_id, u.u_addr
FROM problem p, user u
WHERE p.ad_id =$ad_id
AND p.u_id = u.u_id
AND p.p_date = '$toth'");
$rowup=mysql_fetch_array($sqlup);
	$rowcnt=mysql_num_rows($sqlup);
	if($rowcnt<=0 && md5($rowup['p_id'])!=$mdid){
	header("location: 404");
	}else{
	$p_id = $rowup['p_id'];
	$u_name = $rowup['u_name'];
	$u_cont=$rowup['u_cont'];
	$u_email=$rowup['u_email'];
	$u_id = $rowup['u_id'];
	$u_addr = $rowup['u_addr'];
	$p_flag = $rowup['p_flag'];
}
}
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

    <title>Invoice</title>

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
    <link href="css/invoice-print.css" rel="stylesheet" media="print">
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
<script type="text/javascript">
//form validation rules
$(document).ready(function(){
	 $("#add-pre").validate({
                rules:{
                 medi: "required",
				 desc: "required",
				 dose: "required",			
				 qty: "required"	   
                },
                messages: {
				medi: "required",
				 desc: "required",
				 dose: "required",			
				 qty: "required"	
                },
                	submitHandler: function(form) {
						savpre();
                }
            });
        });
   
</script>
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
     <?php include("header.php");?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <?php if($p_flag==1){?>
		  <form class="form-horizontal" id="add-pre" style="margin-bottom:20px;" action='javascript:;'  Method="POST" >
									<div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" >
                                         <input list="medicine" name="medi" id="medi" value="" class="form-control"  placeholder="Medicines" >
  <datalist id="medicine">
   <?php 
                     					$sql="SELECT * FROM medicine where ad_id=$ad_id";
                     					$result = mysql_query($sql);
                     					while($row = mysql_fetch_array($result))
                     						{
												echo " <option value='".$row['med_name']."'>";
                      						}
		     					?>
  </datalist>  
                                            
									  </div>
									  <div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" >
                                          <input type="text"  name="desc" id="desc" placeholder="Description"  value="" class="form-control">
                                            
									  </div>
									  <div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" >
                                          <input type="text"  name="dose" id="dose" placeholder="Dosage"  value="" class="form-control">
                                            
									  </div>
   <div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" >
                                          <input type="text" name="qty" id="qty" placeholder="Quantity"  value="" class="form-control">
                                          <input type="hidden" name="pid" id="pid"  value=" <?php echo $p_id; ?>" class="form-control">
										  <input type="hidden" name="uid" id="uid"   value=" <?php echo $u_id; ?>" class="form-control">
									  </div>
									<button class="btn-success btn" type="submit">Add</button>
							</form>
		  <?php } ?>
              <!-- invoice start-->
              <section id="inv">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                          <div class="row invoice-list">
                              <div class="col-lg-4 col-sm-4">
                                  <h4><strong>PATIENT DETAILS</strong></h4>
                                  <p>PATIENT ID:  DB-<?php echo $p_id;?>. <br>
                                      Mr./Miss. <?php echo $u_name; ?>. <br>
                                       <?php echo $u_addr; ?>.<br>
                                      M: <?php echo $u_cont; ?>.<br>
									  DATE:  <?php echo date('d M Y'); ?>
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4 ">
                                  <h4><strong>HOSPITAL DETAILS</strong></h4>
                                  <p>
                                      <?php echo $ad_fname; ?> <br>
                                     <?php echo $ad_addr; ?> <br>
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                    <img src="img/vector-lab.jpg" alt="">
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
							  <tr> <th style="font-size: large;" > Rx. </th></tr>
                              <tr>
                                  <th>#</th>
                                  <th>Medicines</th>
                                  <th class="hidden-phone">Description</th>
                                  <th class="">Dosage</th>
                                  <th class="">Quantity</th>
                              </thead>
                              <tbody id="pview">
							<?php  $result = mysql_query("SELECT * FROM  pre_list WHERE u_id= $u_id AND p_id=$p_id AND ad_id=$ad_id ");
										while($row = mysql_fetch_array($result)){
                        							$prel_medicine=$row['prel_medicine'];
													$prel_desc=$row['prel_desc'] ;
													$prel_dosage=$row['prel_dosage'] ;
													$prel_qty=$row['prel_qty'] ;
													$prel_id=$row['prel_id'] ;
                      						?>
                              <tr>
                                  <td><?php echo $prel_id;?></td>
                                  <td><?php echo $prel_medicine;?> </td>
                                  <td class="hidden-phone"><?php echo $prel_desc;?></td>
                                  <td class=""><?php echo $prel_dosage;?></td>
                                  <td class=""><?php echo $prel_qty;?></td>
                              </tr>
										<?php } ?>
                              </tbody>
                          </table>
                          <div class="row">
                              <div class="col-lg-4 invoice-block pull-right">
                                  <ul class="unstyled amounts">
                                      <li><strong><?php echo $ad_fname; ?></strong></li>
                                      <li><strong>Signature :</strong> ------------------- </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="text-center invoice-btn">
						  <?php if($p_flag==1){?>
                              <a onclick="recipt(<?php echo $p_id; ?>)" class="btn btn-danger btn-lg"><i class="fa fa-check"></i> Save  </a>
						  <?php }else{?>
							  <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
							  <?php }?>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- invoice end-->
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
      <?php include("footer.php");?>
      <!--footer end-->
  </section>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script type="text/javascript">
function savpre(){ 
		var form = $("#add-pre");
		//alert("aaa");
	$.ajax({
            type: 'POST',
            url: 'savpre.php',
            data: form.serialize(),
            success: function(data){           
			$('#add-pre')[0].reset();
			$('#pview').html(data);
			}                                 	  
         });                
	}
</script>
	<script type="text/javascript">
function recipt(id){ 
		var x;
    if (confirm("Do You Want To Save This Prescription!") == true) {;
	$.ajax({
            type: 'POST',
            url: 'addpre.php',
            data: {id:id},
            success: function(data){   
			$('#container').load(document.URL +  '#container');
			}                                 	  
         });                
	}
}
</script>
  </body>
</html>
