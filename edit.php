<html>
<head>

<style>
table
{
	border-style:solid;
	border-width:2px;
	border-color:Black;
}

</style>
</head>
<title>
Welcome
</title>
<body  Background = "t3.jpg">
<center><img src="lt2.jpg">
<br/><br/><br/>

<form action="" method="POST">
	<h2>Update Details</h2>
	<input type="text" name="searchname" placeholder="Search by plan">
	<button type="submit">SEARCH</button></br></br>
	<button type="reset">RESET</button>
	<button><a href="home2.php">BACK</a></button>
	</br></br></br>
	<h2>Information:</br></h2>
</form>
</body>
</html>

<?php

//require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$search=$_POST["searchname"];
	$qry=mysql_query("SELECT * FROM client WHERE  plan LIKE '%$search%'");
		
		echo"<table border='1'>
		<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>USERNAME</th>
		<th>CONTACT NUMBER</th>
		<th>EMAIL ID</th>
		<th>ADDRESS</th>
		<th>PINCODE</th>
		<th>PLAN <button><a href=renewal.php>update</a></button></th>
		<th>PASSWORD<button>
		</tr>";
		
		while($row = mysql_fetch_array($qry))
		{
		
			echo "<tr>";
			echo "<td>" . $row["id"] . "</td>";
			echo"<td>" . $row["name"] . "</td>";
			echo"<td>" . $row["username"] . "</td>";
			echo"<td>" . $row["cont"]."</td>";
			echo"<td>" . $row["email"]."</td>";
			echo"<td>" . $row["address"]."</td>";
			echo"<td>" . $row["pincode"]."</td>";
			echo"<td>" . $row["plan"]."</td>";
			echo"<td>" . $row["password"]."</td>";
			
			echo"</tr>";
		}
		echo"</table>";
}
?>
