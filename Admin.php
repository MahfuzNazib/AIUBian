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
                        <td width=25%>
                            <center>
                                    <h3>
                                        <i>
                                            Admin
                                        </i>
                                    </h3>
                            </center>
                        </td>
                            <td>
                                <center>
                                    <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                                    <button class="profile-HeaderButton" name="btnMembers">Members</button>
                                    <button class="profile-HeaderButton" name="btnAllPosts">All Posts</button>
                                    <button class="profile-HeaderButton" name="btnAlumni">Alumni</button>
                                    <button class="profile-HeaderButton" name="btnStudents">Students</button>
                                    <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                                    
                                </center>
                            
                        </td>
                        <td width="25%">
                            <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
                        </td>
                    </tr>
            </table>
        </form>
    </body>
</body>
</html>

<?php
    

?>
<?php

    if(isset($_POST['btnStudents']))  //if Click The Students Button
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudentsPosts</title>
</head>
<body>
    <center>
        <h3>Students Posts</h3>
        <hr>
    </center>
    <table border="0" width="100%">
                        <tr class="table-header"> 
                            <td>
                                 Post Date
                            </td>
                            <td>
                                Name
                            </td>
                            <td>
                                Details
                            </td>
                            <td>
                                Actions
                            </td>
                        </tr>

                        <tr>
                            <td width=15%>
                                25th Ocober,2019
                            </td>
                            <td width=15%>
                                Nazib Mahfuz
                            </td>
                            <td>
                                A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering.
                                Its a testing purpose. Php and Javascript is a scripting language
                            </td>
                            <td width=20%>
                                <button class="btn-Block"> Block </button>
                                <button class="btn-Delete">Delete</button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                                <td width=15%>
                                    25th Ocober,2019
                                </td>
                                <td width=15%>
                                    Nazib Mahfuz
                                </td>
                                <td width=35%>
                                    <img src="Images/bg.jpg" height="180px" width="200px">
                                </td>
                                <td width=20%>
                                    <button class="btn-Block"> Block </button>
                                    <button class="btn-Delete">Delete</button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                    <td width=15%>
                                        25th Ocober,2019
                                    </td>
                                    <td width=15%>
                                        Nazib Mahfuz
                                    </td>
                                    <td width=35%> <!--Description..Video/Audio/Image/Post-->
                                        A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering<br>
                                        kvkfjvnbfkldnvldfkv<br>
                                        dhjvbcbvdks<br>
                                        dcdbcjhb
                                    </td>
                                    <td width=20%>
                                        <button class="btn-Block"> Block </button>
                                        <button class="btn-Delete">Delete</button>
                                    </td>
                                    
                            </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr>
                                    </td>
                                </tr>
                            
                                <tr>
                                        <td width=15%>
                                            25th Ocober,2019
                                        </td>
                                        <td width=15%>
                                            Nazib Mahfuz
                                        </td>
                                        <td width=35%> <!--Description..Video/Audio/Image/Post-->
                                            <video controls>
                                                    <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                                                </video>
                                        </td>
                                        <td width=20%>
                                            <button class="btn-Block"> Block </button>
                                            <button class="btn-Delete">Delete</button>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <hr>
                                        </td>
                                    </tr>
        </table>
</body>
</html>

