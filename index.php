<!DOCTYPE html>
<html>
<head>
	<title>Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="b">
	
		
  <div class="login-page" >
  	<div class="form">
			
	<form id="form2">
		<a href="studentpage.php"><h4>Login as a student</h4></a>
	    <a href="examinerpage.php"><h4>Login as an examiner</h4></a>
	    <a href="admin.php"><h4>Login as an admin</h4></a>

		<table>
			<tr>
				<td><label>Username:</label></td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td><label>password:</label></td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	</div>
 </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js">
 	$('.message ').click(function () {
 		$('form'.animate({height: "toggle",
 						  opacity:"toggle"},"slow");
 	})
 </script>

</body>
</html>