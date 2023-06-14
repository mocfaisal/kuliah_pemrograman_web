create database crud_db;

use crud_db;

create table if not exists `user`(
    id int(11) not null auto_increment primary key,
    `name` varchar(100),
    `email` varchar(100),
    `mobile` varchar(15)
);

insert into
    user(id, nama, alamat, pekerjaan)
values
    (1, 'Andi', 'Surabaya', 'Web Programmer'),
    (2, 'Santoso', 'Jakarta', 'Web Designer'),
    (6, 'Samsul', 'Sumedang', 'Pegawai');