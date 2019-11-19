<?php
    require_once('../DB/db.php');


    function AlumniProfile($email,$name,$aiub_id,$phone)
    {
        $conn = getConnection();
        $sql = "INSERT INTO alumniprofile VALUES('{$email}','{$name}','{$aiub_id}','{$phone}',null,null,null,null,null,null)";
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