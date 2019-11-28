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


    function getAllPost($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` WHERE email != (select email from logininfo where username='{$username}' and Password='{$password}') order by Date DESC ";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function getStudentPost($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` WHERE Status='Student' and email != (select email from logininfo where username='{$username}' and Password='{$password}') order by Date DESC ";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function getAlumniPost($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` WHERE Status='Alumni' and email != (select email from logininfo where username='{$username}' and Password='{$password}') order by Date DESC ";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }
    function getFacultyPost($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` WHERE Status='Faculty' and email != (select email from logininfo where username='{$username}' and Password='{$password}') order by Date DESC ";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }
?>