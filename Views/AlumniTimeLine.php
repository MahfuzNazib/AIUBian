<?php
    session_start();
    if(isset($_SESSION['Username']))
    {

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <title>MyTimeLine</title>
</head>
<body class="body-margin">
    <table border="0" width="100%">
        <tr class="Profile-Header">
            <td width=25%>
                <center>
                    <h3><?=$_SESSION['Username'] ?></h3>
                </center>
            </td>
            <td>
                <center>
                    
                    <a href="AlumniHome.php"><button class="profile-HeaderButton">Home</button></a>
                    <a href="AlumniProfile.php"><button class="profile-HeaderButton">Profile</button></a>
                    <a href="AlumniTimeLine.php"><button class="profile-HeaderButton">TimeLine</button></a>
                    <a href="AlumniChat.php"><button class="profile-HeaderButton">Chat</button></a>
                    <a href="../php/Logout.php"><button class="profile-HeaderButton">Logout</button></a>
                    </center>
                    
            </td>
            <td width=25%>
                <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
            </td>
        </tr>

        <tr>
            <td>
                <!--Left Area-->
            </td>
            <td>
                <form>
                    <fieldset>
                        <legend>Create Post</legend>
                        <textarea row="4" col="50" placeholder="What's on Your Mind?" class="postArea" >

                        </textarea>
                    </fieldset>
                </form> <br>
                <center>
                    <button class="postsButton">Photo</button>
                    <button class="postsButton">Video</button>
                    <button class="postsButton">Post</button> <br>
                    <hr>
                    <h3>My Posts</h3>
                </center>
                
            </td>
            <td>
                <!--Right Area-->
            </td>
        </tr>

        <tr>
            <td>
                
            </td>
            <td>
                <table border="0" width="100%" class="tblbgColor-Posts" class="tblLoad">
                    <tr>
                            <tr>
                                    <td>
                                        <p class="posts-Date">11th October,2019</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="Images/a.jpg" height="250px" width="100%">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                            <button class="profile-HeaderButton">205 Likes</button>
                                        </center>
                                    </td>
                                </tr>

                                <tr>
                                        <td>
                                            <p class="posts-Date">11th October,2019</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="Images/posts1.jpg" height="250px" width="100%">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button class="profile-HeaderButton">205 Likes</button>
                                            </center>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p class="posts-Date">09th October,2019</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <video controls>
                                                <source src="Vedios/short-video-clip-nature-mp4.mp4" type="video/mp4">
                                            </video>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button class="profile-HeaderButton">95 Likes</button>
                                            </center>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p class="posts-Date">09th October,2019</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="Images/posts2.jpg" width="100%">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button class="profile-HeaderButton">09 Likes</button>
                                            </center>
                                        </td>
                                    </tr>
                    </tr>
                </table>
            </td>
            <td>

            </td>
        </tr>

        <tr>
            <td colspan="3" class="fotter">
                <center>
                    Copyright@MahfuzNazib
                </center>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
    }

    else
    {
        header('location:Login.php');
    }
?>