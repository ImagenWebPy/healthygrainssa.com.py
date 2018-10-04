<?php

class Products_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function header($lng, $id_producto) {
        $sql = $this->db->select("SELECT
                                        imagen_header as imagen,
                                        " . $lng . "_titulo as titulo,
                                        " . $lng . "_frase as frase
                                FROM
                                        `productos_header`
                                        
                                WHERE id_producto = $id_producto;");
        return $sql[0];
    }

    public function productos($lng, $id_producto) {
        $sql = $this->db->select("SELECT
                                        imagen,
                                        " . $lng . "_nombre as nombre,
                                        " . $lng . "_contenido as contenido
                                FROM
                                        `productos_items`
                                WHERE
                                        id_producto = $id_producto
                                AND estado = 1
                                ORDER BY
                                        orden ASC");
        return $sql;
    }

}
