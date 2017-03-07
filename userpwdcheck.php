<?php
session_start();
$dbc = mysql_connect ("localhost","root","threelevelpwd3") or die(mysql_error());
$login=$_POST["username"];
$passwd=$_POST["password"];
mysql_select_db("minipro");
$query = "select * from registration where loginn='$login' and password='$passwd'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
if(!$row)
{
	header("location:loginfailure.php");
	die (mysql_error());
}
else
{
	$_SESSION['username'] = $login;
    header("location:success.php");
	die (mysql_error());
}
?>