<?php
    session_start();
    if(isset($_SESSION['Username']))
    {

        if(isset($_POST['edit']))
        {
            header('location:AlumniProfile.php');
        }
        elseif(isset($_POST['btnHome']))
        {
            header('location:AlumniHome.php');
        }
        elseif(isset($_POST['btnTimeLine']))
        {
            header('location:ATimeLine.php');
        }
        elseif(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
        }
        elseif(isset($_POST['btnChat']))
        {
            header('location:AChat.php');
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
    <title>Alumni Profile</title>
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
                            <img src="../Images/zaheed.png" height="150px" width="200px">
                            <img class="edit-button" src="../Images/editicon.png" height="20px" width="40px">
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
          
                    <form>
                        <fieldset>
                            <legend>Personal Info</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Name :-
                                        </td>
                                        <td>
                                            Zaheed Sabur
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            E-mail :-
                                        </td>
                                        <td>
                                            zaheed@.gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Phone No :-
                                        </td>
                                        <td>
                                            01258962555
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Facebook Profile :-
                                        </td>
                                        <td>
                                            <a href="https://www.facebook.com/alamin200290">Zaheed Sabur</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            LinkedIn :-
                                        </td>
                                        <td>
                                            <a href="https://www.facebook.com/alamin200290">Al Amin</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Portfolio :-
                                        </td>
                                        <td>
                                            <a href="https://www.facebook.com/alamin200290">alamin.github.io</a>
                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    </form>
                    <center>
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
                                                Computer Science (CS)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-Normal">
                                                Semester :-
                                            </td>
                                            <td>
                                                Spring
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="font-Normal">
                                                Year :-
                                            </td>
                                            <td>
                                                2005
                                            </td>
                                        </tr>

                                        
                                    </table>
                            </fieldset>
                        </form>

                </td>
            </tr>


            <tr>  <!--Working Activity -->
                <td>
                    <form>
                        <fieldset>
                            <legend>Working Activity</legend>
                            <table border="0" width="100%">
                                    <tr>
                                        <td class="font-Normal" width="23%">
                                            Working Place :-
                                        </td>
                                        <td>
                                            Google
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Web Site :-
                                        </td>
                                        <td>
                                            <a href="https://google.com/">www.google.com</a>
                                        </td>
                                        <td>
                                            <a href="http://www.aiub.edu/" class="link-Button">Go</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="font-Normal">
                                            Joining Date :-
                                        </td>
                                        <td>
                                            02-09-2014
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