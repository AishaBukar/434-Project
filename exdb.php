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
            $ID= $_POST['id'];
        
            $password= $_POST['pass'];


            $sql="SELECT ID,pass FROM examiner WHERE ID='$ID' AND pass='$password'";
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
                    header("location: examinerreviews.php");
                    echo "successful";
                }
                else{
                    echo "cannot login without valid details";
                    die();
                }
            }
        }
    }

/*$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$department=$_POST['dept'];
$password=$_POST['password'];



	$sql="Create database examiner";
	if (mysqli_query($conn,$sql)) {
		echo "Database created";
		# code...
	}
	else{
		echo "error creating".mysqli_error($conn);
	}
	if (isset($_POST["submit"])) {
    $conn=mysqli_connect("localhost","root","","examiner");

if ($conn==false) {
	die("Error connecting to database". mysqli_connect_error());

}
$table= "Create table info(
              Name VARCHAR(30) NOT NULL PRIMARY KEY ,
              Email VARCHAR(30) NOT NULL,
              Gender VARCHAR(10) NOT NULL,
              Department VARCHAR(20) NOT NULL,
              Password VARCHAR(10) NOT NULL)";
    if (mysqli_query($conn,$table)) {
		echo "Table created";
	
	}
	else{
		echo "error creating table".mysqli_error($conn);
	}

	

$sql="INSERT INTO info (Name,Email,Gender,Department,Password) 
	      VALUES('$name','$email','$gender','$department','$password')";
if (mysqli_query($conn,$sql)) {
	echo "Values successfully inserted";
    }
else{
	echo "Error inserting values" . mysqli_error($conn);
	
}

mysqli_close($conn);
}*/
?>


