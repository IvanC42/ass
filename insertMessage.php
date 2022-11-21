<?php
session_start();
$connect = mysqli_connect("127.0.0.1","root","","ass");
$fromUser=$_POST["fromUser"];
$toUser=$_POST["toUser"];
$message=$_POST["message"];


$output="";

$sql="INSERT INTO chatbox(FromUser, ToUser, Message)
VALUES ('$fromUser','$toUser','$message')";

if($connect -> query($sql)){
	$output.="";
}else{
$output.="Error.Please Try Again";	
}
echo $output;
?>