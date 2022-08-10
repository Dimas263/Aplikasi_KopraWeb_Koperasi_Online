create table koperasi_tabungan_masuk
(
    id_tabungan   varchar(100) default (uuid()) not null
        primary key,
    id_user       varchar(100)                  null,
    uang_masuk    int                           null,
    tanggal_masuk datetime                      null
);

INSERT INTO koperasi.koperasi_tabungan_masuk (id_tabungan, id_user, uang_masuk, tanggal_masuk) VALUES ('02dd2528-fbb5-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 15000, '2022-07-03 23:27:28');
INSERT INTO koperasi.koperasi_tabungan_masuk (id_tabungan, id_user, uang_masuk, tanggal_masuk) VALUES ('03de5883-fbb4-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 20000, '2022-07-04 23:27:28');
INSERT INTO koperasi.koperasi_tabungan_masuk (id_tabungan, id_user, uang_masuk, tanggal_masuk) VALUES ('04de5883-fbb4-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 5000, '2022-07-05 01:04:02');
INSERT INTO koperasi.koperasi_tabungan_masuk (id_tabungan, id_user, uang_masuk, tanggal_masuk) VALUES ('05de5883-fbb4-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 6000, '2022-07-06 01:04:04');
