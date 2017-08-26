<!DOCTYPE html>
<html lang="US-en">
<head>
<title>Pocket Diary</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="CSS\styles.css"/>
<link rel="stylesheet" href="CSS\csshake.min.css"/>
<script>
function ckUSER(str){
if(str==""){
document.getElementById("registeredemail").innerHTML="";
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("registeredemail").innerHTML=xmlhttp.responseText;
}
};
xmlhttp.open("GET","get.php?q="+str,true);
xmlhttp.send();
}
}
</script>
</head>
<?php 
require "connection.php";
?>
<body>
<div class="loading-icon"></div>
<div id="main">
<div id="pocket">
<img id="bow" src="Images\bow.png">
<img id="line" src="Images\line1.png">
<a href="https://github.com/Anishka0107/Pocket-Diary">
<img id="b1" src="Images\buttons.png" onMouseOver="func3();" onMouseOut="funca();" >
</a>
<label id="l1">Get the code</label>
<a href="about.html">
<img id="b2" src="Images\buttons.png" onMouseOver="func4();" onMouseOut="funcb();">
</a>
<label id="l2">About</label>
<a href="contact.php">
<img id="b3" src="Images\buttons.png" onMouseOver="func5();" onMouseOut="funcc();">
</a>
<label id="l3">Contact</label>
</div>
<div id="hints">Hover over the buttons!!</div>
<div id="login">
<img src="Images\book.png" id="book"/>
<a href="" id="h"><h1 id="heading">Pocket Diary</h1></a>
<form method="POST" action="" >
<input type="email" name="emails" placeholder="Email Address" required/>
<input type="password" name="pwds" placeholder="Password" required/>
<a href="resetpass.php" id="fop">Reset Password?</a>
<input type="submit" name="okays" value="Log In"/>
</form>
<?php 
if(isset($_POST['okays'])){
session_start();
//$user_check=$_SESSION['login_user'];
$email=$_POST['emails'];
$password=$_POST['pwds'];
$password=md5($password);
$resu=mysql_query("select * from log where email='$email' and password='$password'");   
if(mysql_num_rows($resu)){
$row=mysql_fetch_array($resu);
$_SESSION['login_user']=$row['id'];
header("Location:profile.php");  
exit;
}
else{
?>
<div style="color:#FF7069; position:absolute; font-family:'py'; font-weight:bold; font-size:16px; top:300px; left:90px;">Invalid Email ID / Password</div>
<?php
}
}
?>
<p><br></p>
<a href="#registerscreen" id="reg">
<div id="box1">
<label id="bb">
Do not have an Account?
</label>
<label id="bb1">
Sign Up
</label>
</div>
</a>
</div>
</div>
<div id="msg"><span id="caption"></span><span id="cursor">|</span></div>
<div id="registerscreen">
<h2 id="heading"><div class="shake-slow">Pocket Diary</div></h2>
<img id="cancel" src="Images\close.gif">
<form method="POST">
<label for="n" id="l">Name</label>
<input type="name" id="n" name="name" required>
<label for="e" id="l">Email</label><div id="registeredemail"></div>
<input type="email" id="e" name="email" required onkeyup="ckUSER(this.value);">
<label for="p" id="l">Password</label>
<input type="password" id="p" maxlength="20" placeholder="5 - 20 characters" onKeyUp="validatepassword1(this.value);" name="pass" required>
<label for="cp" id="l">Confirm Password</label>
<input type="password" id="cp" name="cpass" required>
<br/>
<input type="submit" value="Sign Up" id="r1" name="submitme" onClick="validatepassword2();">
</form>
</div>
<?php
if(isset($_POST['submitme']))
{
$namez=$_POST['name'];
$emailz=$_POST['email'];
$passwordz=$_POST['pass'];
$passwordz=md5($passwordz); 
$res=mysql_query("insert into log(name,email,password) values('$namez','$emailz','$passwordz')");
if($res){
?>
<script>window.alert("Sign Up Successful!!");</script>
<?php    
}
else{
?>
<script>window.alert("Sign Up Unsuccessful...");</script>
<?php
}
}
?>
<div id="cover"></div>
<script src="JavaScript\jquery-1.11.3.js"></script>
<script src="JavaScript\jquery.lettering-0.6.1.min.js"></script>
<script type="text/javascript" src="JavaScript\indexfile.js"></script>
</body>
</html>
