create table koperasi_user
(
    id_user  varchar(100) default (uuid()) not null
        primary key,
    gambar   varchar(100)                  null,
    name     varchar(100)                  null,
    username varchar(50)                   null,
    telp     varchar(12)                   null,
    email    varchar(50)                   null,
    password varchar(100)                  null,
    register datetime                      null
);

INSERT INTO koperasi.koperasi_user (id_user, gambar, name, username, telp, email, password, register) VALUES ('0d8334c5-0736-11ed-a307-f430b99f2825', 'guest.png', 'Diego Armando', 'diego789', '085811223344', 'diego123@koperaweb.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-07-19 07:40:25');
INSERT INTO koperasi.koperasi_user (id_user, gambar, name, username, telp, email, password, register) VALUES ('bd6d6281-fa35-11ec-b491-f430b99f2825', 'dimas.png', 'Dimas Dwi Putra', 'Dimas51418957', '085811379583', 'dimasdwiputra@koperaweb.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-07-03 01:35:25');
