<?php
    require_once('./db/dbhelper.php');
    $tenchude = "";
    if(!empty($_GET)) {
        if(isset($_GET['loai_bai_viet'])) {
            $chude = $_GET['loai_bai_viet'];
            $sql = 'select * from loai_bai_viet where id = '.$chude;
            $tenchude = executeResult($sql)[0]['ten_loai'];
            // lay id 
            $id = $_GET['loai_bai_viet'];
        }
    }
    $tieude = $tenchude;
    include_once('./header.php');
    // lay ra danh sach bai viet theo loai
    // moi trang 8 bai viet
    $current_page = 1;
    if(isset($_GET['page'])) {
        $current_page = $_GET['page'];
    }
    if($current_page == 1) {
        $sql = 'select * from ds_bai_viet where loai_bai_viet_id = '.$id.' limit 0, 9';
        $result = executeResult($sql);
    } else {
        $index = ($current_page-1)*9;
        $sql = 'select * from ds_bai_viet where loai_bai_viet_id = '.$id.' limit '.$index.', 9';
        $result = executeResult($sql);
    }
?>
        
<!-- content -->
<div id="content">
    <h3 class="tieudechinh"><?= $tenchude ?></h3>
    <div class="list-item">
        <?php
            foreach($result as $item) {
                echo '<div class="item">
                        <a href="detail.php?id='.$item['id'].'"><img class="img" src="uploads/'.$item['hinh_anh'].'" alt=""></a>
                        <h2><a href="detail.php?id='.$item['id'].'" class="tieudephu">'.$item['tieu_de'].'</a></h2>
                        <p class="paragraph">'.$item['trich_dan'].'</p>
                    </div>';
            }
        ?>
    </div> 
    <?php
        require_once('pagination.php');
    ?>
</div>
    
<!-- footer -->
<?php
    include_once('./footer.php');
?>   
