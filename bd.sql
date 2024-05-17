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
select * from   persone;
