<?php
error_reporting(0);
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $fname=ucwords($_POST['fname']); 
 $email=strtolower($_POST['email']);
 $addr=$_POST['addr'];
 $aniv=$_POST['aniv'];
 $cont=$_POST['number'];
 $dob=strtotime($_POST['dob']);
 $aniv=strtotime($_POST['aniv']);
 $ad_id=$user['ad_id'];
 $uotp=md5($_POST['number']);
 $regidate=time();

$sql="INSERT INTO user (u_name, u_addr, u_cont, u_email, o_id, u_flag, u_dob, u_mad, ad_id, udate, u_otp) VALUES ('$fname', '$addr', '$cont', '$email', '1', '1', '$dob', '$aniv', '$ad_id', '$regidate', '$uotp')";
$ins=mysql_query($sql);
if($ins == true )
{
				file_get_contents('http://www.myvaluefirst.com/smpp/sendsms?username=kovidinfo&password=info1kovi&to='.$cont.'&from=GoFody&text=Dear%20'.$fname.',%20Welcome%20to%20GoFoody%20Customer%20Group.%20Yes,%20you%20have%20earned%2050%20points%20on%20registration.Congrats.%20Thanks%20GoFoody.');
			echo "Success";
			}
	
}
?>