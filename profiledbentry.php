<?php
$dbc = mysql_connect ("localhost","root","alekyapriyateja") or die(mysql_error());
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$confirmemail=$_POST["confirmemail"];
$mobnum=$_POST["mobnum"];
$houseno=$_POST["houseno"];
$address=$_POST["Address"];
$dob=$_POST["dob"];
$highqual=$_POST["highest_qualification"];
$specialization=$_POST["specialization"];
$yop=$_POST["year_of_passedout"];
$exp=$_POST["experience"];

mysql_select_db("inlighting");
$query = "INSERT INTO profile(firstname, lastname, email, confirmemail, mobnum,houseno,address, dob, highqual,specialization,yop,exp) VALUES ('".$_POST['firstname']."', '$lastname', '$email', '$confirmemail', '$mobnum', '$houseno', '$address', '$dob', '$high_qual', '$specialization', '$yop' , '$exp')";
$result = mysql_query($query);
if(!$result)
{ 
	die (mysql_error()); 
}
header("location:login.php");
?>