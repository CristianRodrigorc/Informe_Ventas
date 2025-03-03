<?php
require_once __DIR__ . '/../utilidades/ConexionBD.php';
require_once __DIR__ . '/../modelos/Empresa.php';

class DaoEmpresa {
    private $conexion;

    public function __construct() {
        $this->conexion = ConexionBD::obtenerInstancia();
    }

    public function obtenerTodas() {
        $sentencia = $this->conexion->prepare("SELECT * FROM empresas");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_CLASS, "Empresa");
    }
}
?>
