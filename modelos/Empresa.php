<?php
class Empresa {
    public $id;
    public $nombre;

    public function __construct($id = null, $nombre = null) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}
?>
