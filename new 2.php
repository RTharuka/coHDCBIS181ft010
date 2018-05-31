

<html>
<head>
<title>assignment 2</title>
</head>
<body >

<h2>CUstomer login page<h2/>
<h2>Longin Form<h2/>
<hr/>
<table align="center">
<form name="frmLogin" method="post" action="#">

<tr ><td>Username:</td> <td ><input type="text" name="txtUN" /><br />   </td></tr>
<tr ><td>Password: </td><td ><input type="password" name="txtPW" /><br />  </td> </tr>

<tr><td><input type="submit" name="btnLogin" value="Login" /></td></tr>

</form>
</table>

<hr/>


<?php
if(isset($_COOKIE["user"]))
{ 
            header("Location:new 3.php");
}
else
{	
        if(isset($_REQUEST["btnLogin"]))
    {
	//Accept data from form
	$un = $_REQUEST["txtUN"];
	$pw = $_REQUEST["txtPW"];
	
	//Select data from table
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"qwe");
	
	$sql = "Select * from log where id='$un' and password='$pw'";
	$res = mysqli_query($con,$sql);
	//<a href="fifth.html"/>
	if($row = mysqli_fetch_array($res))
	    {
		setcookie("user", $un, time()+360);
		header("Location:new 3.php");
	    }
	else
	    {
		echo "Invalid Username or Password";
	    }
   }
}
?>
</body>
</html>