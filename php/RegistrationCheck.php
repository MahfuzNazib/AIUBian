<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['txtName'];
        $ID = $_POST['txtID'];
        $status = $_POST['status'];
        $email = $_POST['txtmail'];
        $phone = $_POST['txtphone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $conn = mysqli_connect('localhost','root','','test');
        if(!$conn)
        {
            die("Connection Failed : ". mysqli_connect_error());
        }
        $sql = "INSERT INTO studentlist values('{$name}','{$ID}','{$email}',{$phone})";
        if(mysqli_query($conn,$sql))
        {
            echo "Successfully Registered.";
        }
        else
        {
            echo "Error : ".$sql."<br>".mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>