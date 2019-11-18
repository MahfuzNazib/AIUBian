<?php
    session_start();
    if(isset($_SESSION['Username']))
    {
        if(isset($_POST['profile']))
        {
            header('location:AdminProfile.php');
        }
        elseif(isset($_POST['logout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['timeline']))
        {
            header('location:AdminTimeLine.php');
        }
        elseif(isset($_POST['home']))
        {
            header('location:Admin.php');
        }
        elseif(isset($_POST['chat']))
        {
            header('location:AdminChat.php');
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <title>AdminProfile</title>
</head>
<body class="body-margin">
    <form method="POST" action="#">

    <center>
        <table border="0" width="100%">

            <tr> <!--Header-->
                <td class="Profile-Header">
                    <!--<img src="Images/pp.jpg">-->
                    <center>
                        <button class="profile-HeaderButton" name="home">Home</button>
                        <button class="profile-HeaderButton" name="profile">Profile</button>
                        <button class="profile-HeaderButton" name="timeline">TimeLine</button>
                        <button class="profile-HeaderButton" name="chat">Chat</button>
                        <button class="profile-HeaderButton" name="logout">Logout</button>
                        
                    </center>
                </td>
            </tr>
            <tr height="150px">  <!--Profile Picture -->
                <td>
                    <center>
                            <img src="../Images/me.png" height="150px" width="200px">
                            <!--<img class="edit-button" src="Images/editicon.png" height="20px" width="40px">-->
                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="file">
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            
            <tr> <!--Student Personal Info -->
                <td width="50%">
                    
                    <form>
                        <fieldset>
                            <legend>Personal Info</legend>
                            <table border="0" width="80%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Name
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name ="txtName" value="Nazib Mahfuz">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail
                                        </td>
                                        <td>
                                            <input type="email" class="txt-Box" name="txtMail" value = "nazibmahfuz60@gmail.com">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Phone No
                                        </td>
                                        <td>
                                            <input type="number" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Address 
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Username
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Password
                                        </td>
                                        <td>
                                            <input type="password" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    </form>

                </td>
            </tr>
            <tr> <!--Buttons -->
                <td>
                    <center>
                        <button class="btn-Confirm">Save</button>
                        <button class="btn-Reset">Delete</button>
                    </center>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="fotter">
                    <center>
                        Copyright@MahfuzNazib
                    </center>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
    }

    else
    {
        header('location:Login.php');
    }
?>