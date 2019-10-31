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
                                Admin
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
        </table>
    </body>
</html>

<?php
    }

?>