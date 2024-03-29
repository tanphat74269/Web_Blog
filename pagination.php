<?php
// pagination 
if($tieude == 'Trang chủ') {
    $sql = 'select count(id) as number from ds_bai_viet';
} else {
    $sql = 'select count(id) as number from ds_bai_viet where loai_bai_viet_id = '.$id[0]['id'];
}

$result_pagination = executeResult($sql);
$number = 0;
if($result_pagination != null && count($result_pagination) > 0) {
    $number = $result_pagination[0]['number'];
}
$pages = ceil($number/9); // so luong trang
?>

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
                    if($pages < 3) {
                        for($i = 1; $i <= $pages; $i++) {
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