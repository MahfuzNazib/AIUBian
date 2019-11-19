<?php
    require_once('../DB/db.php');


    function FacultyProfile($email,$name,$phone,$aiub_id)
    {
        $conn = getConnection();
        $sql = "INSERT INTO facultyprofile VALUES('{$email}','{$name}','{$aiub_id}','{$phone}',null,null,null,null,null,null)";
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