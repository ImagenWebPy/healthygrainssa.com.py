<?php

class Services_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function header($lng, $id_servicio) {
        $sql = $this->db->select("SELECT
                                        imagen_header as imagen,
                                        " . $lng . "_titulo as titulo,
                                        " . $lng . "_frase as frase
                                FROM
                                        `servicios_header`
                                        
                                WHERE id_servicio = $id_servicio;");
        return $sql[0];
    }

    public function images($lng, $id_servicio) {
        $sql = $this->db->select("SELECT
                                        imagen
                                FROM
                                        servicios_img
                                WHERE
                                        id_servicio = $id_servicio
                                AND estado = 1
                                ORDER BY
                                orden ASC;");
        return $sql;
    }

    public function contenido($lng, $id_servicio) {
        $sql = $this->db->select("SELECT
                                        " . $lng . "_contenido as contenido
                                FROM
                                        `servicios_contenido`
                                WHERE
                                        id_servicio = $id_servicio;");
        return $sql[0];
    }

}
