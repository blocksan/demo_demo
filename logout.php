<?php
session_start();
unset($_SESSION['FBID']);
if(isset($_SESSION['FBID']))
{
	echo "not working";
}
else
{
	header('location:login.php');
}
?>