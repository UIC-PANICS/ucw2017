<!DOCTYPE html>
<html>
<head>
	<title>炉石卡组上传</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="theme-color" content="rgb(49,60,85)">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<script src="css/dynamic.js"></script>
	<script type="text/javascript">
	function changetext(){
 	var num=document.getElementById("displaynone").innerHTML;
 	var textcontent=document.getElementById("inputnum").value;
 	var content=document.getElementById("textchange");
 	var style=document.getElementById("textchange").style;
 	var blank=document.getElementById("keep").style;
 	if(num!=textcontent && textcontent!=""){
 		style.color="red";
 		content.innerHTML="X 学号与登录时不同";
 		blank.display="none";
 	}
 	else if (textcontent=="") {
 		content.innerHTML="";
 		blank.display="block";
 	}
 	else{
 		style.color="green";
 		content.innerHTML="√ 学号正确";
 		blank.display="none";
 	}
 }
 </script>
</head>
<body>
<div id="phoneheader">
<div id="menubutton">
<img src="css/menu.png" height="100%" onclick="phonebar()">
</div>
<h3 id="phonetitle">炉石卡组上传</h3>
<ul>
	<a href="../index.html"><li>主页</li></a>
	<a href="index.html"><li>查看卡组</li></a>
</ul>
</div>
<div id="phonebarbackground" onclick="hidephonebar()">
</div>
<div id="phonebar">
<table cellpadding="18px">
<tr><th><b>Menu</b></th></tr>
	<tr><td><a href="../index.html"><b>主页</b></a></td></tr>
	<tr><th id="phonebarth"><a href="index.html"><b>查看已上传卡组</b></a></th></tr>

</table>
</div>

<!--main content-->
<div id="upload">
<p>每张图片大小不可超过400k</p>
<form accept="" method="post" enctype="multipart/form-data" action="upload1.php">
<input type="text" name="number" placeholder="请再次输入学号（十位数字）" style="height: 30px;width: 100%;" id="inputnum" oninput="changetext()" onpropertychange="changetext()"required>
<p id="textchange"></p>
<div id="keep"></div>
<br/> <br/>
<span>*</span><input type="file" name="img[0]" required/><br /> <br/>
<span>*</span><input type="file" name="img[1]" required/><br /> <br/>
<span>*</span><input type="file" name="img[2]" required/><br /> <br/>
<span>*</span><input type="file" name="img[3]" required/><br /> <br/>
&nbsp;<input type="file" name="img[4]" /><br />   <br/>
<input type="submit" name="s" style="width: 100%;height: 40px;background-color: #0686c1;color: white;border: 0px;" /><br /> <br/>
</form> 
</div>
</body>
<p id="displaynone"><?php 
$num=file_get_contents("confirm.txt");
echo $num;
 ?></p>
 
</html>