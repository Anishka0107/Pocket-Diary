function func1(){
document.getElementById("outer").style.display="block";
document.getElementById("viewprofile").style.display="block";
$('#viewprofile').jrumble({x:0,y:0,rotation:5,speed:40});
$('#viewprofile').trigger('startRumble');
setTimeout(function(){$('#viewprofile').trigger('stopRumble');},556);
}
function funca(){
document.getElementById("in1").value=document.getElementById("find1").innerHTML;
}
function funcb(){
document.getElementById("in2").value=document.getElementById("find2").innerHTML;
}
function funcd(){
document.getElementById("in4").value=document.getElementById("find4").innerHTML;
}
function funcz(){
return confirm("Are you sure you want to delete this contact?");	
}
function ckUSER1(str){
if(str==""){
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
}
};
xmlhttp.open("GET","delete.php?r="+str,true);
xmlhttp.send();
}
}
function ckUSER2(str){
var m=document.getElementById("abcde").value;    
if(str==""){
document.getElementById("innerdiv").innerHTML="";
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("innerdiv").innerHTML=xmlhttp.responseText;    
}
};
xmlhttp.open("GET","search.php?s="+str+"&m="+m,true);
xmlhttp.send();
}
}
function ckUSER3(str){
var h=document.getElementById("abcde").value;
if(str==""){
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("innerdiv").innerHTML=xmlhttp.responseText;    
}
};
xmlhttp.open("GET","searchact.php?s="+str+"&w="+h,true);
xmlhttp.send();  
}
}
function ckUSER4(str){
if(str==""){
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
alert(xmlhttp.responseText);    
}
};
xmlhttp.open("GET","changecat.php?s="+str,true);
xmlhttp.send();  
}
}
function ckUSER5(str){
if(str==""){
document.getElementById("nextlook").innerHTML="";
return;
} 
else{ 
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
} 
else {
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("nextlook").innerHTML=xmlhttp.responseText;    
}
};
xmlhttp.open("GET","resexe.php?s="+str,true);
xmlhttp.send();
}
}    
$(document).ready(function(){
$(window).load(function(){
$(".loading-icon").delay(500).fadeOut();
});
$("#pop1").mouseenter(function(){
$("#changeprofilepicture").show('slide',{direction:'down'},'easeInCubic');
$("#removephoto").show('slide',{direction:'up'},'easeInCubic');
});
$("#pop1").mouseleave(function(){
$("#changeprofilepicture").hide('slide',{direction:'down'},'easeInCubic');
$("#removephoto").hide('slide',{direction:'up'},'easeInCubic');
});
$(".gh").mouseenter(function(){
$("#chcategory").slideDown(500);    
});
$("#categories").mouseleave(function(){
$("#chcategory").slideUp(500);    
});
$("#chop1").click(function(){
$("#chcategory").slideUp(250,function(){
$(".gh").text($("#chop1").text());    
});    
});
$("#chop2").click(function(){
$("#chcategory").slideUp(250,function(){
$(".gh").text($("#chop2").text());    
});    
});
$("#chop3").click(function(){
$("#chcategory").slideUp(250,function(){
$(".gh").text($("#chop3").text());    
});    
});
$("#chh").click(function(){	
$("#icover").show('fade',function(){
$("#editprofile").show('clip','easeInQuint');
});
});
$("#newss").click(function(){	
$("#i1cover").show('fade',function(){
$("#newcontact").show('clip','easeInQuint');
});
});
$("table tr td:nth-child(4) input:submit").click(function(){
var row_no=$(this).attr('id');
$("#hiddeninp").val(row_no);
$("#i2cover").show('fade',function(){
$("#editcontactinfo").show('clip','easeInQuint');
});
$("#inp1").val($(this).parent().siblings().html());
$("#inp2").val($(this).parent().siblings().next().html());
$("#inp4").val($(this).parent().siblings().next().next().html());
});
$("#closeme").click(function(){
$("#editprofile").hide('clip',function(){
$("#icover").hide('fade');									   
},'easeInQuint');
});
$("#icover").click(function(){
$("#editprofile").hide('clip',function(){
$("#icover").hide('fade');									   
},'easeInQuint');							
}).find('#editprofile').click(function(e){e.stopPropagation();
});
$("#closeme1").click(function(){
$("#newcontact").hide('clip',function(){
$("#i1cover").hide('fade');									   
},'easeInQuint');
});
$("#i1cover").click(function(){
$("#newcontact").hide('clip',function(){
$("#i1cover").hide('fade');									   
},'easeInQuint');							
}).find('#newcontact').click(function(e){e.stopPropagation();
});
$("#closeme2").click(function(){
$("#editcontactinfo").hide('clip',function(){
$("#i2cover").hide('fade');									   
},'easeInQuint');
});
$("#i2cover").click(function(){
$("#editcontactinfo").hide('clip',function(){
$("#i2cover").hide('fade');									   
},'easeInQuint');							
}).find('#editcontactinfo').click(function(e){e.stopPropagation();
});
$("#outer").click(function(){
$("#viewprofile").hide('puff',function(){						   
$("#outer").hide('fade');						   
},'easeInQuint');
}).find('#viewprofile').click(function(e){e.stopPropagation();
});
});
(function($){
$(window).on("load",function(){
$(".content").mCustomScrollbar({theme:"newthememine"});
});
})(jQuery);