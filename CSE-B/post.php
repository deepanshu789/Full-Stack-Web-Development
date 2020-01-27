<?php
	include('configure.php');
?>


<?php
	if (isset($_POST['btn'])) {

		
		$username = $_POST['username'];
		$age = $_POST['age'];
		$contact =  $_POST['contact'];
		$email =  $_POST['email'];

			$sql = "INSERT INTO `users` (name , age , contact , email)
			VALUES ('$username' , '$age' , '$contact' , '$email')";
			mysqli_query($conn , $sql);
	}
	else
		echo "Welcome Guest!!"
?>
