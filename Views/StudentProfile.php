<?php
    session_start();
    require_once('../DB/dbStudent/StudentFunctions.php');
    
    if(isset($_SESSION['Username']))
    {
        $conn = getConnection();  //DataBase Connection

        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];
        $update = null;
        $data = getStudentData($username,$password);

        if(isset($_POST['profile']))
        {
            header('location:SProfile.php');
        }
        elseif(isset($_POST['logout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['timeline']))
        {
            header('location:TimeLine.php');
        }
        elseif(isset($_POST['home']))
        {
            header('location:StudentHome.php');
        }
        elseif(isset($_POST['chat']))
        {
            header('location:Chat.php');
        }

        if(isset($_POST['submit']))
            {
                //update profile picture
                $file_name = $_FILES['image']['name'];
                $file_temp_location = $_FILES['image']['tmp_name'];
                $file_store = "../Images/ProfilePicture/".$file_name;
                move_uploaded_file($file_temp_location,$file_store);
                
                $sql = "UPDATE studentprofile SET ProfilePicture='{$file_name}'";
                if(mysqli_query($conn,$sql))
                {
                    $update = "Profile Picture Update";
                    header("refresh:1; url=StudentProfile.php");
                }
                else
                {
                    $update = "Profile Picture Not Update";
                }

            }

        if(isset($_POST['save']))
        {
            $email = $data['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $dept = $_POST["dept"];
            $program = $_POST['program'];
            $semester = $_POST['semester'];
            $linkedIn = $_POST['txtLinkedIn'];
            $github = $_POST['txtGithub'];
            $stackoverflow = $_POST['txtStackOverflow'];
            $hackerrank = $_POST['txtHackerRank'];
            $onlinejudge = $_POST['OnlineJudge'];
            $ieee = $_POST['txtIEEE'];
            $portfolio = $_POST['txtPortfolio'];
            $youtube = $_POST['txtYoutube'];

            $sql = "UPDATE studentprofile SET Name='{$name}',Phone='{$phone}',Dept='{$dept}',Program='{$program}',SemesterNo='{$semester}',LinkedIn='{$linkedIn}',Github='{$github}',StackOverFlow='{$stackoverflow}',HackerRank='{$hackerrank}',UVA='{$onlinejudge}',IEEE='{$ieee}',Website='{$portfolio}',Youtube='{$youtube}' where email='{$email}'";
            if(mysqli_query($conn,$sql))
            {
                $update =  "Successfully Updated";
                header("refresh:1; url=StudentProfile.php");
            }
            else
            {
                $update = "Something went Wrong.Try Again";
            }
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

            <tr>
                <td colspa="2">
                    <h3>
                        <?=$update ?>
                    </h3>
                </td>
            </tr>
            <tr> <!--Header-->
                <td colspan="2" class="Profile-Header">
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
            </form>
            <tr height="150px">  <!--Profile Picture -->
                <td colspan="2">
                    <center>
                            <img src="../Images/ProfilePicture/<?=$data['ProfilePicture']; ?>" height="150px" width="200px">
                            <!--<img class="edit-button" src="Images/editicon.png" height="20px" width="40px">-->
                            <form method="POST" enctype="multipart/form-data">
                                <input type="file" name="image"> <input type="submit" name="submit" value="Upload Profile Picture">
                            </form>
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            <form method="POST" action="#">
            
            <tr> <!--Student Personal Info -->
                <td width="50%">
                    
                    
                        <fieldset>
                            <legend>Personal Info</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Name
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name ="name" value="<?=$data['Name']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail
                                        </td>
                                        <td>
                                            <input type="email" class="txt-Box" name="mail" value="<?=$data['email']; ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Phone No
                                        </td>
                                        <td>
                                            <input type="number" class="txt-Box" name="phone" value="<?=$data['Phone']; ?>">
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    

                </td>
                <td width="50%"> <!--Profile Strength -->
                    <p>Student Profile Marks</p>
                </td>
            </tr>
                
            <tr>  
                <td>  <!--Student Academic Info -->
                            <fieldset>
                                <legend>Academic Info</legend>
                                <table border="0" width="100%">
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department
                                            </td>
                                            <td>
                                                <select class="txt-Box" name="dept">
                                                    <option><?=$data["Dept"]; ?></option>
                                                    <option value="Faculty of Science & Technology">Faculty of Science & Technology</option>
                                                    <option value="Faculty of Engineering">Faculty of Engineering</option>
                                                    <option value="Faculty of Art Social Sciences">Faculty of Art Social Sciences</option>
                                                    <option value="Faculty of Business Administration">Faculty of Business Administration</option>
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Program
                                            </td>
                                            <td>
                                                <select class="txt-Box" name = "program">
                                                    <option><?=$data['Program']; ?></option>
                                                    <option value="CSE">CSE</option>
                                                    <option value="CSSE">CSSE</option>
                                                    <option value="CIS">CIS</option>
                                                    <option value="CS">CS</option>
                                                    <option value="EEE">EEE</option>
                                                    <option value="CoE">CoE</option>
                                                    <option value="BBA">BBA</option>
                                                    <option value="Arch.">Arch.</option>
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester
                                            </td>
                                            <td>
                                                <input type="number" class="txt-Box" name="semester" value="<?=$data['SemesterNo']; ?>">
                                            </td>
                                        </tr>
                                    </table>
                            </fieldset>
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
                        <fieldset>
                            <legend>Others Activity</legend>
                            <table border="0" width="100%">

                                     <tr>
                                        <td class="font-Normal" width="20%">
                                            LinkedIn
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name ="txtLinkedIn" value="<?=$data['LinkedIn']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['LinkedIn']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal" width="20%">
                                            Github
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name ="txtGithub" value="<?=$data['Github']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['Github']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            StackOverflow
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtStackOverflow" value="<?=$data['StackOverFlow']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['StackOverFlow']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Hacker Rank
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtHackerRank" value="<?=$data['HackerRank']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['HackerRank']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Online Judge
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="OnlineJudge" value="<?=$data['UVA']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['UVA']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            IEEE
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtIEEE" value="<?=$data['IEEE']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['IEEE']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="txtPortfolio" value="<?=$data['Website']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['Website']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Youtube
                                        </td>
                                        
                                        <td>
                                            <input type="url" class="txt-Box" name="txtYoutube" value="<?=$data['Youtube']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?=$data['Youtube']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    
                </td>
            </tr>
            <tr> <!--Buttons -->
                <td>
                    <center>
                        <button class="btn-Confirm" name="save">Save</button>
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