<?php
require_once './dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meritorious Academic Care</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     <link rel="stylesheet" href="../css/dashboard.css">
     <link rel="stylesheet" href="../css/registration.css">
     <style>
           img{
              width:100px;
            }
            a {
                text-decoration: none;
                color:black;
            }
     </style>

</head>
<body>
<div class="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fas fa-book-reader"></i> MAC</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li ><a href="index.php?page=dashboard" class="active"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>
                </li>

                <li><a href="index.php?page=all-student"><span class="las la-users"></span>
                <span>All Students</span></a>
                </li>

                <li><a href="index.php?page=all-users"><span class="las la-users"></span>
                <span>All Users</span></a>
                </li>

                <li><a href="index.php?page=add-student"><span class="las la-user-plus"></span>
                <span>Add Student</span></a>
                </li>

                <li><a href="index.php?page=registration"><span class="las la-user-plus"></span>
                <span>Add User</span></a>
                </li>
                <li><a href="../index.php"><span class="las la-home"></span>
                <span>Student Info</span></a>
                </li>
                <li><a href="../home.php"><i class="fas fa-book-reader"></i> 
                <span>Back To Site</span></a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-igloo"></span>
                </label>
                Dashboard
            </h2>
            <div class="user-wrapper">
                <img src="../img/robin.jpg" alt="" width="40px" height="40px">
                <div>
                    <h4>Robin</h4>
                    <small>Super admin</small>
                </div>
            </div>
            <h2>
            <a href="logout.php">
                <label for="">
                    <span class="las la-sign-out-alt"></span>
                </label>
                Logout</a>
            </h2>

        </header>


        <div class="main">
            <?php

  if(isset($_GET['page'])){
        $page = $_GET['page'].'.php';
    }
    else{
        $page = "dashboard.php";
    }

    if(file_exists($page)){
        require_once $page;
    }
    else{
        require_once '404.php';
    }

    ?>
    
    </div>
</div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
   <script src="../js/jquery-table.js"></script>
   <script src="../js/jquery.dataTables.min.js"></script>
   <script src="../js/dataTables.bootstrap4.min.js"></script>
   <script src="../js/style.js"></script>
</body>
</html>