<?php
    session_start();
    require_once('../DB/dbAlumni/AlumniFunctions.php');
    require_once('../DB/Functions.php');

    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        //$searchData = search($search);

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
            header('location:AlumniChat.php');
        }
        elseif(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
        }

        if(isset($_POST['txtSearch']))
        {
            $src = $_POST['txtSearch'];
            echo $src;
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
        $post = getFacultyPost($username,$password);
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
            <?php
                for($i=0;$i<count($post);$i++)
                {
            ?>
            <tr>
                <td>
                    <h3><?=$post[$i]['username']; ?></h3>
                    <i><?=$post[$i]['Date'] ?></i>
                    <p><center><?=$post[$i]['Text'] ?></center></p>

                    <?php
                        if($post[$i]['Image'] == null)
                        {

                        }
                        else
                        {

                        
                    ?>
                    <p>
                        <center>
                            <img src="../Images/Posts/<?=$post[$i]['Image']; ?>" width="380px" height="310px">
                        </center>
                    </p>

                    <?php
                        }
                    ?>
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
            <?php
                }
            ?>
        </table>
    </center>
<?php
    }
    elseif(isset($_POST['btnAlumniPost']))  //Alumni Post
    {
        $post = getAlumniPost($username,$password);
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
            <?php
                for($i=0;$i<count($post);$i++)
                {
            ?>
            <tr>
                <td>
                    <h3><?=$post[$i]['username']; ?></h3>
                    <i><?=$post[$i]['Date'] ?></i>
                    <p><center><?=$post[$i]['Text'] ?></center></p>

                    <?php
                        if($post[$i]['Image'] == null)
                        {

                        }
                        else
                        {

                        
                    ?>
                    <p>
                        <center>
                            <img src="../Images/Posts/<?=$post[$i]['Image']; ?>" width="380px" height="310px">
                        </center>
                    </p>

                    <?php
                        }
                    ?>
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
            <?php
                }
            ?>
        </table>
    </center>
    </body>
</html>

<?php
    }
    elseif(isset($_POST['btnStudentPost']))  //student Post
    {
        $post = getStudentPost($username,$password);
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
            <?php
                for($i=0;$i<count($post);$i++)
                {
            ?>
            <tr>
                <td>
                    <h3><?=$post[$i]['username']; ?></h3>
                    <i><?=$post[$i]['Date'] ?></i>
                    <p><center><?=$post[$i]['Text'] ?></center></p>

                    <?php
                        if($post[$i]['Image'] == null)
                        {

                        }
                        else
                        {

                        
                    ?>
                    <p>
                        <center>
                            <img src="../Images/Posts/<?=$post[$i]['Image']; ?>" width="380px" height="310px">
                        </center>
                    </p>

                    <?php
                        }
                    ?>
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
            <?php
                }
            ?>
        </table>
    </center>
    </body>
</html>

<?php
    }
    else  //All Post
    {
        $post = getAllPost($username,$password);
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
            <?php
                for($i=0;$i<count($post);$i++)
                {
            ?>
            <tr >
                <td>
                    <h3><?=$post[$i]['username']; ?></h3>
                    <i><?=$post[$i]['Date']; ?></i>
                    
                    <p> <center><?=$post[$i]['Text']; ?> </center></p>
                    <?php
                        if($post[$i]['Image'] == null)
                        {

                        }
                        else
                        {
                    ?>
                    <p><center><img src="../Images/Posts/<?=$post[$i]['Image']; ?>" width="380px" height="310px"> </center> </p>
                    <?php
                        } 
                    ?>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center> <br><br>  
                    <hr>
                </td>
                
                    
            </tr>
            <?php } ?>
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