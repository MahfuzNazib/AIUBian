<?php
    session_start();
    require_once('../DB/dbAdmin/AdminFunctions.php');
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
    <link rel="stylesheet" href="Admin.css">
    <title>MemberList</title>
</head>
<body class="body-margin">
    <form action="#" method="POST">
        <table border="1" width="100%">
            <tr class="Profile-Header">
                <td width="25%">
                    <center>
                        <h3>
                            <i>
                                <a href="Admin.php" class="login-link">
                                    <?=$_SESSION['Username'] ?>
                                </a>
                            </i>
                        </h3>
                    </center>
                </td>
                <td>
                    <center>
                        <!--<button class="profile-HeaderButton" name="btnAllMember">All</button>-->
                        <button class="profile-HeaderButton" name="btnFacultyMember">Faculty</button>
                        <button class="profile-HeaderButton" name="btnAlumniMember">Alumni</button>
                        <button class="profile-HeaderButton" name="btnStudentMember">Student</button>
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
?>
<?php
    if(isset($_POST['btnFacultyMember']))
    {
      $data = getAllFacultyList();
      $view = viewFacultyProfile();
?>

<html>
    <body class="body-margin">
        <center>
            <h3>Faculty Members List</h3>
            <hr>
        </center>
        <table border="0" width="100%">
            <tr class="table-header">
                <td>Name</td>
                <td>Picture</td>
                <td>Email</td>
                <td>Phone</td>
                <td>AIUB ID</td>
                <td>View Profile</td>
                <td>Action</td>
            </tr>

            <?php
                for($i=0; $i<count($data); $i++)
                {
            ?>
            <tr>
               <?php
                    
                    echo "<td> <center> <h3>". $data[$i]['Name']. " </h3></center> </td>";
                    echo '<td> <center>  <img src="../Images/ProfilePicture/'. $data[$i]['ProfilePicture']. '" width="150px" height="120px" </center></td>';
                    //echo '<td> <img src="../Images/ProfilePicture/" width="150px" height="150px" </td>';
                    echo "<td> <center>". $data[$i]['email']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['Phone']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['AIUB_ID']. " </center> </td>";
                    echo '<td> <center> <a href="../Profiles/viewFacultyProfile.php?profileOf='.$view[$i]['username'].'"">'.'<input type="submit" class="btn-Block" name="btnview" value="View">'.'</a> </center> </td>';
                    echo '<td> <center> <form action="../php/deleteFacultyData.php" method="POST">
                    <input type="hidden" name="email" value= '. $data[$i]['email'] .'> 
                    <input type="submit" class="btn-Delete" name="btnDelete" value="Delete"></form> </center> </td>';
               ?>
            </tr>
            <tr>
                <td colspan="7"><hr></td>
            </tr>
            <?php
                }
            ?>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
    }

    elseif(isset($_POST['btnAlumniMember']))  //Alumni Lists
    {
        $data = getAllAlumniList();
        $view = viewAlumniProfile();
?>
<html>  <!--Alumni All Member List-->
    <body class="body-margin">
        <center>
            <h3>Alumni Members List</h3>
            <hr>
        </center>
        <table border="0" width="100%">
            <tr class="table-header">
                <td>Name</td>
                <td>Picture</td>
                <td>Email</td>
                <td>Phone</td>
                <td>AIUB ID</td>
                <td>View Profile</td>
                <td>Action</td>
            </tr>

            <?php
                for($i=0; $i<count($data); $i++)
                {
            ?>
            <tr>
               <?php
                    echo "<td> <center>". $data[$i]['Name']. " </center> </td>";
                    echo '<td> <center>  <img src="../Images/ProfilePicture/'. $data[$i]['ProfilePicture']. '" width="150px" height="120px" </center></td>';
                    echo "<td> <center>". $data[$i]['email']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['Phone']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['AIUB_ID']. " </center> </td>";
                    echo '<td> <center> <a href="../Profiles/viewAlumniProfile.php?profileOf='.$view[$i]['username'].'"">'.'<input type="submit" class="btn-Block" name="btnview" value="View">'.'</a> </center> </td>';
                    echo '<td> <center> <form action="../php/deleteAlumniData.php" method="POST">
                    <input type="hidden" name="email" value= '. $data[$i]['email'] .'> 
                    <input type="submit" class="btn-Delete" name="btnDelete" value="Delete"></form> </center> </td>';
               ?>
            </tr>
            <?php
                }
            ?>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
    }
    else//if(isset($_POST['btnStudentMember'])) //Student Member List
    {
       
        $data = getAllStudentList();
        $view = viewStudentProfile();
        
?>

<html>  <!--Student All Member List-->
    <body class="body-margin">
        <center>
            <h3>Student Members List</h3>
            <hr>
        </center>

       
        <table border="0" width="100%">
            <tr class="table-header">
                <td>Name</td>
                <td>Picture</td>
                <td>Email</td>
                <td>AIUB ID</td>
                <td>Phone</td>
                <td>View Profile</td>
                <td>Action</td>
            </tr>
            
            <?php
                for($i=0; $i<count($data); $i++)
                {
            ?>
            <tr>
               <?php
                    echo '<td> <center> <h3>'. $data[$i]['Name']. '</h3> </center> </td>';
                    echo '<td> <center>  <img src="../Images/ProfilePicture/'. $data[$i]['ProfilePicture']. '" width="150px" height="120px" </center></td>';
                    echo "<td> <center>". $data[$i]['email']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['AIUB_ID']. " </center> </td>";
                    echo "<td> <center>". $data[$i]['Phone']. " </center> </td>";
                    //echo '<td> <a href="../Profiles/viewStudentProfile.php?profileOf='.$view[$i]['username'].'"">'.$view[$i]['username'].'</a>';
                    echo '<td> <center> <a href="../Profiles/viewStudentProfile.php?profileOf='.$view[$i]['username'].'"">'.'<input type="submit" class="btn-Block" name="btnview" value="View">'.'</a> </center> </td>';
                    echo '<td> <center> <form action="../php/deleteStudentData.php" method="POST">
                    <input type="hidden" name="email" value= '. $data[$i]['email'] .'> 
                    <input type="submit" class="btn-Delete" name="btnDelete" value="Delete"></form> </center> </td>';
               ?>
            </tr>

            <tr>
                <td colspan="7"><hr></td>
            </tr>

            <?php
                }
            ?>
            <tr>
                <td class="fotter" colspan="7">
                    <center>
                        copyright@MahfuzNazib
                    </center>
                    
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
    }
?>


