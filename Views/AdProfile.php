<?php
    session_start();
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        $data = getAdminData($username,$password);

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

        //Update Data
        if(isset($_POST['save']))
        {
            echo "Connected";
            //getData First
            $name = $_POST['txtName'];
            $email = $data['email'];
            $phone = $_POST['txtPhone'];
            $address = $_POST['txtAddress'];
            
            $conn = getConnection();
            $sql = "UPDATE adminprofile SET Name='{$name}',phone='{$phone}',address='{$address}' WHERE email='{$email}'";
            
            if(mysqli_query($conn,$sql))
            {
                echo "Successfully Updated";
                header("refresh:1; url=AdProfile.php");
            }
            else
            {
                echo "Problem Occure in Update";
            }
        }

        //update Profile Picture
        if(isset($_POST['submit'])) //upload Profile Picture
            {
                //update profile picture
                print_r($_FILES['image']);
                $email = $data['email'];
                $file_name = $_FILES['image']['name'];
                $file_temp_location = $_FILES['image']['tmp_name'];
                $file_store = "../Images/ProfilePicture/".$file_name;
                move_uploaded_file($file_temp_location,$file_store);

                $conn = getConnection();
                $sql = "UPDATE adminprofile SET profilepicture ='{$file_name}' where email='{$email}'";
                if(mysqli_query($conn,$sql))
                {
                    $echo = "Profile Picture Update";
                    header("refresh:1; url=AdProfile.php");
                }
                else
                {
                    $echo = "Profile Picture Not Update";
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
            </form>
            <tr height="150px">  <!--Profile Picture -->
                <td>
                    <center>
                    <img src="../Images/ProfilePicture/<?=$data['profilepicture']; ?>" height="150px" width="200px">
                            <!--<img class="edit-button" src="Images/editicon.png" height="20px" width="40px">-->
                            <form method="POST" enctype="multipart/form-data">
                                <input type="file" name="image"> <input type="submit" name="submit" value="Upload" class="edit-button">
                            </form>
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            <form method="POST" action="#">
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
                                            <input type="text" class="txt-Box" name ="txtName" value="<?=$data['Name']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail
                                        </td>
                                        <td>
                                            <input type="email" class="txt-Box" name="txtMail" value="<?=$data['email']; ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Phone No
                                        </td>
                                        <td>
                                            <input type="number" class="txt-Box" name="txtPhone" value="<?=$data['phone']; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Address 
                                        </td>
                                        <td>
                                            <input type="text" class="txt-Box" name="txtAddress" value="<?=$data['address']; ?>">
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