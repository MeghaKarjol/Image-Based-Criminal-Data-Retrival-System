<?php 
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// attributes sent from Form
 $mname=$_POST['mname']; 
 $mdesc=$_POST['mdesc'];
$flag=1;

$sql="INSERT INTO medicine (med_name, med_desc, med_flag, ad_id) VALUES ('$mname', '$mdesc', '$flag', '$ad_id')";
$result=mysql_query($sql);
if($result==true)
{
header("location: medicine.php");
}
else
{
echo "Not successful";
}
}
?>