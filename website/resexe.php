<?php
require "connection.php";
if(isset($_GET['s'])){
$txt=$_GET['s'];    
$sql="select * from log where name like '%$txt%' or phonenumber like '$txt%' order by name,email,phonenumber,city";    
$result=mysql_query($sql);
if(mysql_num_rows($result)){
?>
<table id="tab2">
<?php
while($z=mysql_fetch_array($result)){
?>
<tr><td id="imgn"><img src="<?php echo $z['image'] ?>" id="resi"/></td><td id="whon">&nbsp;&nbsp;<?php echo $z['name'] ?></td><td id="mobnumn"><?php echo $z['phonenumber'] ?></td><td id="emailn"><?php echo $z['email'] ?></td><td id="cityn"><?php echo $z['city'] ?></td></tr>
<?php
}
?>
</table>
<?php   
}
}
?>