<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['txtName'];
        $ID = $_POST['txtID'];
        $status = $_POST['status'];
        $email = $_POST['txtmail'];
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="App.css">
    <title>Registration</title>
</head>
<body>
    <form action="#" method="POST">

    
    <table border="0" class="form-Center">
        <tr class="header">
            <td>
                <marquee><img src="Images/Logo.png"></marquee>
                
            </td>
            <td>
                <h1 class=font-Create>Create Account</h1>
            </td>
        </tr>
        
        <tr height="60px">
            <td class="font-Normal">
                Full Name
            </td>
            <td>
                <input type="text" name ="txtName" class="txt-Box" required="required" >
            </td>
        </tr>
        <tr height="60px"> 
            <td class="font-Normal">
                AIUB ID
            </td>
            <td>
                <input type="text" name ="txtID" class="txt-Box" required="required">
            </td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Status
            </td>
            <td>
                <select class="txt-Box" name="status" required="required">
                    <option></option>
                    <option>Faculty</option>
                    <option>Alumni</option>
                    <option>Student</option>
                </select>
            </td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Email
            </td>
            <td>
                <input type="email" name="txtmail" class="txt-Box" required="required">
            </td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Phone
            </td>
            <td>
                <input type="number" name="txtPhone" class="txt-Box" >
            </td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Set Username
            </td>
            <td>
               <input type="text" class="txt-Box" required="required"> 
            </td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Password
            </td>
            <td>
                <input type="password" class="txt-Box" required="required">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                
                <input type="submit" name="submit" class="btn-Confirm" value="Confirm">
                <input type="reset" class="btn-Reset" value="Reset">
                <center>
                        <a href="Login.html">Go to Login</a>
                </center>
            </td>
        </tr>
    </table>
</form>
</body>
</html>