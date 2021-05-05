<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Examiners Page</title>
</head>
<body>
	<h2>Examiners login</h2>
	<form method="POST" action="exdb.php">
		<h4><a href="examinersdetails.php">Don't have an account?Fill in your details here</a></h4>
		ID:<input type="text" name="id" required><br>
		Password:<input type="Password" name="pass" required><br>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>