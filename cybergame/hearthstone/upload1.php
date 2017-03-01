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
	<title>炉石卡组查看</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<script src="../css/dynamic.js"></script>
</head>
<body>
<div id="phoneheader">
<div id="menubutton">
<img src="../css/menu.png" height="100%" onclick="phonebar()">
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
 $a = 0;
    foreach ($img['tmp_name'] as $value)
    {
        $filename = $img['name'][$a];
        if ($value)
        {
            $sizeresult[$a]= $img["size"][$a]<=500000;
            $typeresult[$a]= strpos($img["type"][$a],"mage");
        }
        $a++;
    }
if ($sizeresult[0]==1 && $typeresult[0]==1&&
    $sizeresult[1]==1 && $typeresult[1]==1&&
    $sizeresult[2]==1 && $typeresult[2]==1&&
    $sizeresult[3]==1 && $typeresult[3]==1)

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
  $myfile=fopen($path1,"a+");
$txt='</body>
</html>';
fwrite($myfile,$txt);
fclose($myfile);
header("Location: $path1"); 
}
else{
    echo '<!DOCTYPE html>
<html>
<head>
    <title>错误</title>
    <meta charset="utf-8">
    <script type="text/javascript">
        alert("文件超过限制或格式不正确");
        window.location.href="preupload.html";
    </script>
</head>
<body>

</body>
</html>';
}
?>