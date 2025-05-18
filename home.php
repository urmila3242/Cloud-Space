<?php
include("lock.php");
?>
<html>
<head>
<title>
Tailor Shop
</title>
</head>
<center>
<body  Background = "bg.jpg">
<form id ="rform" method="POST"></br></br>
	<img src="lt.jpg">
	</br>
	<i><h1>WELCOME</h1></i></br>
  
	<h3><i>**Choose From Below **</i></h3>	</br></br>
	
	<button><a href=new.php> Add  </a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<button><a href=view.php>View </a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button><a href=edit.php> Update  </a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" value="print this page" onClick="window.print()">
	
	</br></br></br>

		<button><a href="logout.php">
	Log Out</a></button>
		</form></center>
		</frameset>
</body>
</html>	
