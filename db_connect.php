<?php
$dbname="cazpro15";
$dbusername="root";
$dbpassword="";
$hostname="localhost";
if(mysql_connect($hostname,$dbusername,$dbpassword))
{
	if(!mysql_select_db($dbname))
	{
		header('location:error.html');
	}

}
else
{
	header('location:error.html');
}
?>