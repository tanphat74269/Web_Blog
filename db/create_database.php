<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'test_blog';

function createDatabase() {
    $conn = new mysqli(HOST, USERNAME, PASSWORD);
    mysqli_set_charset($conn, 'utf8');
    $sql = 'create database if not exists '.DATABASE;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function createTables() {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    $sql = 'create table if not exists loai_bai_viet (
                id int primary key auto_increment,
                ten_loai varchar(255) not null
            );
            create table if not exists ds_bai_viet (
                id int primary key auto_increment,
                loai_bai_viet_id int,
                tieu_de varchar(255),
                hinh_anh varchar(255),
                trich_dan varchar(255),
                noi_dung longtext
            );
            ALTER TABLE ds_bai_viet
            ADD CONSTRAINT fk_foreign_loaibvid
            FOREIGN KEY (loai_bai_viet_id)
            REFERENCES loai_bai_viet(id);';
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
