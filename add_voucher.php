<?php 
include("lock.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $vhead=$_POST['vhead'];
	$vdesc=$_POST['vdesc'];
	$vamount=$_POST['vamount'];
	$vby=$_POST['vby'];
	$time=time();
	
$qry=mysql_query("INSERT INTO voucher (v_name, v_desc, v_date, v_amount, o_id, ad_id, v_flag, vby) VALUES ('$vhead', '$vdesc', '$time', '$vamount', '$c_id', '$ad_id', '1', '$vby')");
$last_id= mysql_insert_id();
$sql=mysql_query("INSERT INTO audit (aud_debit, aud_flag, aud_date, v_code, ad_id) VALUES ('$vamount', '1', '$time', '$last_id', '$ad_id')");
if($qry==true && $sql==true)
{
header("Location:voucher.php");	
}
else
{
  echo "not sucessfully";  
}
}
?>