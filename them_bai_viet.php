<?php
require_once('./db/dbhelper.php');

// them hinh anh
if(!empty($_FILES)) {
    $filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
    
    $newfilename = uniqid() . "-" . $filename;
    
    move_uploaded_file($tmpname, 'uploads/' . $newfilename);
}
// ===============================================

if(!empty($_POST)) {
    $loai_bai_viet = $_POST['loai_bai_viet'];
    $loai_bai_viet_id = '';
    switch ($loai_bai_viet) {
        case 'Tiền bạc':
            $loai_bai_viet_id = 1;
            break;
        case 'Hẹn hò':
            $loai_bai_viet_id = 2;
            break;
        case 'Du lịch':
            $loai_bai_viet_id = 3;
            break;
        case 'Tiếng anh':
            $loai_bai_viet_id = 4;
            break;
        case 'Lập trình':
            $loai_bai_viet_id = 5;
            break;
    }

    $tieu_de = $_POST['tieu_de'];
    $trich_dan = $_POST['trich_dan'];
    $noi_dung = $_POST['noi_dung'];

    $sql = "insert into ds_bai_viet (loai_bai_viet_id, tieu_de, hinh_anh, trich_dan, noi_dung) values ('$loai_bai_viet_id', '$tieu_de', '$newfilename', '$trich_dan', '$noi_dung')";
    execute($sql);
    //chuyen sang trang login.php
    header('Location: trangquanly74269.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div id="them" style="margin-left: 300px; margin-right: 300px">
        <h2 style="margin-top: 50px; margin-bottom: 10px;">Thêm bài viết</h2>
        <form method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loại bài viết</label>
                <select name="loai_bai_viet" class="form-select" aria-label="Default select example">
                    <option selected>Chọn loại bài viết</option>
                    <option value="Tiền bạc">Tiền bạc</option>
                    <option value="Hẹn hò">Hẹn hò</option>
                    <option value="Du lịch">Du lịch</option>
                    <option value="Tiếng anh">Tiếng anh</option>
                    <option value="Lập trình">Lập trình</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                <input name="tieu_de" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                <input type="file" name="file" required> <br> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Trích dẫn</label>
                <input name="trich_dan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                <input name="noi_dung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</body>
</html>