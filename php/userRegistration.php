<?php
    require_once('../DB/dbLogin/LoginFunctions.php');
    require_once('../DB/dbStudent/StudentFunctions.php');
    require_once('../DB/dbAlumni/AlumniFunctions.php');
    require_once('../DB/dbFaculty/FacultyFunctions.php');
    

    $name = $_POST['Name'];
    $aiubid = $_POST['AIUBID'];
    $status = $_POST['Status'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    //echo "Name : ".$name. "<br>"." ID : ".$aiubid."<br>"." Status : ".$status."<br>"." Email : ".$email."<br>"." Phone : ".$phone."<br>"." Username : ".$username." <br>"." Password : ".$password; 
    
    //For Student
    if($status == "Student")  //For Student 
        {
            $register = StudentProfile($email,$name,$phone,$aiubid);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    echo "$name.[Student] Successfully Registerd !";
                }
                else
                {
                    echo "Problem Occure in LoginData !";
                }
            
            }
            else
            {
                echo "Please Provide All Infomation Correctly";
            }
        }
       
        if($status == "Alumni")  //For Alumni 
        {
            $register = AlumniProfile($email,$name,$aiubid,$phone);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    echo "$name. [Alumni] Successfully Register.";
                }
                else
                {
                    echo "Problem Occure in LoginData.";
                }
            }
            else
            {
                echo "Please Provide all Information Correctly !";
            }
        }

        if($status == "Faculty")  //For Faculty 
        {
            $register = FacultyProfile($email,$name,$phone,$aiubid);
            $login = Login($email,$username,$password,$status);
            if($register)
            {
                if($login)
                {
                    echo $name." [Faculty] Successfully Registered.";
                }
                else
                {
                    echo "Problem Occure in LoginData";
                }
            }
            else
            {
                echo "Please Provide all Information Correctly !";
            }
        }
?>