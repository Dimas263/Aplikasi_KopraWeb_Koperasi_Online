create table koperasi_message
(
    id_message int auto_increment
        primary key,
    jenis      varchar(100) not null,
    titles     text         not null,
    subtitles  text         not null,
    images     varchar(200) not null,
    routes     text         null
)
    auto_increment = 14;

INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (1, 'login_berhasil', 'selamat, login berhasil', 'Lanjutkan untuk masuk ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (2, 'login_gagal', 'Maaf login gagal<br>username atau password salah!', 'Coba kembali dan masukan akun dengan benar', 'https://img.icons8.com/fluency/128/000000/delete-sign.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (7, 'keluar_app', 'Pengalaman yang baik bersama anda', 'Anda telah keluar dari aplikasi, sampai jumpa kembali', 'https://img.icons8.com/cotton/128/000000/sad.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (9, 'forum_exist', 'Komunitas sudah ada di profil anda', 'Anda sudah bergabung di komunitas ini, mari kunjungi komunitas', 'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/128/000000/external-community-emergency-services-flaticons-lineal-color-flat-icons.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (10, 'join_forum', 'Selamat Bergabung', 'Anda berhasil berbagung, kunjungi komunitas anda', 'https://img.icons8.com/external-flat-02-chattapat-/128/000000/external-community-social-media-flat-02-chattapat-.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (11, 'register_berhasil', 'Selamat, anda berhasil membuat akun', 'Lanjutkan untuk masuk ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (12, 'register_exist', 'Akun anda sudah ada, silahkan login', 'Coba login dengan akun anda', 'https://img.icons8.com/emoji/96/000000/exclamation-mark-emoji.png', 'source/home');
INSERT INTO koperasi.koperasi_message (id_message, jenis, titles, subtitles, images, routes) VALUES (13, 'register_gagal', 'Maaf, format foto yang anda masukan tidak sesuai. Coba lagi ya..', 'Coba kembali', 'https://img.icons8.com/fluency/128/000000/delete-sign.png', 'source/daftar');
