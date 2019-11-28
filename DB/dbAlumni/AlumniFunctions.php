<?php
    require_once('../DB/db.php');


    function AlumniProfile($email,$name,$aiub_id,$phone)
    {
        $conn = getConnection();
        $sql = "INSERT INTO alumniprofile VALUES('{$email}','{$name}','{$aiub_id}','{$phone}',null,null,null,null,null,null,null,null,null,null,null)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

   

    function getAlumniData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM alumniprofile where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function getAllAlumniPost($username,$password)
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

    function insertAlumniPost($text,$image,$date,$status,$email,$username)
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

    function getAlumniStatus($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT username,status,email From logininfo where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $status = mysqli_fetch_assoc($result);
        return $status;
    }
?>