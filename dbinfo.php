<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("police",$con) or die(mysql_error());
?>