<?php

	$hostName = 'localhost';
	$userName = 'root';
	$password = '';
	$databaseName = 'cseb';

	$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

	if($conn) {
		echo 'Connection Sucessful';
	}
	else
	{
		echo 'Connection failed!!' +
		mysqli_connect_error();
	}

?>