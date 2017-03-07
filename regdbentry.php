<?php
$dbc = mysql_connect ("localhost","root","threelevelpwd3") or die(mysql_error());
$first=$_POST["t1"];
$last=$_POST["t2"];
$login=$_POST["t3"];
$passwd=$_POST["txtNewPassword"];
$rpwd=$_POST["txtConfirmPassword"];
$gder=$_POST["gender"];
$doba=$_POST["datepicker"];
$mobnum=$_POST["txtPhoneNo"];
$scrityq=$_POST["select"];
$anser=$_POST["a2"];
$remail=$_POST["a6"];
mysql_select_db("minipro");
$query = "insert into registration (firstn, lastn, loginn, password, reenterpwd, gender, dob, mobilenum, securityq, answer, recemail) values ('$first', '$last', '$login', '$passwd', '$rpwd', '$gder', '$doba', '$mobnum', '$scrityq', '$anser', '$remail')";
$result = mysql_query($query);
if(!$result)
{
	die (mysql_error());
}
header("location:login.php");
?>