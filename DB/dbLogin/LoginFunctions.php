<?php
    require_once('../DB/db.php');
    
    function login($username, $password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM logininfo WHERE username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);

        if(count($user) > 0)
        {
            $conn = getConnection();
            $query = "select status from logininfo where username='{$username}' and password='{$password}'";
            $rst = mysqli_query($conn,$query);
            $status = mysqli_fetch_assoc($rst);
    
            return $status;
        }
    }
?>