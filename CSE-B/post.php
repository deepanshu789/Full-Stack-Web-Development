<?php
	include('configure.php');
?>
<?php
	if (isset($_POST['btn'])) {

		echo $_POST['id'].'<br>'; 
		echo $_POST['username'].'<br>';
		echo $_POST['age'].'<br>';
		echo $_POST['contact'].'<br>';
		echo $_POST['email'].'<br>';
	}
	else
		echo "Welcome Guest!!"
?>
<!DOCTYPE html>
<html>

<head>
	<title>Input Form</title>
</head>

<body>
	<form action="post.php" method="post">
		Id: <input type="text" name="id" placeholder="Enter ID"> <br>
		Name: <input type="text" name="username"> <br>
		Age: <input type="text" name="age" placeholder="Enter age"> <br>
		Contact: <input type="text" name="contact" placeholder="Enter contact number"> <br>
		Email: <input type="text" name="email" placeholder="Enter email"> <br>

		<input type="submit" name="btn">
	</form>
</body>

</html>