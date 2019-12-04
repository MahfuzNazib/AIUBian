<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if(isset($_POST['btnDelete']))
    {
        //echo "Authorized Request";
        $email = $_POST['email'];
        echo $email;
        $delete = deleteFaculty($email);
        $deleteFromLogin = deleteFromLogin($email);
        if($delete && $deleteFromLogin)
        {
            echo "Faculty Successfully Deleted";
        }
        else
        {
            echo "Record Not Deleted";
        }
    }
    else
    {
        echo 'Invalid Request 403';

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Data</title>
</head>
<body>
    <center>
       <h5>Faculty Data</h5>
       <a href="../Views/MemberList.php">Go to Member List</a>
    </center>
</body>
</html>