function validatepassword1(str){
var len=str.length;
var password=document.getElementById("p");
if(len<=4 || len>20)
password.setCustomValidity("Password should be 5-20 characters long");
else
password.setCustomValidity("");
}
function validatepassword2(){
var password=document.getElementById("p");
var confirmpassword=document.getElementById("cp");
if(password.value!=confirmpassword.value)
confirmpassword.setCustomValidity("Passwords do not match");
else
confirmpassword.setCustomValidity("");
password.onchange=validatepassword2;
confirmpassword.onkeyup=validatepassword2;
}
function func3(){
document.getElementById('l1').style.visibility="visible";
document.getElementById('l1').style.color="#FF4047";
}
function func4(){
document.getElementById('l2').style.visibility="visible";
document.getElementById('l2').style.color="#FF4047";
}
function func5(){
document.getElementById('l3').style.visibility="visible";
document.getElementById('l3').style.color="#FF4047";
}
function funca(){
document.getElementById('l1').style.visibility="hidden";
}
function funcb(){
document.getElementById('l2').style.visibility="hidden";
}
function funcc(){
document.getElementById('l3').style.visibility="hidden";
}
function cursorBlink() {
$('#cursor').animate({
opacity:0},'fast','swing').animate({
opacity:1},'fast','swing');
}
var cL=0;
var c='';
$(document).ready(function(){
$(window).load(function(){
$(".loading-icon").delay(2500).fadeOut();
});
$('#heading').lettering();
cap=$('#caption');
$("#bb1").hide();
function tt(){
setInterval('cursorBlink()',600);
likh();
window.setTimeout(bksp,16000);
window.setTimeout(likh2,8000);
window.setTimeout(bksp,16000);
}
$("#box1").mouseover(function(){
$("#bb").fadeOut(500,function(){
$("#bb1").fadeIn();
});
});
$("#reg").click(function(){
$("#cover").slideDown(500,function(){
$("#registerscreen").fadeIn(100);
$("#msg").css("display","block");
tt();
});
});
$("#cancel").click(function(){
$("#msg").css("display","none");
$("#registerscreen").fadeOut(100,function(){
$("#cover").slideUp(500);
});
});
$(function(){
$("#hints").delay(5000).fadeIn(800);
$("#hints").delay(8000).fadeOut(800);
});
});
function likh(){
c="Sign up to always be on the go.";
type();
}
function likh2(){
c="Manage your contacts efficiently.";
type();
}
function type(){
cap.html(c.substr(0,cL++));
if(cL<c.length+1){
setTimeout('type()',120);
} 
else{
cL=0;
c='';
}
}
function bksp(){
document.getElementById('msg').innerHTML="";
}
