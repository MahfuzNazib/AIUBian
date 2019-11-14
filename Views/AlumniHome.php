<?php
    session_start();
    if(isset($_SESSION['Username']))
    {

        if(isset($_POST['btnProfile']))
        {
            header('location:AlumniProfile.php');
        }
        elseif(isset($_POST['btnTimeLine']))
        {
            header('location:AlumniTimeLine.php');
        }
        elseif(isset($_POST['btnChat']))
        {
            header('location:AdminChat.php');
        }
        elseif(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
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
    <title>Alumni Home</title>
</head>
<body class="body-margin">
    <form action="#" method="POST">
    <table border="0" width="100%">
        <tr class="Profile-Header">
            <td width=25%>
                <center>
                    <h3><?=$_SESSION['Username'] ?></h3>
                </center>
            </td>
            <td>
                <center>
                    <button class="profile-HeaderButton">Home</button>
                    
                    <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                    <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                    <button class="profile-HeaderButton" name="btnChat">Chat</button>
                    <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                    </center>
                    
            </td>
            <td width=25%>
                <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <center>
                    <button class="btnPost" name="btnAllPost">All Post</button>
                    <button class="btnPost" name="btnFacultyPost">FacultyPost</button>
                    <button class="btnPost" name="btnAlumniPost">AlumniPost</button>
                    <button class="btnPost" name="btnStudentPost">StudentPost</button>
                </center>
            </td>
        </tr>

    </table>
    </form>
<?php
    }
    else
    {
        header('location:Login.php');
    }
    if(isset($_POST['btnFacultyPost']))  //Faculty Post
    {
?>

    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Faculty Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Zahid Sabur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        Joining Google Principle Engineer<br>
                        Works at- Google
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Niloy</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/NiloySir.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/boysimg.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Ali Hasan</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        vkfjdbvkjdfbvjkbfdv<br>
                        jbfdbvfdjkbvkjfdbv<br>
                        kjbvfdbvjdfkbdkjbdfjk<br>
                        jdhfvcdfjhvbfdjkbvjkfdnvkfbvdfbvdfbvbdfjbvdfkj
                        djhvbdfjhvbfdvbdfkvbfdkvbdjfkvdf
                        fdkvdfkvbdfkvbdfvd
                        fdkvbdfjvbdfvnd
                        vdfjvdfkvbdflkv
                        dvdfkbvfdkjbv
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
<?php
    }
    elseif(isset($_POST['btnAlumniPost']))  //Alumni Post
    {
?>
<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Alumni Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Sakib Al Hasan</h3>
                    <i>1st Nov. 19</i> <br>
                    <video controls>
                        <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                    </video>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/p1.jpg" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/boysimg.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Ali Hasan</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        vkfjdbvkjdfbvjkbfdv<br>
                        jbfdbvfdjkbvkjfdbv<br>
                        kjbvfdbvjdfkbdkjbdfjk<br>
                        jdhfvcdfjhvbfdjkbvjkfdnvkfbvdfbvdfbvbdfjbvdfkj
                        djhvbdfjhvbfdvbdfkvbfdkvbdjfkvdf
                        fdkvdfkvbdfkvbdfvd
                        fdkvbdfjvbdfvnd
                        vdfjvdfkvbdflkv
                        dvdfkbvfdkjbv
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
    }
    elseif(isset($_POST['btnStudentPost']))  //student Post
    {

?>
<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Student Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/me.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/p2.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/p3.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Ali Hasan</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        vkfjdbvkjdfbvjkbfdv<br>
                        jbfdbvfdjkbvkjfdbv<br>
                        kjbvfdbvjdfkbdkjbdfjk<br>
                        jdhfvcdfjhvbfdjkbvjkfdnvkfbvdfbvdfbvbdfjbvdfkj
                        djhvbdfjhvbfdvbdfkvbfdkvbdjfkvdf
                        fdkvdfkvbdfkvbdfvd
                        fdkvbdfjvbdfvnd
                        vdfjvdfkvbdflkv
                        dvdfkbvfdkjbv
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
    }
    else  //All Post
    {
?>

<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>All Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        jkbvfdkjbvkjfbvfvfdnvbfdjkhb<br>
                        dkbdfvbfdkjbvfkdjbvfkjd<br>
                        hvbfdjhbvkjdfbvkjdfbvfjdv<br>
                        cjdhscvgjhdfsbdfkjbvfd<br>
                        hvb fdjhvbfdhjbv<br>
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/p1.jpg" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="Images/boysimg.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Ali Hasan</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        vkfjdbvkjdfbvjkbfdv<br>
                        jbfdbvfdjkbvkjfdbv<br>
                        kjbvfdbvjdfkbdkjbdfjk<br>
                        jdhfvcdfjhvbfdjkbvjkfdnvkfbvdfbvdfbvbdfjbvdfkj
                        djhvbdfjhvbfdvbdfkvbfdkvbdjfkvdf
                        fdkvdfkvbdfkvbdfvd
                        fdkvbdfjvbdfvnd
                        vdfjvdfkvbdflkv
                        dvdfkbvfdkjbv
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Rahim</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
   }
?>
        
        <table width="100%">
        <tr>
            <td class="fotter">
                <center>
                    Copyright@MahfuzNazib
                </center>
            </td>
        </tr>
        </table>
</body>
</html>