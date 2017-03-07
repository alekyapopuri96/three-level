<html>
<?php
session_start();
if(!isset($_SESSION["action"]))
{
	$_SESSION["action"]="LOGIN";
}
	print_r($_SESSION["action"]);
?>
<head>
<body>
<style type="text/css">
p {color:saffron; text-align:center;} 
input:hover{color:blue;}
input:focus{color:green;}
</style>
<form name="loginform" action="userpwdcheck.php" method="post">

<P>USER ID:<input type="text" align="center"  name="username" id="userid"/></p><br><br>
<br>
<P>PASSWORD:<input type="password" align="center" value="" name="password" id="pwd" required/></p><br><BR>
<meter max="4" id="password-strength-meter"></meter>
<p id="password-strength-text"></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<script>
var strength = {
  0: "Worst",
  1: "Bad",
  2: "Weak",
  3: "Good",
  4: "Strong"
}
var password = document.getElementById('pwd');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');
password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);
    meter.value = result.score;
  if (val !== "") {
    text.innerHTML = "Strength: " + strength[result.score]; 
  } else {
    text.innerHTML = "";
  }
});
</script>
<style>
meter {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  margin: 0 auto 1em;
  width: 100%;
  height: 1.5em;
  background: none;
  background-color: rgba(0, 0, 0, 0.1);
}
meter::-webkit-meter-bar {
  background: none;
  background-color: rgba(0, 0, 0, 0.1);
}
meter[value="1"]::-webkit-meter-optimum-value { background: red; }
meter[value="2"]::-webkit-meter-optimum-value { background: yellow; }
meter[value="3"]::-webkit-meter-optimum-value { background: orange; }
meter[value="4"]::-webkit-meter-optimum-value { background: green; }
meter[value="1"]::-moz-meter-bar { background: red; }
meter[value="2"]::-moz-meter-bar { background: yellow; }
meter[value="3"]::-moz-meter-bar { background: orange; }
meter[value="4"]::-moz-meter-bar { background: green; }
</style>
<input type="submit" value="submit" name="d3"/>
<input type="reset" name="z2" value="reset"/></form>
</body>
</html>