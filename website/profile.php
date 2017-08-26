<html lang="US-en">
<head>
<title>Pocket Diary</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="CSS\profile.css"/>
<link rel="stylesheet" href="JavaScript\scroller\jquery.mCustomScrollbar.min.css"/>
<link rel="stylesheet" type="text/css" href="JavaScript\jqueryui\jquery-ui.min.css"/>
<link rel="stylesheet" href="CSS\font-awesome-4.6.3\css\font-awesome.min.css"/>
<link rel="stylesheet" href="CSS\csshake.min.css"/>
<link rel="stylesheet" href="JavaScript\ripple\css\jquery.rippleria.min.css"/>
</head>
<?php
require "connection.php";
session_start();
$id=$_SESSION['login_user'];
if($id){
$x=mysql_query("select * from log where id='$id'");
$y=mysql_fetch_array($x);
?>
<body>
<div class="loading-icon"></div>
<div id="header">
<div id="heading"><i class="fa fa-book" id="booklogo"></i>Pocket Diary</div>
<div id="op">
<ul>
<li id="li1"><i class="fa fa-home" id="button1"></i><a href="profile.php">Home</a></li>
<li id="li2"><i class="fa fa-search" id="button2"></i><a href="explore.php">Explore</a></li>
<li id="li3"><i class="fa fa-sign-out" id="button3"></i><a href="logout.php">Log Out</a></li>
</ul>
</div>
</div>
<div id="main">
<div id="prof">
<div id="profilepic" style="display:flex;">
<img src="<?php echo $y['image'] ?>" id="picture" style="border-radius:10px; max-width:100%; max-height:100%; margin:auto;">
</div>
<p class="d"><i class="fa fa-user" id="us"></i><?php echo $y['name'] ?></p>
<p class="d"><i class="fa fa-phone" id="us1"></i><?php echo $y['phonenumber'] ?></p>
<p class="d"><i class="fa fa-envelope" id="us2"></i><?php echo $y['email'] ?></p>
<p class="d"><i class="fa fa-map-marker" id="us3"></i><?php echo $y['city'] ?></p>
<div id="see"><a id="lookat" href="#viewprofile" onClick="func1();"><i class="fa fa-eye" id="eye"></i><span class="tooltip">View Profile</span></a></div>
<div id="chh"><a id="e1" href="#editprofile"><i class="fa fa-pencil" id="pencils"></i><span class="tooltip">Edit Profile</span></a></div>
</div>
<div id="workbox">
<div id="categories">
<button class="gh" type="button">Choose</button>
<div id="chcategory">
<a id="chop1" onClick="ckUSER3(this.innerHTML);">Family</a>
<a id="chop2" onClick="ckUSER3(this.innerHTML);">Friends</a>
<a id="chop3" onClick="ckUSER3(this.innerHTML);">Co-Workers</a>
<a id="chop3" onClick="javascript:location.reload(true);">All</a>
</div>
</div>
<input type="hidden" value="<?php echo $id; ?>" id="abcde">
<input type="search" id="search" placeholder="Search..." onkeyup="ckUSER2(this.value);" onblur="javascript:location.reload(true);"/>
<a href="#newcontact" id="newss"><div id="addnewnum"><i class="fa fa-plus" id="pluss"></i><span class="tooltip">Add Contact</span></div></a>
</div>
<?php
$ans=mysql_query("select * from contactsall where pid='$id' order by name,phonenumber,email");
if(mysql_num_rows($ans)){
?>
<div class="mCustomScrollbar" data-mcs-theme="rounded-dots-dark" id="innerdiv">
<table id="tab1" class="mCustomScrollbar" data-mcs-theme="dark">
<?php
while($z=mysql_fetch_array($ans)){
$sid=$z['sid'];
?>
<tr><td id="who"><?php echo $z['name'] ?></td><td id="mobnum"><?php echo $z['phonenumber']?></td><td id="mailto"><?php echo $z['email'] ?></td><td><i class="fa fa-pencil" id="penc"></i><input type="submit" value="<?php echo $sid; ?>" style="opacity:0; position:relative; top:-10px; left:0; width:25px; height:25px;" id="<?php echo $sid; ?>"></td><td style="display:none;"><?php echo $sid ?></td><td id="catgy" onclick="ckUSER4(this.previousElementSibling.innerHTML);"><i class="fa fa-tags" id="catg"></i></td><td id="chkar1"><a id="ckd" onClick="x=funcz(); if(x==true){ckUSER1(<?php echo $sid;?>); location.reload(true);}"><i class="fa fa-trash" id="penc1"></i></a></td></tr>
<?php
}
?>
</table></div>
<?php 
}
?>
</div>
<div id="icover">
<div id="editprofile">
<form action="" method="POST">
<div class="group">      
<input type="name" id="in1" name="upn" value="<?php echo $y['name'] ?>" required onClick="funca();">
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb1">Name</label>
</div>
<div class="group">      
<input type="tel" id="in2" name="upt" value="<?php echo $y['phonenumber'] ?>" required onClick="funcb();">
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb2">Mobile Number</label>
</div>
<div class="group">      
<input type="text" id="in4" name="upc" value="<?php echo $y['city'] ?>" required onClick="funcd();">
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb4">City</label>
</div>
<input type="submit" value="Update" id="okay" name="uppro"/>
<input type="button" value="Cancel" id="closeme"/>
</form>
</div>
</div>
<?php
if(isset($_POST['uppro'])){
$upn=$_POST['upn'];
$upt=$_POST['upt'];
$upc=$_POST['upc'];
mysql_query("update log set name='$upn',phonenumber='$upt',city='$upc' where id='$id'");    
header('Location:profile.php');
}
?>
<div id="i1cover">
<div id="newcontact">
<form action="" method="POST">
<div class="group">      
<input type="name" id="in1" name="upcontn" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb1">Name</label>
</div>
<div class="group">      
<input type="tel" id="in2" name="upcontt" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb2">Mobile Number</label>
</div>
<div class="group">      
<input type="text" id="in4" name="upconte" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb4">Email Address</label>
</div>
<input type="submit" value="Add" id="okay1" name="okaya"/>
<input type="button" value="Cancel" id="closeme1"/>
</form>
</div>
</div>
<?php
if(isset($_POST['okaya'])){
$upcn=$_POST['upcontn'];
$upct=$_POST['upcontt'];
$upce=$_POST['upconte'];
mysql_query("insert into contactsall(name,email,phonenumber,pid) values('$upcn','$upce','$upct','$id')");
header("Location:profile.php");
}
?>
<div id="i2cover">
<div id="editcontactinfo">
<form method="POST" action="">
<input id="hiddeninp" name="crazy" hidden/>
<div class="group">      
<input type="name" id="inp1" name="sizn" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb1">Name</label>
</div>
<div class="group">      
<input type="tel" id="inp2" name="sizt" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb2">Mobile Number</label>
</div>
<div class="group">      
<input type="text" id="inp4" name="sizee" required>
<span class="highlight"></span>
<span class="bar"></span>
<label id="lb4">Email Address</label>
</div>
<input type="submit" value="Update" id="okay2" name="okayb"/>
<input type="button" value="Cancel" id="closeme2"/>
</form>
</div>
</div>
<?php 
if(isset($_POST['okayb'])){
$sidji=$_POST["crazy"];
$sizn=$_POST["sizn"];
$sizt=$_POST["sizt"];
$sizee=$_POST["sizee"];
mysql_query("update contactsall set name='$sizn',phonenumber='$sizt',email='$sizee' where sid='$sidji'");
header('Location:profile.php');
}
?>
<div id="outer">
<div id="viewprofile" data-rippleria data-rippleria-color="#FF7069">
<div id="pop1" style="display:flex;">
<?php     
if(isset($_GET['removepicture'])){
mysql_query("update log set image='ProfilePics/boy5.png' where id='$id'");  
header('Location:profile.php');
}
?>    
<a href="profile.php?removepicture=true">
<div id="removephoto">
Remove Picture</div></a>
<img src="<?php echo $y['image']; ?>" id="pop2" style="max-width:100%; max-height:100%; margin:auto;">
<form method="POST" action="" enctype="multipart/form-data">
<label for="file-input" id="cc">
<div id="changeprofilepicture">Change Picture</div>
</label>
<input name="propic" id="file-input" type="file" onchange="javascript:this.form.submit();" hidden/>
<input type="hidden" name="ffff"/>
</form>
</div>
<p class="dp1"><i class="fa fa-user" id="x1"></i><label id="find1"><?php echo $y['name'] ?></label></p>
<p class="dp2"><i class="fa fa-phone" id="x2"></i><label id="find2"><?php echo $y['phonenumber'] ?></label></p>
<p class="dp3"><i class="fa fa-envelope" id="x3"></i><label id="find3"><?php echo $y['email'] ?></label></p>
<p class="dp4"><i class="fa fa-map-marker" id="x4"></i><label id="find4"><?php echo $y['city'] ?></label></p>
</div>
<?php
if(isset($_POST['ffff'])){
$img="ProfilePics/".$id.".jpg";    
move_uploaded_file($_FILES['propic']['tmp_name'],$img);
mysql_query("update log set image='$img' where id='$id'");
header("Location:profile.php");
}
?>
</div>
<?php
}
else{
echo "<div style='position:absolute; top:140px; left:60px; color:#666666; font-family:py; font-weight:bold; font-size:40px;'>You need to re-login to continue...</div>";
echo "<div style='position:absolute; top:50; left:40px; font-family:py; font-weight:bold; font-size:60px;'><a href='index.php' style='color:#FF7069;'>Back Home</a></div>";
}
?>
<script src="JavaScript\jquery-1.11.3.js"></script>
<script src="JavaScript\scroller\jquery.mCustomScrollbar.concat.min.js"></script>
<script src="JavaScript\jqueryui\jquery-ui.min.js"></script>
<script src="JavaScript\ripple\js\jquery.rippleria.min.js"></script>
<script src="JavaScript\jquery.jrumble.1.3\jquery.jrumble.1.3.min.js"></script>
<script type="text/javascript" src="JavaScript\profile.js"></script>
</body>
</html>