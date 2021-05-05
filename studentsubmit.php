<?php //student
   require_once('config.php');
    session_start();
    //we need to call the session we used when collecting information from the login page
    if (isset($_SESSION['username'])){
        $my_id = $_SESSION['username'];

        
        $matric_id = $my_id;
        $project_name = $_POST['pn'];
        $Abstract = $_POST['abstract'];
        $literature_review = $_POST['lit'];
        $methodology = $_POST['met'];
        $analysis = $_POST['anyls'];
        $conclusion = $_POST['cln'];

    	$conn=mysqli_connect("localhost","root","","admin");
    	if ($conn==false) {
    		die("Error".mysqli_connect_error());
    	}
        //+details that will be inserted into the database
   

        if (isset($_POST['submit'])){
            $query = "SELECT * FROM studentandexaminer WHERE matricid='$matric_id'";
            $result1 = $conn->query($query);
            if(!$result1){
                echo"cant write into the database";
                die();
            }
            else{
                $row = $result1->fetch_array(MYSQLI_NUM);
                if ($row == 0){
                    //check the insert statement and change it to update, also check the session variable repeating its self
                    $query = "INSERT INTO studentandexaminer (matric_id, project_name, Abstracts, literature_review, methodology,analysis, conclusion) VALUES('$matric_id','$project_name','$Abstract','$literature_review','$methodology','$analysis','$conclusion')";
                    $result2 = $conn->query($query);
                }
                else{
                    echo"cannot submit twice";
                    die();
                }
            }
        }
        //we need to call the saved session from data.php so we can use the username(matric number ) as an input into this new table.
        //no need to use isset here because in the html, we already have a required constraint.  
    
    else{
        echo"you are not logged in, please try again";
        die();
    }
    $conn->close();
  }
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<a href="index.php">Back to login page</a>
</body>
</html>