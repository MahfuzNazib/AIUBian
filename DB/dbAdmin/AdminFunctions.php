<?php
    require_once('../DB/db.php');

    function getAllStudentList()
    {
        $conn = getConnection();
        $sql = "SELECT Name,ProfilePicture,email,Phone,AIUB_ID FROM studentprofile";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function getAllFacultyList()
    {
        $conn = getConnection();
        $sql = "SELECT Name,ProfilePicture,email,Phone,AIUB_ID FROM facultyprofile";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }


    function getAllAlumniList()
    {
        $conn = getConnection();
        $sql = "SELECT Name,ProfilePicture,email,Phone,AIUB_ID FROM alumniprofile";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    //Delete Student Data

    function deleteStudentData($email)
    {
        $conn = getConnection();
        $sql = "DELETE FROM studentprofile WHERE email = '{$email}' ";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function deleteFromLogin($email)
    {
        $conn = getConnection();
        $sql = "DELETE FROM logininfo WHERE email = '{$email}' ";
        $result = mysqli_query($conn,$sql);

        return $result;
    }


    //delete Alumni Data


    function deleteAlumni($email)
    {
        $conn = getConnection();
        $sql = "DELETE FROM alumniprofile WHERE Email = '{$email}'";
        $result = mysqli_query($conn,$sql);
    
        return $result;
    }

    function deleteFaculty($email)
    {
        $conn = getConnection();
        $sql = "DELETE FROM facultyprofile WHERE email = '{$email}'";
        $result = mysqli_query($conn,$sql);

        return $result;
    }


    //Get All Post

    function getAllPost()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM `post` order by Date desc";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    //Get Faculty Post

    function getFacultyPost()
    {
        $conn = getConnection();
        $sql = " SELECT * FROM `post` WHERE Status='Faculty'  order by Date desc";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    //Get Alumni Post

    function getAlumniPost()
    {
        $conn = getConnection();
        $sql = " SELECT * FROM `post` WHERE Status='Alumni'  order by Date desc";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    //GetStudent Post

    function getStudentPost()
    {
        $conn = getConnection();
        $sql = " SELECT * FROM `post` WHERE Status='Student'  order by Date desc";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    
?>