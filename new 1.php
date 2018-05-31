<html>
<head><title>Index-HDSE181039</title><head/>
<body>
<h1>COMMENT GATHERING</h1>

<form name="comment" method="post" action="#">
<label><h3>Customers Name<h3/><label/>
<label>Name<label/><input type ="text" name= "name"/>
<label><h3>customer  Comment :</h3><label/>

<textarea cols="55" rows="50" placeholder="your comment please" name="comm" ></textarea><br>
  <input type="submit" name="btncom" value=" Send  comment" />
  
 </form>
<?php

if(isset($_POST["btncom"]))
{     $name = $_POST["name"];
	//$type = $_POST["user"];
	$comment = $_POST["comm"];
	
	$con= mysqli_connect("localhost","root","");
	mysqli_select_db($con,"qwe");
	$sql = "INSERT INTO comment (	user, comment) VALUES('$name','$comment')";
	$result = mysqli_query($con,$sql);
	
	echo"LEATEST COMMENNT ".$comment;
	
}

?>


</body>
</html>