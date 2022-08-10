create table koperasi_pinjaman
(
    id_pinjaman         varchar(100) default (uuid())          not null
        primary key,
    nama_koperasi       varchar(100)                           null,
    info_usaha          varchar(100)                           null,
    jenis_usaha         varchar(100)                           null,
    pendapatan          varchar(100)                           null,
    jumlah_dana         varchar(100)                           null,
    metode_pembayaran   varchar(100)                           null,
    foto_wajah          varchar(1000)                          null,
    foto_ktp            varchar(1000)                          null,
    foto_kartu_keluarga varchar(1000)                          null,
    tanggal             datetime     default CURRENT_TIMESTAMP null,
    username            varchar(100)                           null
);

INSERT INTO koperasi.koperasi_pinjaman (id_pinjaman, nama_koperasi, info_usaha, jenis_usaha, pendapatan, jumlah_dana, metode_pembayaran, foto_wajah, foto_ktp, foto_kartu_keluarga, tanggal, username) VALUES ('e5b66276-1873-11ed-a2d3-f430b99f2825', 'Bambu Apus', 'Berkebun Pohon Durian', 'Usaha Perkebunan', '1-2jt', '2000000', '360', 'wajah.png', 'ktp.png', 'kk.png', '2022-08-10 13:15:57', 'diego789');
