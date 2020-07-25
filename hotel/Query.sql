create database Hotel;
use Hotel;

create table Permiso(
idPermiso int primary key auto_increment,
tipo varchar(50) not null unique,
estado int not null
);

create table Empleado(
idEmpleado int primary key auto_increment,
NID varchar(255) not null unique,
nombres varchar(255) not null,
apellidos varchar(255) not null,
sexo varchar(255) not null,
estadocivil varchar(255) not null,
telefono varchar(255) not null,
direccion varchar(255) not null,
email varchar(255) not null,
fechaingreso date not null,
estado varchar(255) not null
);

create table Users(
idUsuario int primary key auto_increment,
idPermiso int not null,
idEmpleado int,
username varchar(50) not null unique,
pass varchar(50) not null,
statu  varchar(50) not null, 
created_at datetime not null,
FOREIGN KEY (idPermiso) REFERENCES Permiso(idPermiso),
foreign key (idEmpleado) references Empleado(idEmpleado)
);

create table Sucursal(
idSucursal int primary key auto_increment,
nombre varchar(255) not null,
direccion varchar(255) not null,
telefono varchar(255) not null,
estado varchar(255) not null
);

create table Categoria(
idCategoria int primary key auto_increment,
nombre varchar(255) not null,
capacidad int not null,
camas varchar(255),
preciobase float not null,
descripcion varchar(255) not null,
estado varchar(255) not null
);

create table Habitacion(
idHabitacion int primary key auto_increment,
idCategoria int not null,
idSucursal int not null,
nombre varchar(255) not null,
descripcion varchar(255) not null,
estado varchar(255) not null,
foreign key (idSucursal) references Sucursal(idSucursal),
foreign key (idCategoria) references Categoria(idCategoria)
);

create table Salon(
idSalon int primary key auto_increment,
nombre varchar(255) not null,
capacidad int not null,
descripcion varchar(255) not null,
precio float not null,
estado varchar(255) not null
);

create table Cliente(
idCliente int primary key auto_increment,
NID varchar(255) not null unique,
nombres varchar(255) not null,
apellidos varchar(255) not null,
pais varchar(255) not null,
telefono varchar(255) not null,
email varchar(255) not null
);

create table Evento(
idEvento int primary key auto_increment,
idCliente int not null,
idSalon int not null,
fecha date not null,
hora_inicio datetime not null,
descripcion varchar(255) not null,
estado varchar(255) not null,
foreign key (idSalon) references Salon(idSalon),
foreign key (idCliente) references Cliente(idCliente)
);

create table Factura_Evento(
idFacturaEvento int primary key auto_increment,
idEvento int not null,
tipo_pago varchar(255) not null,
pago float not null,
estado varchar(255) not null,
foreign key (idEvento)  references Evento(idEvento)
);

create table Reservacion(
idReservacion int primary key auto_increment,
idCliente int not null,
entrada date not null,
salida	date not null,
descripcion varchar(255) not null,
estado varchar(255) not null,
foreign key(idCliente) references Cliente(idCliente)
);

create table Detalle_reservacion(
idDetalle_reservacion int primary key auto_increment,
idReservacion int not null,
idHabitacion int not null,
foreign key (idReservacion) references Reservacion(idReservacion),
foreign key (idHabitacion) references Habitacion(idHabitacion)
);

create table Factura_Habitacion(
idFacturaHabitacion int primary key auto_increment,
idReservacion int not null,
tipo_pago varchar(255) not null,
pago float not null,
estado varchar(255) not null,
foreign key (idReservacion) references Reservacion(idReservacion)
);


insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-220890-0125Q','Ericka del Carmen', 'Reyes', 'Femenino', 'Soltero(a)','22668959','direccion','erickar123@hotmail.com',now(),'activo');
insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-010395-1123P','Ricardo Enmanuel', 'Martinez Carballo', 'Masculino', 'Soltero(a)','87485612','direccion','ricardoem45@hotmail.com',now(),'activo');
insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-201095-4532R','Westly Alejandro', 'Meza Sotomayor', 'Masculino', 'Soltero(a)','78542614','direccion','westms56@hotmail.com',now(),'activo');
insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-010395-0045P','Eleazar Gerardo', 'Martinez Carballo', 'Masculino', 'Soltero(a)','57864512','direccion','eleazarg78@hotmail.com',now(),'activo');
insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-221191-0146U','Diana Lucia', 'Leyton', 'Femenino', 'Casado(a)','57486532','direccion','dianalucia12@hotmail.com',now(),'activo');
insert into Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('001-031192-0055T','Javier Francisco', 'Campos', 'Masculino', 'Soltero(a)','78943256','direccion','xavicampos@hotmail.com',now(),'activo');

insert into Permiso(tipo, estado) values ('admin', 1);
insert into Permiso(tipo, estado) values ('recepcion', 1);
insert into Permiso(tipo, estado) values ('logistica_eventos', 1);

insert into users(idPermiso, idEmpleado, username, pass, statu, created_at) values (1,null,'admin','12345','activo',now());
insert into users(idPermiso, idEmpleado, username, pass, statu, created_at) values (1,4,'melearzar04','12345','activo',now());
insert into users(idPermiso, idEmpleado, username, pass, statu, created_at) values (2,1,'erickareyhm2','12345','activo',now());
insert into users(idPermiso, idEmpleado, username, pass, statu, created_at) values (3,3,'westmezhm05','12345','inactivo',now());

INSERT INTO Sucursal(nombre,direccion,telefono,estado) values ('Managua','Residencial Bolonia, rotonda El Gueguense 1c. al este, 1.5c. al norte','2266 0686','activo');

