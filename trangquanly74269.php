<?php
require_once('./db/dbhelper.php');

$sql = 'select * from ds_bai_viet';
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
    <link rel="stylesheet" href="./assets/css/trang_quanly.css">
</head>
<body>
    <h2 class="phanloaibaiviet">Quản lý bài viết</h2>
    <a href="them_bai_viet.php">
        <button style="margin-left: 120px;" type="button" class="btn btn-primary">Thêm bài viết</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th  style="width: 110px;" scope="col">Loại bài viết</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Trích dẫn</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Xóa</th>
                <th scope="col">Sửa</th>
            </tr>
        </thead>
        <tbody>
<?php
    $count = 0;
    foreach($result as $item) {
        $loai_bai_viet_id = $item['loai_bai_viet_id'];
        $sql = 'select * from loai_bai_viet where id = '.$loai_bai_viet_id;
        $loai_bai_viet = executeResult($sql);
        echo '<tr>
            <th scope="row">'.(++$count).'</th>
            <td>'.$loai_bai_viet[0]['ten_loai'].'</td>
            <td>'.$item['tieu_de'].'</td>
            <td><img src="uploads/'.$item['hinh_anh'].'" width="150px" alt=""></td>
            <td>'.$item['trich_dan'].'</td>
            <td>'.$item['noi_dung'].'</td>

            <td><button class="btn btn-danger">Xóa</button></td>

            <td><button style="color: #000;" class="btn btn-warning">Sửa</button></td>

        </tr>';
    }
?>
            
        </tbody>
    </table>

</body>
</html>