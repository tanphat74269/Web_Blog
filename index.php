<?php
    $tieude = "Trang chủ";
    require_once('header.php');
    require_once('./db/dbhelper.php');

    // moi trang 8 bai viet
    $current_page = 1;
    if(isset($_GET['page'])) {
        $current_page = $_GET['page'];
    }
    $index = ($current_page-1)*9;

    $sql = 'select * from ds_bai_viet limit '.$index.', 9';
    $result = executeResult($sql);

    // pagination 
    $sql = 'select count(id) as number from ds_bai_viet';
    $result_pagination = executeResult($sql);
    $number = 0;
    if($result_pagination != null && count($result_pagination) > 0) {
        $number = $result_pagination[0]['number'];
    }
    $pages = ceil($number/9); // so luong trang
?> 

<!-- content -->
<div id="content">
    <h3 class="tieudechinh">Tất cả bài viết</h3>
    <div class="list-item">
        <?php
            foreach($result as $item) {
                echo '<div class="item">
                        <a href=""><img class="img" src="'.$item['hinh_anh'].'" alt=""></a>
                        <h2><a href="" class="tieudephu">'.$item['tieu_de'].'</a></h2>
                        <p class="paragraph">'.$item['trich_dan'].'</p>
                    </div>';
            }
        ?>
    </div>
    <!-- pagination -->
    <div id="list-number">
        <ul class="pagination">
            <?php
                // button <<
                if($current_page == 1) {
                    echo '';
                } else {
                    echo '<li class="item-pagination"><a href="?page='.($current_page-1).'"><<</a></li>';
                }

                // number, chi hien thi 3 trang tu trang hien tai
                if($pages > ($current_page + 1)) {
                    $end = $current_page + 2;
                    for($i = $current_page; $i <= $end; $i++) {
                        if($i == $current_page) {
                            echo '<li class="item-pagination"><a style="color: red;" href="?page='.$i.'">'.$i.'</a></li>';
                        } else {
                            echo '<li class="item-pagination"><a style="" href="?page='.$i.'">'.$i.'</a></li>';
                        }
                        
                    }
                } else {
                    // fix 3 trang cuoi
                    if($current_page >= ($pages - 2)) {
                        for($i = $pages - 2; $i <= $pages; $i++) {
                            if($i == $current_page) {
                                echo '<li class="item-pagination"><a style="color: red;" href="?page='.$i.'">'.$i.'</a></li>';
                            } else {
                                echo '<li class="item-pagination"><a style="" href="?page='.$i.'">'.$i.'</a></li>';
                            }
                        }
                    } else { // ko phải 3 trang cuoi
                        for($i = $current_page; $i <= $pages; $i++) {
                            echo '<li class="item-pagination"><a href="?page='.$i.'">'.$i.'</a></li>';
                        }
                    }  
                }
                
                // button >>
                if($current_page == $pages) {
                    echo '';
                } else {
                    echo '<li class="item-pagination"><a href="?page='.($current_page+1).'">>></a></li>';
                }
            ?>
        </ul>
    </div>   
</div> 
<!-- footer -->
<?php
    include_once('./footer.php');
?>
