
<?php
    
    session_start();
    require_once('../DB/dbLogin/LoginFunctions.php');
    
    if(isset($_POST['submit']))
    {
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
        
        

        $status = logininfo($uname,$pass);

        //print_r($status);
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
        elseif($status['status'] == "Faculty")
        {
            $_SESSION['Username'] = $uname;
            $_SESSION['Password'] = $pass;
            header('location:../Views/FacultyHome.php');
        }
        elseif($status['status'] == "Admin")
        {
            $_SESSION['Username'] = $uname;
            $_SESSION['Password'] = $pass;
            header('location:../Views/Admin/Admin.php');
        }
        else
        {
            header('location:../Views/Login.php?$err = Invalid Username or Password');
        }
    }

?>