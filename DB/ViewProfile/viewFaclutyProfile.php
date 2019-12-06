<?php
    require_once('../DB/db.php');

    function viewFacultyProfile($username)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM facultyprofile WHERE email = (SELECT email from logininfo WHERE username='{$username}')";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);

        return $user;
    }

?>