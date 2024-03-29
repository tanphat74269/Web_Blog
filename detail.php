<?php

require_once('./db/dbhelper.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select * from ds_bai_viet where id = '.$id;
    $result = executeResult($sql);
}

$tieude = $result[0]['tieu_de'];
include_once('header.php');
?>

<div id="content">
    <div class="bai_viet">
        <?= $result[0]['noi_dung'] ?>
    </div>
</div>

<?php
include_once('footer.php');
?>