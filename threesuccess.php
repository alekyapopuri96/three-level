<?php
session_start();
$dbc = mysql_connect ("localhost","root","threelevelpwd3") or die(mysql_error());
$username=$_SESSION['username'];
$passwd=$_POST["croppwd"];
mysql_select_db("minipro");
if($_SESSION["action"] == "REGISTRATION")
{
	$query = "insert into thirdlevel (loginn, password) values ('$username', '$passwd')";
	$result = mysql_query($query);
	if(!$result)
	{
		die (mysql_error());
	}
	else
	{
		header("location:done.php");
	}
}
else
{
	$query = "select * from thirdlevel where loginn='$username' and password='$passwd'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row)
	{
		header("location:done.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login Failed!Try Again');
		window.location.replace(\"thirdlevel.php\")</script>";
	}
	if(!$result)
	{
		die (mysql_error());
	}
}
?>