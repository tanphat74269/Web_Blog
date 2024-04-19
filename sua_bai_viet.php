<?php
require_once('./db/dbhelper.php');
require_once('functions.php');
// Lấy id và đổ dữ liệu ra màn hình
if(!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "select * from ds_bai_viet where id = ".$id;
$result = executeResult($sql);

// =====================================
$newfilename = $result[0]['hinh_anh'];
// ================= Chỉnh sửa bài viết==============================
if(!empty($_POST)) {

    // them hinh anh
    if($_FILES['file']['name'] != "") {
        $filename = $_FILES['file']['name'];
        $tmpname = $_FILES['file']['tmp_name'];
        
        $newfilename = uniqid() . "-" . $filename;
        
        move_uploaded_file($tmpname, 'uploads/' . $newfilename);
    }
    // =======================

    $loai_bai_viet = $_POST['loai_bai_viet'];
    $loai_bai_viet_id = 1;
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

    $sql = "update ds_bai_viet set loai_bai_viet_id = '$loai_bai_viet_id', hinh_anh = '$newfilename', tieu_de = '$tieu_de', trich_dan = '$trich_dan', noi_dung = '$noi_dung' where id = ".$id;
    execute($sql);
    //chuyen sang trang login.php
    header('Location: quanlybaiviet2255.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/summernote/summernote-lite.min.css">
    <script src="./assets/summernote/summernote-lite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="./assets/img/anhdaidien.jpg">
</head>
<body>
    <div id="them" style="margin-left: 300px; margin-right: 300px">
        <h2 style="margin-top: 50px; margin-bottom: 10px;">Sửa bài viết</h2>
        <form method="POST" enctype="multipart/form-data">        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loại bài viết</label>
                <select name="loai_bai_viet" class="form-select" aria-label="Default select example">
                    <option>Chọn loại bài viết</option>
                    <option <?=($result[0]['loai_bai_viet_id']==1)?"selected":""?> value="Tiền bạc">Tiền bạc</option>
                    <option <?=($result[0]['loai_bai_viet_id']==2)?"selected":""?> value="Hẹn hò">Hẹn hò</option>
                    <option <?=($result[0]['loai_bai_viet_id']==3)?"selected":""?> value="Du lịch">Du lịch</option>
                    <option <?=($result[0]['loai_bai_viet_id']==4)?"selected":""?> value="Tiếng anh">Tiếng anh</option>
                    <option <?=($result[0]['loai_bai_viet_id']==5)?"selected":""?> value="Lập trình">Lập trình</option>
                </select>
            </div>
            <div class="mb-3">
                <div style="margin-bottom: 10px;">Hình ảnh</div>   
                <label class="d-block">
                    <img class="d-block image-preview-edit" src="<?=get_image($result[0]['hinh_anh'])?>" style="cursor: pointer;" width="180px" alt="">
                    <input class="d-none" onchange="display_image_edit(this.files[0]);" type="file" name="file"> <br> 
                </label>
                <script>
                    function display_image_edit(file) {
                        document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                    }
                </script>
            </div>
            <div class="mb-3" style="margin-top: -20px;">
                <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                <input value="<?=$result[0]['tieu_de']?>" name="tieu_de" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Trích dẫn</label>
                <input value="<?=$result[0]['trich_dan']?>" name="trich_dan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                <textarea id="summernote" name="noi_dung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><?=$result[0]['noi_dung']?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 200px; padding: 8px;">Cập nhật bài viết</button>
        </form>
    </div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Post content',
        tabsize: 2,
        height: 400
      });
    </script>
</body>
</html>