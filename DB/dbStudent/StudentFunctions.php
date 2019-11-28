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

    /*function updateStudentProfile($email,$name,$phone)
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
    }*/

    function getStatus($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT username,status,email From logininfo where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $status = mysqli_fetch_assoc($result);
        return $status;
    }

    function insertPost($text,$image,$date,$status,$email,$username)
    {
        $conn = getConnection();
        $sql = "INSERT INTO post VALUES ('{$text}','{$image}','{$date}','{$status}','{$email}','{$username}',0)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            false;
        }
    }

    function getAllMyPost($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` where email = (select email from logininfo where username='{$username}' and Password='{$password}') order by Date DESC";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function deletePost($email)
    {
        $conn = getConnection();
        $sql = "DELETE FROM `post` WHERE email= (select email from logininfo where username='{$username}' and Password='{$password}') ";
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