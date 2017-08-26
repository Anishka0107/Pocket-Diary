<?php
require "connection.php";
if(isset($_GET['s'])){
$xid=$_GET['m'];    
$txt=$_GET['s'];    
$sql="select * from contactsall where pid='$xid'and (name like '%$txt%' or phonenumber like '$txt%') order by name,phonenumber,email limit 14";    
$result=mysql_query($sql);
if(mysql_num_rows($result)){
?>
<table id="tab1" class="mCustomScrollbar" data-mcs-theme="dark">
<?php
while($z=mysql_fetch_array($result)){
$sid=$z['sid'];
?>
<tr><td id="who"><?php echo $z['name'] ?></td><td id="mobnum"><?php echo $z['phonenumber'] ?></td><td id="mailto"><?php echo $z['email'] ?></td><td><?php echo $z['category']?></td></tr>
<?php
}
?>
</table>
<?php   
}
}
?>
