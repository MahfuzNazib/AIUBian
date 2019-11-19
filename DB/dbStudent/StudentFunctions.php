<?php
    require_once('../DB/db.php');


    function StudentProfile($email,$name,$aiub_id,$phone)  //Insert Student Genaral Information Into DB Table
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

    function getStudentData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM studentprofile where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

?>