<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style align="center">
#redButton {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    padding: 40px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}
#greenButton {
       background-color: #4CAF50;
       padding:40px 40px;
	   } /* Blue */
#blueButton {
       background-color: #008CBA;
       padding:40px 40px;
	   } /* Blue */
</style>
<script type="text/javascript" language="javascript">
    function noBack(){window.history.forward();}
    </script>
    </head>
    <body onload="noBack();" onpageshow="if(event.persisted)noBack();" onunload="">  
<button  id="redButton" onclick="appendRed()"></button>
<button id="greenButton" onclick="appendGreen()"></button>
<button id="blueButton" onclick="appendBlue()"></button><br><br>
<form action="rgbdbentry.php" method="post" id="rgbform" name="rgbform">
PASSWORD:<input type="password" value="" name="userpwd" id="userpwd" required/>
<script>
function appendRed()
{
	var pwd = document.getElementById("userpwd");
	var pwdVal = pwd.getAttribute("value");
	pwd.setAttribute("value",pwdVal+"abcd");
}
function appendGreen()
{
	var pwd = document.getElementById("userpwd");
	var pwdVal = pwd.getAttribute("value");
	pwd.setAttribute("value",pwdVal+"ghke");
}
function appendBlue()
{
	var pwd = document.getElementById("userpwd");
	var pwdVal = pwd.getAttribute("value");
	pwd.setAttribute("value",pwdVal+"azsb");
}
</script>
<br><br>
<input type="submit" value="submit"/>
<input type="reset" value="reset"/>
</form>
</body>
</html>