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
            $register = StudentProfile($email,$name,$ID,$phone);
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

        if($status == "Alumni")  //For Alumni 
        {
            $register = AlumniProfile($email,$name,$ID,$phone);
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

        if($status == "Faculty")  //For Faculty 
        {
            $register = FacultyProfile($email,$name,$ID,$phone);
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