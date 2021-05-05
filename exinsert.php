<?php
	$name=$_POST["name"];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$department=$_POST['dept'];
	$pass=$_POST['pass'];
	if (isset($_POST["submit"])) {
		$conn=mysqli_connect("localhost","root","","examiner");

	}

	if ($conn==false) {
		die("connection failed");
	}
	$sql="INSERT INTO info(Name,Email,Gender,Department,Pass) VALUES ('$name','$email','$gender','$department','$pass') ";
	if (mysqli_query($conn,$sql)) {
		echo "Created successfully";
	}
	else{
		echo "Error".mysqli_error($conn);
	}
	$conn->close();
?>