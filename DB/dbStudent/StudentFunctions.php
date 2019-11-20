<?php
    require_once('../DB/db.php');


    function StudentProfile($email,$name,$phone,$aiub_id)  //Insert Student Genaral Information Into DB Table
    {
        $conn = getConnection();
        $sql = "INSERT INTO studentprofile VALUES ('{$email}','{$name}','{$phone}','{$aiub_id}',null,null,null,null,null,null,null,null,null,null,null,null,null,0)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            false;
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

    function updateStudentProfile($email,$name,$phone)
    {
        $conn = getConnection();
        $sql = "UPDATE studentprofile SET Name='{$name}', Phone='{$phone}' where email = '{$email}'";
        if(mysqli_query($conn,$sql))
        {
            echo "Updating Done";
            //header("refresh:1; url=StudentProfile.php");
        }
        else
        {
            echo "Update Problem";
        }
    }

?>