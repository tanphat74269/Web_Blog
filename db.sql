create table loai_bai_viet (
	id int PRIMARY KEY AUTO_INCREMENT,
    ten_loai varchar(200)
);

create table ds_bai_viet (
    id int PRIMARY KEY AUTO_INCREMENT,
    loai_bai_viet_id int REFERENCES loai_bai_viet(id),
    hinh_anh varchar(500),
    tieu_de varchar(500),
    trich_dan varchar(1000),
    noi_dung longtext
);

insert INTO loai_bai_viet (ten_loai) VALUES ("Tiền bạc"), ("Hẹn hò"), ("Du lịch"), ("Tiếng anh"), ("Lập trình")