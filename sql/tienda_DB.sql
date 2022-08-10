CREATE DATABASE tienda_DB;
USE tienda_DB;

CREATE TABLE PRODUCTOS(
    codigo_producto int (5) NOT NULL AUTO_INCREMENT,
    nombre_producto varchar(10) NOT NULL,
    cantidad_producto int(5),
    precio_producto float(5),
    descripcion_producto varchar(10),
    PRIMARY KEY (codigo_producto)
);