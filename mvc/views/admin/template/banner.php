<?php ob_start(); ?>
<?php if(!isset($_SESSION)) { 
session_start(); 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner</title>
</head>
<body>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     

        <hr class="sidebar-divider my-0">

        <?php if($_SESSION['ROLE'] == 1) {?>

        <li class="nav-item active">
            <a class="nav-link" href="http://localhost:8888/MNM/Trangchu">
                <i class="fas fa-home"></i> Trang chủ</a>
        </li>

        <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tasks"></i> Quản lý
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost:8888/MNM/Trangcanhan/baidang">Quản lý bài đăng</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://localhost:8888/MNM/Trangcanhan/motel">Quản lý phòng trọ</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://localhost:8888/MNM/Trangcanhan/user">Quản lý người dùng</a>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://localhost:8888/MNM/Trangcanhan">
                <i class="fas fa-user-circle"></i> Thông tin cá nhân</a>
        </li>

        <?php } else{

            ?>  <li class="nav-item active">
            <a class="nav-link" href="http://localhost:8888/MNM/Trangchu">
                <i class="fas fa-home"></i> Trang chủ</a>
        </li>

<li class="nav-item active">
            <a class="nav-link" href="http://localhost:8888/MNM/Trangcanhan">
                <i class="fas fa-user-circle"></i> Thông tin cá nhân</a>
        </li>
            <?php
        }
        
        
        ?>

    </ul>
</body>
</html>
<?php ob_end_flush(); ?>