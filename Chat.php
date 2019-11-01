<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <link rel="stylesheet" href="Admin.css">
    <title>Home</title>
</head>
<body class="body-margin">
    <table border="1" width="100%">
        <tr class="Profile-Header">
            <td width=25%>
                <center>
                    Nazib Mahfuz
                </center>
            </td>
            <td>
                <center>
                    <button class="profile-HeaderButton">Home</button>
                    
                    <a href="StudentProfile.php"><button class="profile-HeaderButton">Profile</button></a>
                    <a href="TimeLine.php"><button class="profile-HeaderButton">TimeLine</button></a>
                    <a href="Logout.php"><button class="profile-HeaderButton">Logout</button></a>
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
            <button class="frndList">Mitho Hasan</button>
            <button class="frndList">Bristy Talukder</button>
            <button class="frndList">Jamil Ahmed</button>
            <button class="frndList">MD.Al Amin</button>
            <button class="frndList">Hasib Ahmed</button>
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
                        <input type="text" name="txtReceiver" class="receiverTxt" placeholder="Receiver Username or Email">
                    </td>
                </tr>
                <tr>
                    <td>
                    <textarea pleaceholder="Message Body" class="msgBody"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="txtReceiver" class="receiverTxt" placeholder="Type Your Message Here..">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btnsend">Send</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>