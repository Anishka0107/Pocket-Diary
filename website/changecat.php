<?php
require "connection.php";
if(isset($_GET['s'])){
$phno=$_GET['s'];    
$sql="select * from contactsall where sid='$phno'";    
$result=mysql_query($sql);
if(mysql_num_rows($result)){
while($z=mysql_fetch_array($result)){
$sid=$z['sid'];
$name=$z['name'];
$ph=$z['phonenumber'];
$cat=$z['category'];
if($cat=="None" || $cat=="Co-Workers")
$cat="Family";
else if($cat=="Family")
$cat="Friends";
else if($cat=="Friends")
$cat="Co-Workers";
$m=mysql_query("update contactsall set category='$cat' where sid='$sid'");
if($m)
echo "$name : $ph now falls under category $cat";
}
}
}
?>
