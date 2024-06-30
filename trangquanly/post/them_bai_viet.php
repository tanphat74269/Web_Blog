<?php
require_once('../../db/dbhelper.php');
$sql = 'select * from loai_bai_viet';
$resultNav = executeResult($sql);
// them hinh anh
if(!empty($_FILES)) {
    $filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
    $newfilename = uniqid() . "-" . $filename;
    move_uploaded_file($tmpname, '../../uploads/' . $newfilename);
}

if(!empty($_POST)) {
    $loai_bai_viet = $_POST['loai_bai_viet'];
    $sql = 'select * from loai_bai_viet where ten_loai= "'.$loai_bai_viet.'"';
    $loai_bai_viet_id = executeResult($sql)[0]['id'];
    $tieu_de = $_POST['tieu_de'];
    $trich_dan = $_POST['trich_dan'];
    $noi_dung = $_POST['noi_dung'];
    $sql = "insert into ds_bai_viet (loai_bai_viet_id, tieu_de, hinh_anh, trich_dan, noi_dung) values ('$loai_bai_viet_id', '$tieu_de', '$newfilename', '$trich_dan', '$noi_dung')";
    execute($sql);
    header('Location: ../quanlybaiviet2255.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../assets/summernote/summernote-lite.min.css">
    <script src="../../assets/summernote/summernote-lite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../../assets/img/anhdaidien.jpg">
</head>
<body>
    <div id="them" style="margin-left: 300px; margin-right: 300px">
        <h2 style="margin-top: 50px; margin-bottom: 10px;">Thêm bài viết</h2>
        <form method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loại bài viết</label>
                <select name="loai_bai_viet" class="form-select" aria-label="Default select example">
                    <option selected>Chọn loại bài viết</option>
                    <?php
                        foreach($resultNav as $item) {
                            echo '<option value="'.$item['ten_loai'].'">'.$item['ten_loai'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                <input type="file" name="file" required> <br> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                <input name="tieu_de" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Trích dẫn</label>
                <input name="trich_dan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                <textarea id="summernote" name="noi_dung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 200px; padding: 8px;">Thêm bài viết</button>
            <a href="../quanlybaiviet2255.php" class="btn btn-primary" style="margin-bottom: 200px; padding: 8px;">Quay lại</a>   
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