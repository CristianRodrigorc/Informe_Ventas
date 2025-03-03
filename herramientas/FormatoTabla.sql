create database informe_ventas;
use informe_ventas;

create table empresas (
    id int primary key AUTO_INCREMENT,
    nombre varchar(255) not null
);

create table ventas (
    id int primary key AUTO_INCREMENT,
    empresa_id int,
    numero_factura varchar(50) not null,
    fecha_venta date not null,
    comprador varchar(255) not null,
    articulos_vendidos text not null,
    valor_total decimal(10,2) not null,
    foreign key  (empresa_id) references empresas(id) on delete cascade
);





insert into empresas (nombre) values ('Empresa 1'), ('Empresa 2'),('Empresa 3'),('Empresa 4');
insert into ventas (empresa_id, numero_factura, fecha_venta, comprador, articulos_vendidos, valor_total) values
(1, 'FACTURA-001', '2025-03-01', 'Cliente 1', 'Producto 1, Producto 3', 250.00),
(2, 'FACTURA-002', '2025-03-05', 'Cliente 2', 'Producto 2', 150.00),
(1, 'FACTURA-003', '2025-03-10', 'Cliente 3', 'Producto 1', 100.00),
(2, 'FACTURA-004', '2025-03-25', 'Cliente 4', 'Producto 2', 50.00);
(1, 'FACTURA-005', '2025-03-15', 'Cliente 5', 'Producto 1, Producto 2', 300.00),
(2, 'FACTURA-006', '2025-03-17', 'Cliente 6', 'Producto 3', 120.00),
(1, 'FACTURA-007', '2025-03-18', 'Cliente 7', 'Producto 1, Producto 3', 200.00),
(3, 'FACTURA-008', '2025-03-20', 'Cliente 8', 'Producto 1', 100.00),
(4, 'FACTURA-009', '2025-03-22', 'Cliente 9', 'Producto 2, Producto 3', 180.00),
(3, 'FACTURA-0010', '2025-03-24', 'Cliente 10', 'Producto 1, Producto 2', 250.00),
(4, 'FACTURA-011', '2025-03-26', 'Cliente 11', 'Producto 3', 150.00),
(1, 'FACTURA-012', '2025-03-28', 'Cliente 12', 'Producto 1, Producto 2', 320.00),
(2, 'FACTURA-013', '2025-03-30', 'Cliente 13', 'Producto 3', 130.00),
(3, 'FACTURA-014', '2025-04-01', 'Cliente 14', 'Producto 2', 90.00),
(4, 'FACTURA-015', '2025-04-02', 'Cliente 15', 'Producto 1, Producto 3', 270.00),
(1, 'FACTURA-016', '2025-04-05', 'Cliente 16', 'Producto 1', 150.00),
(2, 'FACTURA-017', '2025-04-07', 'Cliente 17', 'Producto 2', 80.00),
(3, 'FACTURA-018', '2025-04-10', 'Cliente 18', 'Producto 3', 110.00),
(4, 'FACTURA-019', '2025-04-12', 'Cliente 19', 'Producto 1, Producto 2, Producto 3', 400.00),
(2, 'FACTURA-020', '2025-03-30', 'Cliente 20', 'Producto 3', 130.00),;
