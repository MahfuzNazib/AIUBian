<?php
    session_start();
    require_once('../DB/dbFaculty/FacultyFunctions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        $data = getFacultyData($username,$password);

        if(isset($_POST['edit']))
        {
            header('location:FacultyProfile.php');
        }
        elseif(isset($_POST['btnHome']))
        {
            header('location:FacultyHome.php');
        }
        elseif(isset($_POST['btnTimeLine']))
        {
            header('location:FTimeLine.php');
        }
        elseif(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['btnChat']))
        {
            header('location:FChat.php');
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
    <title>FProfile</title>
</head>
<body class="body-margin">
    <form method="POST" action="#">

    <center>
        <table border="0" width="100%">

            <tr> <!--Header-->
                <td  class="Profile-Header">
                    <!--<img src="Images/pp.jpg">-->
                    <center>
                        <button class="profile-HeaderButton" name="btnHome">Home</button>
                        <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                        <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                        <button class="profile-HeaderButton" name="btnChat">Chat</button>
                        <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                    </center>
                </td>
            </tr>
            <tr height="150px">  <!--Profile Picture -->
                <td>
                    <center>
                            
                            <img src="../Images/ProfilePicture/<?=$data['ProfilePicture']; ?>" height="150px" width="200px">
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            <tr height="30px">
                <td>
                    <center>
                            
                            <input type="submit" name="edit" value="Edit Profile" class="edit-button">
                    </center>
                </td>
            </tr>
            <tr> <!--Student Personal Info -->
                <td width="50%">
          
                    
                        <fieldset>
                            <legend>Personal Info</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Name :-
                                        </td>
                                        <td>
                                            <?=$data['Name']; ?> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail :-
                                        </td>
                                        <td>
                                        <?=$data['email']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Phone No :-
                                        </td>
                                        <td>
                                        <?=$data['Phone']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Facebook Profile :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['FaceBook']; ?>"><?=$data['FaceBook']; ?></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            LinkedIn :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['LinkedIn']; ?>"><?=$data['LinkedIn']; ?></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['Portfolio']; ?>"><?=$data['Portfolio']; ?></a>
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    
                    <center>
                </td>
             
            </tr>
                
            <tr>  
                <td>  <!--Student Academic Info -->
                    
                    
                            <fieldset>
                                <legend>Academic Info</legend>
                                <table border="0" width="100%">
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                AIUB ID :-
                                            </td>
                                            <td>
                                                <?=$data['AIUB_ID']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-Normal" width="23%">
                                                Department :-
                                            </td>
                                            <td>
                                                <?=$data['Dept']; ?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="font-Normal">
                                                Semester No :-
                                            </td>
                                            <td>
                                                <?=$data['Semester']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-Normal">
                                                Published Paper :-
                                            </td>
                                            <td>
                                                <?=$data['PublishedPaper']; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Thesis Domain :-
                                            </td>
                                            <td>
                                                <?=$data['ThesisDomain']; ?>
                                            </td>
                                        </tr>


                                    </table>
                            </fieldset>
                        

                </td>
            </tr>


            <tr>  <!--Working Activity -->
                <td>
                    
                        <fieldset>
                            <legend>Working Activity</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Working Place :-
                                        </td>
                                        <td>
                                            <?=$data['WorkingPlace']; ?>
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Web Site :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['Website']; ?>"><?=$data['Website']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['Website']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Joining Date :-
                                        </td>
                                        <td>
                                            <?=$data['JoiningDate']; ?>
                                        </td>
                                        
                                    </tr>
                                    
                                </table>
                        </fieldset>
                    
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