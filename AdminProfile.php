<?php
    session_start();
    if(isset($_SESSION['Username']))
    {

        if(isset($_POST['btnHome']))
        {
            header('location:Admin.php');
        }
        if(isset($_POST['btnProfile']))
        {
            header('location:AdminProfile.php');
        }
        if(isset($_POST['btnTimeLine']))
        {
            header('location:AdminTimeLine.php');
        }
        if(isset($_POST['btnChat']))
        {
            header('location:AdminChat.php');
        }
        if(isset($_POST['btnLogout']))
        {
            header('location:Logout.php');
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <link rel="stylesheet" href="Admin.css">
    <title>Admin Profile</title>
</head>
<body class="body-margin">
        <form action="#" method="POST">
                <table border="0" width="100%">
                    <tr class="Profile-Header">
                        <td width="25%">
                            <center>
                                <h3>
                                    <i>
                                        <a href="Admin.php" class="login-link">
                                            <?=$_SESSION['Username'] ?>
                                        </a>
                                    </i>
                                </h3>
                            </center>
                        </td>
                        <td>
                            <center>
                                <button class="profile-HeaderButton" name="btnHome">Home</button>
                                <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                                <button class="profile-HeaderButton" name="btnChat">Chat</button>
                                <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                                <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                                
                            </center>
        
                        </td>
                        <td width="25%">
                                <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <center>
                                <img src="Images/DSC_5841.JPG" height="150px" width="200px">
                            </center>
                        </td>
                        
                    </tr>
                    <tr height="30px">
                        <td colspan="3">
                            <center>
                                <input type="submit" name="submit" value="Edit Profile" class="edit-button">
                            </center>
                        </td>
                    </tr>
                </table> <br>
                <center>
                    <table>
                    <tr>
                        <td class="AP">
                            Name : 
                        </td>
                        <td>
                            Nazib Mahfuz
                        </td>
                    </tr>

                    <tr>
                        <td class="AP">
                            Email : 
                        </td>
                        <td>
                            nazibmahfuz60@gmail.com
                        </td>
                    </tr>

                    <tr>
                        <td class="AP">
                            Phone : 
                        </td>
                        <td>
                            01777127618
                        </td>
                    </tr>

                    <tr>
                        <td class="AP">
                            Address : 
                        </td>
                        <td>
                            ABCV
                        </td>
                    </tr>
                </table>
                </center>
                
        </form>
</body>
</html>

<?php
    }
    else
    {
        header('location:Login.php');
    }
?>