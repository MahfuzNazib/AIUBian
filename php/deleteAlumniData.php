<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if(isset($_POST['btnDelete']))
    {
        $email = $_POST['email'];
        echo $email;
        $delete = deleteAlumni($email);

        if($delete)
        {
            echo "Delete Successfull";
        }
        else
        {
            echo "Recored not deleted";
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
       <h5>Alumni Data</h5>
    </center>
</body>
</html>