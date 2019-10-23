<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $uname=$_POST['Username'];
        $password=$_POST['Password'];

        if(empty($uname)==true || empty($password)==true)
        {
           echo "Empty Username or Password!";
        }
        else
        {
            if($uname == $password)
            {
                $_SESSION['Username'] = $uname;
                $_SESSION['Password'] = $password;
                header('location:StudentProfile.php');
            }
            else
            {
                echo "Invalid Username or Password!";
            }
        }
    }
?>