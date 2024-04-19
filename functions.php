<?php
function get_image($file) {
    if($file != "") {
        return "uploads/".$file;
    }
    return "uploads/".no_image.jpg;
}