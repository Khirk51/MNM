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
    <title>Xoá địa chỉ phòng trọ</title>
    
</head>
<body>
    <?php
        $district_id=$_GET['district_id'];
        include("Connect.php"); 
        $query = "DELETE FROM districts WHERE district_id='$district_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            $_SESSION['success'] = "Xoá thành công";
            header('Location: view-districts.php');
        }else{
            $_SESSION['success'] = "Xoá không thành công";
            header('Location: view-districts.php');
        }  
        mysqli_close($conn); 
    ?>  
</body>
</html>
<?php ob_end_flush(); ?>