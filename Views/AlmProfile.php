<?php
    session_start();
    if(isset($_SESSION['Username']))
    {
        if(isset($_POST['profile']))
        {
            header('location:AlumniProfile.php');
        }
        elseif(isset($_POST['logout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['timeline']))
        {
            header('location:AlumniTimeLine.php');
        }
        elseif(isset($_POST['home']))
        {
            header('location:AlumniHome.php');
        }
        elseif(isset($_POST['chat']))
        {
            header('location:AlumniChat.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <title>StudentProfile</title>
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
                            <img src="../Images/zaheed.png" height="150px" width="200px">
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
                                            <input type="text" class="txt-Box" name ="txtName">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail
                                        </td>
                                        <td>
                                            <input type="email" class="txt-Box" name="txtMail">
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
                                            Facebook 
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            LinkedIn
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtPhone">
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    </form>

                </td>
            </tr>
                
            <tr>  
                <td>  <!--Student Academic Info -->
                    
                    <form>
                            <fieldset>
                                <legend>Academic Info</legend>
                                <table border="0" width="80%">
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department
                                            </td>
                                            <td>
                                                <select class="txt-Box">
                                                    <option>Computer Science</option>
                                                    <option>Computer Science & Engineering</option>
                                                    <option>Computer Science &  Software Engineering</option>
                                                    <option>Computer Engineering</option>
                                                    <option>Electrical & Electronics Engineering</option>
                                                    <option>Bachalor of Business Administration</option>
                                                    <option>Business Information</option>
                                                    <option>Architecture</option>
                                                    
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester
                                            </td>
                                            <td>
                                            <select class="txt-Box">
                                                    <option>Spring</option>
                                                    <option>Fall</option>   
                                                    <option>Summer</option> 
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Year
                                            </td>
                                            <td>
                                                <input type="date" class="txt-Box" name="txtPhone">
                                            </td>
                                        </tr>
                                    </table>
                            </fieldset>
                        </form>

                </td>
            </tr>

            <tr>  <!--Student Others Info -->
                <td>
                    <form>
                        <fieldset>
                            <legend>Working Activity</legend>
                            <table border="0" width="80%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Working Place
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name ="txtGithub">
                                        </td>
                                    
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Website
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtStackOverflow">
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Joining Date
                                        </td>
                                        <td>
                                            <input type="date" class="txt-Box" name="txtHackerRank">
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