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

    <title>Studio Profit Book</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
	
	<!--Datepicker table-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
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
      <!--header start-->
<?php include("header.php");?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
				  <div style="margin-bottom:15px;" class="Search">
			  <form class="form-horizontal" >
									<div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" ><div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                          <input type="text" readonly="" name="sdate" id="sdate" placeholder="Start Date"  class="form-control">
                                              <span class="input-group-btn add-on">
                                              </span>
                                    </div>
									  </div>
  <div class="col-sm-3" style="display:inline; width:18%;padding-right: 1px;
  padding-left: 1px;  padding: 3px;
  background-color: #dbdbdb;
  background-color: rgba(219,219,219,.7);
  float: left;" ><div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date=""  class="input-append date dpYears">
                                          <input type="text" readonly="" name="edate" id="edate" placeholder="End date"  class="form-control">
                                              <span class="input-group-btn add-on">
                                              </span>
                                      </div></div>
									<a onclick="addfilter()" style="padding: 9px;" class="btn-success btn">Search</a>
									<a class="btn btn-info btn pull-right"  onclick="PrintDiv();" ><i class="fa fa-print"></i> Print</a>
							</form>
							
			  </div>
			  <div id="divToPrint" >
                      <section  class="panel">
                          <header class="panel-heading">
                            BALANCE SHEET 
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>VOUCHER CODE</th>
                                          <th>INVOICE CODE</th>
                                          <th class="numeric">CREDIT</th>
                                          <th class="numeric">DEBIT</th>
                                          <th class="numeric">DATE</th>
                                      </tr>
                                      </thead>
                                      <tbody id="view9" >
									  <?php 
                     					$result = mysql_query("SELECT * FROM audit  
										WHERE ad_id= $ad_id
										AND aud_flag= 1
										ORDER BY  aud_id DESC 
										");
										$cnt=mysql_num_rows($result);
										if($cnt != Null){
										while($row = mysql_fetch_array($result))
                     						{
                        							$aud_debit=$row['aud_debit'] ;
													$aud_credit=$row['aud_credit'] ;
													$i_code=$row['i_code'] ;
													$v_code=$row['v_code'];
													$tcre +=$aud_credit;
													$tdeb +=$aud_debit;
													$aud_date=date("d-m-Y",$row['aud_date']);
                      						?>
                                      <tr>
                                          <td data-title="VOUCHER CODE"><?php echo ($v_code!= null ? "VHR-".$v_code : '--') ?></td>
                                            <td data-title="INVOICE CODE"><?php echo ($i_code!= null ? $i_code : '--') ?></td>
                                          <td class="numeric" data-title="CREDIT"><?php echo ($aud_credit!= null ? $aud_credit : '0') ?></td>
                                          <td class="numeric" data-title="DEBIT"><?php echo ($aud_debit!= null ? $aud_debit : '0') ?></td>
                                          <td class="numeric" data-title="Date"><?php echo $aud_date; ?></td>
                                      </tr>
                                      <?php }
									 echo" <td style='border-right-color: #f9f9f9'></td>
									 <td>Total Balance</td>
									 <td class='numeric' data-title='TOTAL CREDIT'><b>$tcre</b></td>
									  <td class='numeric' data-title='TOTAL DEBIT'><b>$tdeb</b></td> ";
									  }else{
											echo"<tr><td style='border-right-color: #f9f9f9'>
                                No data found
                            </td> 
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							</tr>";	} ?>
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
					  </div>
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
      <!--footer end-->
  </section>

   <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>
<script src="js/advanced-form-components.js"></script>
    <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!--dynamic table initialization -->
    <script src="js/dynamic_table_init.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script type="text/javascript" >
function addfilter()
{
var sdate=$("#sdate").val();
var edate=$("#edate").val();
//alert(sdate+"xx"+edate);
	  $.ajax({
           type: 'POST',
            url: 'ajax_audit.php',
           data: {sdate:sdate, edate:edate},
            success: function(result) {
				//alert(result);
               $('#view9').html(result);
           }
       }); 
}
</script>
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
