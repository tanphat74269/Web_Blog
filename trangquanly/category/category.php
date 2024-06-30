<?php
require_once('../../db/dbhelper.php');
if(!empty($_POST)) {
    if(isset($_POST['chude'])) {
        $tenloai = $_POST['chude'];
        $sql = "insert into loai_bai_viet (ten_loai) values ('$tenloai')";
        execute($sql);
    }
}

$sql = 'select * from loai_bai_viet';
$resultNav = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/icon/bootstrap-icons/font/bootstrap-icons.min.css">
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1 style="text-align: center;">Category</h1>
    <div class="container">
        <a href="../quanlybaiviet2255.php">
            <button class="btn btn-primary">Quản lý bài viết</button>
        </a>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên chủ đề</label>
                <input name="chude" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập chủ đề">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
        <table class="table table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th scope="col">Tên chủ đề</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($resultNav as $item) {
                    echo '<tr>
                            <td>'.$item['ten_loai'].'</td>
                            <td>
                                <a href="updatecategory.php?id='.$item['id'].'">
                                    <button style="color: #000;" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="deletecategory.php?id='.$item['id'].'" onclick="return deleteCate()" class="btn btn-danger"><i class="bi bi-trash"></i></a>          
                            </td>
                        </tr>
                        ';    
                }
            ?>
            </tbody>
        </table>
    </div>
    <script>
        function deleteCate() {
            var kiemTra = confirm('Nếu xóa 1 chủ đề thì tất cả bài viết trong chủ đề đó cũng bị xóa. Bạn có muốn xóa không?');
            return kiemTra;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>