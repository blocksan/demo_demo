<?php
session_start();
require('db_connect.php');
if(!isset($_SESSION['UID']))
{	$id=$_POST['id'];
	//$id='1004';
	$email=10001;
	$_SESSION['id']=$id;
	$_SESSION['email']=$email;
	$checkquery="SELECT product_id,user_id from user_wishlist WHERE product_id='$id' AND user_id='$email' ";
	$result=mysql_query($checkquery);
	if(mysql_num_rows($result)>=1)
	{
		echo "false";
	}
	else
	{
		$in_query="INSERT INTO user_wishlist values(10001,'$id');";
		if(($res=mysql_query($in_query)))
		echo "true";

	}
}
else
{
	echo "hello";
}

?>
