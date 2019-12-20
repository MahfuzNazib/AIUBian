<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="App.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <title>Registration</title>
</head>
<body>
    <!--<form action="../php/RegistrationCheck.php" method="POST">-->

    
    <!--<table border="0" class="form-Center">
        <tr class="header">
            <td>
                <img src="../Images/Logo.png">
                
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
                <input type="text" name ="txtName" class="txt-Box" id="name" >
            </td>
            <td id="errorName"></td>
        </tr>
        <tr height="60px"> 
            <td class="font-Normal">
                AIUB ID
            </td>
            <td>
                <input type="text" name ="txtID" class="txt-Box" required="required">
            </td>
            <td id="errorID"></td>
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
            <td id="errorStatus"></td>
        </tr>


        <tr height="60px">
            <td class="font-Normal">
                Email
            </td>
            <td>
                <input type="email" name="txtmail" class="txt-Box" required="required">
            </td>
            <td id="errorEmail"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Phone
            </td>
            <td>
                <input type="number" name="txtphone" class="txt-Box">
            </td>
            <td id="errorPhone"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Set Username
            </td>
            <td>
               <input type="text" class="txt-Box" name="username" required="required"> 
            </td>
            <td id="errorUsername"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Password
            </td>
            <td>
                <input type="password" class="txt-Box" name="password" required="required">
            </td>
            <td id="errorPassword"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                
                <input type="submit" name="submit" class="btn-Confirm" value="Confirm" onclick="userDataValidation()">
                <input type="reset" class="btn-Reset" value="Reset">
                <center>
                        <a href="Login.php">Go to Login</a>
                </center>
            </td>
        </tr>
    </table>-->

    <!--New Form Desing -->
    <table border="0" class="form-Center">
        <tr class="header">
            <td>
                <img src="../Images/Logo.png">
                
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
                <input type="text" name ="txtName" class="txt-Box" id="name"  >
            </td>
            <td id="msgName"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                AIUB ID
            </td>
            <td>
                <input type="text" name ="txtId" class="txt-Box" id="id"  >
            </td>
            <td id="msgID"></td>
        </tr>
        
        <tr height="60px">
            <td class="font-Normal">
                Status
            </td>
            <td>
                <select class="txt-Box" id="chkStatus" >
                    <option></option>
                    <option>Faculty</option>
                    <option>Alumni</option>
                    <option>Student</option>
                </select>
            </td>
            <td id="msgStatus"></td>
        </tr>


        <tr height="60px">
            <td class="font-Normal">
                Email
            </td>
            <td>
                <input type="email" name="txtmail" class="txt-Box" id="email" >
            </td>
            <td id="msgEmail"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Phone
            </td>
            <td>
                <input type="number" name="txtphone" class="txt-Box" id="phone">
            </td>
            <td id="msgPhone"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Set Username
            </td>
            <td>
               <input type="text" class="txt-Box" name="username" id="username"> 
            </td>
            <td id="msgUserName"></td>
        </tr>

        <tr height="60px">
            <td class="font-Normal">
                Password
            </td>
            <td>
                <input type="password" class="txt-Box" name="password" id="password" >
            </td>
            <td id="msgPassword"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                
                <input type="submit" name="submit" class="btn-Confirm" value="Confirm" onclick="userDataValidation()">
                <input type="reset" class="btn-Reset" value="Reset">
                <center>
                        <a href="Login.php">Go to Login</a>
                </center>
            </td>
        </tr>
    </table>
</form>
</body>
</html>