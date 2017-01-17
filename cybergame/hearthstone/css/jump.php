<?php 
$stunum=$_POST["number"];
$url="../".$stunum."/index.html";
header("Location: $url");
 ?>