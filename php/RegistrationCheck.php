<style>
    .loginPage{
        left-margin : 20% ; 
        top-margin : 40%;
        height : 50px;
        width : 150px;
        color : white;
        backgroud-color : blue;
        border-radius : 2px solid red;
        cursor : pointer;
    }
</style>


<?php
    require_once('../DB/dbLogin/LoginFunctions.php');
    require_once('../DB/dbStudent/StudentFunctions.php');
    require_once('../DB/dbAlumni/AlumniFunctions.php');
    require_once('../DB/dbFaculty/FacultyFunctions.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['txtName'];
        $ID = $_POST['txtID'];
        $status = $_POST['status'];
        $email = $_POST['txtmail'];
        $phone = $_POST['txtphone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($status == "Student")  //For Student 
        {
            $register = StudentProfile($email,$name,$phone,$ID);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    //header('location:../Views/Login.php?$msg=Successfully Register');
                    //header('location:../javascript/script.js');
                    echo "<script>";
                    echo 'alert("Successfully Registered")';
                    echo "</script>";

                    //header('location:../Views/Login.php');

                    echo "<div class=\"loginPage\">Go to Login</div>";
                }
                else
                {
                    echo "<script>";
                    echo 'alert("Problem Occure on LoginInformation.")';
                    echo "</script>";

                    header('location:../Views/Registration.php');
                }
            
            }
            else
            {
                echo "<script>";
                echo 'alert("Please Provide all information Correctly.")';
                echo "</script>";

                header('location:../Views/Registration.php');
            }
        }

        if($status == "Alumni")  //For Alumni 
        {
            $register = AlumniProfile($email,$name,$ID,$phone);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    echo "<script>";
                    echo 'alert("Successfully Registered")';
                    echo "</script>";

                    header('location:../Views/Login.php');
                    
                }
                else
                {
                    echo "<script>";
                    echo 'alert("Problem Occure on LoginInformation.")';
                    echo "</script>";

                    header('location:../Views/Registration.php');
                }
            }
            else
            {
                echo "<script>";
                echo 'alert("Please Provide all information Correctly.")';
                echo "</script>";

                header('location:../Views/Registration.php');
            }
        }

        if($status == "Faculty")  //For Faculty 
        {
            $register = FacultyProfile($email,$name,$phone,$ID);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    header('location:../Views/Login.php?$msg=Successfully Register');
                }
                else
                {
                    header('location:../Views/Registration.php?$msg=Invalid Login Info');
                }
            }
            else
            {
                header('location:../Views/Registration.php?$msg=Not Enough Information');
            }
        }

        
        
    }

?>