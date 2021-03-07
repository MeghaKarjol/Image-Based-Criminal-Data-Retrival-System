<?php
//error_reporting(0);
include("dbinfo.php");
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['login'])
{
	if($_POST['username'] && $_POST['password'])
	{
// username and password sent from Form
$myusername=mysql_real_escape_string($_POST['username']); 
$mypassword=mysql_real_escape_string($_POST['password']); 
$password=md5($mypassword); // Encrypted Password
$sql=mysql_query("SELECT * FROM admin WHERE ad_uname='$myusername'");
$user=mysql_fetch_array($sql);
		if($user == '0')
		{
		$error="<div align='center' class='alert alert-block alert-danger fade in' >
                                  <button data-dismiss='alert' class='close close-sm' type='button'>
                                      <i class='fa fa-times'></i>
                                  </button>
                                 Sorry, doesn't recognize that Username.
                              </div>";
        }
		elseif($user['ad_pass'] != $password)
		{
		$error="<div align='center' class='alert alert-block alert-danger fade in' >
                                  <button data-dismiss='alert' class='close close-sm' type='button'>
                                      <i class='fa fa-times'></i>
                                  </button>
                                 Password is Invalid.
                              </div>";
		}
		else{
		$salt=hash("sha512", rand() . rand() . rand());
		setcookie("c_user", hash("sha512", $myusername), strtotime( '+30 days' ), '/');
		setcookie("c_salt", $salt,  strtotime( '+30 days' ), '/');
		$ad_id = $user['ad_id'];
		mysql_query("UPDATE admin SET  salt = '$salt' WHERE ad_id ='$ad_id'");
		header("location:dashboard");
		}
	}
}
include("keylock.php");
if($logged == true )
{
	header("location:dashboard");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="katareinfo">
    <meta name="keyword" content="katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Solapur Crime book</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
  <body class="login-body">
    <div class="container">
	<?php echo $error; ?>
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username" >
            <input type="password" class="form-control"  value="" id="password" name="password" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>
			<input type="submit"  class="btn btn-lg btn-login btn-block" id='login' name='login' value="Log In" >
            
        </div>
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
      </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
