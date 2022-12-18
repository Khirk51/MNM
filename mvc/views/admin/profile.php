<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title> 
</head>
<body id="page-top">
    <div id="wrapper">

        <?php include 'template/banner.php'?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php include 'template/header.php'?>
                <div class="container-fluid">
                    
                    <div class="my-2"></div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Thông tin cá nhân</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTableUser" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <tbody>
                                    <?php
                                            include("Connect.php");
                                            $sql = "SELECT * FROM user WHERE user_id='".$_SESSION['user']."'";
                                            $values = mysqli_query ($conn, $sql);   
                                            $row = mysqli_fetch_array($values);
                                ?>
                                        <tr>
                                            <th>Tên người dùng</th>
                                            <td><?php echo $row["Name"];?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $row["Email"];?></td>
                                        </tr>
                                        <tr>
                                            <th>Số điện thoại</th>
                                            <td><?php echo $row["Phone"];?></td>
                                        </tr>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <td><img src="http://localhost:8888/MNM/public/image/user/<?php echo $row["Avatar"];?>" style="height: 200px;"></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
  
                                <td style="text-align:center;">
                                                <a href="#edit_user<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                                <?php include 'edit-user.php' ?>
                                            </td>
                
                                            <td style="text-align:center;">
                                                <a href="#changepass_user<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-secondary">
                                                <i class="fas fa-unlock-alt"></i> Đổi mật khẩu</a>
                                                <?php include 'changepass.php' ?>
                                            </td>
                            </div>
                        </div>
                        <?php
                                if(isset($_SESSION['success']) && $_SESSION['success'] != ''){
                                    echo "<script> alert('" .$_SESSION['success']."')</script>";
                                    unset($_SESSION['success']);
                                }
                                
                                if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
                                    echo "<script> alert('" .$_SESSION['status']."')</script>";
                                    unset($_SESSION['status']);
                                }
                            ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>