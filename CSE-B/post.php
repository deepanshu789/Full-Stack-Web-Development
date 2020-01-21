<?php
	echo $_POST['username'];
?>
<!DOCTYPE html>
<html>

<head>
	<title>Input Form</title>
</head>

<body>
	<form action="post.php" method="post">
		Name: <input type="text" name="username"> <br>
		<input type="submit" name="btn">
	</form>
</body>

</html>