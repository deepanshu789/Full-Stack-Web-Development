<?php

	$hostName = 'localhost';
	$userName = 'root';
	$password = '';
	$databaseName = 'cseb';

	if(mysqli_connect($hostName , $userName , $password , $databaseName)) {
		echo 'Connection Sucessful';
	}
	else
	{
		echo 'Connection failed!!' +
		mysqli_connect_error();
	}

?>