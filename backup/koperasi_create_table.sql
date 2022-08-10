create table koperasi_forum
(
	id_forum varchar(100) default (uuid()) not null,
	constraint koperasi_forum primary key (id_forum),
	id_user  varchar(100)                  null,
	forum    varchar(100)                  null
);

create table koperasi_message
(
	id_message int auto_increment,
	constraint koperasi_message primary key (id_message),
	jenis      varchar(100) not null,
	titles     text         not null,
	subtitles  text         not null,
	images     varchar(200) not null,
	routes     text         null
)
	auto_increment = 14;

create table koperasi_pinjaman
(
	id_pinjaman         varchar(100) default (uuid()) not null,
	constraint koperasi_pinjaman primary key (id_pinjaman),
	nama_koperasi       varchar(100)                  null,
	info_usaha          varchar(100)                  null,
	jenis_usaha         varchar(100)                  null,
	pendapatan          varchar(100)                  null,
	jumlah_dana         varchar(100)                  null,
	metode_pembayaran   varchar(100)                  null,
	foto_wajah          varchar(1000)                 null,
	foto_ktp            varchar(1000)                 null,
	foto_kartu_keluarga varchar(1000)                 null,
	tanggal             datetime     default CURRENT_TIMESTAMP null,
	username            varchar(100)                  null
);

create table koperasi_product
(
	id_product   varchar(100) default (uuid()) not null,
	constraint koperasi_product primary key (id_product),
	id_user      varchar(100)                  null,
	nama_product varchar(100)                  null,
	foto         varchar(100)                  null,
	deksripsi    varchar(100)                  null,
	harga        varchar(100)                  null
);

create table koperasi_tabungan_keluar
(
	id_tabungan    varchar(100) default (uuid()) not null,
	constraint koperasi_tabungan_keluar primary key (id_tabungan),
	id_user        varchar(100)                  null,
	uang_keluar    int                           null,
	tanggal_keluar datetime                      null
);

create table koperasi_tabungan_masuk
(
	id_tabungan   varchar(100) default (uuid()) not null,
	constraint koperasi_tabungan_masuk primary key (id_tabungan),
	id_user       varchar(100)                  null,
	uang_masuk    int                           null,
	tanggal_masuk datetime                      null
);

create table koperasi_user
(
	id_user  varchar(100) default (uuid()) not null,
	constraint koperasi_user primary key (id_user),
	gambar   varchar(100)                  null,
	name     varchar(100)                  null,
	username varchar(50)                   null,
	telp     varchar(12)                   null,
	email    varchar(50)                   null,
	password varchar(100)                  null,
	register datetime                      null
);

create table koperasi_wilayah
(
	kode varchar(13)  null,
	nama varchar(100) null
);
