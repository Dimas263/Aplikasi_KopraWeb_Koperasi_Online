create table koperasi_tabungan_keluar
(
    id_tabungan    varchar(100) default (uuid()) not null
        primary key,
    id_user        varchar(100)                  null,
    uang_keluar    int                           null,
    tanggal_keluar datetime                      null
);

INSERT INTO koperasi.koperasi_tabungan_keluar (id_tabungan, id_user, uang_keluar, tanggal_keluar) VALUES ('6d883-fbb4-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 5000, '2022-07-04 23:29:05');
INSERT INTO koperasi.koperasi_tabungan_keluar (id_tabungan, id_user, uang_keluar, tanggal_keluar) VALUES ('83883-fbb4-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 10000, '2022-07-05 01:02:20');
