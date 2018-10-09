<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    private function rowDataTable($seccion, $tabla, $id) {
//$sql = $this->db->select("SELECT * FROM $tabla WHERE id = $id;");
        $data = '';

        $sql = $this->db->select("SELECT * FROM $tabla WHERE id = $id;");

        switch ($seccion) {
            case 'redes':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="redes" data-rowid="redes_" data-tabla="redes" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="redes" data-rowid="redes_" data-tabla="redes" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarRedes"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="redes_" data-id="' . $id . '" data-tabla="redes"><i class="fa fa-trash-o"></i> Eliminar </a>';
                $data = '<td>' . utf8_encode($sql[0]['orden']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['descripcion']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['url']) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
        }
        return $data;
    }

    public function modalEliminarContenido($datos) {
        $content = '';
        $id = $datos['id'];
        $tabla = $datos['tabla'];
        $rowid = $datos['rowid'];
        $sql = $this->db->select("select * from $tabla where id = $id;");
        switch ($tabla) {
            case 'slider':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar el siguiente contenido?</h4>
                                <p><img src="' . URL . 'public/images/slider/' . $sql[0]['imagen'] . '" class="img-responsive"></p>
                                <p><a class="pointer btn btn-lg btn-danger btnEliminarContenido" data-tabla="' . $tabla . '" data-id="' . $id . '" data-rowid="' . $rowid . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></p>
                            </div>
                            </div>
                        </div>';
                break;
            case 'redes':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar el siguiente contenido?</h4>
                                <p>' . utf8_encode($sql[0]['descripcion']) . '</p>
                                <p><a class="pointer btn btn-lg btn-danger btnEliminarContenido" data-tabla="' . $tabla . '" data-id="' . $id . '" data-rowid="' . $rowid . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></p>
                            </div>
                            </div>
                        </div>';
                break;
        }
        $data = array(
            'type' => 'success',
            'id' => $id,
            'content' => $content,
            'titulo' => 'Eliminar Contenido',
            'rowid' => $rowid
        );
        return $data;
    }

    public function eliminarContenido($datos) {
        $id = $datos['id'];
        $tabla = $datos['tabla'];
        $sth = $this->db->prepare("delete from $tabla where id = :id");
        $sth->execute(array(
            ':id' => $id
        ));
        $data = array(
            'type' => 'success',
            'mensaje' => 'Se ha eliminado el contenido.'
        );
        return $data;
    }

    public function getRedesTable() {
        $sql = $this->db->select("select * from redes");
        return $sql;
    }

    public function modalEditarRedes($datos) {
        $id = $datos['id'];
        $sql = $this->db->select("SELECT * FROM redes where id = $id");
        $checked = "";
        if ($sql[0]['estado'] == 1)
            $checked = 'checked';
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarRedes" method="POST">
                            <input type="hidden" name="id" value="' . $id . '">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Red Social</label>
                                    <input type="text" name="descripcion" class="form-control" placeholder="Nombre Red Social" value="' . utf8_encode($sql[0]['descripcion']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enlace</label>
                                    <input type="text" name="url" class="form-control" placeholder="Enlace" value="' . utf8_encode($sql[0]['url']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-info alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    Para cambiar el icono hay que visitar la siguiente pagina y copiar el tag del icono. <a class="alert-link" href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome</a>.
                                </div>
                                    <div class="form-group">
                                    <label>Font Awesome</label>
                                    <input type="text" name="fontawesome" class="form-control" placeholder="Fuente" value="' . utf8_encode($sql[0]['fontawesome']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Orden</label>
                                    <input type="text" name="orden" class="form-control" placeholder="Orden" value="' . utf8_encode($sql[0]['orden']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" ' . $checked . '> <i></i> Mostrar </label></div>
                            </div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Red Social</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green",
                            radioClass: "iradio_square-green",
                        });
                    });
                </script>';
        $data = array(
            'titulo' => 'Editar Red Social',
            'content' => $modal
        );
        return json_encode($data);
    }

    public function frmEditarRedes($datos) {
        $id = $datos['id'];
        $estado = 1;
        if (empty($datos['estado'])) {
            $estado = 0;
        }
        $update = array(
            'descripcion' => utf8_decode($datos['descripcion']),
            'url' => utf8_decode($datos['url']),
            'fontawesome' => utf8_decode($datos['fontawesome']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => $estado
        );
        $this->db->update('redes', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable('redes', 'redes', $id),
            'mensaje' => 'Se han editado satisfactoriamente los datos de ' . $datos['descripcion'],
            'id' => $id
        );
        return $data;
    }

    public function cambiarEstado($datos) {
        $id = $datos['id'];
        $tabla = $datos['tabla'];
        $campo = $datos['campo'];
        $seccion = $datos['seccion'];
        $estado = $datos['estado'];
#Actualizamos el estado de acuerdo al valor actual
        if ($estado == 1)
            $newEstado = 0;
        else
            $newEstado = 1;
        $update = array(
            $campo => $newEstado
        );
        $this->db->update($tabla, $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable($seccion, $tabla, $id)
        );
        return $data;
    }

    public function modalAgregarRedes($datos) {
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmAgregarRedes" method="POST">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Red Social</label>
                                    <input type="text" name="descripcion" class="form-control" placeholder="Nombre Red Social" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enlace</label>
                                    <input type="text" name="url" class="form-control" placeholder="Enlace" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-info alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    Para cambiar el icono hay que visitar la siguiente pagina y copiar el tag del icono. <a class="alert-link" href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome</a>.
                                </div>
                                    <div class="form-group">
                                    <label>Font Awesome</label>
                                    <input type="text" name="fontawesome" class="form-control" placeholder="Fuente" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Orden</label>
                                    <input type="text" name="orden" class="form-control" placeholder="Orden" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1"> <i></i> Mostrar </label></div>
                            </div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Red Social</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green",
                            radioClass: "iradio_square-green",
                        });
                    });
                </script>';
        $data = array(
            'titulo' => 'Agregar Red Social',
            'content' => $modal
        );
        return $data;
    }

    public function frmAgregarRedes($datos) {
        $this->db->insert('redes', array(
            'descripcion' => utf8_decode($datos['descripcion']),
            'url' => utf8_decode($datos['url']),
            'fontawesome' => utf8_decode($datos['fontawesome']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => (!empty($datos['estado'])) ? $datos['estado'] : 0
        ));
        $id = $this->db->lastInsertId();
        $sql = $this->db->select("select * from redes where id = $id");
        $btnEstado = '';
        if ($sql[0]['estado'] == 1) {
            $btnEstado = '<a class="pointer btnCambiarEstado" data-seccion="redes" data-rowid="redes_" data-tabla="redes" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
        } else {
            $btnEstado = '<a class="pointer btnCambiarEstado" data-seccion="redes" data-rowid="redes_" data-tabla="redes" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $data = array(
            'type' => 'success',
            'content' => '<tr id="redes_' . $id . '">'
            . '<td>' . $sql[0]['orden'] . '</td>'
            . '<td>' . utf8_encode($sql[0]['descripcion']) . '</td>'
            . '<td>' . $sql[0]['url'] . '</td>'
            . '<td>' . $btnEstado . '</td>'
            . '<td> <a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarRedes"><i class="fa fa-edit"></i> Editar </a> </td></tr>',
            'mensaje' => 'Se ha agregado correctamente la red social ' . utf8_encode($sql[0]['descripcion']),
            'id' => $id
        );
        return $data;
    }

}
