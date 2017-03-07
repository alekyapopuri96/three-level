
<<!DOCTYPE html>
<html>

<style>table, th, td {
    border: 3px solid black;
}
	</style>
<table width="1.5px">
  <tr>
    <td  ><input type="image" src="image1.jpg"  height="150" width="150" alt="submit" id="i1" onclick="crop(this.id)" ></td>
    <td ><input type="image" src="image.jpg"  height="150" width="150" alt="submit" id="i2" onclick="crop(this.id)"></td>
   <td ><input type="image" src="image2.jpg" height="150" width="150" alt="submit" id="i3" onclick="crop(this.id)"></td>
  </tr>
  <tr>
    <td  > <input type="image"  src="image3.jpg"  height="150" width="150" alt="submit" id="i4" onclick="crop(this.id)"></td>
    <td ><input type="image" src="image4.jpg"  height="150" width="150" alt="submit" id="i5" onclick="crop(this.id)"></td>
   <td ><input type="image" src="image5.jpg" height="150" width="150" alt="submit" id="i6" onclick="crop(this.id)"></td>
  </tr>
   <tr>
    <td  > <input type="image"  src="image6.jpg"  height="150" width="150" alt="submit" id="i7" onclick="crop(this.id)"></td>
    <td ><input type="image" src="image7.jpg"  height="150" width="150" alt="submit" id="i8" onclick="crop(this.id)"></td>
   <td ><input type="image" src="image8.jpg" height="150" width="150" alt="submit" id="i9" onclick="crop(this.id)"></td>
  </tr>
</table>
<br>
<br>
<form action="threesuccess.php" method="post">
PASSWORD:
<input type="password" id="graphPwd" name="croppwd" value=""/><br><br>
<script>
function crop(clickedId){
	var imageMap = {
		i1:"nhgj",
		i2:"deff",
		i3:"hjuy",
		i4:"kjpa",
		i5:"nbqw",
		i6:"swht",
		i7:"sdkl",
		i8:"xsdr",
		i9:"zmla"
	}
	
	var pwd = document.getElementById("graphPwd");
	pwd.setAttribute("value", pwd.getAttribute("value")+imageMap[clickedId]);
}
</script>
<input type="submit" value="submit"/>
<input type="reset" value="reset"/>
</form>
<script>
 function noBack(){window.history.forward();}
    </script>
    </head>
    <body onload="noBack();" onpageshow="if(event.persisted)noBack();" onunload="">
</body>
</html>


  