<?php 
require "connection.php";
if(isset($_GET['q']))
{
$emailid=$_GET['q'];
$src=mysql_query("select * from log where email='$emailid'");
if(mysql_num_rows($src))
{
echo "Email Address already registered"; 
}
else 
{
echo "";
}
}
?>