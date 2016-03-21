<?php
session_start();
require('db_connect.php');
if(!isset($_SESSION['UID']))
{	$id=htmlentities($_POST['id']);
	$email="sandyghosh555@gmail.com";
	$_SESSION['id']=$id;
	$_SESSION['email']=$email;
	$checkquery="DELETE FROM user_wishlist WHERE user_id=10001 AND product_id='$id';";
	if($result=mysql_query($checkquery))
	{
		echo "true";
	}
	else
	{
		echo "false";

	}
}
else
{
	//login attempt check
}

?>
