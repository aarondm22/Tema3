CREATE DATABASE IF NOT EXISTS tienda;
use tienda;

create table perfil (
	codigo int(9) primary key,
	tipo varchar(30)
)

create table usuarios (
	id int(20) primary key,
    nombre varchar(75) not null,
	clave char(40) not null,
	email varchar(75) not null,
	fecha DATE,
	index (perfil),
	foreign key (perfil) references perfil (codigo)
);

create table productos (
	cod_producto int(9) primary key auto_increment,
    descripcion varchar(75) not null,
	precio int(9) not null,
	stock int(9) not null,
);

create table ventas (
	id int(20) primary key auto_increment,
    usuario_id varchar(75) not null,
	fecha_compra DATE not null,
	cod_producto_id int(9) not null,
    cantidad int(9) not null,
    precio_total int(9) not null,
);


insert into perfil (codigo, tipo) values ('01','Administrador');
insert into perfil (codigo, tipo) values ('02','Moderador');
insert into perfil (codigo, tipo) values ('03','Usuario normal');

insert into usuarios (id, nombre, clave, email, fecha, perfil) values (null,'aaron','aaron','aaron@correo.es','22-01-1997','01');
insert into usuarios (id, nombre, clave, email, fecha, perfil) values (null,'javier','javier','javier@correo.es','15-09-1977','02');
insert into usuarios (id, nombre, clave, email, fecha, perfil) values (null,'lucia','lucia','lucia@correo.es','29-11-2000','03');

insert into productos(cod_producto, descripcion, precio, stock) values (null,'Genshin Impact','29.99','10');
insert into productos(cod_producto, descripcion, precio, stock) values (null,'Pokemon Arceus','59.99','20');
insert into productos(cod_producto, descripcion, precio, stock) values (null,'Elden Ring: Edicion Coleccionista','89.99','5');



