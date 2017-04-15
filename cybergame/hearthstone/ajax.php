<?php
$dbhost="localhost:3306";
$dbuser="demonist";
$dbpass='008691';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
    die("Could not connect");
}
$type=$_GET['p'];
$getdata="SELECT * FROM timetable WHERE section='$type' AND judge=0";
mysql_select_db('demonist');
$retval=mysql_query($getdata);
$arr=array();
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    array_push($arr,array($row["date"],$row["day"],$row["place"],$row["time"]));
}
echo json_encode($arr);