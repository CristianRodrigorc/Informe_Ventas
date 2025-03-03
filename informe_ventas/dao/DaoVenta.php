<?php
require_once __DIR__ . '/../utilidades/ConexionBD.php';
require_once __DIR__ . '/../modelos/Venta.php';

class DaoVenta {
    private $conexion;

    public function __construct() {
        $this->conexion = ConexionBD::obtenerInstancia();
    }

    public function obtenerVentas() {
        $sentencia = $this->conexion->prepare("SELECT v.*, e.nombre AS empresa_nombre 
                                                FROM ventas v 
                                                JOIN empresas e ON v.empresa_id = e.id");
        $sentencia->execute();

        $ventas = [];
        while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
            $venta = new Venta(
                $row['id'],
                $row['empresa_id'],
                $row['numero_factura'],
                $row['fecha_venta'],
                $row['comprador'],
                $row['articulos_vendidos'],
                $row['valor_total'],
                $row['empresa_nombre']
            );
            $ventas[] = $venta;
        }

        return $ventas;
    }
}
?>
