<?php
    //admin
    $sn = "localhost";
    $un = "root";
    $pw = "";
    $db = "admin";

    $conn = new mysqli($sn,$un,$pw,$db);
    if($conn->connect_error){
        echo "error".$conn->connect_error;
        die();
    }
    else{
        $query = "SELECT project_name, SN from studentandexaminer GROUP BY project_name ORDER BY project_name DESC";
        $result=$conn->query($query);
        if(!$result){
            echo "error returning result";
            die();
        }
        else{
            $no_rows =$result->num_rows;
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Project Review</title>
    </head>
    <body>
        <h2> Final scores assigned by the examiners</h2>
        <a href="reviewedby.php">Check</a>
        <p> <?php while ($row = $result->fetch_assoc()){
           // echo "<a href='reviewedby.php' target='_blank'>.$row['project_name'].</a>";
        }?></p>
    </body>
</html>