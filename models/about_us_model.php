<?php

class About_us_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function header($lng) {
        $sql = $this->db->select("SELECT
                                        imagen_header as imagen,
                                        imagen_frase,
                                        " . $lng . "_titulo as titulo,
                                        " . $lng . "_frase as frase
                                FROM
                                        `aboutus_header`
                                WHERE id = 1;");
        return $sql[0];
    }

    public function seccion1($lng) {
        $sql = $this->db->select("SELECT
                                        " . $lng . "_contenido as contenido
                                FROM
                                        `aboutus_seccion1`
                                WHERE
                                        estado = 1
                                AND id = 1;");
        return $sql[0];
    }

    public function seccion2($lng) {
        $sql = $this->db->select("SELECT
                                        " . $lng . "_frase as frase
                                FROM
                                        `aboutus_seccion2`
                                WHERE
                                        estado = 1
                                ORDER BY
                                        orden ASC;");
        return $sql;
    }

    public function seccion3($lng) {
        $sql = $this->db->select("SELECT
                                        imagen,
                                        " . $lng . "_titulo as titulo,
                                        " . $lng . "_contenido as contenido
                                FROM
                                        `aboutus_seccion3`
                                WHERE
                                        estado = 1
                                ORDER BY
                                        orden ASC;");
        return $sql;
    }

}
