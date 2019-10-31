<?php
    session_start();
    if(isset($_SESSION['Username']))
    {
        if(isset($_POST['profile']))
        {
            header('location:SProfile.php');
        }
        elseif(isset($_POST['logout']))
        {
            header('location:Logout.php');
        }
        elseif(isset($_POST['timeline']))
        {
            header('location:TimeLine.php');
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
                <td colspan="2" class="Profile-Header">
                    <!--<img src="Images/pp.jpg">-->
                    <center>
                        <button class="profile-HeaderButton" name="home">Home</button>
                        <button class="profile-HeaderButton" name="profile">Profile</button>
                        <button class="profile-HeaderButton" name="timeline">TimeLine</button>
                        <button class="profile-HeaderButton" name="logout">Logout</button>
                        
                    </center>
                </td>
            </tr>
            <tr height="150px">  <!--Profile Picture -->
                <td colspan="2">
                    <center>
                            <img src="Images/DSC_5841.JPG" height="150px" width="200px">
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
                            <table border="0" width="100%">
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
                                </table>
                        </fieldset>
                    </form>

                </td>
                <td width="50%"> <!--Profile Strength -->
                    <p>Student Profile Marks</p>
                </td>
            </tr>
                
            <tr>  
                <td>  <!--Student Academic Info -->
                    
                    <form>
                            <fieldset>
                                <legend>Academic Info</legend>
                                <table border="0" width="100%">
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department
                                            </td>
                                            <td>
                                                <select class="txt-Box">
                                                    <option>Faculty of Science & Technology</option>
                                                    <option>Faculty of Engineering</option>
                                                    <option>Faculty of Art Social Sciences</option>
                                                    <option>Faculty of Business Administration</option>
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Program
                                            </td>
                                            <td>
                                                <select class="txt-Box">
                                                    <option>CSE</option>
                                                    <option>CSSE</option>
                                                    <option>CIS</option>
                                                    <option>CS</option>
                                                    <option>EEE</option>
                                                    <option>CoE</option>
                                                    <option>BBA</option>
                                                    <option>Arch.</option>
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester
                                            </td>
                                            <td>
                                                <input type="number" class="txt-Box" name="txtPhone">
                                            </td>
                                        </tr>
                                    </table>
                            </fieldset>
                        </form>

                </td>
                <td rowspan="3"> <!--CV Upload Button -->
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <button type="submit" name=submit>Upload CV</button>
                        <a href="Files/MyCV.pdf" target="_blank">View CV</a>
                    </form>
                </td>
            </tr>

            <tr>  <!--Student Others Info -->
                <td>
                    <form>
                        <fieldset>
                            <legend>Others Activity</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="20%">
                                            Github
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name ="txtGithub">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            StackOverflow
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtStackOverflow">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Hacker Rank
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtHackerRank">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Online Judge
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="OnlineJudge">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            IEEE
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtIEEE">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtPortfolio">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Youtube
                                        </td>
                                        
                                        <td>
                                            <input type="url" class="txt-Box" name="txtYoutube">
                                        </td>
                                        <td>
                                            <a href="#" class="link-Button">Go</a>
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