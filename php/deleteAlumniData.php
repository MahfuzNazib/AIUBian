<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if(isset($_POST['btnDelete']))
    {
        //echo "Authorized Request";
        $confirmationMessage;
        $email = $_POST['email'];
        $delete = deleteAlumni($email);
        $deleteFromLogin = deleteFromLogin($email);
        if($delete && $deleteFromLogin)
        {
            $confirmationMessage =  "Alumni Successfully Deleted";
        }
        else
        {
            $confirmationMessage =  "Record Not Deleted";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Views/Admin.css">
    <title>Delete Data</title>
</head>
<body>
    <center>
       <div class="msgDelete"><?=$confirmationMessage; ?></div>
       <a href="../Views/MemberList.php"><button class="backButton">Back</button></a>
    </center>
</body>
</html>

<?php
    }
    else
    {  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Views/Admin.css">
    <title>Delete Data</title>
</head>
<body>
    <center>
       <div class="msgDelete">You are not Authorized to access this page
           <a href="../Views/Login.php">Go Back</a>
       </div>
       
    </center>
    <div>
        <img src="../Images/notFound.gif" width="100%" height="600px">
    </div>
</body>
</html>
        
<?php
    }
?>

