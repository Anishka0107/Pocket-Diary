<?php
if(isset($_POST['sub'])){
error_reporting(0);
$from=$_POST['from'];
$address=$_POST['address'];
$feedback=$_POST['feedback']; 
$subject="Review mail from Pocket Diary";
$message="Name : ".$from." Email : ".$address." Feedback : ".$feedback;
$headers="From : Pocket_Diary";
mail("rimjhim0107@gmail.com",$subject,$message,$headers);
?>
<script>window.alert("Thank you for your valuable feedback!");</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="US-en">
<head>
<title>Contact Us</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css"  href="CSS\styles.css"/>
<link rel="stylesheet" href="CSS\font-awesome-4.6.3\css\font-awesome.min.css"/>
</head>
<body>
<div class="loading-icon"></div>
<a href="index.php" id="backgo"><i class="fa fa-arrow-left"></i></a>
<h1 id="heading1">Pocket Diary</h1>
<div id="conte"><h3 id="ab1">Write us a review...</h3>
<form id="reviewus" action="" method="POST">
<input type="name" placeholder="Name" id="pqpq" name="from"/>
<input type="email" placeholder="Email Address" id="pqpq" name="address"/>
<textarea id="tata" placeholder="Review" name="feedback"></textarea>
<input type="submit" id="pqpq" name="sub"/>
</form>
</div>
<div id="footer"> No Rights Reserved | Designed & Developed by Anishka</div>
</body>
<script src="JavaScript\jquery-1.11.3.js"></script>
<script type="text/javascript" src="JavaScript\indexfile.js"></script>
</html>
