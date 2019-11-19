<?php
    require_once('../DB/db.php');


    function StudentProfile($email,$name,$aiub_id,$phone)
    {
        $conn = getConnection();
        $sql = "INSERT INTO studentprofile VALUES('{$email}','{$name}','{$phone}','{$aiub_id}',null,null,null,null,null,null,null,null,null,null,0)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>