<?php
    session_start();
    require_once('../DB/dbAlumni/AlumniFunctions.php');
    require_once('../DB/Functions.php');
    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];
        $msgPost = null;

        $row = getAllAlumniPost($username,$password);
        if(isset($_POST['posts']))  //Insert a New Post
        {
            $status = getAlumniStatus($username,$password);
            $text = $_POST['text'];
            $userStatus = $status['status'];
            $userName = $_SESSION['Username'];
            $userEmail = $status['email'];
            $date = date("d/m/Y");
            $time = date("h:i:sa");
            $postDate = $date." ".$time;
            

            $file_name = $_FILES['image']['name'];
            $file_temp_location = $_FILES['image']['tmp_name'];
            $file_store = "../Images/Posts/".$file_name;
            move_uploaded_file($file_temp_location,$file_store);

            $insertPost = insertAlumniPost($text,$file_name,$postDate,$userStatus,$userEmail,$userName);
            if($insertPost)
            {
                $msgPost =  "Post Successfully Done";
                header("refresh:1; url=AlumniTimeLine.php");
            }
            else
            {
                $msgPost =  "Posting Problem Occure";
            }
        }

        if(isset($_POST['postDelete']))
        {
            $date = date("d/m/Y");
            $time = date("h:i:sa");
            $postDate = $date." ".$time;
            $userEmail = $status['email'];
            $delete = deletePost($userEmail);
            if($delete)
            {
                $msgPost = "Post Deleted";
                header("refresh:1; url=TimeLine.php");
            }
            else
            {
                $msgPost = "This post is not deleted";
                header("refresh:1; url=TimeLine.php");
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
                <form action="#" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Create Post</legend>
                        <textarea row="4" col="50" placeholder="What's on Your Mind?" class="postArea" name="text">

                        </textarea>
                    </fieldset>
                 <br>
                <center>
                    <input type="file" name="image">
                    <input type="submit" class="postsButton" name="posts" value="Post"> <br>
                    <hr></hr>
                    <center><?=$msgPost ?></center>
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
                <center>
                <table border="0" width="100%" class="tblbgColor-Posts" class="tblLoad">
                    <?php

                        for($i=0;$i<count($row);$i++)
                        {    
                    ?>
                    <tr width="100%">
                        <!--<tr><input type="submit" class="btnPost" name="postDelete" value="Delete Post"></tr>-->
                        <tr> <p> Date : <?=$row[$i]['Date']; ?> </p></tr>
                        <tr><?=$row[$i]['Text']; ?></tr> <br>
                        <?php
                            if($row[$i]['Image'] == null)
                            {

                            }
                            else
                            {
                        ?>
                        <tr ><img src="../Images/Posts/<?=$row[$i]['Image']; ?>" width="280px" height="210px"></tr> <br>
                        <?php
                            }
                        ?>
                        <tr ><input type="submit" name="like" class="profile-HeaderButton" value="<?=$row[$i]['Likes']?> Like">  </tr> <br>
                        <tr> <hr> </tr>
                    
                    </tr>

                    <?php
                        }
                    ?>
                </table>
                </center>
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