<?php
    }

    elseif(isset($_POST['btnAlumni']))
    {

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni Posts</title>
</head>
<body>
<center>
        <h3>Alumni Posts</h3>
        <hr>
    </center>
    <table border="0" width="100%">
                        <tr class="table-header"> 
                            <td>
                                 Post Date
                            </td>
                            <td>
                                Name
                            </td>
                            <td>
                                Details
                            </td>
                            <td>
                                Actions
                            </td>
                        </tr>

                        <tr>
                            <td width=15%>
                                25th Ocober,2019
                            </td>
                            <td width=15%>
                                Nazib Mahfuz
                            </td>
                            <td>
                                A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering.
                                Its a testing purpose. Php and Javascript is a scripting language
                            </td>
                            <td width=20%>
                                <button class="btn-Block"> Block </button>
                                <button class="btn-Delete">Delete</button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                                <td width=15%>
                                    25th Ocober,2019
                                </td>
                                <td width=15%>
                                    Nazib Mahfuz
                                </td>
                                <td width=35%>
                                    <img src="Images/bg.jpg" height="180px" width="200px">
                                </td>
                                <td width=20%>
                                    <button class="btn-Block"> Block </button>
                                    <button class="btn-Delete">Delete</button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                    <td width=15%>
                                        25th Ocober,2019
                                    </td>
                                    <td width=15%>
                                        Nazib Mahfuz
                                    </td>
                                    <td width=35%> <!--Description..Video/Audio/Image/Post-->
                                        A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering<br>
                                        kvkfjvnbfkldnvldfkv<br>
                                        dhjvbcbvdks<br>
                                        dcdbcjhb
                                    </td>
                                    <td width=20%>
                                        <button class="btn-Block"> Block </button>
                                        <button class="btn-Delete">Delete</button>
                                    </td>
                                    
                            </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr>
                                    </td>
                                </tr>
                            
                                <tr>
                                        <td width=15%>
                                            25th Ocober,2019
                                        </td>
                                        <td width=15%>
                                            Nazib Mahfuz
                                        </td>
                                        <td width=35%> <!--Description..Video/Audio/Image/Post-->
                                            <video controls>
                                                    <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                                                </video>
                                        </td>
                                        <td width=20%>
                                            <button class="btn-Block"> Block </button>
                                            <button class="btn-Delete">Delete</button>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <hr>
                                        </td>
                                    </tr>
        </table>
</body>
</html>

<?php //Default Option All Posts
    }
    //elseif(isset($_POST['btnAllPosts']))

    elseif(isset($_POST['btnMembers']))
    {
        header('location:MemberList.html');
    }
    else
    {
    
?>
<html>
    <body>
        <center>
            <h3>All Posts</h3>
            <hr>
        </center>

        <table border="0" width="100%">
            <tr class="table-header">
                <td>
                    Post Date
                </td>
                <td>
                    Name
                </td>
                <td>
                    Details
                </td>
                <td>
                    Actions
                </td>
            </tr>
            <tr>
                <td width=15%>
                    1st December 2018
                </td>
                <td width=15%>
                    Hasib Ahmed
                </td>
                <td>
                    Hi firends, This is my account.Please like share <br>
                    and subscribe my Youtube<br>
                    Channel :) 
                </td>
                <td width=20%>
                    <button class="btn-Block"> Block </button>
                    <button class="btn-Delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <tr>
                <td width=15%>
                    1st December 2018
                </td>
                <td width=15%>
                    Hasib Ahmed
                </td>
                <td>
                    Hi firends, This is my account.Please like share <br>
                    and subscribe my Youtube<br>
                    Channel :) 
                </td>
                <td width=20%>
                    <button class="btn-Block"> Block </button>
                    <button class="btn-Delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <tr>
                            <td width=15%>
                                25th Ocober,2019
                            </td>
                            <td width=15%>
                                Nazib Mahfuz
                            </td>
                            <td>
                                A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering.
                                Its a testing purpose. Php and Javascript is a scripting language
                            </td>
                            <td width=20%>
                                <button class="btn-Block"> Block </button>
                                <button class="btn-Delete">Delete</button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                                <td width=15%>
                                    25th Ocober,2019
                                </td>
                                <td width=15%>
                                    Nazib Mahfuz
                                </td>
                                <td width=35%>
                                    <img src="Images/bg.jpg" height="180px" width="200px">
                                </td>
                                <td width=20%>
                                    <button class="btn-Block"> Block </button>
                                    <button class="btn-Delete">Delete</button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                    <td width=15%>
                                        25th Ocober,2019
                                    </td>
                                    <td width=15%>
                                        Nazib Mahfuz
                                    </td>
                                    <td width=35%> <!--Description..Video/Audio/Image/Post-->
                                        A Testing Posts. I am Nazib Mahfuz student of AIUB dept of Computer Science and Engineering<br>
                                        kvkfjvnbfkldnvldfkv<br>
                                        dhjvbcbvdks<br>
                                        dcdbcjhb
                                    </td>
                                    <td width=20%>
                                        <button class="btn-Block"> Block </button>
                                        <button class="btn-Delete">Delete</button>
                                    </td>
                                    
                            </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr>
                                    </td>
                                </tr>
                            
                                <tr>
                <td width=15%>
                    5th Ocober,2019
                </td>
                <td width=15%>
                    Nazib Mahfuz
                </td>
                <td width=35%> <!--Description..Video/Audio/Image/Post-->
                    <video controls>
                        <source src="Videos/short-video-clip-nature-mp4.mp4" type="video/mp4">
                    </video>
                </td>
                <td width=20%>
                    <button class="btn-Block"> Block </button>
                    <button class="btn-Delete">Delete</button>
                </td>
                                        
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
    }
?>
