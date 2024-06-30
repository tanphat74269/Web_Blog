<?php
require_once('../../db/dbhelper.php');
$id = $_GET['id'];
$query = "delete from ds_bai_viet where id = ".$id;
execute($query);
header('Location: ../quanlybaiviet2255.php');
