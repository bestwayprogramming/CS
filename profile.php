<?php

session_start ();
include("connection.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$query="SELECT * FROM users WHERE uname='$a' AND upassword='$b'";
$res = $PDO->prepare($query);
$res->execute();
if($res)
{
	
	$_SESSION["login"]="1";
	header("location:index.php");
}
else	
{
	header("location:login.php?err=1");	
}
}
?>
