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
    <title>Sửa phòng trọ</title>
    
    <script src="../ckeditor/ckeditor.js"></script>
    <style>
        td{
            padding-right: 30px;
            color: black;
        }

        tr td{
            padding-top: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 0;
            box-shadow   : none;
            height: 45px;

            &:hover {
                box-shadow: none;
            }

            &.active,
            &:focus {
                box-shadow: none;
            }
        }

        .col-form-label{
            padding-left: 30px;
        }

    </style>
</head>
<body>
    <div class="modal fade" id="edit_motel<?php echo $row['Motel_Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
        <?php
            include("Connect.php");
            $sql = "SELECT * FROM motel m INNER JOIN user u ON m.user_id = u.user_id WHERE Motel_Id='".$row['Motel_Id']."'" ;
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sửa phòng trọ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" class="form-control" name="Motel_Id" value="<?php echo $row['Motel_Id']; ?>">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tiêu đề</span>
                    </div>
                    <input type="text" class="form-control" name="title" value="<?php echo $row['Title']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Mô tả</span>
                    </div>
                    <textarea name="description" id="description" rows="5" cols="100"><?php echo $row['Description']; ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Giá</span>
                    </div>
                    <input type="number" class="form-control" name="price" value="<?php echo $row['Price']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Diện tích</span>
                    </div>
                    <input type="text" class="form-control" name="area" value="<?php echo $row['Area']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Địa chỉ</span>
                    </div>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['Address']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Hình ảnh</span>
                    </div>
                    <img src="http://localhost:8888/MNM/public/image/<?php echo $row['Images']; ?>" style="height: 200px; width: 300px;">
                    <input type="file" class="form-control" name="images" id="images" style="height: 100%;" accept=".jpg, .png, .svg">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Số điện thoại</span>
                    </div>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['Phone']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Lượt xem</span>
                    </div>
                    <input type="text" class="form-control" name="count_view" value="<?php echo $row['Count_view']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tiện ích</span>
                    </div>
                    <input type="text" class="form-control" name="utilities" value="<?php echo $row['Utilities']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tình trạng</span>
                    </div>
                    <select class="form-select"  <?php echo "value='".$row['Approve']."'"; ?>  name="approve" aria-label="Default select example">
                    
                    <option value="1" <?php echo($row['Approve'] == "1"?"selected":"");?>>Có sẵn</option>    
                    <option value="0" <?php echo($row['Approve'] == "0"?"selected":"");?>>Không có sẵn</option>
                        </select>
                 
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Trạng thái</span>
                    </div>
                    <select class="form-select"    name="status" aria-label="Default select example">
                        <option value="0"  <?php echo($row['Status'] == "0"?"selected":"");?>>Chưa kiểm duyệt</option>
                        <option value="1" <?php echo($row['Status'] == "1"?"selected":"");?>>Đã kiểm duyệt</option>
                        <option value="2" <?php echo($row['Status'] == "2"?"selected":"");?>>Sai nội dung</option>
                        </select>
                        <?php echo '<script> document.getElementById("status").value = "'.$row['Status'].'"; </script>'; ?>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-primary" name="edit_motel">Lưu</button>
            </div>
            </div>
            <script>CKEDITOR.replace('description');</script>
        </form>
        </div>
    </div>  
</body>
</html>
<?php
    include 'Connect.php';
    if(isset($data["iddel"])){        
        $Motel_Id=$data["iddel"];
        $query = "DELETE FROM motel WHERE Motel_Id='$Motel_Id'";
        $query_run = mysqli_query($conn, $query);  
        if($query_run){
            $_SESSION['success'] = "Xoá thành công";
            header('location: http://localhost:8888/MNM/Trangcanhan/motel');
        }else{
            $_SESSION['success'] = "Xoá không thành công";
            header('location: http://localhost:8888/MNM/Trangcanhan/motel');
        }
        mysqli_close($conn); 
    }
    if(isset($_POST['edit_motel'])) 
    {   
        $motel_id = $_POST['Motel_Id'];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $area = $_POST["area"];
        $address = $_POST["address"];
        $utilities = $_POST["utilities"];
        $count_view = $_POST["count_view"];
        $created_at = date('Y-m-d H:i:s');
        $phone = $_POST["phone"];
        $approve = $_POST["approve"];
        $status = $_POST["status"];

        $img_name = $_FILES['images']['name'];

        if(file_exists("../photo/".$img_name)) {
            $str = $_FILES['images']['name'];
            $_SESSION['status'] = "Hình ảnh đã tồn tại '.$str.'";
            header('Refresh:0');
        }
        else{
            $sql = "UPDATE motel SET Title='$title', `Description`='$description', Price='$price', Area='$area',
                `Address`='$address', `Images`='$img_name', `Utilities`='$utilities', `Count_view`='$count_view',
                `Phone`='$phone', `Created_at`='$created_at', `Approve`='$approve', `Status`='$status' WHERE Motel_Id='$motel_id'";
           $query_run = mysqli_query($conn, $sql);

            if($query_run){
                move_uploaded_file($_FILES['images']['tmp_name'], 'public/image/'.$img_name);
                $_SESSION['success'] = "Cập nhật thành công";
                header('Refresh:0');
            }else{
                $_SESSION['success'] = "Cập nhật không thành công";
                header('Refresh:0');
            }
        }
        
        mysqli_close($conn); 
    }
?>
<?php ob_end_flush(); ?>