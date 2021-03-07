<?php include ("lock.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katareinfo">
    <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Katareinfo -  Admin </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
		<!--Datepicker table-->
		<link href="assets/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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
	 $("#cust-register").validate({
                rules:{
                 fname: "required",
				 number: {
                               required: true,
							   minlength:10,
                               number:true,
				remote:{
			url: 'validcont.php',
			type: "POST"
       			}
                           },
				email: {
                               required: true,
							   email:true
                         },			
					addr: "required"	   
                },
                messages: {
				fname: "Please Enter First Name",
				number:{
                        required:"Please enter Mobile Number.",
						minlength:"Mobile number should be 10 digits",
                        remote:"Number Id already registered."
                        	}, 
					email:{
                        required:"Please Enter Email",
						email:"Enter valid Email"
                        	}, 
						addr: "Please Enter Address"	
                },
                	submitHandler: function(form) {
		    	//alert("Thank You For Joining with us!!!");
                    	savemf();
                }
            });
        });
   
</script>
<script type="text/javascript">
function savemf(){ 
		var form = $("#cust-register");
		//alert("aaa");
	$.ajax({
            type: 'POST',
            url: 'savedata.php',
            data: form.serialize(),
            success: function(data){           
		if(data == "Success")
		{ 
			$('#cust-register')[0].reset();
			$('#sucess').text("Customer saved successfully");
			$('.toast-top-right').show();
			$('.toast-top-right').focus();
			$('.toast-top-right').fadeOut(5000);
			location.replace('dashboard.php'); 
		}
		else
		{ 
			$('#error').text("Please Fill All Mandatory Fields");
			$('.toast-top-center').show();
			$('.toast-top-center').focus();
			$('.toast-top-center').fadeOut(5000);
			$('#cust-register')[0].reset();
		}           	   
		}                                    	  
         });                
	}
</script>
	</head>
  <body class="login-body">
    <div class="container">
      <form class="form-signin" id="cust-register" action='javascript:;' name="cust-register" onsubmit="javascript:;" Method="POST">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" id="fname" name="fname"  placeholder="Full Name" value=""/>
            <input type="text" class="form-control" id="addr" name="addr" placeholder="Address" value=""/>
            <input type="text" class="form-control" maxlength="10" onKeyPress="return isNumberKey(event);" id="number" name="number" placeholder="Mobile" value=""/>
            <p> Enter your account details below</p>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value=""/>
            <label class="checkbox">
                I agreed to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
            <div class="registration">
                Already Registered.
                <a class="" href="customers">
                    Clients Details
                </a>
            </div>
        </div>
      </form>
    </div>
	  <div id="toast-container" style="display:none; " class="toast-top-right" aria-live="polite" role="alert"><div class="toast toast-success"><div class="toast-progress" style="width: 99.9218%;"></div><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Toastr Notification</div><div id="sucess" class="toast-message"> </div></div></div>
	  <div  id="toast-container"style="display:none; " class="toast-top-center" aria-live="polite" role="alert"><div class="toast toast-error"><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Error Notification</div><div id="error" class="toast-message"></div></div></div>
      
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
    <!--dynamic table initialization -->
    <script src="js/dynamic_table_init.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
  </body>
</html>
