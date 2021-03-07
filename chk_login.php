<?php
//error_reporting(0)
session_start();
include("dbinfo.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if($_POST['username'] && $_POST['password'])
	{
// username and password sent from Form
$myusername=mysql_real_escape_string($_POST['username']); 
$mypassword=mysql_real_escape_string($_POST['password']); 
$password=md5($mypassword); // Encrypted Password
$sql=mysql_query("SELECT * FROM admin WHERE ad_uname='$myusername' AND parent='0'");
$user=mysql_fetch_array($sql);
		if($user == '0')
		{
		echo"<div align='center' class='alert alert-block alert-danger fade in' >
                                  <button data-dismiss='alert' class='close close-sm' type='button'>
                                      <i class='fa fa-times'></i>
                                  </button>
                                 Sorry, doesn't recognize that Username.
                              </div>";
        }
		elseif($user['ad_pass'] != $password)
		{
		echo"<div align='center' class='alert alert-block alert-danger fade in' >
                                  <button data-dismiss='alert' class='close close-sm' type='button'>
                                      <i class='fa fa-times'></i>
                                  </button>
                                 Password is Invalid.
                              </div>";
		}
		else{
		$ad_id = $user['ad_id'];
		$_SESSION['c_user']=$ad_id;
		echo"Success";
		}
	}
}
	
?>