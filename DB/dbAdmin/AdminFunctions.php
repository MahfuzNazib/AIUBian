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
        //header('location:../Views/Admin/MemberList.php');
    }
?>