create table koperasi_forum
(
    id_forum varchar(100) default (uuid()) not null
        primary key,
    id_user  varchar(100)                  null,
    forum    varchar(100)                  null
);

INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('0556e04b-0b77-11ed-acb7-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Kembangan');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('0aba85cb-0b73-11ed-acb7-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Matraman');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('2B5C8A61-64E2-4173-9D1E-AAC3A15CC626', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Kemayoran');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('51f94aa0-fc06-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Cengkareng');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('54DCA5CF-40D0-4EB6-9D5F-7ACBAEB49D0C', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Tebet');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('6a4c1e31-0739-11ed-a307-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Cilandak');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('8152B4BC-D506-42F2-8914-39B165E8F60A', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Koja');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('A58FB9EF-DD21-4774-8EC1-07F978599761', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Ciracas');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('C3DD12BB-E7BD-435C-913A-A3D8BBD9777A', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Senen');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('cd38a915-0b76-11ed-acb7-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Pancoran');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('cfa46568-fc07-11ec-b491-f430b99f2825', 'bd6d6281-fa35-11ec-b491-f430b99f2825', 'Kramatjati');
INSERT INTO koperasi.koperasi_forum (id_forum, id_user, forum) VALUES ('eea159e6-0b76-11ed-acb7-f430b99f2825', '0d8334c5-0736-11ed-a307-f430b99f2825', 'Tebet');
