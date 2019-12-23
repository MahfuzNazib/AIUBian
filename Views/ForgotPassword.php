<?php
    require_once('../DB/Functions.php');
    if(isset($_POST['submit']))
    {
        $username = $_POST['txtusername'];
        $mail = $_POST['txtmail'];
        $status = $_POST['chkStatus'];

        $password = forgotpassword($username,$mail,$status);
        
        if($password == true)
        {  
            $pass = "<h3><center><font color=green>Your Password is : <u>".$password['password']."</font></center></u> </h3>";
        }
        else
        {
            $pass = '<h3><center><font color="red">Incorrect Information.</font></center></u> </h3>';
        }
        
        echo $pass;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="App.css">
    <link rel="stylesheet" href="../Views/Admin.css">
    <title>Forgot_Password</title>
</head>
<body>
    <form action="#" method="POST">
        <table border="0" class="form-Center">
            <tr class="header">
                <td>
                    <img src="../Images/forgot.png" height="100px" width="150px">
                    
                </td>
                <td>
                    <h1 class=font-Create>Forgot Password</h1>
                </td>
            </tr>
            
            <tr height="60px">
                <td class="font-Normal">
                    Username
                </td>
                <td>
                    <input type="text" name ="txtusername" class="txt-Box"  >
                </td>
                <td id="msgName"></td>
            </tr>
        

            <tr height="60px">
                <td class="font-Normal">
                    Email
                </td>
                <td>
                    <input type="email" name="txtmail" class="txt-Box" >
                </td>
                <td id="msgEmail"></td>
            </tr>

            
            <tr height="60px">
                <td class="font-Normal">
                    Status
                </td>
                <td>
                    <select class="txt-Box" name="chkStatus" >
                        <option></option>
                        <option>Faculty</option>
                        <option>Alumni</option>
                        <option>Student</option>
                    </select>
                </td>
                <td id="msgStatus"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <center>
                        <p>
                            
                        </p>
                    </center>
                    
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <center>
                        <input type="submit" name="submit" class="btn-Confirm" value="Find Password" ><br>
                        <a href="Login.php">Go to Login</a>
                    </center>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>