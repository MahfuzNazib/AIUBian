<?php
    session_start();
    require_once('../DB/dbAlumni/AlumniFunctions.php');
    require_once('../DB/Functions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];
        $update = null;

        $conn = getConnection();

        $data = getAlumniData($username,$password);
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

        if(isset($_POST['submit'])) //upload Profile Picture
            {
                //update profile picture
                print_r($_FILES['image']);
                $email = $data['Email'];
                $file_name = $_FILES['image']['name'];
                $file_temp_location = $_FILES['image']['tmp_name'];
                $file_store = "../Images/ProfilePicture/".$file_name;
                move_uploaded_file($file_temp_location,$file_store);

                
                $sql = "UPDATE alumniprofile SET ProfilePicture ='{$file_name}' where Email='{$email}' ";
                if(mysqli_query($conn,$sql))
                {
                    $update = "Profile Picture Update";
                    header("refresh:1; url=AlmProfile.php");
                }
                else
                {
                    $update = "Profile Picture Not Update";
                }

            }

        if(isset($_POST['save'])) //Update Information
        {
            $email = $data['Email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $facebook = $_POST['Facebook'];
            $linkedIn = $_POST['LinkedIn'];
            $portfolio = $_POST['portfolio'];
            $dept = $_POST['dept'];
            $semester = $_POST['semester'];
            $year = $_POST['year'];
            $workingPlace = $_POST['workingPlace'];
            $website = $_POST['website'];
            $workingDomain = $_POST['workingDomain'];
            $joiningDate = $_POST['joiningDate'];

            //echo $email." ".$name." ".$phone." ".$facebook." ".$linkedIn." ".$portfolio." ".$dept." ".$semester." ".$year." ".$workingPlace." ".$website." ".$workingDomain." ".$joiningDate;
            $sql = "UPDATE alumniprofile SET Name='{$name}',Phone='{$phone}',Dept='{$dept}',Semester='{$semester}',Year='{$year}',LinkedIn='{$linkedIn}',Facebook='{$facebook}',Portfolio='{$portfolio}',WorkingDomain='{$workingDomain}',Website='{$website}',WorkingPlace='{$workingPlace}',JoiningDate='{$joiningDate}' WHERE Email='{$email}' ";
            if(mysqli_query($conn,$sql))
            {
                $update = "Successfully Updated";
                header("refresh:1; url=AlmProfile.php");
            }
            else
            {
                $update = "Something Went Wrong.Try Agian !";
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
    <title>AlumniProfile</title>
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
                            <form method="POST" enctype="multipart/form-data">
                                <input type="file" name="image"> <input type="submit" name="submit" value="Upload" class="edit-button">
                            </form>
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
        <form action="#" method="POST">
            <tr>
                <td colspan = "2">
                    <h3>
                        <center><?=$update; ?></center>
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
                                            <input type="email" class="txt-Box" name="email" value="<?=$data['Email']; ?>">
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
                                            <input type="url" class="txt-Box" name="Facebook" value="<?=$data['Facebook']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            LinkedIn
                                        </td>
                                        <td>
                                            <input type="url" class="txt-Box" name="LinkedIn" value="<?=$data['LinkedIn']; ?>">
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
                                <table border="0" width="80%">
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department
                                            </td>
                                            <td>
                                                <select class="txt-Box" name="dept">
                                                    <option> <?=$data['Dept']; ?> </option>
                                                    <option value="Faculty of Science & Information">Faculty of Science & Information</option>
                                                    <option value="Faculty of Engineering">Faculty of Engineering</option>
                                                    <option value="Faculty of Business Administration">Faculty of Business Administration</option>
                                                    <option value="Faculty of Arts and Social Science">Faculty of Arts and Social Science</option>
                                                    
                                                </select>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester
                                            </td>
                                            <td>
                                            <select class="txt-Box" name = "semester">
                                                    <option><?=$data['Semester']; ?></option>
                                                    <option value="Spring">Spring</option>
                                                    <option value="Fall">Fall</option>   
                                                    <option value="Summer">Summer</option> 
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Year
                                            </td>
                                            <td>
                                                <input type="date" class="txt-Box" name="year" value="<?=$data['Year']; ?>">
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
                                            Working Domain
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name="workingDomain" value="<?=$data['WorkingDomain']; ?>">
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
                <td colspan="2">
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