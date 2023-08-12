<?php

session_start();
$errmsg_array = array();
$errflag = false;

    $databaseHost = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $databaseName = "admission2018";

    $conn = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    
if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        
        $password = md5($password);
    if ($email == '') {
            $errmsg_arr[] = 'You must enter your Email';
            $errflag = true;
    }
    if ($password == '') {
            $errmsg_arr[] = 'You must enter your Password';
            $errflag = true;
    }

    $email_check = mysqli_query($conn,"SELECT * FROM `student_data` WHERE `EMAIL` = '$email'");
    if(mysqli_num_rows($email_check)>0){
        $_SESSION['email']= $email;
        $row= mysqli_fetch_assoc($email_check);
        if($row['PASSWORD'] == $password){
               header("Location: ./home/index.php");
            }
        else{
            $wrong_password = 'Password dosnt match';
            header("Location: index.php");

        }
    }else{
        $email_error = 'This email not found';
        header("Location: index.php");
    }
}

        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: ../Online-College-Admission-System-PHP-MySQL/");
            exit();
        }    
?>