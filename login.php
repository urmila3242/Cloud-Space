<?php 

session_start();
include("config.php");
if(isset($_SESSION['login_user']))
{
	header("location:home.php");
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	
	$password=md5($mypassword);
	$sql="select id from client where name='$myusername' and pass='$password'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	
	if($count==1)
	{
		$_SESSION['login_user']=$myusername;
		header("location:home.php");
	}
	else
	{
		echo "your login name and password is invalid ";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<center>
<body>
<form action="" method="POST">
<input type="text" name="username" id="username"
value="" placeholder="enter username"></br></br>
<input type="password" name="password" id="password" 
value="" placeholder="enter password"></br></br>
<input type="submit" value="log in"></br></br>
</form>

<a class="" href="form.php" >

</a></center>
</body>
</html>
