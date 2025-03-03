<?php
require_once __DIR__ . '/utilidades/ConexionBD.php';
require_once __DIR__ . '/dao/DaoEmpresa.php';
require_once __DIR__ . '/dao/DaoVenta.php';
require_once __DIR__ . '/vistas/Informe.php';

try {
    $conexion = ConexionBD::obtenerInstancia();
    echo "Conexión exitosa a la base de datos.";
} catch (Exception $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    exit;
}


$daoEmpresa = new DaoEmpresa();
$daoVenta = new DaoVenta();


$empresas = $daoEmpresa->obtenerTodas();
$ventas = $daoVenta->obtenerVentas();

?>
