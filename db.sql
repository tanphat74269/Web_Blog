create table loai_bai_viet (
	id int PRIMARY KEY AUTO_INCREMENT,
    ten_loai varchar(200)
);
create table ds_bai_viet (
    id int PRIMARY KEY AUTO_INCREMENT,
    loai_bai_viet_id int,
    hinh_anh varchar(500),
    tieu_de varchar(500),
    trich_dan varchar(1000),
    noi_dung longtext
);
ALTER TABLE ds_bai_viet
ADD CONSTRAINT fk_foreign_loaibvid
FOREIGN KEY (loai_bai_viet_id)
REFERENCES loai_bai_viet(id)
ON DELETE CASCADE;
