
<?php
    $sn = "localhost";
    $un = "root";
    $pw = "";
    $db = "admin";
    session_start();

    $conn = new mysqli($sn,$un,$pw,$db);
    if($conn->connect_error){
        vardump($conn->connect_error);
        die();
    }
    else{
        if(isset($_POST['submit'])){
            //username and password sent from the form
            $username= $_POST['name'];
            $email= $_POST['email'];
            $password= $_POST['pass'];


            $sql="SELECT username,pass FROM info WHERE username='$username' AND pass='$password'";
            $result=$conn->query($sql);
            if(!$result){
                echo "username and password mismatch";
                die();
            }
            else{
                $row=$result->fetch_array(MYSQLI_NUM);
                //$active=$row['active'];
    
                $count=$result->num_rows;
    
                //if result matched $username and $password,table row must be 1
    
                if ($count>0){
                    $_SESSION['login_user']=$username;
                    header("location: login.php");
                    echo "successful";
                }
                else{
                    echo "cannot login without valid details";
                    die();
                }
            }
        }
    }

?>








<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<style type="text/css">
		a{
			color: black;
			padding: 20px;
			font-size: 20px;
			border: 20px;
			background-color: #aaeebb;
			margin: 10px;
			border: 1px solid grey;


		}
		.div1{
			display: inline-block;
			margin: 10px;
			list-style: none
			padding: 20px;
			font-family: ariel;

		}
	</style>
</head>
<body>

    	<div>
		<h1>Welcome back,  Admin</h1>
		<div class="div1">
			<nav>
				<a href="admin.php">Home</a>
				<a href="studentdetails.php">Create account for students</a>
				<a href="">Create account for examiners</a>
				<a href="preview.php">Project Review</a>
				<a href="assign.php">Assign Project</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div>
    
</body>
</html>


