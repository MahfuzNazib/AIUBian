<?php
    session_start();
    require_once('../DB/dbStudent/StudentFunctions.php');
    require_once('../DB/Functions.php');
    if(isset($_SESSION['Username']))
    {
        $conn = getConnection();
        $username = $_SESSION['Username'];
        $password = $_SESSION['Password'];

        $status = getStatus($username,$password);
        $getMyEmail = $status['email'];

        

        //echo $getMyEmail;
        if(isset($_POST['btnHome']))
        {
            header('location:StudentHome.php');
        }
        if(isset($_POST['btnProfile']))
        {
            header('location:SProfile.php');
        }
        if(isset($_POST['btnTimeLine']))
        {
            header('location:TimeLine.php');
        }
        if(isset($_POST['btnLogout']))
        {
            header('location:../php/Logout.php');
        }

        $rmail = 'hasib3030@gmail.com';
        $msgList = getMessage($rmail);

        if(isset($_POST['send']))
        {
            $receiver_mail = $_POST['Receiver'];
            $message = $_POST['msg'];
            $date = date("d/m/Y");
            $time = date("h:i:sa");
            $msgDate = $date." ".$time;

            echo $getMyEmail." ".$receiver_mail." ".$message." ".$msgDate;
            if($receiver_mail == "" || $message == "")
            {

            }
            else
            {
                $chatting = chat($getMyEmail,$receiver_mail,$message,$msgDate);
                if($chatting)
                {
                    echo "Done";
                    header('refresh:1; url=Chat.php');
                }
                else
                {
                    echo "Problem Occure";
                }
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
    <link rel="stylesheet" href="Admin.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <title>Home</title>
</head>
<body class="body-margin">
    <form actiion="#" method="POST">
    <table border="1" width="100%">
        <tr class="Profile-Header">
            <td width=25%>
                <center>
                <h3><?=$_SESSION['Username'] ?></h3>
                
                </center>
            </td>
            <td>
                <center>
                    <button class="profile-HeaderButton" name="btnHome">Home</button>
                    <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                    <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                    <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                    </center>
                    
            </td>
            <td width=25%>
                <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
            </td>
        </tr>
    </table>
    <div class="grid-container">
        <div class="grid-item">
            <h5><u>Friend List</u></h5>
            <button class="frndList">Nazib Mahfuz</button>
            <button class="frndList">Hasib Ahmed</button>
            <button class="frndList">Zakaria Islam</button>
            
        </div>
        <div class="grid-item">
            <table border="0" width="100%" height="100%">
                <tr>
                    <td>
                        <center>
                            Chat/Message
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input type="text" name="Receiver" class="receiverTxt" placeholder="Receiver Username or Email" id="receiver_mail">
                    </td>
                </tr>
                <tr>
                    <td>
                    
                        <div>
                            <?php 

                                $sql = "SELECT * FROM `chat` ";
                                $result = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $text = $row['text'];
                                    $receiver = $row['receiver'];
                                    $sender = $row['sender'];
                                    echo '<h5 style="color:black">'.$sender.'</h5>';
                                    //echo '<h5 style="color:blue">'.$receiver.' says: '.'</h5>';
                                    echo '<p style="text-aligh:left">'.$text.'</p>';
                                    echo '<hr>';
                                }
                            ?>
                        </div>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="msg" class="receiverTxt" placeholder="Type Your Message Here.." id="message">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--<button class="btnsend">Send</button> -->
                        <input type="submit" name="send" value="Send" class="btnsend" onclick = "checkMessage()">
                    </td>
                </tr>
            </table>
        </div>
    </div>
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