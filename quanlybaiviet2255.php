<?php
require_once('./db/dbhelper.php');
$tieude = "";

// moi trang 5 dong
$current_page = 1;
if(isset($_GET['page'])) {
    $current_page = $_GET['page'];
}
$index = ($current_page-1)*5;
$chude = "";
if(!empty($_GET['loai_bai_viet'])) {
    $chude = $_GET['loai_bai_viet'];
}

// chuyen sang loai_bai_viet_id
switch ($chude) {
    case 'Tiền bạc':
        $chude = 1;
        break;
    case 'Hẹn hò':
        $chude = 2;
        break;
    case 'Du lịch':
        $chude = 3;
        break;
    case 'Tiếng anh':
        $chude = 4;
        break;
    case 'Lập trình':
        $chude = 5;
        break;
    case 'Chọn chủ đề':
        $chude = "Tất cả";
        break;
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
    <link rel="stylesheet" href="./assets/icon/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/anhdaidien.jpg">
    <link rel="stylesheet" href="./assets/css/trang_quanly.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h2 class="phanloaibaiviet">Quản lý bài viết</h2>
    <div style="display: flex;">
        <a href="them_bai_viet.php">
            <button style="margin-left: 120px; width: 130px;" type="button" class="btn btn-primary">Thêm bài viết</button>
        </a>
        <form action="" method="GET" style="display: flex;">
            <div style="width: 140px; margin-left: 120px;">
                <select name="loai_bai_viet" required="true" class="form-select" aria-label="Default select example">
                    <option value="Chọn chủ đề">Chọn chủ đề</option>
                    <option <?=($chude == 1)?'selected':''?> value="Tiền bạc">Tiền bạc</option>
                    <option <?=($chude == 2)?'selected':''?> value="Hẹn hò">Hẹn hò</option>
                    <option <?=($chude == 3)?'selected':''?> value="Du lịch">Du lịch</option>
                    <option <?=($chude == 4)?'selected':''?> value="Tiếng anh">Tiếng anh</option>
                    <option <?=($chude == 5)?'selected':''?> value="Lập trình">Lập trình</option>
                </select>
            </div>
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Lọc danh sách</button>
        </form>
    </div>
    
    <table class="table" style="margin-top: 20px;">
        <thead>
            <tr>
                <th style="width: 70px;" scope="col">STT</th>
                <th style="width: 130px;" scope="col">Loại bài viết</th>
                <th style="width: 200px;" scope="col">Hình ảnh</th>
                <th style="width: 250px;" scope="col">Tiêu đề</th>
                <th style="width: 400px;" scope="col">Trích dẫn</th>
                <th style="width: 130px;" scope="col">Nội dung</th>
                <th style="width: 60px;" scope="col">Sửa</th>
                <th style="width: 60px;" scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
<?php
    $count = $current_page * 5 - 4;
    foreach($result as $item) {
        $loai_bai_viet_id = $item['loai_bai_viet_id'];
        $sql = 'select * from loai_bai_viet where id = '.$loai_bai_viet_id;
        $loai_bai_viet = executeResult($sql);
        echo '<tr>
            <th scope="row">'.($count++).'</th>
            <td>'.$loai_bai_viet[0]['ten_loai'].'</td>
            <td><img src="uploads/'.$item['hinh_anh'].'" width="150px" alt=""></td>
            <td>'.$item['tieu_de'].'</td>
            <td>'.$item['trich_dan'].'</td>
            <td><a href="xem_nd.php?id='.$item['id'].'">Xem nội dung</a></td>

            <td>
                <a href="sua_bai_viet.php?id='.$item['id'].'">
                    <button style="color: #000;" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                </a>   
            </td>
            <td>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger"><i class="bi bi-trash"></i></button>        
            </td>      
        </tr>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có thực sự muốn xóa bài viết này?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Không</button>
                        <a href="xoa_bai_viet.php?id='.$item['id'].'">
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </a>           
                    </div>
                </div>
            </div>
        </div>';
    }
?>
        
        </tbody>
    </table>

    <!-- Modal -->
    
    
    <!-- pagination -->
    <?php 
        require_once('pagination.php');
    ?> 
</body>
</html>