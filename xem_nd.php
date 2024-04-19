<?php

require_once('./db/dbhelper.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select * from ds_bai_viet where id = '.$id;
    $result = executeResult($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem nội dung</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/anhdaidien.jpg">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>
<body>
    <div id="content-detail">
    <div class="bai_viet" style="width: 700px; margin-left: 415px; margin-top: 140px; margin-bottom: 100px;">
        <?= $result[0]['noi_dung'] ?>
    </div>
    </div>
</body>
</html>

