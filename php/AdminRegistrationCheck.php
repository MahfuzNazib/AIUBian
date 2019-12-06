<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');

    $name =  $_POST['Name'];
    $email =  $_POST['Email'];
    $phone = $_POST['Phone'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $address = "";
    //echo "Full Name = ".$name."<br>"."Mail = ".$email." ".$phone." ".$username." ".$password;
    $register = adminRegistration($name,$email,$phone,$address);

    if($register)
    {
        echo "Successfully Registered";
    }
    else
    {
        echo "Problem Occure in Registration";
    }
?>