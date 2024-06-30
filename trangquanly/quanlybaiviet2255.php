<?php
if(!isset($_COOKIE['login']) || $_COOKIE['login'] != 'true') {
    header('Location: login.php');
    die();
}
require_once('../db/dbhelper.php');
$tieude = "";
// đổ category ra màn hình
$sql = 'select * from loai_bai_viet';
$resultCate = executeResult($sql);

// moi trang 5 dong
$current_page = 1;
if(isset($_GET['page'])) {
    $current_page = $_GET['page'];
}
$index = ($current_page-1)*5;
$chude = "Tất cả";
if(!empty($_GET['loai_bai_viet_id'])) {
    $chude = $_GET['loai_bai_viet_id'];
}

if($chude == "Tất cả") {
    $tieude = "Trang quản lý";
    $sql = 'select * from ds_bai_viet limit '.$index.', 5';
} else {
    $tieude = "Phân loại bài viết";
    $sql = 'select * from ds_bai_viet where loai_bai_viet_id like "%'.$chude.'%" limit '.$index.', 5';
}
$result = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/icon/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/anhdaidien.jpg">
    <link rel="stylesheet" href="../assets/css/trang_quanly.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2 class="phanloaibaiviet">Quản lý bài viết</h2>
    <div style="display: flex;">
        <a href="./post/them_bai_viet.php">
            <button style="margin-left: 120px; width: 130px;" type="button" class="btn btn-primary">Thêm bài viết</button>
        </a>
        <a href="./category/category.php">
            <button style="margin-left: 10px; width: 130px;" type="button" class="btn btn-primary">Category</button>
        </a>
        <form action="" method="GET" style="display: flex;">
            <div style="width: 140px; margin-left: 100px;">
                <select name="loai_bai_viet_id" required="true" class="form-select" aria-label="Default select example">
                    <option value="Tất cả">Chọn chủ đề</option>
                    <?php
                        foreach($resultCate as $item) {
                            $selected = ($chude == $item['id'])?"selected":"";
                            echo '<option '.$selected.' value="'.$item['id'].'">'.$item['ten_loai'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Lọc danh sách</button> 
        </form>
        <a href="logout.php">
            <button  style="margin-left: 480px; float: right;" type="submit" class="btn btn-primary">Đăng xuất tài khoản</button>
        </a>
    </div>
    
    <table class="table" style="margin-top: 20px;">
        <thead>
            <tr>
                <th style="width: 70px;" scope="col">STT</th>
                <th style="width: 130px;" scope="col">Loại bài viết</th>
                <th style="width: 200px;" scope="col">Hình ảnh</th>
                <th style="width: 250px;" scope="col">Tiêu đề</th>
                <th style="width: 400px;" scope="col">Trích dẫn</th>
                <th style="width: 60px;" scope="col">Sửa</th>
                <th style="width: 60px;" scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
<?php
    $count = $current_page * 5 - 4; // quy luat
    foreach($result as $item) {
        $loai_bai_viet_id = $item['loai_bai_viet_id'];
        $sql = 'select * from loai_bai_viet where id = '.$loai_bai_viet_id;
        $loai_bai_viet = executeResult($sql);
        echo '<tr>
                <th scope="row">'.($count++).'</th>
                <td>'.$loai_bai_viet[0]['ten_loai'].'</td>
                <td><img src="../uploads/'.$item['hinh_anh'].'" width="150px" alt=""></td>
                <td>'.$item['tieu_de'].'</td>
                <td>'.$item['trich_dan'].'</td>
                <td>
                    <a href="./post/sua_bai_viet.php?id='.$item['id'].'">
                        <button style="color: #000;" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                    </a>   
                </td>
                <td>
                    <a href="./post/xoa_bai_viet.php?id='.$item['id'].'" onclick="return deletePost()" class="btn btn-danger"><i class="bi bi-trash"></i></a>        
                </td>      
            </tr>
           ';
    }
?>     
        </tbody>
    </table>
    <script>
        function deletePost() {
            return confirm('Bạn có chắc chắn xóa bài viết này?');
        }
    </script>
    
    <!-- pagination -->
    <?php 
        require_once('../pagination.php');
    ?> 
</body>
</html>