<?php
require_once __DIR__ . '/../configuracion/configuracion.php';

class ConexionBD {
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        try {
            $servidor = DB_HOST;
            $nombreBaseDeDatos = DB_NAME;
            $usuarioBD = DB_USER;
            $claveBD = DB_PASS;
            

            $this->conexion = new PDO("mysql:host=$servidor;dbname=$nombreBaseDeDatos;charset=utf8", $usuarioBD, $claveBD);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    public static function obtenerInstancia() {
        if (self::$instancia == null) {
            self::$instancia = new ConexionBD();
        }
        return self::$instancia->conexion;
    }
}
?>
