<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD align="center">

<link href="base.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">

 
  function isNumber(evt) 
{
     
               evt = (evt) ? evt : window.event;
    
               var charCode = (evt.which) ? evt.which : evt.keyCode;
  
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                {
          
                          alert("Please enter only Numbers.");
      
                          return false;
     
                }

      
                 return true;
   
 }

   
 function ValidateNo()
 {
  
                         var phoneNo = document.getElementById('txtPhoneNo');

  
                         if (phoneNo.value == "" || phoneNo.value == null)
                              {
          
                                    alert("Please enter your Mobile No.");
    
                                    return false;
       
                              }
   
                             if (phoneNo.value.length < 10 || phoneNo.value.length > 10)
                                {
         
                                        alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
     
                                         return false;
       
                                }

 
                                 alert("Success ");
        
                                 return true;
   
}

function ValidateForm() {
	if((document.getElementById("loginerror")).value!= null){
		return false;
	}
	return true;
}
</script>
</HEAD>
<BODY>
<?php
session_start();
$_SESSION["action"]="REGISTRATION";
$dbc = mysql_connect ("localhost","root","threelevelpwd3") or die(mysql_error());
mysql_select_db("minipro");
$query = "select loginn from registration";
$result = mysql_query($query);
while($res = mysql_fetch_assoc($result)) {
    $row[] = $res['loginn'];
}
?>
<form name="reg" action="regdbentry.php" method="post">
<h1 align="center">REGISTRATION FORM</h1>
<p>FIRST NAME :  <input type="text"  name="t1" size="30" ></p>
<p>LAST NAME :  <input type="text"  name="t2" size="30" ></p>
<p>LOG IN NAME:   <input type="text"  id="t3" name="t3" size="30" required><span id="loginerror"/></p>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"><!--
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("<ul><B><I>PASSWORDS DO NOT MATCH!<i><b><ul>");
    else
        $("#divCheckPasswordMatch").html("<ul><b><i>PASSWORDS MATCH.<i><b><ul>");
}
//--></script>


<div class="td">
  PASSWORD:  <input type="password" id="txtNewPassword" name="txtNewPassword" required />
</div><br>



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
var password = document.getElementById('txtNewPassword');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');

password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);
    meter.value = result.score;

  // Update the text indicator
  if (val !== "") {
    text.innerHTML = "Strength: " + strength[result.score]; 
  } else {
    text.innerHTML = "";
  }
});
</script>
<style>
meter {
  /* Reset the default appearance */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  margin: 0 auto 1em;
  width: 100%;
  height: 1.5em;

  /* Applicable only to Firefox */
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

/* Gecko based browsers */
meter[value="1"]::-moz-meter-bar { background: red; }
meter[value="2"]::-moz-meter-bar { background: yellow; }
meter[value="3"]::-moz-meter-bar { background: orange; }
meter[value="4"]::-moz-meter-bar { background: green; }
</style>
<div class="td">
   RE-ENTER PASSWORD: <input type="password" id="txtConfirmPassword" name="txtConfirmPassword" onkeyup="checkPasswordMatch();" />
</div>
    <div class="registrationFormAlert" id="divCheckPasswordMatch">
</div>

<p>GENDER:
  <label><input type="radio" name="gender" value="male" />Male</label>  
  <label><input type="radio" name="gender" value="female" />Female</label><br>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="script.js"></script>
    
    <link rel="stylesheet" href="runnable.css" />
  </head>
  <body>
  <script>
  $(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#datepicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });
  

  $("#t3").on("focusout", function() {
		var obj = <?php echo json_encode($row); ?>;
		for(var i=0; i<obj.length; i++)
	  {
			if(this.value == obj[i]){
				document.getElementById("loginerror").innerHTML="Choose another login name. This is already used!";
				$("#t3").val('');
				return;
			}
	  }
  });

  });</script>
    <p> Date-of-Birth: <input type="text" id="datepicker" name="datepicker"/></p>
<p>MOBILE NUMBER: <input id="txtPhoneNo" name="txtPhoneNo" type="text" onkeypress="return isNumber(event)" /></p>
SECURITY QUESTION:<select name="select">
<option selected value="-select anyone-">-select anyone-</option>
<option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher?</option>
<option value="What was the name of your second dog?">What was the name of your second dog?</option>
<option value="When you were young, what did you want to be when you grew up?">When you were young, what did you want to be when you grew up?</option>
<option value="Who was your childhood hero? ">Who was your childhood hero? </option>
<option value="What was your childhood nickname?">What was your childhood nickname?</option>
<option value="Where does your nearest sibling live? ">Where does your nearest sibling live?</option>   </select><br><br>
ANSWER:<input type="password" name="a2" size="50"  value=""/><br><br>
RECOVERY E-MAIL:<input type="text" name="a6" size="20" value=""/><br><br>
<input type="checkbox" name="a5" value="checkbox" >I agree to terms and conditions<br><br>
<input type="submit" value="submit" id="btnSubmit" onClick="return ValidateForm()"/> 
<input type="reset" name="a4" value="cancel"/>
</form>
</html>