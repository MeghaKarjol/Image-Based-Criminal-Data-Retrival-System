<?php
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $id=$_POST['id'];
 
  $sql="UPDATE problem SET  p_flag = '2' WHERE p_id =$id";
$ins=mysql_query($sql);
}