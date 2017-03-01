<?php 
$stunum=$_POST["number"];
$url="../".$stunum."/index.html";
$judge=file_exists($url);
if(is_dir("../".$stunum)==true&&$judge==true){
    header("Location: $url");
}
else{
    header("Location: ../index.html");

}
 ?>