<?php
require "connection.php";
if(isset($_GET['r'])){
$sidz=$_GET['r'];    
mysql_query("delete from contactsall where sid='$sidz'");   
}
?>