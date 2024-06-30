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

<div id="content-detail">
    <div class="bai_viet" style="width: 700px; margin-left: 415px; margin-top: 130px; margin-bottom: 100px;">
        <?php
            echo $result[0]['noi_dung'];
        ?>
    </div>
</div>

<?php
include_once('footer.php');
?>