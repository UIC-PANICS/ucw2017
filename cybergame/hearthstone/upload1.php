<?php
$path1=$_POST["number"]."/index.html";
$path2=$_POST["number"];
$img = $_FILES['img'];
$myfile=fopen($path1,"w");
$txt1='<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<meta name="theme-color" content="rgb(49,60,85)">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<script src="../../js/phonebar.js"></script>
</head>
<body>
<div id="phoneheader">
<div id="menubutton">
<img src="../../images/menu.png" height="100%" onclick="phonebar()">
</div>
<h3 id="phonetitle">炉石卡组查看</h3>
<ul>
	<a href="../../index.html"><li>主页</li></a>
	<a href="../index.html"><li>查看卡组</li></a>
</ul>
</div>
<div id="phonebarbackground" onclick="hidephonebar()">
</div>
<div id="phonebar">
<table cellpadding="18px">
<tr><th><b>Menu</b></th></tr>
	<tr><td><a href="../../index.html"><b>主页</b></a></td></tr>
	<tr><th id="phonebarth"><a href="../index.html"><b>查看已上传卡组</b></a></th></tr>

</table>
</div>';
fwrite($myfile,$txt1);
fclose($myfile);
if ($img)
{
    $dir = dirname($path2);
    $i = 0;
    foreach ($img['tmp_name'] as $value)
    {
        $filename = $img['name'][$i];
        if ($value)
        {
            $savepath=$path2."/".$filename;
            $state = move_uploaded_file($value, $savepath);
            if($state)
            {
                $myfile=fopen($path1,"a+");
                $txt1='<div class="imgframe">
<img src="';
                $txt2='" width="100%">
</div>';
                $content=$txt1.$filename.$txt2;
                fwrite($myfile,$content);
                fclose($myfile);

            }
        }
        $i++;
    }
}
$myfile=fopen($path1,"a+");
$txt='</body>
</html>';
fwrite($myfile,$txt);
fclose($myfile);
header("Location: $path1");
?>
?>