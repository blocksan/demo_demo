<?php
session_start();
unset($_SESSION['access_token']);
if(isset($_SESSION['access_token']))
{
	echo "not working";
}
else
{
	header('location:index.php');
}
?>