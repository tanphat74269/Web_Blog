<?php
require_once('../../db/dbhelper.php');
$id = $_GET['id'];
$sql = 'select * from loai_bai_viet where id = '.$id;
$result = executeResult($sql);

// Sửa
if($_POST) {
    $tenloai = $_POST['chude'];
    $sql = "update loai_bai_viet set ten_loai = '$tenloai' where id = ".$id;
    execute($sql);
    header('Location: category.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Update category</h1>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên chủ đề</label>
                <input value="<?= $result[0]['ten_loai'] ?>" name="chude" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập chủ đề">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>