
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>NSTU ADMINISTRATOR</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li ><a href="index.php?page=dashboard" class="active"><span class="las la-igloo"></span>
                <span>DASHBOARD</span></a>
                </li>

              

                <li><a href="index.php?page=all-student"><span class="las la-clipboard-list"></span>
                <span>All Students</span></a>
                </li>

                <li><a href="index.php?page=all-users"><span class="las la-shopping-bag"></span>
                <span>All Users</span></a>
                </li>

                <li><a href="#"><span class="las la-receipt"></span>
                <span>Inventory</span></a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" id="" placeholder="search here">
            </div>
            <div class="user-wrapper">
                <img src="img/rafi.jpg" alt="" width="100px" height="100px">
                <div>
                    <h4>Rasel</h4>
                    <small>Super Admin</small>
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

    </div>

   <script src="../js/jquery.dataTables.min.js"></script>
   <script src="../js/dataTables.bootstrap4.min.js"></script>

</body>
</html>