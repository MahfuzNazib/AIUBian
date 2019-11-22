<?php
    session_start();
    require_once('../DB/dbStudent/StudentFunctions.php');

    if(isset($_SESSION['Username']))
    {
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        //GetAllMyPost

        $row = getAllMyPost();

        if(isset($_POST['posts']))
        {
            $status = getStatus($username,$password);
            $text = $_POST['text'];
            //echo $status['status']." ".$status['username']." ".$status['email'];
            $userStatus = $status['status'];
            $userName = $_SESSION['Username'];
            $userEmail = $status['email'];
            $date = date("d/m/Y");
            $time = date("h:i:sa");
            $postDate = $date." ".$time;
            

            $file_name = $_FILES['image']['name'];
            $file_temp_location = $_FILES['image']['tmp_name'];
            $file_store = "../Images/Posts/".$file_name;

            move_uploaded_file($file_temp_location, $file_store);

            //echo $text."<br> ".$file_name."<br> ".$postDate."<br> ".$userStatus."<br> ".$userEmail."<br> ".$userName;
            $insertPost = insertPost($text,$file_name,$postDate,$userStatus,$userEmail,$userName);
            
            if($insertPost)
            {
                echo "Post Successfully Done";
                header("refresh:1; url=TimeLine.php");
            }
            else
            {
                echo "Posting Problem Occure";
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
                    
                    <a href="StudentHome.php"><button class="profile-HeaderButton">Home</button></a>
                    <a href="SProfile.php"><button class="profile-HeaderButton">Profile</button></a>
                    <a href="TimeLine.php"><button class="profile-HeaderButton">TimeLine</button></a>
                    <a href="Chat.php"><button class="profile-HeaderButton">Chat</button></a>
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
                    
                        <tr width="100%" bgcolor="red"><?=$row[$i]['Date']; ?></tr> <br>
                        <tr width="100%"><?=$row[$i]['Text']; ?></tr> <br>
                        <?php
                            if($row[$i]['Image'] == null)
                            {

                            }
                            else
                            {
                        ?>
                        <tr width="100%"><img src="../Images/Posts/<?=$row[$i]['Image']; ?>" width="200px" height="200px"></tr> <br>
                        <?php
                            }
                        ?>
                        <tr width="100%">Like</tr>
                    
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