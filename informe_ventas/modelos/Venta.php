<?php
class Venta {
    public $id;
    public $id_empresa;
    public $numero_factura;
    public $fecha_venta;
    public $comprador;
    public $articulos_vendidos;
    public $valor_total;
    public $empresa_nombre;

    public function __construct($id, $id_empresa, $numero_factura, $fecha_venta, $comprador, $articulos_vendidos, $valor_total, $empresa_nombre = null) {
        $this->id = $id;
        $this->id_empresa = $id_empresa;
        $this->numero_factura = $numero_factura;
        $this->fecha_venta = $fecha_venta;
        $this->comprador = $comprador;
        $this->articulos_vendidos = $articulos_vendidos;
        $this->valor_total = $valor_total;
        $this->empresa_nombre = $empresa_nombre;
    }
}
?>
