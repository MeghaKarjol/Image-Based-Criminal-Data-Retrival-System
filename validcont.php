<?php 
include "lock.php";
$cont = $_POST['number'];
$qry=mysql_query("select u_cont from user where ad_id=$ad_id AND u_cont='$cont'");
$count=mysql_num_rows($qry);
if($count>=1)
{
	echo "false";
}
else
{
	echo "true";
}       
?>
