<?php
    session_start();
    require_once('../DB/dbStudent/StudentFunctions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        $dept = 
        $data = getStudentData($username,$password);
        $upadte = updateStudentProfile($username,$password);

        if(isset($_POST['edit']))
        {
            header('location:StudentProfile.php');
        }
        elseif(isset($_POST['btnHome']))
        {
            header('location:StudentHome.php');
        }
        elseif(isset($_POST['btnTimeLine']))
        {
            header('location:TimeLine.php');
        }
        elseif(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['btnChat']))
        {
            header('location:Chat.php');
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
                        <button class="profile-HeaderButton" name="btnHome">Home</button>
                        <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                        <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                        <button class="profile-HeaderButton" name="btnChat">Chat</button>
                        <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                    </center>
                </td>
            </tr>
            <tr height="150px">  <!--Profile Picture -->
                <td colspan="2">
                    <center>
                            <img src="../Images/DSC_5841.JPG" height="150px" width="200px">
                            <img class="edit-button" src="../Images/editicon.png" height="20px" width="40px">
                    </center>
                </td>
            </tr>  <!--Edit Profile Button -->
            <tr height="30px">
                <td colspan="2">
                    <center>
                            
                            <input type="submit" name="edit" value="Edit Profile" class="edit-button">
                    </center>
                </td>
            </tr>
            <tr> <!--Student Personal Info -->
                <td width="60%">
                    
                    <form>
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
                                </table>
                        </fieldset>
                    </form>

                </td>
                <td width="50%"> <!--Profile Strength -->
                    <center>
                    <table border="0" width="50%">
                        <tr>
                            <td class="profileMarks" colspan="5">
                                Profile Marks 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <img src="../Images/gold.png" height="50px" width="50px">
                                </center>
                                
                            </td>
                            <td>
                                <center>
                                    <img src="../Images/gold.png" height="50px" width="50px">
                                </center>
                                
                            </td>
                            <td>
                                <center>
                                    <img src="../Images/gold.png" height="50px" width="50px">
                                </center>
                                
                            </td>

                            <td>
                                <center>
                                    <img src="../Images/gold.png" height="50px" width="50px">
                                </center>
                            </td>
                            <td>
                                <center>
                                    <img src="../Images/gold.png" height="50px" width="50px">
                                </center>
                            </td>
                        </tr>
                    </table>
                    </center>
                    
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
                                                Department :-
                                            </td>
                                            <td>
                                                <?=$data['Dept']; ?>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Program :-
                                            </td> 
                                            <td>
                                                <?=$data['Program']; ?>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="font-Normal">
                                                Semester :-
                                            </td>
                                            <td>
                                                <?=$data['SemesterNo']; ?>
                                            </td>
                                        </tr>
                                    </table>
                            </fieldset>
                        </form>

                </td>
                <td rowspan="3"> <!--CV Upload Button -->
                        <h4>Under Construction</h4>
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
                                        <td class="font-Normal" width="23%">
                                            Github :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['Github']; ?>"><?=$data['Github']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['Github']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            StackOverflow :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['StackOverFlow']; ?>"><?=$data['StackOverFlow']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['StackOverFlow']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Hacker Rank :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['HackerRank']; ?>"><?=$data['HackerRank']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['HackerRank']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Online Judge :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['UVA']; ?>"> <?=$data['UVA']; ?> </a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['UVA']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            IEEE :-
                                        </td>
                                        <td>
                                            <a href="<?=$data['IEEE']; ?>"> <?=$data['IEEE']; ?> </a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['IEEE']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio :-
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
                                            Youtube :-
                                        </td>
                                            
                                        <td>
                                            <a href="<?=$data['Youtube']; ?>"><?=$data['Youtube']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?=$data['Youtube']; ?>" class="link-Button">Go</a>
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    </form>
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