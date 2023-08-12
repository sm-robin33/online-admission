<?php
@ob_start();
session_start();

	$link=mysqli_connect("localhost","root","","admission2018");
?>


<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email_check = mysqli_query($link,"SELECT * FROM `admins` WHERE `email` = '$email'");
    if(mysqli_num_rows($email_check)>0){
        $row= mysqli_fetch_assoc($email_check);
        if($row['password'] == $password){
             $_SESSION["user_login"] = $email;
                    header("location: deshboard/index.php");
           
        }else{
            $wrong_password = 'Password dosnt match';
        }
    }else{
        $email_error = 'This email not found';
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .back h6 a{
    text-decoration: none;
    font-size: 14px;
    color: seagreen;
}
a{
    color:white;
    text-decoration: none;

}
    </style>
</head>
<body>


<form class="box" action="login.php" method="POST">

    <h1>Admin Login</h1>
    <input type="text" value="<?php if(isset($email)) echo $email;  ?>" name="email" id="email" placeholder="email" require="">
    <input type="password" value="<?php if(isset($password)) echo $password;  ?>" name="password" id="password" placeholder="password" require="">
    <input type="submit" value="Login" name="login">
    <a href="../../index.php">Back To Home</a>

    <?php if(isset($email_error)){echo '<div class="alert  alert-danger col-md-5">'.$email_error.'</div>';} ?>
     <?php if(isset($wrong_password)){echo '<div class="alert alert-danger col-md-5">'.$wrong_password.'</div>';} ?>

</form>
        

</body>
</html>