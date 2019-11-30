<?php
    require_once('../DB/db.php');
    
    function login($username, $password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM logininfo WHERE username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);
        
        return $user;
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

    function search($search)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM post WHERE username = '{$search}'";
        $result = mysqli_query($conn,$sql);
        $srcResult = mysqli_fetch_assoc($result);
        
        return $srcResult;
    }


    function chat($sender,$receiver,$text,$date)
    {
        $conn = getConnection();
        $sql = "INSERT INTO `chat` VALUES ('','{$sender}', '{$receiver}', '{$text}', '{$date}') ";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            false;
        }
    }

    function getMessage($mail)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `chat` WHERE receiver='{$mail}' order by time desc";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
        //$msgList = mysqli_fetch_assoc($result);
        //return $msgList;
    }
    
?>