create database konekdb;

use konekdb;

create table if not exists `user`(
    id int(11) not null auto_increment primary key,
    nama varchar(50) not null,
    alamat text not null,
    pekerjaan varchar(50) not null
) engine = innodb default charset = latin1 Auto_increment = 64;

insert into
    user(id, nama, alamat, pekerjaan)
values
    (1, 'Andi', 'Surabaya', 'Web Programmer'),
    (2, 'Santoso', 'Jakarta', 'Web Designer'),
    (6, 'Samsul', 'Sumedang', 'Pegawai');