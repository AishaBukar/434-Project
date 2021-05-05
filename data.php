

<?php
    $sn = "localhost";
    $un = "root";
    $pw = "";
    $db = "student";
    session_start();

    $conn = new mysqli($sn,$un,$pw,$db);
    if($conn->connect_error){
        vardump($conn->connect_error);
        die();
    }
    else{
        if(isset($_POST['submit'])){
            //username and password sent from the form
            $matric= $_POST['matric'];
            
            $password= $_POST['pass'];


            $sql="SELECT Matric,pass FROM info WHERE Matric='$matric' AND pass='$password'";
            $result=$conn->query($sql);
            if(!$result){
                echo "Matric and password mismatch";
                die();
            }
            else{
                $row=$result->fetch_array(MYSQLI_NUM);
                //$active=$row['active'];
    
                $count=$result->num_rows;
    
                //if result matched $username and $password,table row must be 1
    
                if ($count>0){
                    $_SESSION['login_user']=$username;
                    header("location: data.php");
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
        <title>Student Project Login </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form method ="POST" action="studentsubmit.php" autocomplete="on">
                <p><label><b>Project Name</b><br> <textarea name="pn" required="required" rows="5" cols="70" ></textarea></label></p><br>

                <p><label><b>Abstract (not more than 800 words):</b><br> <textarea name="abstract" required="required" rows="10" cols="135" maxlength="4000" ></textarea></label></p><br>

                <p><label><b>Literature Review (not more than 800 words):</b><br> <textarea name="lit" required="required" rows="10" cols="135" maxlength="4000"></textarea></label></p><br>

                <p><label><b>Methodology (not more than 800 words):</b><br> <textarea name="met" required="required" rows="10" cols="135" maxlength="4000"></textarea></label></p><br>

                <p><label><b>Analysis (not more than 800 words):</b><br> <textarea name="anyls" required="required" rows="10" cols="135" maxlength="4000"></textarea></label></p><br>

                <p><label><b>Conclusion (not more than 400 words):</b><br> <textarea name="cln" required="required" rows="10" cols="135" maxlength="2000"></textarea></label></p><br>

                <input type="submit" name ="submit" value ="submit">
        </form>
        <button type="button"  name="btnId" onclick="window.location.href ='logout.php'">Log out</button>
    </body>
</html>