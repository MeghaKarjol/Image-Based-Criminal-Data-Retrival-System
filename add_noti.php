<?php 
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// attributes sent from Form
 $head=$_POST['nhead']; 
 $message=$_POST['nmsg'];
  $to=$_POST['emp'];
$n_time=time();
$flag=1;

$sql="INSERT INTO `noti` (`n_head`, `n_desc`, `n_time`, `ad_id`, `to`, `n_flag`) VALUES ('$head', '$message', '$n_time', '$ad_id', '$to', '$flag')";
$result=mysql_query($sql);
if($result==true)
{
header("location: noti.php");
}
else
{
echo "Not successful";
}
}
?>