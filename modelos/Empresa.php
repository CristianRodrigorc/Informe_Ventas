<?php
class Empresa {
    public $id;
    public $nombre;

    // Constructor por defecto con valores predeterminados
    public function __construct($id = null, $nombre = null) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}
?>
