<?php 
$stunum=$_POST["number"];
$url="../".$stunum."/index.html";
if(is_dir("../".$stunum)==true){
    header("Location: $url");
}
else{
    header("Location: ../index.html");

}
 ?>