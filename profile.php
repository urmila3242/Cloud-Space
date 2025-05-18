<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("location:login.php");
}
include('config.php');
$user_check=$_SESSION['login_user'];
$ses_sql= mysql_query("select * from client where name='$user_check'");
$row= mysql_fetch_array($ses_sql);
echo $login_session=$row['name']."<center>";
echo $login_session=$row['username']."</br>"."<center>";
echo $login_session=$row['cont']"<center>";
echo $login_session=$row['email']."</br>"."<center>";
echo $login_session=$row['address']."<center>";
echo $login_session=$row['pincode']."</br>"."<center>";
echo $login_session=$row['plan']."<center>";
?>