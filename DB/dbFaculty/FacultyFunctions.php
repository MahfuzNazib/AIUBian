<?php
    require_once('../DB/db.php');


    function FacultyProfile($email,$name,$phone,$aiub_id)
    {
        $conn = getConnection();
        $sql = "INSERT INTO facultyprofile VALUES('{$email}','{$name}','{$phone}','{$aiub_id}',null,null,null,null,null,null,null,null,null,null,null)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getFacultyData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM facultyprofile where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }
?>