<?php 
include("lock.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $ename=$_POST['ename'];
	$eaddr=$_POST['eaddr'];
	$eemail=$_POST['eemail'];
	$uname = implode('@', explode('@', $eemail, -1));
	$pass=$uname."@123";
	$password=md5($pass);
	$econt=$_POST['econt'];
	$admin=$user['ad_id'];
	$org_id=1;
	
$qry=mysql_query("INSERT INTO admin (ad_uname, ad_pass, ad_flag, org_id, ad_priority, parent, ad_fname, ad_email, ad_contact, ad_address) VALUES ('$uname', '$password', '1', '$org_id', '1', '$ad_id', '$ename', '$eemail', '$econt', '$eaddr')");
if($qry==true)
{
header("Location:employee.php");	
}
else
{
  echo "not sucessfully";  
}
}
?>