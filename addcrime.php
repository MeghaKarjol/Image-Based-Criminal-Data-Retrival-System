<?php  include "lock.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>SOLAPUR POLICE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
 </head>
 <style>
 .error{
 color: red;
 }
 </style>
  <body>
  <section id="container" class="">
      <!--header start-->
      <?php include"header.php"; ?>
            
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Criminal Information regastation form
                          </header>
                          <div class="panel-body">
                              <form action='savecrime.php' method='POST' id="fform" enctype="multipart/form-data">
							  <div class="col-lg-6">
                                  <div class="form-group">
                                      <label>Name</label>
                                      <input type="text" name="name" class="form-control" id="name" value="" placeholder="Enter Name of Criminal ">
                                  </div>
								   <div class="form-group">
                                      <label>Nick Name</label>
                                      <input type="text" name="n_name" class="form-control" id="n_name" value="" placeholder="Enter Nick Name ">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Father`s Name </label>
                                      <input type="text" name="f_name" value="" class="form-control" id="f_name" placeholder="Father`s Name">
                                  </div>
								   <div class="form-group">
                                      <label>Surname</label>
                                      <input type="text" name="s_name" class="form-control" id="" value="" placeholder="Enter Surname ">
                                  </div>
								   <div class="form-group">
                                      <label>Age</label>
                                      <input type="text" name="age" class="form-control" id="age" value="" placeholder="Enter Age ">
                                  </div>
								  <div class="form-group">
                                      <label>Contact</label>
                                      <input type="text" name="contact" class="form-control" id="contact" value="" placeholder="Enter Contact Details  ">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Cast </label>
                                      <input type="text" name="cast" value="" class="form-control" id="cast" placeholder=" Enter About Cast">
                                  </div> <div class="form-group">
                                      <label>Sub Cast</label>
                                      <input type="text" name="s_cast" class="form-control" id="s_cast" value="" placeholder="Enter About Sub Cast ">
                                  </div>
								   <div class="form-group">
                                      <label for="exampleInputPassword1">Adhar Card </label>
                                      <input type="text" name="adhar" value="" class="form-control" id="adhar" placeholder="Enter Adhar Card No">
                                  </div>
								   <div class="form-group">
                                      <label>Pan Card</label>
                                      <input type="text" name="pan" class="form-control" id="pan" value="" placeholder="Enter Pan Card No ">
                                  </div>
								  <div class="form-group">
                                      <label>Election Id</label>
                                      <input type="text" name="ele" class="form-control" id="ele" value="" placeholder="Enter Election Card No ">
                                  </div>
								  							  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Driving License  </label>
                                      <input type="text" name="dlc" value="" class="form-control" id="dlc" placeholder="Enter Driving License No">
                                  </div>
								  </div>
								  <div class="col-lg-6">
                                <div class="form-group">
                                      <label>Name of Police Station</label>
                                      <input type="text" name="pstation" class="form-control" id="pstation" value="" placeholder="Enter Name of Police Station ">
                                  </div>
                                 <div class="form-group">
                                      <label>Case No</label>
                                      <input type="text" name="case" class="form-control" id="case" value="" placeholder="Enter Case No ">
                                  </div>
								   <div class="form-group">
                                      <label>Sections of the IPC</label>
                                      <input type="text" name="sections" class="form-control" id="sections" value="" placeholder="Enter Sections of the IPC ">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Convection </label>
                                      <input type="text" name="con" value="" class="form-control" id="con" placeholder="Some thing more information about Convection">
                                  </div>
								   <div class="form-group">
                                      <label>Type Of Crime</label>
                                      <input type="text" name="crimet" class="form-control" id="crimet" value="" placeholder="Enter Type Of Crime ">
                                  </div>
								   <div class="form-group">
                                      <label>Arrested Date</label>
                                      <input type="date" name="adate" class="form-control" id="adate" value="" placeholder="Select Date ">
                                  </div>
								 
								 
                                  <div class="form-group">
                                      <label for="exampleInputFile">Criminal Photo</label>
                                      <input type="file" id="img_file" name="img_file" value="">
                                     
                                  </div>
								  </div>                           
                                  <button type="submit" class="btn btn-info">Submit</button>
                                 </form>

                          </div>
                      </section>
                  </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->
     
      <!-- Right Slidebar end -->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

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
											name: "required",
											n_name: "required",
											f_name: "required",
											s_name: "required",
											age: "required",
											contact: "required",
											cast: "required",
											s_cast: "required",
											adhar: "required",
											pan: "required",
											ele: "required",
											dlc: "required",
											pstation: "required",
											case: "required",
											sections: "required",
											con: "required",
											crimet: "required",
											adate: "required"
										},
							 messages: {
											name: "required",
											n_name: "required",
											f_name: "required",
											s_name: "required",
											age: "required",
											contact: "required",
											cast: "required",
											s_cast: "required",
											adhar: "required",
											pan: "required",
											ele: "required",
											dlc: "required",
											pstation: "required",
											case: "required",
											sections: "required",
											con: "required",
											crimet: "required",
											adate: "required"
									},
							submitHandler: function(form) {
							alert("Notification Added Sucessfully.");
								form.submit();
							}
						});
					});
			   
			</script>
</html>
