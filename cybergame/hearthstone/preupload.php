<?php 
$stunum=$_POST['number'];
$url="upload.php";
$path="confirm.txt";
$path1=$stunum."/index.html";
    $myfile=fopen($path,"w");
    $txt=$stunum;
    fwrite($myfile, $txt);
    fclose($myfile);
if(is_dir($stunum)==false || is_file($path1)==false){
	mkdir($stunum,0777);
	header("Location: $url");
	
}
else{
   echo '<!DOCTYPE html>
<html>
<head>
	<title>confirm</title>
	<meta charset="utf8">
	<script type="text/javascript">
		var message=confirm("您已上传过卡组，确定重新上传？");
		if (message) {
			window.location.href="upload.php";
		}
		else{
			window.location.href="preupload.html";
		}
	</script>
</head>
<body>

</body>
</html>';
}

 ?>

