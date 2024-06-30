<?php
require_once('./db/dbhelper.php');
$sql = 'select * from loai_bai_viet';
$resultNav = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$tieude?></title>
    <link rel="icon" type="image/x-icon" href="./assets/img/anhdaidien.jpg">
    
    <!-- header, content, footer, admin -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>
<body>   
    <div id="header">
        <ul class="navbar">
            <li><a href="./index.php">Trang chủ</a></li>
            <?php
                foreach($resultNav as $item) {
                    echo '<li><a href="./category.php?loai_bai_viet='.$item['id'].'">'.$item['ten_loai'].'</a></li>';
                }
            ?>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>
