select * from usuario;

create database IMG;
create table images (
id int auto_increment primary key,
cosa longblob not null,
nombre varchar(30) not null unique
);

SELECT * FROM IMAGES ;


create database Usuario;
create table persone(
nombre varchar(30) not null,
apellido varchar(35) not null,
email varchar(40) not null,
contraseña varchar(50),
primary key (contraseña)
);
select * from  persone;

create database prueba;
create table Post(
ID_post int  auto_increment,
Titulo varchar(100) not null,
Descripcion varchar(1000),
Fecha_cracion datetime,
primary key (ID_post)
);
create table Post_img(
ID_post int,
Numero_img	char(2),
Src_img longblob,
primary key (ID_post,Numero_img),
FOREIGN KEY (ID_post) REFERENCES Post(ID_post)
);
create table Post_video(
ID_post int,
Numero_video char(2),
Src_video longblob,
primary key (ID_post,Numero_video),
FOREIGN KEY (ID_post) REFERENCES Post(ID_post)
);
select*from Post;
DELETE FROM Post WHERE ID_post = 2;
INSERT INTO Post VALUES (null ,"s", "sssssssss", "2023-12-20 07:23:30");
INSERT INTO Post_img VALUES ('1','1',"sss");

SELECT  ID_post  FROM Post WHERE ID_post = (SELECT Max(ID_post) FROM Post);

