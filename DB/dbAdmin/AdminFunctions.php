<?php
    require_once('../DB/db.php');

    function getAllStudentList()
    {
        $conn = getConnection();
        $sql = "SELECT Name,ProfilePicture,email,Phone,AIUB_ID FROM studentprofile";
        //$sql = "SELECT Name,Phone,username,ProfilePicture,AIUB_ID,Phone from studentprofile,logininfo where studentprofile.email=logininfo.email";
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

    //Add New Admin

    function adminRegistration($name,$email,$phone,$address,$profilepicture)
    {
        $conn = getConnection();
        $sql = "INSERT INTO adminprofile VALUES('{$name}','{$email}','{$phone}',null,null)";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    //New Admin Login
    function adminLogin($email,$username,$password,$status)
    {
        $conn = getConnection();
        $sql = "INSERT INTO logininfo VALUES('{$email}','{$username}','{$password}','Admin')";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    //Get All MyData as Admin

    function getAdminData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM adminprofile where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    //Admin Post On His TimeLine
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

    //Delete Post

    /*function deletePost($email)
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

    //View Student Profile

    function viewStudentProfile($username)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM studentprofile WHERE email=email = (SELECT email from logininfo WHERE username='{$username}') ";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);

        return $user;
    }


    //Delete Post

    function deletePost($postId)
    {
        $conn = getConnection();
        $sql = "DELETE FROM `post` WHERE PostID = $postId ";
        $result = mysqli_query($conn,$sql);
        
        return $result;
    }
    
?>