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
<body>
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

        <tr>  <!--Select / Choose Posts-->
            <td rowspan="10000">
                <center>
                    <button class="btnPost">All Posts</button> <br>
                    <button class="btnPost">Faculty Posts</button> <br>
                    <button class="btnPost">Alumni Posts</button> <br>
                    <button class="btnPost">Student Posts</button> <br>
                </center>
                
            </td>
        
            <td>
                <p>I snxcdkjbckjdfbvfdvn<br>
                jdbvkjfdbvfdbvnfdlknvfdlkvfdv<br>
                jdkbvcdfkjvbfdknvdfklnvdfkv</p>
            </td>
       
            <td rowspan="10000"> <!--Chat System-->
                <table border="1" width="100%">
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
                        <input type="text" name="txtReceiver" class="msgBody">
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
            </td>
        </tr>
        
    </table>
</body>
</html>