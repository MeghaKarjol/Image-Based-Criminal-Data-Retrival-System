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
    <title>Katareinfo -</title>
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
  </head>
  <body>
  <section id="container" >
      <!--header start-->
     <?php include"header.php";?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
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
              <!--state overview end-->
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              No More Tables
                          </header>
						   <div style="width: 58%;padding: 15px;" id="dynamic-table_filter">Search: <input type="text" class="form-control" aria-controls="dynamic-table"></div>
                             
                          <div class="panel-body">
						  <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>Sr.No</th>
                                          <th>Police Station</th>
                                          <th class="numeric">Case No</th>
                                          <th class="numeric">Sections of the IPC</th>
                                          <th>Name Of Criminal</th>
                                          <th>Known as (Alias)</th>
                                          <th>Father Name</th>
                                          <th>Surname</th>
                                          <th class="numeric">Age</th>
										  <th>Cast</th>
                                          <th>Sub Cast</th>
										  <th class="numeric">Arrest Date & Time</th>
                                          <th class="numeric">Convection</th>
										  <th class="numeric">Adhar No</th>
                                          <th class="numeric">Pan No</th>
										  <th class="numeric">Election Id No</th>
                                          <th class="numeric">Driving Licence No</th>
										  <th class="numeric">Moblie No</th>
                                          <th class="numeric">Crime Type (Modes Of Oprating</th>
										  <th>Criminal Photo </th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td data-title="Code">AAC</td>
                                          <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                          <td class="numeric" data-title="Price">$1.38</td>
                                          <td class="numeric" data-title="Change">-0.01</td>
                                          <td class="numeric" data-title="Change %">-0.36%</td>
                                          <td class="numeric" data-title="Open">$1.39</td>
                                          <td class="numeric" data-title="High">$1.39</td>
                                          <td class="numeric" data-title="Low">$1.38</td>
                                          <td class="numeric" data-title="Volume">9,395</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AAD</td>
                                          <td data-title="Company">ARDENT LEISURE GROUP</td>
                                          <td class="numeric" data-title="Price">$1.15</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">1.32%</td>
                                          <td class="numeric" data-title="Open">$1.14</td>
                                          <td class="numeric" data-title="High">$1.15</td>
                                          <td class="numeric" data-title="Low">$1.13</td>
                                          <td class="numeric" data-title="Volume">56,431</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AAX</td>
                                          <td data-title="Company">AUSENCO LIMITED</td>
                                          <td class="numeric" data-title="Price">$4.00</td>
                                          <td class="numeric" data-title="Change">-0.04</td>
                                          <td class="numeric" data-title="Change %">-0.99%</td>
                                          <td class="numeric" data-title="Open">$4.01</td>
                                          <td class="numeric" data-title="High">$4.05</td>
                                          <td class="numeric" data-title="Low">$4.00</td>
                                          <td class="numeric" data-title="Volume">90,641</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABC</td>
                                          <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.00</td>
                                          <td class="numeric" data-title="Change">  +0.06</td>
                                          <td class="numeric" data-title="Change %">2.04%</td>
                                          <td class="numeric" data-title="Open">$2.98</td>
                                          <td class="numeric" data-title="High">$3.00</td>
                                          <td class="numeric" data-title="Low">$2.96</td>
                                          <td class="numeric" data-title="Volume">862,518</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABP</td>
                                          <td data-title="Company">ABACUS PROPERTY GROUP</td>
                                          <td class="numeric" data-title="Price">$1.91</td>
                                          <td class="numeric" data-title="Change">0.00</td>
                                          <td class="numeric" data-title="Change %">0.00%</td>
                                          <td class="numeric" data-title="Open">$1.92</td>
                                          <td class="numeric" data-title="High">$1.93</td>
                                          <td class="numeric" data-title="Low">$1.90</td>
                                          <td class="numeric" data-title="Volume">595,701</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ABY</td>
                                          <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                                          <td class="numeric" data-title="Price">$0.77</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">2.00%</td>
                                          <td class="numeric" data-title="Open">$0.76</td>
                                          <td class="numeric" data-title="High">$0.77</td>
                                          <td class="numeric" data-title="Low">$0.76</td>
                                          <td class="numeric" data-title="Volume">54,567</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ACR</td>
                                          <td data-title="Company">ACRUX LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.71</td>
                                          <td class="numeric" data-title="Change">  +0.01</td>
                                          <td class="numeric" data-title="Change %">0.14%</td>
                                          <td class="numeric" data-title="Open">$3.70</td>
                                          <td class="numeric" data-title="High">$3.72</td>
                                          <td class="numeric" data-title="Low">$3.68</td>
                                          <td class="numeric" data-title="Volume">191,373</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">ADU</td>
                                          <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                                          <td class="numeric" data-title="Price">$0.72</td>
                                          <td class="numeric" data-title="Change">0.00</td>
                                          <td class="numeric" data-title="Change %">0.00%</td>
                                          <td class="numeric" data-title="Open">$0.73</td>
                                          <td class="numeric" data-title="High">$0.74</td>
                                          <td class="numeric" data-title="Low">$0.72</td>
                                          <td class="numeric" data-title="Volume">8,602,291</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGG</td>
                                          <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                                          <td class="numeric" data-title="Price">$7.81</td>
                                          <td class="numeric" data-title="Change">-0.22</td>
                                          <td class="numeric" data-title="Change %">-2.74%</td>
                                          <td class="numeric" data-title="Open">$7.82</td>
                                          <td class="numeric" data-title="High">$7.82</td>
                                          <td class="numeric" data-title="Low">$7.81</td>
                                          <td class="numeric" data-title="Volume">148</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGK</td>
                                          <td data-title="Company">AGL ENERGY LIMITED</td>
                                          <td class="numeric" data-title="Price">$13.82</td>
                                          <td class="numeric" data-title="Change">  +0.02</td>
                                          <td class="numeric" data-title="Change %">0.14%</td>
                                          <td class="numeric" data-title="Open">$13.83</td>
                                          <td class="numeric" data-title="High">$13.83</td>
                                          <td class="numeric" data-title="Low">$13.67</td>
                                          <td class="numeric" data-title="Volume">846,403</td>
                                      </tr>
                                      <tr>
                                          <td data-title="Code">AGO</td>
                                          <td data-title="Company">ATLAS IRON LIMITED</td>
                                          <td class="numeric" data-title="Price">$3.17</td>
                                          <td class="numeric" data-title="Change">-0.02</td>
                                          <td class="numeric" data-title="Change %">-0.47%</td>
                                          <td class="numeric" data-title="Open">$3.11</td>
                                          <td class="numeric" data-title="High">$3.22</td>
                                          <td class="numeric" data-title="Low">$3.10</td>
                                          <td class="numeric" data-title="Volume">5,416,303</td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
                   <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  Students Details Table
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="panel-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Roll No</th>
                  <th>Student Name</th>
                  <th>Email ID</th>
                  <th class="hidden-phone">Contact</th>
                  <th class="hidden-phone">Department</th>
              </tr>
              </thead>
              <tbody>
			  <?php
			  $st_sql=mysql_query("select * from studentexcel ");
			while ($row=mysql_fetch_array($st_sql))
				{
				$st_roll=$row['st_rollno']; 
				$st_name=$row['st_name']; 
				$st_email=$row['st_email']; 
				$st_cont=$row['st_cont']; 
				$br_id=$row['br_id']; 
								?>
				

              <tr class="gradeX">
                  <td><?php echo $st_roll ;?></td>
                  <td><?php echo $st_name ;?></td>
                  <td><?php echo $st_email ;?></td>
                  <td class="center hidden-phone"><?php echo $st_cont ;?></td>
                  <td class="center hidden-phone"><?php echo $br_id ;?></td>
              </tr>
			  <?php } ?>
              </tfoot>
              </table>
              </div>
              </div>
              </section>
              </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->

      <!-- Right Slidebar end -->
      <!--footer start-->
     	   <?php include"footer.php";?>
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
    <script src="js/count.js"></script>
  <script>
  $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  </body>
</html>
