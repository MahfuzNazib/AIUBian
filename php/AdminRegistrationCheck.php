<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');

    $name =  $_POST['Name'];
    $email =  $_POST['Email'];
    $phone = $_POST['Phone'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $address = "";
    $profilePicture = null;
    $status = "Admin";
    if($name == "" && $email == "" && $phone == "" && $username == "" && $password == "")
    {
        sleep(2);
        echo "404 Bad Request";
        header('location:../Views/Login.php');
    }
    else
    {

        $register = adminRegistration($name,$email,$phone,$address,$profilePicture);
        $login = adminLogin($email,$username,$password,$status);

        if($register && $login)
        {
            echo "Successfully Registered";
        }
        else
        {
            echo "Problem Occure in Registration";
        }
    }

?>