<?php
    $tieude = "Trang chủ";
    include_once('header.php');
    require_once('./db/dbhelper.php');

    // moi trang 8 bai viet
    $current_page = 1;
    if(isset($_GET['page'])) {
        $current_page = $_GET['page'];
    }
    $index = ($current_page-1)*9;

    $sql = 'select * from ds_bai_viet limit '.$index.', 9';
    $result = executeResult($sql);
?> 

<!-- content -->
<div id="content">
    <h3 class="tieudechinh">Tất cả bài viết</h3>
    <div class="list-item">
        <?php
            foreach($result as $item) {
                echo '<div class="item">
                        <a href="detail.php?id='.$item['id'].'"><img class="img" src="'.$item['hinh_anh'].'" alt=""></a>
                        <h2><a href="detail.php?id='.$item['id'].'" class="tieudephu">'.$item['tieu_de'].'</a></h2>
                        <p class="paragraph">'.$item['trich_dan'].'</p>
                    </div>';
            }
        ?>
    </div>
    <!-- pagination -->
    <?php 
        require_once('pagination.php');
    ?>  
</div> 
<!-- footer -->
<?php
    include_once('./footer.php');
?>
