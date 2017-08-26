<html lang="US-en">
<head>
<title>Pocket Diary</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="CSS\profile.css"/>
<link rel="stylesheet" href="JavaScript\scroller\jquery.mCustomScrollbar.min.css"/>
<link rel="stylesheet" href="CSS\font-awesome-4.6.3\css\font-awesome.min.css"/>
</head>
<body>
<?php
require "connection.php";
session_start();
$id=$_SESSION['login_user'];
if($id){
$x=mysql_query("select * from log where id!='$id'");
?>
<div class="loading-icon"></div>
<div id="header">
<div id="heading"><i class="fa fa-book" id="booklogo"></i>Pocket Diary</div>
<div id="op">
<ul>
<li id="li1"><i class="fa fa-home" id="button1"></i><a href="profile.php">Home</a></li>
<li id="li3"><i class="fa fa-sign-out" id="button3"></i><a href="logout.php">Log Out</a></li>
</ul>
</div>
</div>
<input type="search" id="search1" onkeyup="ckUSER5(this.value);" onblur="location.reload(true);" placeholder="Explore to find other Pocket Diary users..."/>
<?php
if(mysql_num_rows($x)){
?>
<div class="mCustomScrollbar" data-mcs-theme="rounded-dots-dark" id="nextlook">
<table id="tab2">
<?php
while($y=mysql_fetch_array($x)){
?>
<tr><td id="imgn"><img src="<?php echo $y['image'] ?>" id="resi"/></td><td id="whon">&nbsp;&nbsp;<?php echo $y['name'] ?></td><td id="mobnumn"><?php echo $y['phonenumber'] ?></td><td id="emailn"><?php echo $y['email'] ?></td><td id="cityn"><?php echo $y['city'] ?></td></tr>
<?php
}
?>
</table>
</div>
<?php
}
}
else{
echo "<div style='position:absolute; top:140px; left:60px; color:#666666; font-family:py; font-weight:bold; font-size:40px;'>You need to re-login to continue...</div>";
echo "<div style='position:absolute; top:50; left:40px; font-family:py; font-weight:bold; font-size:60px;'><a href='index.php' style='color:#FF7069;'>Back Home</a></div>";
}
?>
<script src="JavaScript\jquery-1.11.3.js"></script>
<script src="JavaScript\scroller\jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="JavaScript\profile.js"></script>
</body>
</html>