create database pruebas;
use pruebas;
create table usuarios(
				id int auto_increment,
                nombre varchar(50),
                apellido varchar(50),
                usuario varchar(50),
                password varchar(150),
                primary key(id)
					);