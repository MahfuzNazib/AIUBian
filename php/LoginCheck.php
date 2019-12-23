
<?php
    
    session_start();
    require_once('../DB/dbLogin/LoginFunctions.php');
    
    if(isset($_POST['submit']))
    {
        $errMessage = null;

        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
        
        //php Validation

        if($uname == "")
        {
            $errMessage =  "Empty Username";
        }
        else
        {
            if($pass == "")
            {
                $errMessage =  "Empty Password";
            }
            
        }
       

        $status = logininfo($uname,$pass);

        //print_r($status);
        if($status['status'] == "Student")
        {
            
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
            header('location:../Views/Admin.php');
        }
        else
        {
            
            if($uname != "" && $pass!= "")
            {
                $errMessage =  "Invalid Username or Password";
            }
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Views/Admin.css">
    <title>Error</title>
</head>
<body>
    <center>
        <div class = "msgDelete"> <?=$errMessage; ?> </div>
        <a href="../Views/Login.php"><button class="backButton">Login</button></a>

        <div>
            <img src="../Images/error.gif" width="80%" height="600px">
        </div>
    </center>

    
</body>
</html>