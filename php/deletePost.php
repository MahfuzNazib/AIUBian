<?php
    require_once('../DB/dbAdmin/AdminFunctions.php');
    if(isset($_POST['btnDelete']))
    {
        $confirmationMessage;
        echo $_POST['id'];
        $id = $_POST['id'];
        echo "Authorized Request";
        $deletePost = deletePost($id);

        if($deletePost)
        {
            $confirmationMessage = "Post Successfully Deleted";
        }
        else
        {
            $confirmationMessage = "The Post was not Deleted";
        }

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Views/Admin.css">
    <title>Delete Post</title>
</head>
<body>
    <center>
       <div class="msgDelete"><?=$confirmationMessage; ?></div>
       <a href="../Views/PostVerify.php"><button class="backButton">Back</button></a>
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
    <title>Delete Post</title>
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

