
<?php
    
    session_start();
    require_once('../DB/dbLogin/LoginFunctions.php');
    
    if(isset($_POST['submit']))
    {
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
        
        

        $status = login($uname,$pass);

        print_r($status);

        //if($status == "Student")
        if($status['status'] == "Student")
        {
            echo "Hellow";
            $_SESSION['Username'] = $uname;
            $_SESSION['Password'] = $pass;
            header('location:../Views/StudentHome.php');
        }
        elseif($status['status'] == "Alumni")
        {
            $_SESSION['Username'] = $uname;
            $_SESSION['Password'] = $pass;
            header('location:../Views/AlumniHome.php');
        }

        /*$count = login($uname,$pass);

        if($count > 0)
        {
            $_SESSION['Username'] = $uname;
            header('location:../Views/StudentHome.php');
        }
        else
        {
            header('location:../Views/Login.php?$err=Invalid Username or Password');
        }*/

        
    }

?>