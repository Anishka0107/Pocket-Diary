<?php
require "connection.php";
?>
<html>    
<html lang="US-en">
<head>
<title>Pocket Diary</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="CSS\styles.css"/>
<body>
<a href="index.php" id="ufo"><h1 id="heading">Pocket Diary</h1></a>
<form action="" method="POST" id="rpf">
<input type="email" placeholder="Email Address" name="em"/>
<input type="password" placeholder="Old Password" name="pa"/>
<input type="password" placeholder="New Password" name="copa" maxlength="20"/>
<input type="submit" value="Submit" name="gr"/>
<?php
if(isset($_POST['gr'])){
$em=$_POST['em'];    
$pa=md5($_POST['pa']);
$copa=md5($_POST['copa']);
$ghh=mysql_query("select * from log where email='$em' and password='$pa'");
if(mysql_num_rows($ghh)){
mysql_query("update log set password='$copa' where email='$em' and password='$pa'");    
header('Location:index.php');
}
else{
?>
<div style="color:#FF7069; font-family:'py'; font-weight:bold; font-size:16px; text-align:center">Invalid Email ID / Password</div>
<?php
}
}
?>
</form>
</body>
</html>    