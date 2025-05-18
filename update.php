<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
	$plan= $_POST['plan'];
	$id= $_POST['id'];
	 
	 $qry= mysql_query("UPDATE client SET plan='$plan' WHERE id='$id' ");
	 
	 if($qry == true)
	 {
	 //echo "Updated";
	 header("location:home2.php");
	 }
	 else
	 {
	 echo"not".mysql_error();
	 }
}
else 
{ 
	echo"invalid data";
}
?>