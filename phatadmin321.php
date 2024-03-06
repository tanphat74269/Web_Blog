<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');

$tieude = $mota = '';
if(!empty($_POST)) {
    $tieude = getPOST('tieude');
    $mota = getPOST('mota');
    $img = $_POST['img'];
    
    if($tieude != '' && $mota != '') {
        $sql = "insert into danhsachbaiviet(img, tieude, mota) values('$img','$tieude','$mota')";
        execute($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
</head>
<body>
    <form method="POST" action="">
        <input type="file" name="img" accept=".jpg, .jpeg, .png" value=""> <br>
        <input type="text" name="tieude"> <br>
        <input type="text" name="mota"> <br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>