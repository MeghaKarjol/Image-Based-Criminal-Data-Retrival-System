<?php
error_reporting(0);
include("dbinfo.php");
date_default_timezone_set('Asia/Kolkata');
$date= date('d-m-Y H:i:s');
	$logged= false ;
	if(isset($_COOKIE["c_user"])  && isset($_COOKIE["c_salt"]))
	{
        $cuser=mysql_real_escape_string($_COOKIE["c_user"]); 
	$csalt=mysql_real_escape_string($_COOKIE["c_salt"]);
	$sql=mysql_query("SELECT * FROM admin WHERE salt='$csalt'");
	$user=mysql_fetch_array($sql);
	$ad_id=$user['ad_id'];
	$ad_email=$user['ad_email'];
	$ad_fname=$user['ad_fname'];
	$ad_addr=$user['ad_addr'];
	$c_id=$user['c_id'];
	$login_name=$user['ad_uname'];
	$login_session=$ad_id;
	$ad_cod=$user['ad_cod'];
		if($user != '0')
		{
			if(hash("sha512",$user['ad_uname']) == $cuser)
			{
			$logged = true ;
			}
        }
	}
		if($logged != true )
{
	header("location:index");
}
	?>