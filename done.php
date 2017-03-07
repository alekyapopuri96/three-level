<html>
<body>
<?php
session_start();
if($_SESSION["action"] == "REGISTRATION")
{
	echo " <H1> Registered successfully!!! </H1>";
}
else
{
	header("Location:https://accounts.google.com/");
}
session_destroy();
?>
</body>
</html>