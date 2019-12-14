<?php
    session_start();
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if($_SESSION['Username'])
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <link rel="stylesheet" href="Admin.css">
    <title>admin</title>
</head>
<body>
    <body class="body-margin">
        <form action="#" method="POST">
            <table border="0" width="100%">
                    <tr class="Profile-Header"> <!--Header-->
                        <td width=10%>
                            <center>
                                    <h3>
                                        <i>
                                            <?=$_SESSION['Username'] ?>
                                        </i>
                                    </h3>
                            </center>
                        </td>
                            <td>
                                <center>
                                    <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                                    <button class="profile-HeaderButton" name="btnMembers">Members</button>
                                    <button class="profile-HeaderButton" name="btnPosts">Posts</button>
                                    <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                                    <button class="profile-HeaderButton" name="btnChat">Chat</button>
                                    <button class="profile-HeaderButton" name="btnAddAdmin">AddAdmin</button>
                                    <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                                    
                                </center>
                            
                        </td>
                        <td width="15%">
                            <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
                        </td>
                    </tr>
            </table>
        </form>
    </body>
</body>
</html>

<?php
    }
    else
    {
        header('location:Login.php');
    }

    if(isset($_POST['btnLogout']))
    {
        header('location:../php/Logout.php');
    }
    elseif(isset($_POST['btnProfile']))
    {
        header('location:Adminprofile.php');
    }
    elseif(isset($_POST['btnTimeLine']))
    {
        header('location:AdminTimeLine.php');
    }
    elseif(isset($_POST['btnChat']))
    {
        header('location:AdminChat.php');
    }
    elseif(isset($_POST['btnPosts']))
    {
        header('location:PostVerify.php');
    }
    else if(isset($_POST['btnAddAdmin']))
    {
        header('location:AdminRegistration.php');
    }
    
?>

<?php

    if(isset($_POST['btnStudents']))  //if Click The Students Button
    {
?>

<?php
    }
    elseif(isset($_POST['btnAlumni']))
    {
?>

<?php
    }
    elseif(isset($_POST['btnFaculty']))  //Faculty Posts
    {

?>

<?php //Default Option All Posts
    }
    elseif(isset($_POST['btnMembers']))
    {
        header('location:MemberList.php');
    }
    else
    {
        $post = getAllPost();
    
?>
<html>
    <body>
        <center>
            <h3>All Posts</h3>
            <hr>
        </center>

        <table border="0" width="100%">
        <tr class="table-header">
                <td>Post ID</td>
                <td>Post Date</td>
                <td>Name</td>
                <td>Details</td>
                <td>Image</td>
                <td>Actions</td>
            </tr>

            <?php
                for($i=0;$i<count($post);$i++)
                {
            ?>
            <tr>
                <?php
                    echo "<td><center>". $post[$i]['PostID']."</center></td>";
                    echo "<td> <center>". $post[$i]['Date']. "</center> </td>";
                    echo "<td> <center>". $post[$i]['username']. "</center> </td>";
                    echo "<td> <center>". $post[$i]['Text']. "</center> </td>";
                    echo '<td> <center>  <img src="../Images/Posts/'. $post[$i]['Image']. '" width="150px" height="120px" </center></td>';
                    echo '<td> <center> <form action="../php/deletePost.php" method="POST">
                    <input type="hidden" name="id" value= '. $post[$i]['PostID'] .'> 
                    <input type="submit" class="btn-Delete" name="btnDelete" value="Delete"></form> </center> </td>';
                ?>
            </tr>
            <tr>
                <td colspan="5"><hr></td>
            </tr>
            <?php
                }
            ?>
            
        </table>
    </body>
</html>

<?php
    }
?>

