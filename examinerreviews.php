<?php //examiner
    require_once('config.php');
    session_start();  

    if(isset($_SESSION['login_user'])){
        $my_id = $_SESSION['login_user'];
        $query1 = "SELECT first_name, last_name FROM examiner WHERE ID='$ID";
        $result=$conn->query($query1);
        $rows = $result->fetch_array();

        $query2 = "SELECT  SN, project_name FROM studentandexaminer WHERE lecturerID ='$ID'";
        $result2=$conn->query($query2);
         

        if(!$result){ //if there are no examiners
            echo "Error grading result";
            die();
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Examiner's Page</title>
    </head>
    <body>
        <p> Welcome <?php echo $rows['first_name']." ".$rows['last_name'] ?></p>
        <?php
            if ($no_rows == 0) {
                echo "you have not been assigned any project yet";
                die();
            }
            else{
                echo "Here are your assigned projects";
        ?>
            <?php while($rows=$result2->fetch_assoc()){
                $pn =$rows['project_name'];
                $_SESSION['sn'] =$rows['SN'];
            ?>
            <div>
                <p><?=$pn;?>
                <button type='button' name ='grade'  onclick='window.location.href="grade.php"'>grade</button></p>
            </div>
            <?php }?>
        <?php }?>    
        <br>
        <button type="button"  name="btnId" onclick="window.location.href ='logout.php'">Log out</button>
    </body>  
</html>


