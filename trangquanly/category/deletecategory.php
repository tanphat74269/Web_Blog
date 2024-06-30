<?php
require_once('../../db/dbhelper.php');
$id = $_GET['id'];
echo $id;
$query = "delete from loai_bai_viet where id = ".$id;
execute($query);
header('Location: category.php');