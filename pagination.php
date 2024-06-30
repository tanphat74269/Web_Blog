<?php
// pagination cho mỗi trang
if($tieude == 'Trang chủ' || $tieude == "Trang quản lý") {
    $sql = 'select count(id) as number from ds_bai_viet';
} else if($tieude == "Phân loại bài viết") { // phân loại bài viết bên backend
    $sql = 'select count(id) as number from ds_bai_viet where loai_bai_viet_id like "%'.$chude.'%"';
} else { // trang category
    $sql = 'select count(id) as number from ds_bai_viet where loai_bai_viet_id = '.$id;
}
$result_pagination = executeResult($sql);
$number = 0;
if($result_pagination != null && count($result_pagination) > 0) {
    $number = $result_pagination[0]['number'];
}
if($tieude == "Trang quản lý" || $tieude == "Phân loại bài viết") {
    $pages = ceil($number/5); // so luong trang
} else {
    $pages = ceil($number/9); // so luong trang
}
?>

<div id="list-number">
        <ul class="pagination">
            <?php
                // ẩn hiện button <<
                if($current_page == 1) {
                    echo '';
                } else {
                    echo '<li class="item-pagination"><a href="?loai_bai_viet='.$chude.'&page='.($current_page-1).'"><<</a></li>';
                }

                // number, chi hien thi 3 trang tu trang hien tai
                if($pages > ($current_page + 1)) {
                    $end = $current_page + 2;
                    for($i = $current_page; $i <= $end; $i++) {
                        if($i == $current_page) {
                            echo '<li class="item-pagination"><a style="color: red;" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                        } else {
                            echo '<li class="item-pagination"><a style="" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                        }
                        
                    }
                } else {
                    if($pages < 3) {
                        for($i = 1; $i <= $pages; $i++) {
                            if($i == $current_page) {
                                echo '<li class="item-pagination"><a style="color: red;" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                            } else {
                                echo '<li class="item-pagination"><a style="" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                            }
                        }
                    } else {
                        // fix 3 trang cuoi
                        if($current_page >= ($pages - 2)) {
                            for($i = $pages - 2; $i <= $pages; $i++) {
                                if($i == $current_page) {
                                    echo '<li class="item-pagination"><a style="color: red;" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                                } else {
                                    echo '<li class="item-pagination"><a style="" href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                                }
                            }
                        } else { // ko phải 3 trang cuoi
                            for($i = $current_page; $i <= $pages; $i++) {
                                echo '<li class="item-pagination"><a href="?loai_bai_viet='.$chude.'&page='.$i.'">'.$i.'</a></li>';
                            }
                        }  
                    }
                }
                
                // ẩn hiện button >>
                if($current_page == $pages) {
                    echo '';
                } else {
                    echo '<li class="item-pagination"><a href="?loai_bai_viet='.$chude.'&page='.($current_page+1).'">>></a></li>';
                }
            ?>
        </ul>
    </div>   