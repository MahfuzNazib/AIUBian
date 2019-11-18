
<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
        
        $conn = mysqli_connect('localhost','root','','test');
        $sql = "select * from logininfo where Username='{$uname}' and Password='{$pass}'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        if(count($data) > 0)
        {
            $_SESSION['Username'] = $uname;
            //header('location:../Views/Admin.php');
            //header('location:../Views/FacultyHome.php');
            header('location:..//Views/StudentHome.php');
            //header('location:../Views/AlumniHome.php');
        }
        else
        {
            header('location:../Views/Login.php?msg=Invalid Username or Password');
        }
    }

?>