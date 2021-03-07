<?php
include("dbinfo.php");
if($_COOKIE["c_user"]  && $_COOKIE["c_salt"])
	{
	$cuser=mysql_real_escape_string($_COOKIE["c_user"]); 
	$csalt=mysql_real_escape_string($_COOKIE["c_salt"]);
	
		setcookie("c_user", hash("sha512", $cuser), time() - 24 * 60 * 60, "/");
		setcookie("c_salt", $$csalt,  time() - 24 * 60 * 60, "/");

header('Location: index');
	}
?>