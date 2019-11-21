<?php
    session_start();
    //require_once('../DB/dbAdmin/AdminFunctions.php');
    //require_once('../DB/db.php');
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
                        <button class="profile-HeaderButton" name="btnAllMember">All</button>
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
                <td>DOB</td>
                <td>Status</td>
                <td>Action</td>
            </tr>

            <tr>
                <td>
                    MD.Al Amin
                </td>
                <td>
                    <img src="../Images/AlAminSir.png" height="100px" width="130px">
                </td>
                <td>
                    alamin@aiub.edu
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Mohaimen Bin Noor
                </td>
                <td>
                    <img src="../Images/NiloySir.png" height="100px" width="130px">
                </td>
                <td>
                    niloy@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Abhijit Bhowmik
                </td>
                <td>
                    <img src="Images/abhijitSir.png" height="100px" width="130px">
                </td>
                <td>
                    abhijit@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Kawser Irom Rushee
                </td>
                <td>
                    <img src="Images/rousheemem.png" height="100px" width="130px">
                </td>
                <td>
                    rushee@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
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
                <td>DOB</td>
                <td>Status</td>
                <td>Action</td>
            </tr>

            <tr>
                <td>
                    Zaheed Sabur
                </td>
                <td>
                    <img src="Images/zaheed.png" height="100px" width="130px">
                </td>
                <td>
                    zaheed@googl.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Jalal Uddin
                </td>
                <td>
                    <img src="Images/jala.png" height="100px" width="130px">
                </td>
                <td>
                    jala@devskill.info
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Taskin Ahmed
                </td>
                <td>
                    <img src="Images/taskin.png" height="100px" width="130px">
                </td>
                <td>
                    taskib@gmail.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Mohaimeen Bin Noor
                </td>
                <td>
                    <img src="Images/NiloySir.png" height="100px" width="130px">
                </td>
                <td>
                    niloy@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Abhijit Bhowmik
                </td>
                <td>
                    <img src="Images/abhijitSir.png" height="100px" width="130px">
                </td>
                <td>
                    abhijit@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Kawser Irom Rushee
                </td>
                <td>
                    <img src="Images/rousheemem.png" height="100px" width="130px">
                </td>
                <td>
                    rushee@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
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
    elseif(isset($_POST['btnStudentMember'])) //Student Member List
    {
        require_once('../DB/dbAdmin/AdminFunctions.php');
        $row = getAllStudentList();
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
                <td>Action</td>
            </tr>
            
            <?php
                
                for($i=0;$i<count($row);$i++)
                {
            ?>
            <tr>
                <td> <center> <h3><?=$row[$i]['Name']; ?></h3> </center></td>
                <td> <Center><img src="../Images/ProfilePicture/<?=$row[$i]['ProfilePicture']; ?>" width="150px" height="150px"> </Center></td>
                <td> <center><?=$row[$i]['email']; ?> </center></td>
                <td> <center><?=$row[$i]['AIUB_ID']; ?> </center></td>
                <td> <center><?=$row[$i]['Phone']; ?> </center></td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <?php
                }
            ?>
            
        </table>
    </body>
</html>

<?php
    }
    else  //All Member List By Default
    {

?>

<html>  <!--All Member List-->
    <body class="body-margin">
        <center>
            <h3>All Members List</h3>
            <hr>
        </center>
        <table border="0" width="100%">
            <tr class="table-header">
                <td>Name</td>
                <td>Picture</td>
                <td>Email</td>
                <td>Phone</td>
                <td>DOB</td>
                <td>Status</td>
                <td>Action</td>
            </tr>

            <tr>
                <td>
                    MD.Al Amin
                </td>
                <td>
                    <img src="Images/AlAminSir.png" height="100px" width="130px">
                </td>
                <td>
                    alamin@aiub.edu
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Mohaimen Bin Noor
                </td>
                <td>
                    <img src="Images/NiloySir.png" height="100px" width="130px">
                </td>
                <td>
                    niloy@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Abhijit Bhowmik
                </td>
                <td>
                    <img src="Images/abhijitSir.png" height="100px" width="130px">
                </td>
                <td>
                    abhijit@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Kawser Irom Rushee
                </td>
                <td>
                    <img src="Images/rousheemem.png" height="100px" width="130px">
                </td>
                <td>
                    rushee@aiub.edu
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Zaheed Sabur
                </td>
                <td>
                    <img src="Images/zaheed.png" height="100px" width="130px">
                </td>
                <td>
                    zaheed@googl.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Jalal Uddin
                </td>
                <td>
                    <img src="Images/jala.png" height="100px" width="130px">
                </td>
                <td>
                    jala@devskill.info
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Taskin Ahmed
                </td>
                <td>
                    <img src="Images/taskin.png" height="100px" width="130px">
                </td>
                <td>
                    taskib@gmail.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Nazib Mahfuz
                </td>
                <td>
                    <img src="Images/me.png" height="100px" width="130px">
                </td>
                <td>
                    nazibmahfuz60@gmail.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1996
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Hasib Ahmed
                </td>
                <td>
                    <img src="Images/hasib.png" height="100px" width="130px">
                </td>
                <td>
                    hasib3030@gmail.com
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Ali Hasan Mitho
                </td>
                <td>
                    <img src="Images/mitho.png" height="100px" width="130px">
                </td>
                <td>
                    alihasn@gmail.com
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Sha Naim Shourov
                </td>
                <td>
                    <img src="Images/guti.png" height="100px" width="130px">
                </td>
                <td>
                    guti@gmail.com
                </td>
                <td>
                    025999464
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    InActive
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
            <tr> <!--For Horizontal Line-->
                <td colspan="7">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Tarik bin Shams
                </td>
                <td>
                    <img src="Images/tarik.png" height="100px" width="130px">
                </td>
                <td>
                    shams@gmail.com
                </td>
                <td>
                    0178888888
                </td>
                <td>
                    02-05-1986
                </td>
                <td>
                    Active
                </td>
                <td>
                    <button class="btn-Delete" name="btnDelete">Delete</button>
                    <button class="btn-Block" name="btnBlock">Block</button>
                </td>
            </tr>
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
?>


<html>  <!--Fotter-->
    <body class="body-margin">
        <table width="100%">
            <tr>
                <td class="fotter">
                    <center>
                        copyright@MahfuzNazib
                    </center>
                    
                </td>
            </tr>
        </table>
    </body>
</html>