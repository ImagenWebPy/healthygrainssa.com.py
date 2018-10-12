<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    private function rowDataTable($seccion, $tabla, $id) {
//$sql = $this->db->select("SELECT * FROM $tabla WHERE id = $id;");
        $data = '';
        switch ($tabla) {
            case 'usuario':
                $sql = $this->db->select("SELECT wa.nombre, wa.email, wr.descripcion as rol, wa.estado
                                        FROM usuario wa
                                        LEFT JOIN usuario_rol wr on wr.id = wa.id_usuario_rol WHERE wa.id = $id;");
                break;
            default :
                $sql = $this->db->select("SELECT * FROM $tabla WHERE id = $id;");
                break;
        }

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
            case 'usuarios':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="usuarios" data-rowid="usuarios_" data-tabla="usuario" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="usuarios" data-rowid="usuarios_" data-tabla="usuario" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTUsuario"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="usuarios_" data-id="' . $id . '" data-tabla="usuario"><i class="fa fa-trash-o"></i> Eliminar </a>';
                $data = '<td>' . utf8_encode($sql[0]['nombre']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['email']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['rol']) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
            case 'blog':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="blog" data-rowid="blog_" data-tabla="blog" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="blog" data-rowid="blog_" data-tabla="blog" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarBlogPost" data-pagina="blog"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="redes_" data-id="' . $id . '" data-tabla="redes"><i class="fa fa-trash-o"></i> Eliminar </a>';
                if (empty($sql[0]['youtube_id'])) {
                    $imagen = '<img class="img-responsive imgBlogTable" src="' . URL . 'public/images/blog/thumb/' . $sql[0]['imagen_thumb'] . '">';
                } else {
                    $imagen = '<iframe class="scale-with-grid" src="http://www.youtube.com/embed/' . $sql[0]['youtube_id'] . '?wmode=opaque" allowfullscreen></iframe>';
                }
                $data = '<td>' . $sql[0]['id'] . '</td>'
                        . '<td>' . utf8_encode($sql[0]['es_titulo']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['en_titulo']) . '</td>'
                        . '<td>' . $imagen . '</td>'
                        . '<td>' . date('d-m-Y', strtotime($sql[0]['fecha_blog'])) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
            case 'slider':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="slider" data-rowid="slider_" data-tabla="slider" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="slider" data-rowid="slider_" data-tabla="slider" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTSlider" data-pagina="slider"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="slider_" data-id="' . $id . '" data-tabla="slider"><i class="fa fa-trash-o"></i> Eliminar </a>';
                if (!empty($sql[0]['imagen'])) {
                    $img = '<img src="' . URL . 'public/images/slider/' . $sql[0]['imagen'] . '" style="width: 160px;">';
                } else {
                    $img = '-';
                }
                $data = '<td>' . utf8_encode($sql[0]['orden']) . '</td>'
                        . '<td>' . $img . '</td>'
                        . '<td>' . utf8_encode($sql[0]['es_titulo']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['en_titulo']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['es_titulo_principal']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['en_titulo_principal']) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
            case 'fraseNosotros':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTFraseNosotros"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="fraseNosotros_" data-id="' . $id . '" data-tabla="aboutus_seccion2"><i class="fa fa-trash-o"></i> Eliminar </a>';
                $data = '<td>' . utf8_encode($sql[0]['orden']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['es_frase']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['en_frase']) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
            case 'nosotrosSeccion3':
                if ($sql[0]['estado'] == 1) {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
                } else {
                    $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
                }
                $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTNosotrosSeccion3"><i class="fa fa-edit"></i> Editar </a>';
                $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="nosotrosSeccion3_" data-id="' . $id . '" data-tabla="aboutus_seccion3"><i class="fa fa-trash-o"></i> Eliminar </a>';
                $data = '<td>' . utf8_encode($sql[0]['orden']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['es_titulo']) . '</td>'
                        . '<td>' . utf8_encode($sql[0]['en_titulo']) . '</td>'
                        . '<td>' . $estado . '</td>'
                        . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>';
                break;
        }
        return $data;
    }

    /**
     * 
     * @param string $campo
     * @param string $tabla
     * @param int $id
     * @param string $carpeta
     */
    public function unlinkImagen($campo, $tabla, $id, $carpeta = NULL) {
        $sql = $this->db->select("select $campo from $tabla where id = $id");
        $dir = (!empty($carpeta)) ? 'public/images/' . $carpeta . '/' : 'public/images/';
        if (!empty($sql)) {
            if (file_exists($dir . $sql[0][$campo])) {
                unlink($dir . $sql[0][$campo]);
            }
        }
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
            case 'usuario':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar al siguiente usuario?</h4>
                                <p>' . utf8_encode($sql[0]['nombre']) . '</p>
                                <p><a class="pointer btn btn-lg btn-danger btnEliminarContenido" data-tabla="' . $tabla . '" data-id="' . $id . '" data-rowid="' . $rowid . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></p>
                            </div>
                            </div>
                        </div>';
                break;
            case 'blog':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar al siguiente usuario?</h4>
                                <p>' . utf8_encode($sql[0]['es_titulo']) . ' - ' . utf8_encode($sql[0]['en_titulo']) . '</p>
                                <p><a class="pointer btn btn-lg btn-danger btnEliminarContenido" data-tabla="' . $tabla . '" data-id="' . $id . '" data-rowid="' . $rowid . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></p>
                            </div>
                            </div>
                        </div>';
                break;
            case 'aboutus_seccion2':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar al siguiente usuario?</h4>
                                <p>' . utf8_encode($sql[0]['es_frase']) . ' - ' . utf8_encode($sql[0]['en_frase']) . '</p>
                                <p><a class="pointer btn btn-lg btn-danger btnEliminarContenido" data-tabla="' . $tabla . '" data-id="' . $id . '" data-rowid="' . $rowid . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></p>
                            </div>
                            </div>
                        </div>';
                break;
            case 'aboutus_seccion3':
                $content = '
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>¿Estás seguro que deseas eliminar al siguiente usuario?</h4>
                                <p>' . utf8_encode($sql[0]['es_titulo']) . ' - ' . utf8_encode($sql[0]['en_titulo']) . '</p>
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
        switch ($tabla) {
            case 'blog':
                #eliminamos las imagenes del blog
                $sql = $this->db->select('SELECT imagen, imagen_thumb, imagen_header FROM `blog` where id = ' . $id);
                if (!empty($sql)) {
                    unlink('public/images/blog/' . utf8_encode($sql[0]['imagen']));
                    unlink('public/images/blog/thumb/' . utf8_encode($sql[0]['imagen_thumb']));
                    unlink('public/images/blog/header/' . utf8_encode($sql[0]['imagen_header']));
                }
                break;
        }
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

    public function listadoDTUsuarios() {
        $sql = $this->db->select("SELECT wa.id, wa.nombre, wa.email, wr.descripcion as rol, wa.estado
                                FROM usuario wa
                                LEFT JOIN usuario_rol wr on wr.id = wa.id_usuario_rol 
                                WHERE wa.id != 1");
        $datos = array();
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="usuarios" data-rowid="usuarios_" data-tabla="usuario" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="usuarios" data-rowid="usuarios_" data-tabla="usuario" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTUsuario"><i class="fa fa-edit"></i> Editar </a>';
            $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="usuarios_" data-id="' . $id . '" data-tabla="usuario"><i class="fa fa-trash-o"></i> Eliminar </a>';
            array_push($datos, array(
                "DT_RowId" => "usuarios_$id",
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'rol' => utf8_encode($item['rol']),
                'estado' => $estado,
                'accion' => $btnEditar . ' ' . $btnBorrar
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function frmEditarUsuario($datos) {
        $id = $datos['id'];
        $estado = 1;
        if (empty($datos['estado'])) {
            $estado = 0;
        }
        $contrasena = $datos['contrasena'];
        if (!empty($contrasena)) {
            $update = array(
                'nombre' => utf8_decode($datos['nombre']),
                'email' => utf8_decode($datos['email']),
                'id_usuario_rol' => utf8_decode($datos['id_usuario_rol']),
                'contrasena' => Hash::create('sha256', $contrasena, HASH_PASSWORD_KEY),
                'estado' => $estado
            );
        } else {
            $update = array(
                'nombre' => utf8_decode($datos['nombre']),
                'email' => utf8_decode($datos['email']),
                'id_usuario_rol' => utf8_decode($datos['id_usuario_rol']),
                'estado' => $estado
            );
        }
        $this->db->update('usuario', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable('usuarios', 'usuario', $id),
            'message' => 'Se han Actualizado correctamente los datos del usuario ' . $datos['nombre'],
            'id' => $id
        );
        return $data;
    }

    public function modalAgregarUsuario($lng) {
        $sqlRoles = $this->db->select("select * from usuario_rol where estado = 1");
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" action="' . URL . $lng . '/admin/frmAgregarUsuario" method="POST">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Rol</label>
                                    <select class="form-control m-b" name="id_usuario_rol" required> 
                                        <option value="">Seleccione un Rol</option>';
        foreach ($sqlRoles as $item) {
            $modal .= '                 <option value="' . $item['id'] . '">' . $item['descripcion'] . '</option>';
        }
        $modal .= '                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1"> <i></i> Mostrar </label></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="text" name="contrasena" class="form-control" placeholder="Contraseña" value="" required>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Usuario</button>
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
            'titulo' => 'Agregar Usuario',
            'content' => $modal
        );
        return $data;
    }

    public function frmAgregarUsuario($datos) {
        $this->db->insert('usuario', array(
            'id_usuario_rol' => utf8_decode($datos['id_usuario_rol']),
            'email' => utf8_decode($datos['email']),
            'contrasena' => Hash::create('sha256', utf8_decode($datos['contrasena']), HASH_PASSWORD_KEY),
            'nombre' => utf8_decode($datos['nombre']),
            'estado' => $datos['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function uploadImgLogoCabacera($datos) {
        $id = 1;
        $update = array(
            'logo' => $datos['imagen']
        );
        $this->db->update('logo', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/' . $datos['imagen'] . '">';
        $data = array(
            "result" => true,
            'content' => $contenido,
        );
        return $data;
    }

    public function uploadImgFavicon($datos) {
        $id = 1;
        $update = array(
            'favicon' => $datos['imagen']
        );
        $this->db->update('logo', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/' . $datos['imagen'] . '">';
        $data = array(
            "result" => true,
            'content' => $contenido,
        );
        return $data;
    }

    public function datosDirecciones() {
        $sql = $this->db->select("select * from datos_contacto where id = 1");
        return $sql[0];
    }

    public function frmEditarDirecciones($datos) {
        $id = 1;
        $update = array(
            'direccion' => utf8_decode($datos['direccion']),
            'ciudad' => utf8_decode($datos['ciudad']),
            'pais' => utf8_decode($datos['pais']),
            'email' => utf8_decode($datos['email']),
            'telefono' => utf8_decode($datos['telefono']),
            'latitud' => utf8_decode($datos['latitud']),
            'longitud' => utf8_decode($datos['longitud']),
            'zoom' => utf8_decode($datos['zoom']),
        );
        $row = $this->db->update('datos_contacto', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => 'Se han actualizado correctamente los datos de contacto',
            'id' => $id
        );
        return $data;
    }

    public function datosBlog() {
        $sql = $this->db->select("SELECT
                                        *
                                FROM
                                `blog_header`
                                WHERE
                                id = 1;");
        return $sql[0];
    }

    public function listadoDTBlog($datos) {
        $columns = array(
            0 => 'id',
            1 => 'titulo',
            2 => 'imagen_thumb',
            3 => 'fecha_blog',
            4 => 'estado',
            6 => 'accion',
        );
#getting total number records without any search
        $sql = $this->db->select("SELECT COUNT(*) as cantidad FROM blog");
        $totalFiltered = $sql[0]['cantidad'];
        $totalData = $sql[0]['cantidad'];

        $query = "SELECT * FROM blog where 1 = 1";
        $where = "";
        if (!empty($datos['search']['value'])) {
            $where .= " AND (titulo LIKE '%" . $requestData['search']['value'] . "%' ";
            $where .= " OR fecha_blog LIKE '%" . $requestData['search']['value'] . "%')";
#when there is a search parameter then we have to modify total number filtered rows as per search result.
            $sql = $this->db->select("SELECT COUNT(*) as cantidad FROM blog where 1 = 1 $where");
            $totalFiltered = $sql[0]['cantidad'];
        }
        $query .= $where;
        $query .= " ORDER BY " . $columns[$datos['order'][0]['column']] . "   " . $datos['order'][0]['dir'] . "  LIMIT " . $datos['start'] . " ," . $datos['length'] . "   ";
        $sql = $this->db->select($query);
        $data = array();
        foreach ($sql as $row) {  // preparing an array
            $id = $row["id"];
            if ($row['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="blog" data-rowid="blog_" data-tabla="blog" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="blog" data-rowid="blog_" data-tabla="blog" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarBlogPost" data-pagina="blog"><i class="fa fa-edit"></i> Editar </a>';
            $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="blog_" data-id="' . $id . '" data-tabla="blog"><i class="fa fa-trash-o"></i> Eliminar </a>';
            if (empty($row['youtube_id'])) {
                $imagen = '<img class="img-responsive imgBlogTable" src="' . URL . 'public/images/blog/thumb/' . $row['imagen_thumb'] . '">';
            } else {
                $imagen = '<iframe class="scale-with-grid" src="http://www.youtube.com/embed/' . $row['youtube_id'] . '?wmode=opaque" allowfullscreen></iframe>';
            }
            $nestedData = array();
            $nestedData['DT_RowId'] = 'blog_' . $id;
            $nestedData[] = $id;
            $nestedData[] = utf8_encode($row["es_titulo"]);
            $nestedData[] = utf8_encode($row["en_titulo"]);
            $nestedData[] = $imagen;
            $nestedData[] = date('d-m-Y', strtotime($row["fecha_blog"]));
            $nestedData[] = $estado;
            $nestedData[] = $btnEditar . ' ' . $btnBorrar;
            $data[] = $nestedData;
        }

        $json_data = array(
            "draw" => intval($datos['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );

        return json_encode($json_data);
    }

    public function uploadImgBlogHeaderListado($datos) {
        $id = 1;
        $update = array(
            'imagen_header' => $datos['imagen']
        );
        $this->db->update('blog_header', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/header/' . $datos['imagen'] . '">';
        $data = array(
            "result" => true,
            'content' => $contenido,
        );
        return $data;
    }

    public function frmBlogTextos($datos) {
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'es_frase' => utf8_decode($datos['es_frase']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'en_frase' => utf8_decode($datos['en_frase'])
        );
        $this->db->update('blog_header', $update, "id = 1");
        $data = array(
            'type' => 'success',
            'content' => 'Se ha actualizado exitosamente el contenido de los textos del blog',
        );
        return $data;
    }

    public function modalEditarBlogPost($datos) {
        $id = $datos['id'];
        $lng = $datos['idioma'];
        $sql = $this->db->select("select * from blog where id = $id");
        $checked = "";
        if ($sql[0]['estado'] == 1)
            $checked = 'checked';
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarBlogPost" method="POST">
                            <input type="hidden" name="id" value="' . $id . '">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ES Titulo</label>
                                        <input type="text" name="es_titulo" class="form-control" placeholder="Nombre" value="' . utf8_encode($sql[0]['es_titulo']) . '">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EN Titulo</label>
                                        <input type="text" name="en_titulo" class="form-control" placeholder="Nombre" value="' . utf8_encode($sql[0]['en_titulo']) . '">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" ' . $checked . '> <i></i> Mostrar </label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID video Youtube</label>
                                        <input type="text" name="youtube_id" class="form-control" placeholder="ID video Youtube" value="' . utf8_encode($sql[0]['youtube_id']) . '">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="data_1">
                                            <label class="font-normal">Fecha Publicación</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="fecha_blog" value="' . date('d/m/Y', strtotime($sql[0]['fecha_blog'])) . '">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ES Tags</label>
                                        <input type="text" name="es_tags" class="form-control" placeholder="ES Tags" value="' . utf8_encode($sql[0]['es_tags']) . '">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EN Tags</label>
                                        <input type="text" name="en_tags" class="form-control" placeholder="EN Tags" value="' . utf8_encode($sql[0]['en_tags']) . '">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1Blog"> ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2Blog">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1Blog" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea name="es_contenido" class="summernote">' . utf8_encode($sql[0]['es_contenido']) . '</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2Blog" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea name="en_contenido" class="summernote">' . utf8_encode($sql[0]['en_contenido']) . '</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Contenido</button>
                        </form>
                        <hr>
                        <div class="col-md-12">
                            <h3>Imagen del Blog</h3>
                            <div class="alert alert-warning alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong>No subir una imagen para el blog si va a vincular un video de Youtube al contenido, porque la misma no será visible.</strong>
                            </div>
                            <div class="alert alert-info alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                Detalles de la imagen a subir:<br>
                                    -Formato: JPG, PNG<br>
                                    -Dimensión: Hasta 770 x 400px<br>
                                    -Tamaño: 2MB<br>
                                <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                            </div>
                            <div class="alert alert-warning alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Sí se sube una imagen diferente a la dimensión requerida, el favicon podría no mostrarse.
                            </div>
                            <div class="html5fileupload fileBlog" data-max-filesize="2048000" data-url="' . URL . $lng . '/admin/uploadImgBlog" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                <input type="file" name="file_archivo" />
                            </div>
                            <script>
                                $(".html5fileupload.fileBlog").html5fileupload({
                                    data:{id:' . $id . '},
                                    onAfterStartSuccess: function(response) {
                                        $("#imgBlog" + response.id).html(response.content);
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-md-12" id="imgBlog' . $id . '">';
        if (!empty($sql[0]['imagen'])) {
            $modal .= '     <img class="img-responsive" src="' . URL . 'public/images/blog/' . $sql[0]['imagen'] . '">';
        }
        $modal .= '     </div>
                        <div class="col-md-12">
                            <h3>Imagen de Cabecera</h3>
                            <div class="alert alert-info alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                Detalles de la imagen a subir:<br>
                                    -Formato: JPG, PNG<br>
                                    -Dimensión: Hasta 1920 x 1080<br>
                                    -Tamaño: 2MB<br>
                                <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                            </div>
                            
                            <div class="html5fileupload fileTestimonio" data-max-filesize="2048000" data-url="' . URL . $lng . '/admin/uploadImgBlogHeader" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                <input type="file" name="file_archivo" />
                            </div>
                            
                            <script>
                                $(".html5fileupload.fileTestimonio").html5fileupload({
                                    data:{id:' . $id . '},
                                    onAfterStartSuccess: function(response) {
                                        $("#imgBlogHeader" + response.id).html(response.content);
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-md-12" id="imgBlogHeader' . $id . '">';
        if (!empty($sql[0]['imagen_header'])) {
            $modal .= '     <img class="img-responsive" src="' . URL . 'public/images/blog/header/' . $sql[0]['imagen_header'] . '">';
        }
        $modal .= '     </div>
                    </div>
                </div>';
        $data = array(
            'id' => $id,
            'titulo' => 'Editar Entrada del Blog',
            'content' => $modal
        );
        return json_encode($data);
    }

    public function frmEditarBlogPost($datos) {
        $id = $datos['id'];
        $estado = 1;
        $fecha_blog = $datos['fecha_blog'];
        $fecha_blog = str_replace('/', '-', $fecha_blog);
        $fecha_blog = date('Y-m-d', strtotime($fecha_blog));
        if (empty($datos['estado'])) {
            $estado = 0;
        }
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'es_tags' => utf8_decode($datos['es_tags']),
            'en_tags' => utf8_decode($datos['en_tags']),
            'youtube_id' => utf8_decode($datos['youtube_id']),
            'fecha_blog' => $fecha_blog,
            'estado' => $estado
        );
        $this->db->update('blog', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable('blog', 'blog', $id),
            'id' => $id,
            'mensaje' => 'Se ha actualizado el contenido del blog'
        );
        return $data;
    }

    public function uploadImgBlog($data) {
        $id = $data['id'];
        $update = array(
            'imagen' => $data['imagen'],
            'imagen_thumb' => $data['imagen_thumb'],
        );
        $this->db->update('blog', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/blog/' . $data['imagen'] . '">';
        $datos = array(
            "result" => TRUE,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgBlogHeader($data) {
        $id = $data['id'];
        $update = array(
            'imagen_header' => $data['imagen']
        );
        $this->db->update('blog', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/blog/header/' . $data['imagen'] . '">';
        $datos = array(
            "result" => TRUE,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function modalAgregarBlogPost($lng) {
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Contenido al Blog</h3>
                    </div>
                    <div class="row">
                        <form role="form" action="' . URL . $lng . '/admin/frmAgregarBlogPost" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ES Titulo</label>
                                        <input type="text" name="es_titulo" class="form-control" placeholder="Nombre" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EN Titulo</label>
                                        <input type="text" name="en_titulo" class="form-control" placeholder="Nombre" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1"> <i></i> Mostrar </label></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ES Tags</label>
                                        <input type="text" name="es_tags" class="form-control" placeholder="ES Tags" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EN Tags</label>
                                        <input type="text" name="en_tags" class="form-control" placeholder="EN Tags" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID video Youtube</label>
                                        <input type="text" name="youtube_id" class="form-control" placeholder="ID video Youtube" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="data_1">
                                        <label class="font-normal">Fecha Publicación</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="fecha_blog" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#blog-1Agregar"> ES Contenido</a></li>
                                            <li class=""><a data-toggle="tab" href="#blog-2Agregar">EN Contenido</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="blog-1Agregar" class="tab-pane active">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="es_contenido" class="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="blog-2Agregar" class="tab-pane">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="en_contenido" class="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Imagen del Blog</h3>
                                <div class="alert alert-warning alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>No subir una imagen para el blog si va a vincular un video de Youtube al contenido, porque la misma no será visible.</strong>
                                </div>
                                <div class="alert alert-info alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    Detalles de la imagen a subir:<br>
                                    -Formato: JPG,PNG<br>
                                    -Dimensión: Hasta 770 x 400px<br>
                                    -Tamaño: Hasta 2MB<br>
                                    <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                                </div>
                                <div class="html5fileupload fileAgregarBlog" data-form="true" data-max-filesize="2048000"  data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                    <input type="file" name="file_archivo" />
                                </div>
                                <script>
                                    $(".html5fileupload.fileAgregarBlog").html5fileupload();
                                </script>
                            </div>
                            <div class="col-md-12">
                                <h3>Imagen de Cabecera</h3>
                                <div class="alert alert-info alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    Detalles de la imagen a subir:<br>
                                    -Formato: JPG,PNG<br>
                                    -Dimensión: Hasta 1920 x 1080<br>
                                    -Tamaño: Hasta 2MB<br>
                                    <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                                </div>
                                <div class="html5fileupload fileAgregarBlogHeader" data-form="true" data-max-filesize="2048000"  data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                    <input type="file" name="file_archivo_header" />
                                </div>
                                <script>
                                    $(".html5fileupload.fileAgregarBlogHeader").html5fileupload();
                                </script>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Blog</button>
                        </form>
                    </div>
                </div>';
        $data = array(
            'titulo' => 'Agregar Entrada al Blog',
            'content' => $modal
        );
        return $data;
    }

    public function frmAgregarBlogPost($datos) {
        $fecha_blog = $datos['fecha_blog'];
        $fecha_blog = str_replace('/', '-', $fecha_blog);
        $fecha_blog = date('Y-m-d', strtotime($fecha_blog));
        $this->db->insert('blog', array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'es_tags' => utf8_decode($datos['es_tags']),
            'en_tags' => utf8_decode($datos['en_tags']),
            'youtube_id' => $datos['youtube_id'],
            'fecha_blog' => $fecha_blog,
            'fecha' => date('Y-m-d H:i:s'),
            'estado' => $datos['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddBlogImg($imagenes) {
        $id = $imagenes['id'];
        $update = array(
            'imagen' => $imagenes['imagen'],
            'imagen_thumb' => $imagenes['imagen_thumb'],
            'imagen_header' => $imagenes['imagen_header']
        );
        $this->db->update('blog', $update, "id = $id");
    }

    public function listadoDTSlider() {
        $sql = $this->db->select("SELECT * FROM slider ORDER BY orden ASC;");
        $datos = array();
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="slider" data-rowid="slider_" data-tabla="slider" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="slider" data-rowid="slider_" data-tabla="slider" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTSlider" data-pagina="slider"><i class="fa fa-edit"></i> Editar </a>';
            $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="slider_" data-id="' . $id . '" data-tabla="slider"><i class="fa fa-trash-o"></i> Eliminar </a>';
            if (!empty($item['imagen'])) {
                $img = '<img src="' . URL . 'public/images/slider/' . $item['imagen'] . '" style="width: 160px;">';
            } else {
                $img = '-';
            }
            array_push($datos, array(
                "DT_RowId" => "slider_$id",
                'orden' => $item['orden'],
                'imagen' => $img,
                'es_titulo' => utf8_encode($item['es_titulo']),
                'en_titulo' => utf8_encode($item['en_titulo']),
                'es_titulo_principal' => utf8_encode($item['es_titulo_principal']),
                'en_titulo_principal' => utf8_encode($item['en_titulo_principal']),
                'estado' => $estado,
                'editar' => $btnEditar . ' ' . $btnBorrar
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalEditarDTSlider($datos) {
        $id = $datos['id'];
        $lng = $datos['lng'];
        $sql = $this->db->select("select * from slider where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos del Slider</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarSlider" method="POST">
                            <input type="hidden" name="id" value="' . $id . '">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Orden</label>
                                        <input type="text" name="orden" class="form-control" placeholder="Orden" value="' . utf8_encode($sql[0]['orden']) . '">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" ' . $checked . '> <i></i> Mostrar </label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#slider-1"> ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#slider-2">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="slider-1" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="es_titulo" class="form-control" value="' . utf8_encode($sql[0]['es_titulo']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Principal</label>
                                                        <input type="text" name="es_titulo_principal" class="form-control" value="' . utf8_encode($sql[0]['es_titulo_principal']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" name="es_descripcion">' . utf8_encode($sql[0]['es_descripcion']) . '</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Texto Botón</label>
                                                        <input type="text" name="es_texto_boton" class="form-control" value="' . utf8_encode($sql[0]['es_texto_boton']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enlace ES</label>
                                                        <input type="text" name="es_url_boton" class="form-control" placeholder="Enlace ES" value="' . utf8_encode($sql[0]['es_url_boton']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Botón Siguiente</label>
                                                        <input type="text" name="es_data_title" class="form-control" placeholder="Enlace ES" value="' . utf8_encode($sql[0]['es_data_title']) . '">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="slider-2" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="' . utf8_encode($sql[0]['en_titulo']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Principal</label>
                                                        <input type="text" name="en_titulo_principal" class="form-control" value="' . utf8_encode($sql[0]['en_titulo_principal']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" name="en_descripcion">' . utf8_encode($sql[0]['en_descripcion']) . '</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Texto Botón</label>
                                                        <input type="text" name="en_texto_boton" class="form-control" value="' . utf8_encode($sql[0]['en_texto_boton']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enlace ES</label>
                                                        <input type="text" name="en_url_boton" class="form-control"  value="' . utf8_encode($sql[0]['en_url_boton']) . '">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Botón Siguiente</label>
                                                        <input type="text" name="en_data_title" class="form-control" value="' . utf8_encode($sql[0]['en_data_title']) . '">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Contenido</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="col-md-12">
                            <h3>Imagen</h3>
                            <div class="alert alert-info alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                Detalles de la imagen a subir:<br>
                                -Formato: JPG,PNG (La imagen principal tiene que ser PNG transparente)<br>
                                -Dimensión: Imagen Normal: 1920 x 1080px<br>
                                -Tamaño: Hasta 2MB<br>
                                <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                            </div>
                            <div class="html5fileupload fileSliderHealthy" data-max-filesize="2048000" data-url="' . URL . $lng . '/admin/uploadImgSlider" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                <input type="file" name="file_archivo" />
                            </div>
                            <script>
                                $(".html5fileupload.fileSliderHealthy").html5fileupload({
                                    data: {id: ' . $id . '},
                                    onAfterStartSuccess: function (response) {
                                        $("#imgSlider" + response.id).html(response.content);
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-md-12" id="imgSlider' . $id . '">';
        if (!empty($sql[0]['imagen'])) {
            $modal .= '     <img class="img-responsive" src="' . URL . 'public/images/slider/' . $sql[0]['imagen'] . '">';
        }
        $modal .= '     </div>
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
            'id' => $id,
            'titulo' => 'Editar Slider',
            'content' => $modal
        );
        return json_encode($data);
    }

    public function frmEditarSlider($datos) {
        $id = $datos['id'];
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'es_titulo_principal' => utf8_decode($datos['es_titulo_principal']),
            'es_descripcion' => utf8_decode($datos['es_descripcion']),
            'es_texto_boton' => utf8_decode($datos['es_texto_boton']),
            'es_url_boton' => utf8_decode($datos['es_url_boton']),
            'es_data_title' => utf8_decode($datos['es_data_title']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'en_titulo_principal' => utf8_decode($datos['en_titulo_principal']),
            'en_descripcion' => utf8_decode($datos['en_descripcion']),
            'en_url_boton' => utf8_decode($datos['en_url_boton']),
            'en_data_title' => utf8_decode($datos['en_data_title']),
            'orden' => $datos['orden'],
            'estado' => $datos['estado']
        );
        $this->db->update('slider', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'id' => $id,
            'content' => $this->rowDataTable('slider', 'slider', $id),
            'message' => 'Se ha actualizado el contenido del slider'
        );
        return $data;
    }

    public function uploadImgSlider($datos) {
        $id = $datos['id'];
        $update = array(
            'imagen' => $datos['imagen']
        );
        $this->db->update('slider', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/slider/' . $datos['imagen'] . '">';
        $data = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido,
        );
        return $data;
    }

    public function modalAgregarSlider($lng) {
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Slider</h3>
                    </div>
                    <div class="row">
                        <form action="' . URL . $lng . '/admin/frmAgregarSlider" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Orden</label>
                                        <input type="text" name="orden" class="form-control" placeholder="Orden" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1"> <i></i> Mostrar </label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1slider"> ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2slider">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1slider" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="es_titulo" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Principal</label>
                                                        <input type="text" name="es_titulo_principal" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" name="es_descripcion"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Texto Botón</label>
                                                        <input type="text" name="es_texto_boton" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enlace ES</label>
                                                        <input type="text" name="es_url_boton" class="form-control"  value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Botón Siguiente</label>
                                                        <input type="text" name="es_data_title" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2slider" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Principal</label>
                                                        <input type="text" name="en_titulo_principal" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" name="en_descripcion"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Texto Botón</label>
                                                        <input type="text" name="en_texto_boton" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enlace</label>
                                                        <input type="text" name="en_url_boton" class="form-control"  value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Botón Siguiente</label>
                                                        <input type="text" name="en_data_title" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Imagen</h3>
                                    <div class="alert alert-info alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        Detalles de la imagen a subir:<br>
                                        -Formato: JPG,PNG<br>
                                        -Dimensión: Imagen Normal: 1920 x 1080px<br>
                                        -Tamaño: Hasta 2MB<br>
                                        <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                                    </div>
                                    <div class="html5fileupload fileAgregarSlider" data-form="true" data-max-filesize="2048000"  data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileAgregarSlider").html5fileupload();
                                    </script>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Slider</button>
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
            'titulo' => 'Agregar Slider',
            'content' => $modal
        );
        return $data;
    }

    public function frmAgregarSlider($datos) {
        $this->db->insert('slider', array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'es_titulo_principal' => utf8_decode($datos['es_titulo_principal']),
            'es_descripcion' => utf8_decode($datos['es_descripcion']),
            'es_texto_boton' => utf8_decode($datos['es_texto_boton']),
            'es_url_boton' => utf8_decode($datos['es_url_boton']),
            'es_data_title' => utf8_decode($datos['es_data_title']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'en_titulo_principal' => utf8_decode($datos['en_titulo_principal']),
            'en_descripcion' => utf8_decode($datos['en_descripcion']),
            'en_texto_boton' => utf8_decode($datos['en_texto_boton']),
            'en_url_boton' => utf8_decode($datos['en_url_boton']),
            'en_data_title' => utf8_decode($datos['en_data_title']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => utf8_decode($datos['estado'])
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddSliderImg($imagenes) {
        $id = $imagenes['id'];
        $update = array(
            'imagen' => $imagenes['imagenes']
        );
        $this->db->update('slider', $update, "id = $id");
    }

    public function datosSeccion($seccion) {
        $sql = $this->db->select("select * from index_seccion" . $seccion . " where id = 1");
        return $sql[0];
    }

    public function frmEditarIndexSeccion1($datos) {
        $id = $datos['id'];
        $estado = 1;
        if (empty($datos['estado'])) {
            $estado = 0;
        }
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'estado' => $estado
        );
        $this->db->update('index_seccion1', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'mensaje' => 'Se ha actualizado el contenido de la sección 1'
        );
        return $data;
    }

    public function frmEditarIndexSeccion2($datos) {
        $id = $datos['id'];
        $estado = 1;
        if (empty($datos['estado'])) {
            $estado = 0;
        }
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'estado' => $estado
        );
        $this->db->update('index_seccion2', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'mensaje' => 'Se ha actualizado el contenido de la sección 2'
        );
        return $data;
    }

    public function uploadImgSeccion2($data) {
        $id = 1;
        $update = array(
            'imagen' => $data['imagen']
        );
        $this->db->update('index_seccion2', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/' . $data['imagen'] . '">';
        $datos = array(
            "result" => TRUE,
            'content' => $contenido
        );
        return $datos;
    }

    public function datosHeaderNosotros() {
        $sql = $this->db->select("SELECT
                                        *
                                FROM
                                aboutus_header
                                WHERE id =1;");
        return $sql[0];
    }

    public function datosContenidoNosotros() {
        $sql = $this->db->select("SELECT
                                        *
                                FROM
                                aboutus_seccion1
                                WHERE id =1;");
        return $sql[0];
    }

    public function frmEditarAboutus_header($datos) {
        $id = 1;
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'es_frase' => utf8_decode($datos['es_frase']),
            'en_frase' => utf8_decode($datos['en_frase'])
        );
        $row = $this->db->update('aboutus_header', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => 'Se ha actualizado el contenido del encabezado'
        );
        return $data;
    }

    public function frmEditarAboutus_seccion1($datos) {
        $id = 1;
        $update = array(
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
        );
        $row = $this->db->update('aboutus_seccion1', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => 'Se ha actualizado el contenido de la sección'
        );
        return $data;
    }

    public function frmEditarFraseNosotros($datos) {
        $id = 1;
        $update = array(
            'es_frase' => utf8_decode($datos['es_frase']),
            'en_frase' => utf8_decode($datos['en_frase']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => utf8_decode($datos['estado']),
        );
        $row = $this->db->update('aboutus_seccion2', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable('fraseNosotros', 'aboutus_seccion2', $id),
            'mensaje' => 'Se ha actualizado el contenido de las sección',
            'id' => $id
        );
        return $data;
    }

    public function frmEditarNosotrosSeccion3($datos) {
        $id = 1;
        $update = array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => utf8_decode($datos['estado']),
        );
        $row = $this->db->update('aboutus_seccion3', $update, "id = $id");
        $data = array(
            'type' => 'success',
            'content' => $this->rowDataTable('nosotrosSeccion3', 'aboutus_seccion3', $id),
            'mensaje' => 'Se ha actualizado el contenido de las sección',
            'id' => $id
        );
        return $data;
    }

    public function uploadImgHeaderNosotros($datos) {
        $id = 1;
        $update = array(
            'imagen_header' => $datos['imagen']
        );
        $this->db->update('aboutus_header', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/header/' . $datos['imagen'] . '">';
        $data = array(
            "result" => true,
            'content' => $contenido,
        );
        return $data;
    }

    public function listadoDTFraseNosotros() {
        $sql = $this->db->select("SELECT * FROM aboutus_seccion2 ORDER BY orden ASC;");
        $datos = array();
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTFraseNosotros"><i class="fa fa-edit"></i> Editar </a>';
            $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="fraseNosotros_" data-id="' . $id . '" data-tabla="aboutus_seccion2"><i class="fa fa-trash-o"></i> Eliminar </a>';
            array_push($datos, array(
                "DT_RowId" => "fraseNosotros_$id",
                'orden' => $item['orden'],
                'es_frase' => utf8_encode($item['es_frase']),
                'en_frase' => utf8_encode($item['en_frase']),
                'estado' => $estado,
                'editar' => $btnEditar . ' ' . $btnBorrar
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function listadoDTNosotrosSeccion3() {
        $sql = $this->db->select("SELECT * FROM aboutus_seccion3 ORDER BY orden ASC;");
        $datos = array();
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTNosotrosSeccion3"><i class="fa fa-edit"></i> Editar </a>';
            $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="aboutus_seccion3" data-id="' . $id . '" data-tabla="aboutus_seccion3"><i class="fa fa-trash-o"></i> Eliminar </a>';
            array_push($datos, array(
                "DT_RowId" => "nosotrosSeccion3_$id",
                'orden' => $item['orden'],
                'es_titulo' => utf8_encode($item['es_titulo']),
                'en_titulo' => utf8_encode($item['en_titulo']),
                'estado' => $estado,
                'editar' => $btnEditar . ' ' . $btnBorrar
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalEditarDTFraseNosotros($datos) {
        $id = $datos['id'];
        $sql = $this->db->select("SELECT * FROM `aboutus_seccion2` where id = $id");
        $checked = "";
        if ($sql[0]['estado'] == 1)
            $checked = 'checked';
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarFraseNosotros" method="POST">
                            <input type="hidden" name="id" value="' . $id . '">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ES Frase</label>
                                    <input type="text" name="es_frase" class="form-control" value="' . utf8_encode($sql[0]['es_frase']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>EN Frase</label>
                                    <input type="text" name="en_frase" class="form-control" value="' . utf8_encode($sql[0]['en_frase']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Orden</label>
                                    <input type="text" name="orden" class="form-control" value="' . utf8_encode($sql[0]['orden']) . '">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" ' . $checked . '> <i></i> Mostrar </label></div>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Item</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green"
                        });
                    });
                </script>';
        $data = array(
            'titulo' => 'Editar Item de la Seccion 5',
            'content' => $modal
        );
        return json_encode($data);
    }

    public function modalAgregarItemFraseNosotros() {
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmAgregarFraseNosotros" method="POST">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ES Frase</label>
                                    <input type="text" name="es_frase" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>EN Frase</label>
                                    <input type="text" name="en_frase" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Orden</label>
                                    <input type="text" name="orden" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" > <i></i> Mostrar </label></div>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Item</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green"
                        });
                    });
                </script>';
        $data = array(
            'titulo' => 'Agregar Item',
            'content' => $modal
        );
        return $data;
    }

    public function modalAgregarItemNosotrosSeccion3() {
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmAgregarNosotrosSeccion3" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Orden</label>
                                        <input type="text" name="orden" class="form-control" placeholder="Orden" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1"> <i></i> Mostrar </label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1Seccion3"> ES Contenido</a></li>
                                            <li class=""><a data-toggle="tab" href="#tab-2Seccion3">EN Contenido</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-1Seccion3" class="tab-pane active">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Es Título</label>
                                                            <input type="text" name="es_titulo" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="es_contenido" class="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-2Seccion3" class="tab-pane">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>EN Título</label>
                                                            <input type="text" name="en_titulo" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="en_contenido" class="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar Contenido</button>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green"
                        });
                    });
                </script>';
        $data = array(
            'titulo' => 'Agregar Item',
            'content' => $modal
        );
        return $data;
    }

    public function frmAgregarFraseNosotros($datos) {
        $this->db->insert('aboutus_seccion2', array(
            'es_frase' => utf8_decode($datos['es_frase']),
            'en_frase' => utf8_decode($datos['en_frase']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => (!empty($datos['estado'])) ? $datos['estado'] : 0
        ));
        $id = $this->db->lastInsertId();
        $sql = $this->db->select("select * from aboutus_seccion2 where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-seccion="fraseNosotros" data-rowid="fraseNosotros_" data-tabla="aboutus_seccion2" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTFraseNosotros"><i class="fa fa-edit"></i> Editar </a>';
        $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="fraseNosotros_" data-id="' . $id . '" data-tabla="aboutus_seccion2"><i class="fa fa-trash-o"></i> Eliminar </a>';
        $data = array(
            'type' => 'success',
            'content' => '<tr id="fraseNosotros_' . $id . '" role="row" class="odd">'
            . '<td class="sorting_1">' . utf8_encode($sql[0]['orden']) . '</td>'
            . '<td>' . utf8_encode($sql[0]['es_frase']) . '</td>'
            . '<td>' . utf8_encode($sql[0]['en_frase']) . '</td>'
            . '<td>' . $estado . '</td>'
            . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>'
            . '</tr>',
            'mensaje' => 'Se ha agregado correctamente el Item'
        );
        return $data;
    }

    public function frmAgregarNosotrosSeccion3($datos) {
        $this->db->insert('aboutus_seccion3', array(
            'es_titulo' => utf8_decode($datos['es_titulo']),
            'es_contenido' => utf8_decode($datos['es_contenido']),
            'en_titulo' => utf8_decode($datos['en_titulo']),
            'en_contenido' => utf8_decode($datos['en_contenido']),
            'orden' => utf8_decode($datos['orden']),
            'estado' => (!empty($datos['estado'])) ? $datos['estado'] : 0
        ));
        $id = $this->db->lastInsertId();
        $sql = $this->db->select("select * from aboutus_seccion3 where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="1"><span class="label label-primary">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-seccion="nosotrosSeccion3" data-rowid="nosotrosSeccion3_" data-tabla="aboutus_seccion3" data-campo="estado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarDTNosotrosSeccion3"><i class="fa fa-edit"></i> Editar </a>';
        $btnBorrar = '<a class="deletDTContenido pointer btn-xs txt-red" data-rowid="nosotrosSeccion3_" data-id="' . $id . '" data-tabla="aboutus_seccion3"><i class="fa fa-trash-o"></i> Eliminar </a>';
        $data = array(
            'type' => 'success',
            'content' => '<tr id="fraseNosotros_' . $id . '" role="row" class="odd">'
            . '<td class="sorting_1">' . utf8_encode($sql[0]['orden']) . '</td>'
            . '<td>' . utf8_encode($sql[0]['es_titulo']) . '</td>'
            . '<td>' . utf8_encode($sql[0]['en_titulo']) . '</td>'
            . '<td>' . $estado . '</td>'
            . '<td>' . $btnEditar . ' ' . $btnBorrar . '</td>'
            . '</tr>',
            'mensaje' => 'Se ha agregado correctamente el Item'
        );
        return $data;
    }

    public function uploadImgFraseNostros($data) {
        $id = 1;
        $update = array(
            'imagen_frase' => $data['imagen']
        );
        $this->db->update('aboutus_header', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/images/header/' . $data['imagen'] . '">';
        $datos = array(
            "result" => TRUE,
            'content' => $contenido
        );
        return $datos;
    }

    public function modalEditarDTNosotrosSeccion3($datos) {
        $id = $datos['id'];
        $sql = $this->db->select("select * from aboutus_seccion3 where id = $id");
        $checked = "";
        if ($sql[0]['estado'] == 1)
            $checked = 'checked';
        $modal = '<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modificar Datos</h3>
                    </div>
                    <div class="row">
                        <form role="form" id="frmEditarNosotrosSeccion3" method="POST">
                            <input type="hidden" name="id" value="' . $id . '">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" ' . $checked . '> <i></i> Mostrar </label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Orden</label>
                                        <input type="text" name="orden" class="form-control" placeholder="Orden" value="' . utf8_encode($sql[0]['orden']) . '">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabs-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1Seccion3"> ES Contenido</a></li>
                                            <li class=""><a data-toggle="tab" href="#tab-2Seccion3">EN Contenido</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-1Seccion3" class="tab-pane active">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Es Título</label>
                                                            <input type="text" name="es_titulo" class="form-control" value="' . utf8_encode($sql[0]['es_titulo']) . '">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="es_contenido" class="summernote">' . utf8_encode($sql[0]['es_contenido']) . '</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-2Seccion3" class="tab-pane">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>EN Título</label>
                                                            <input type="text" name="en_titulo" class="form-control" value="' . utf8_encode($sql[0]['en_titulo']) . '">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Contenido</label>
                                                            <textarea name="en_contenido" class="summernote">' . utf8_encode($sql[0]['en_contenido']) . '</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Contenido</button>
                        </form>
                    </div>
                </div>';
        $data = array(
            'titulo' => 'Editar Sección',
            'content' => $modal
        );
        return json_encode($data);
    }

}
