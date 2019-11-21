<?php
    require_once('../DB/db.php');


    function AlumniProfile($email,$name,$aiub_id,$phone)
    {
        $conn = getConnection();
        $sql = "INSERT INTO alumniprofile VALUES('{$email}','{$name}','{$aiub_id}','{$phone}',null,null,null,null,null,null,null)";
        if(mysqli_query($conn,$sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getData($username,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM alumniprofile where email = (select email from logininfo where username='{$username}' and Password='{$password}')";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }
?>