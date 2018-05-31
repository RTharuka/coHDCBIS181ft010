<html>
<head><head/>
<body>
<h1>Blog page</h1>

<?php

if(isset($_COOKIE["user"]))
{
$user = $_COOKIE["user"];


    
echo"welcome to index page your user name is =, $user "."<br/>";
echo"this will closs 5 second ";
}
else
{
header('Location : new 2.php');
}
echo'<input type =\'submit\' name=\'logout\' value=\'logout\'>';
if(isset($_POST['logout']))
  {
   setcookie("user","$user",time()-360);
   header("Refresh:0");
 //header('Location : assignm');
  //header('Location : assS2.php');
   //header('Location : p');
  }


?>

<body/><html/>