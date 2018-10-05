<?php

class Certifications_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function header($lng) {
        $sql = $this->db->select("SELECT
                                        imagen_header as imagen,
                                        " . $lng . "_titulo as titulo,
                                        " . $lng . "_frase as frase
                                FROM
                                        `certificaciones_header`
                                WHERE id = 1;");
        return $sql[0];
    }

    public function certificaciones($lng) {
        $sql = $this->db->select("SELECT
                                        c." . $lng . "_nombre as nombre,
                                        c." . $lng . "_contenido as contenido,
                                        imagen_certificacion as imagen
                                FROM
                                        `certificaciones` c
                                where c.estado = 1
                                ORDER BY c.orden ASC");
        return $sql;
    }

}
