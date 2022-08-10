create table koperasi_product
(
    id_product   varchar(100) default (uuid()) not null
        primary key,
    id_user      varchar(100)                  null,
    nama_product varchar(100)                  null,
    foto         varchar(100)                  null,
    deksripsi    varchar(100)                  null,
    harga        varchar(100)                  null
);

INSERT INTO koperasi.koperasi_product (id_product, id_user, nama_product, foto, deksripsi, harga) VALUES ('2dde7c2a-1831-11ed-a2d3-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Kerupuk', 'kerupuk.jpg', 'Kerupuk asli', '2000');
INSERT INTO koperasi.koperasi_product (id_product, id_user, nama_product, foto, deksripsi, harga) VALUES ('70ca1581-1872-11ed-a2d3-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Kangkung', 'kangkung.jpeg', 'Kangkung segar hasil panen sendiri, harga per satu ikat', '500');
