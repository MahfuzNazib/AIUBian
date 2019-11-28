<?php
    session_start();
    require_once('../DB/dbFaculty/FacultyFunctions.php');
    if(isset($_SESSION['Username']))
    {
        $conn = getConnection();

        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];
        $update = null;
        $data = getFacultyData($username,$password);

        if(isset($_POST['profile']))
        {
            header('location:FProfile.php');
        }
        elseif(isset($_POST['logout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['timeline']))
        {
            header('location:FTimeLine.php');
        }
        elseif(isset($_POST['home']))
        {
            header('location:FacultyHome.php');
        }
        elseif(isset($_POST['chat']))
        {
            header('location:FacultyChat.php');
        }

        //update Profile Picture

        if(isset($_POST['submit']))
        {
            //update profile picture
            print_r($_FILES['image']);
            $email = $data['email'];
            $file_name = $_FILES['image']['name'];
            $file_temp_location = $_FILES['image']['tmp_name'];
            $file_store = "../Images/ProfilePicture/".$file_name;
            move_uploaded_file($file_temp_location,$file_store);
            
            $sql = "UPDATE facultyprofile SET ProfilePicture='{$file_name}' where email='{$email}'";
            if(mysqli_query($conn,$sql))
            {
                $update = "Profile Picture Updated";
                
                header("refresh:1; url=FacultyProfile.php");
            }
            else
            {
                $update = "Profile Picture Not Updated";
                echo $email;
            }
        }
        //Update Profile Information

        if(isset($_POST['save']))
        {
            $email = $data['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $facebook = $_POST['faceBook'];
            $linkedIn = $_POST['linkedIn'];
            $portfolio = $_POST['portfolio'];
            $aiubId = $_POST['AIUB_ID'];
            $dept = $_POST['dept'];
            $semester = $_POST['semester'];
            $publishedPaper = $_POST['publishedPaper'];
            $thesisDomain = $_POST['thesisDomain'];
            $workingPlace = $_POST['workingPlace'];
            $website = $_POST['website'];
            $joiningDate = $_POST['joiningDate'];

            echo $email.$name.$phone.$facebook.$linkedIn.$portfolio.$aiubId.$dept.$semester.$publishedPaper.$thesisDomain.$workingPlace.$website.$joiningDate;

            $sql = "UPDATE facultyprofile SET Name='{$name}',Phone='{$phone}',AIUB_ID='{$aiubId}',Dept='{$dept}', Semester='{$semester}',ThesisDomain='{$thesisDomain}',PublishedPaper='{$publishedPaper}',Portfolio='{$portfolio}',LinkedIn='{$linkedIn}',FaceBook='{$facebook}',WorkingPlace='{$workingPlace}',Website='{$website}',JoiningDate='{$joiningDate}' where email='{$email}' ";
            if(mysqli_query($conn,$sql))
            {
                $update = "Successfully Updated";
                header("refresh:1; url=FacultyProfile.php");
            }
            
            else
            {
                $update = "Something Wrong.Try again!";

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
            </form>
            <tr height="150px">  <!--Profile Picture -->
                <td>
                    <center>
                            <img src="../Images/ProfilePicture/<?=$data['ProfilePicture']; ?>" height="150px" width="200px">
                            <!--<img class="edit-button" src="Images/editicon.png" height="20px" width="40px">-->
                            <form method="POST" enctype="multipart/form-data">
                                <input type="file" name="image"> <input type="submit" name="submit" value="Upload" class="edit-button">
                            </form>
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            <form method="POST" action="#">
            <tr>
                <td colspan="2">
                    <h3>
                        <center>
                            <?=$update; ?>
                        </center>
                    </h3>
                </td>
            </tr>
            <tr> <!--Student Personal Info -->
                <td width="50%">
                    
                    
                        <fieldset>
                            <legend>Personal Info</legend>
                            <table border="0" width="80%">
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
                                            <input type="email" class="txt-Box" name="email" value="<?=$data['email']; ?>" disabled>
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

                                    <tr>
                                        <td class="font-Normal">
                                            Facebook 
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="faceBook" value="<?=$data['FaceBook']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            LinkedIn
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="linkedIn" value="<?=$data['LinkedIn']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="portfolio" value="<?=$data['Portfolio']; ?>">
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    

                </td>
            </tr>
                
            <tr>  
                <td>  <!--Student Academic Info -->
                    
                    
                            <fieldset>
                                <legend>Academic Info</legend>
                                <table border="0" width="80%">.
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                AIUB ID
                                            </td>
                                            <td>
                                                <input type="text" class="txt-Box" name="AIUB_ID" value="<?=$data['AIUB_ID']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department
                                            </td>
                                            <td>
                                                <select class="txt-Box" name="dept">
                                                    <option><?=$data['Dept']; ?></option>
                                                    <option value="Faculty of Science & Technology">Faculty of Science & Technology</option>
                                                    <option value="Faculty of Engineering">Faculty of Engineering</option>
                                                    <option value="Faculty of Art Social Sciences">Faculty of Art Social Sciences</option>
                                                    <option value="Faculty of Business Administration">Faculty of Business Administration</option>
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester
                                            </td>
                                            <td>
                                                <input type="number" class="txt-Box" name="semester" value="<?=$data['Semester']; ?>">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Published Paper
                                            </td>
                                            <td>
                                                <input type="number" class="txt-Box" name="publishedPaper" value="<?=$data['PublishedPaper']; ?>">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Thesis Domain
                                            </td>
                                            <td>
                                                <input type="text" class="txt-Box" name="thesisDomain" value="<?=$data['ThesisDomain']; ?>">
                                            </td>
                                        </tr>
                                    </table>
                            </fieldset>
                       

                </td>
            </tr>

            <tr>  <!--Student Others Info -->
                <td>
                    
                        <fieldset>
                            <legend>Working Activity</legend>
                            <table border="0" width="80%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Working Place
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name ="workingPlace" value="<?=$data['WorkingPlace']; ?>">
                                        </td>
                                    
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Website
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="website" value="<?=$data['Website']; ?>">
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Joining Date
                                        </td>
                                        <td>
                                            <input type="date" class="txt-Box" name="joiningDate" value="<?=$data['JoiningDate']; ?>">
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