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
		if($user != '0')
		{
			if(hash("sha512",$user['ad_uname']) == $cuser)
			{
			$logged = true ;
			}
        }
	}
	?>