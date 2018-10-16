<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->idioma = $this->idioma;

        $this->view->title = TITLE . 'Inicio';
        $this->view->public_css = array("css/plugins/daterangepicker/daterangepicker-bs3.css");
        $this->view->public_js = array("js/plugins/daterangepicker/momen.min.js", "js/plugins/daterangepicker/daterangepicker.js");
        $this->view->render('admin/header');
        $this->view->render('admin/index/index');
        $this->view->render('admin/footer');
    }

    public function redes() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Redes';
        $this->view->getRedesTable = $this->model->getRedesTable();
        $this->view->public_css = array("css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css", "css/plugins/toastr/toastr.min.css");
        $this->view->public_js = array("js/plugins/iCheck/icheck.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/toastr/toastr.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/redes/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function usuarios() {
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Usuarios';
        #cargamos las librerias extras
        $this->view->helper = new Helper();
        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/datapicker/datepicker3.css");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/dataTables/dataTables.rowReorder.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/pdfobject/pdfobject.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/datapicker/bootstrap-datepicker.js", "js/plugins/input-mask/jquery.inputmask.js", "js/plugins/input-mask/jquery.inputmask.numeric.extensions.js", "js/plugins/datapicker/locales/bootstrap-datepicker.es.min.js");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/usuarios/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function logo() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Logo';
        $this->view->logos = $this->helper->getLogos();
        $this->view->public_css = array("css/plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/logo/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function direccion() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Direcciones';
        $this->view->datosDirecciones = $this->model->datosDirecciones();
        $this->view->public_css = array("css/plugins/toastr/toastr.min.css");
        $this->view->public_js = array("js/plugins/toastr/toastr.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/direccion/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function blog() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Blog';
        $this->view->datosBlog = $this->model->datosBlog();
        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/iCheck/custom.css", "css/wfmi-style.css", "css/plugins/toastr/toastr.min.css", "css/plugins/summernote/summernote.css", "css/plugins/datapicker/datepicker3.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/datapicker/bootstrap-datepicker.js");
        $this->view->render('admin/header');
        $this->view->render('admin/blog/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function busquedas() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;

        $this->view->title = 'Busquedas en el Blog';
        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/blog/busquedas');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function aboutus() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Nosotros';

        $this->view->datosHeaderNosotros = $this->model->datosHeaderNosotros();
        $this->view->datosContenidoNosotros = $this->model->datosContenidoNosotros();

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/nosotros/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function retail() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Retail & Private Label';

        $this->view->datosHeaderRetail = $this->model->datosHeaderRetail();
        $this->view->datosContenidoRetail = $this->model->datosContenidoRetail();

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/retail/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function products() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Productos';

        $this->view->datosHeaderNosotros = $this->model->datosHeaderNosotros();
        $this->view->datosContenidoNosotros = $this->model->datosContenidoNosotros();

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/redirect/jquery.redirect.js");
        $this->view->render('admin/header');
        $this->view->render('admin/products/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function services() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Servicios';

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/redirect/jquery.redirect.js");
        $this->view->render('admin/header');
        $this->view->render('admin/services/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoProductos() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Listado de Productos';

        $this->view->id_producto = $this->helper->cleanInput($_POST['id']);

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/redirect/jquery.redirect.js");
        $this->view->render('admin/header');
        $this->view->render('admin/products/listado');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function contacto() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Contacto';
        $this->view->datosContactoHeader = $this->model->datosContactoHeader();
        $this->view->datosContacto = $this->model->datosContacto();
        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function inicio() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Inicio';

        $this->view->datosSeccion1 = $this->model->datosSeccion(1);
        $this->view->datosSeccion2 = $this->model->datosSeccion(2);

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/inicio/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function certifications() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Inicio';

        $this->view->datosHeaderCertificaciones = $this->model->datosHeaderCertificaciones();

        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/html5fileupload/html5fileupload.css", "css/plugins/toastr/toastr.min.css", "css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/iCheck/icheck.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/certificaciones/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function menu() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Menú';
        $this->view->getMenu = $this->model->getMenu();
        $this->view->public_css = array("css/plugins/iCheck/custom.css", "css/plugins/summernote/summernote.css", "css/plugins/toastr/toastr.min.css");
        $this->view->public_js = array("js/plugins/iCheck/icheck.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/toastr/toastr.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/menu/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function cambiarEstado() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'tabla' => $this->helper->cleanInput($_POST['tabla']),
            'campo' => $this->helper->cleanInput($_POST['campo']),
            'seccion' => $this->helper->cleanInput($_POST['seccion']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->cambiarEstado($datos);
        echo json_encode($data);
    }

    public function modalEliminarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => (!empty($_POST['id'])) ? $this->helper->cleanInput($_POST['id']) : NULL,
            'tabla' => (!empty($_POST['tabla'])) ? $this->helper->cleanInput($_POST['tabla']) : NULL,
            'rowid' => (!empty($_POST['rowid'])) ? $this->helper->cleanInput($_POST['rowid']) : NULL,
        );
        $response = $this->model->modalEliminarContenido($data);
        echo json_encode($response);
    }

    public function eliminarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => (!empty($_POST['id'])) ? $this->helper->cleanInput($_POST['id']) : NULL,
            'tabla' => (!empty($_POST['tabla'])) ? $this->helper->cleanInput($_POST['tabla']) : NULL
        );
        $response = $this->model->eliminarContenido($data);
        echo json_encode($response);
    }

    public function modalEditarRedes() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarRedes($data);
        echo $datos;
    }

    public function frmEditarRedes() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'descripcion' => $this->helper->cleanInput($_POST['descripcion']),
            'url' => $this->helper->cleanInput($_POST['url']),
            'fontawesome' => $this->helper->cleanInput($_POST['fontawesome']),
            'orden' => $this->helper->cleanInput($_POST['orden']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmEditarRedes($datos);
        echo json_encode($data);
    }

    public function modalAgregarRedes() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarRedes($this->idioma);
        echo json_encode($datos);
    }

    public function frmAgregarRedes() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'descripcion' => (!empty($_POST['descripcion'])) ? $this->helper->cleanInput($_POST['descripcion']) : NULL,
            'url' => (!empty($_POST['url'])) ? $this->helper->cleanInput($_POST['url']) : NULL,
            'fontawesome' => (!empty($_POST['fontawesome'])) ? $this->helper->cleanInput($_POST['fontawesome']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmAgregarRedes($datos);
        echo json_encode($data);
    }

    public function listadoDTUsuarios() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTUsuarios();
        echo $data;
    }

    public function frmEditarUsuario() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'nombre' => $this->helper->cleanInput($_POST['nombre']),
            'email' => $this->helper->cleanInput($_POST['email']),
            'id_usuario_rol' => $this->helper->cleanInput($_POST['id_usuario_rol']),
            'contrasena' => (!empty($_POST['contrasena'])) ? $this->helper->cleanInput($_POST['contrasena']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0
        );
        $data = $this->model->frmEditarUsuario($datos);
        echo json_encode($data);
    }

    public function modalAgregarUsuario() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarUsuario($this->idioma);
        echo json_encode($datos);
    }

    public function frmAgregarUsuario() {
        if (!empty($_POST)) {
            $data = array(
                'nombre' => (!empty($_POST['nombre'])) ? $this->helper->cleanInput($_POST['nombre']) : NULL,
                'email' => (!empty($_POST['email'])) ? $this->helper->cleanInput($_POST['email']) : NULL,
                'id_usuario_rol' => (!empty($_POST['id_usuario_rol'])) ? $this->helper->cleanInput($_POST['id_usuario_rol']) : NULL,
                'contrasena' => (!empty($_POST['contrasena'])) ? $this->helper->cleanInput($_POST['contrasena']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $_POST['estado'] : 0,
            );
            $id = $this->model->frmAgregarUsuario($data);
            if (!empty($id)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se ha agregado correctamente el usuario'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos, ha ocurrido un error inesperado.'
                ));
            }
        }
        header('Location:' . URL . $this->idioma . '/admin/usuarios/');
    }

    public function uploadImgLogoCabacera() {
        header('Content-type: application/json; charset=utf-8');
        if (!empty($_POST)) {
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/';
            $this->model->unlinkImagen('logo', 'logo', 1, NULL);
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);

            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgLogoCabacera($data);
            echo json_encode($response);
        }
    }

    public function uploadImgFavicon() {
        header('Content-type: application/json; charset=utf-8');
        if (!empty($_POST)) {
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/';
            $this->model->unlinkImagen('favicon', 'logo', 1, NULL);
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);

            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgFavicon($data);
            echo json_encode($response);
        }
    }

    public function frmEditarDirecciones() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'direccion' => (!empty($_POST['direccion'])) ? $this->helper->cleanInput($_POST['direccion']) : NULL,
            'ciudad' => (!empty($_POST['ciudad'])) ? $this->helper->cleanInput($_POST['ciudad']) : NULL,
            'pais' => (!empty($_POST['pais'])) ? $this->helper->cleanInput($_POST['pais']) : NULL,
            'email' => (!empty($_POST['email'])) ? $this->helper->cleanInput($_POST['email']) : NULL,
            'telefono' => (!empty($_POST['telefono'])) ? $this->helper->cleanInput($_POST['telefono']) : NULL,
            'latitud' => (!empty($_POST['latitud'])) ? $this->helper->cleanInput($_POST['latitud']) : NULL,
            'longitud' => (!empty($_POST['longitud'])) ? $this->helper->cleanInput($_POST['longitud']) : NULL,
            'zoom' => (!empty($_POST['zoom'])) ? $this->helper->cleanInput($_POST['zoom']) : 0,
        );
        $data = $this->model->frmEditarDirecciones($datos);
        echo json_encode($data);
    }

    public function listadoDTBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTBlog($_REQUEST);
        echo $data;
    }

    public function uploadImgBlogHeaderListado() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen_header', 'blog_header', 1, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgBlogHeaderListado($data);
            echo json_encode($response);
        }
    }

    public function frmBlogTextos() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
        );
        $data = $this->model->frmBlogTextos($datos);
        echo json_encode($data);
    }

    public function modalEditarBlogPost() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'idioma' => $this->idioma
        );
        $datos = $this->model->modalEditarBlogPost($data);
        echo $datos;
    }

    public function frmEditarBlogPost() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => $this->helper->cleanInput($_POST['es_titulo']),
            'en_titulo' => $this->helper->cleanInput($_POST['en_titulo']),
            'es_contenido' => $_POST['es_contenido'],
            'en_contenido' => $_POST['en_contenido'],
            'es_tags' => $_POST['es_tags'],
            'en_tags' => $_POST['en_tags'],
            'youtube_id' => (!empty($_POST['youtube_id'])) ? $this->helper->cleanInput($_POST['youtube_id']) : NULL,
            'fecha_blog' => $this->helper->cleanInput($_POST['fecha_blog']),
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmEditarBlogPost($datos);
        echo json_encode($data);
    }

    public function uploadImgBlog() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            //$this->model->unlinkActualBlogImg($idPost);
            $error = false;
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/blog/';
            $serverdir = $dir;
            $dirThumb = 'public/images/blog/thumb/';
            $serverdirThumb = $dirThumb;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 770;
            $alto = 400;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

            #IMAGEN THUMB
            $tmp = explode(',', $_POST['file']);
            $file_thumb = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename_thumb = $this->helper->cleanUrl($idPost . '-thumb-' . $name);
            $filename_thumb = $filename_thumb . '.' . $extension;

            $handle = fopen($serverdirThumb . $filename_thumb, 'w');
            fwrite($handle, $file_thumb);
            fclose($handle);

            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen_thumb = $serverdirThumb . $filename_thumb;
            $imagen_final_thumb = $filename_thumb;
            $ancho_thumb = 370;
            $alto_thumb = 220;

            $this->helper->redimensionar($imagen_thumb, $imagen_final_thumb, $ancho_thumb, $alto_thumb, $serverdirThumb);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename,
                'imagen_thumb' => $filename_thumb
            );
            $response = $this->model->uploadImgBlog($data);
            echo json_encode($response);
        }
    }

    public function uploadImgBlogHeader() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            //$this->model->unlinkActualBlogImg($idPost);
            $error = false;
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/blog/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgBlogHeader($data);
            echo json_encode($response);
        }
    }

    public function modalAgregarBlogPost() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarBlogPost($this->idioma);
        echo json_encode($datos);
    }

    public function frmAgregarBlogPost() {
        if (!empty($_POST)) {
            $data = array(
                'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
                'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
                'es_tags' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['es_tags']) : NULL,
                'en_tags' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_tags']) : NULL,
                'es_contenido' => (!empty($_POST['en_titulo'])) ? $_POST['es_contenido'] : NULL,
                'en_contenido' => (!empty($_POST['en_titulo'])) ? $_POST['en_contenido'] : NULL,
                'youtube_id' => (!empty($_POST['youtube_id'])) ? $this->helper->cleanInput($_POST['youtube_id']) : NULL,
                'fecha_blog' => (!empty($_POST['fecha_blog'])) ? $this->helper->cleanInput($_POST['fecha_blog']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $_POST['estado'] : 0,
            );
            $idPost = $this->model->frmAgregarBlogPost($data);
            #IMAGENES
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;
                #IMAGEN DEL BLOG
                $dir = 'public/images/blog/';
                $serverdir = $dir;
                $dirThumb = 'public/images/blog/thumb/';
                $serverdirThumb = $dirThumb;
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);

                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                $imagen_final = $fname;
                $ancho = 770;
                $alto = 400;

                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

                #IMAGEN THUMB
                $newname_thumb = $idPost . '-thumb-' . $_FILES['file_archivo']['name'];
                $fname_thumb = $this->helper->cleanUrl($newname_thumb);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdirThumb . $fname_thumb, 'w');
                fwrite($handle, $contents);
                fclose($handle);

                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen_thumb = $serverdirThumb . $fname_thumb;
                $imagen_final_thumb = $fname_thumb;
                $ancho_thumb = 370;
                $alto_thumb = 220;

                $this->helper->redimensionar($imagen_thumb, $imagen_final_thumb, $ancho_thumb, $alto_thumb, $serverdirThumb);

                #IMAGEN DEL BLOG HEADER
                $dirHeader = 'public/images/blog/header/';
                $serverdirHeader = $dirHeader;
                $newname = $idPost . '_' . $_FILES['file_archivo_header']['name'];
                $fnameHeader = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo_header']['tmp_name']);

                $handle = fopen($serverdirHeader . $fnameHeader, 'w');
                fwrite($handle, $contents);
                fclose($handle);

                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdirHeader . $fnameHeader;
                $imagen_final = $fnameHeader;
                $ancho = 1920;
                $alto = 1080;

                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdirHeader);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagen' => $fname,
                    'imagen_thumb' => $fname_thumb,
                    'imagen_header' => $fnameHeader
                );
                $this->model->frmAddBlogImg($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido al blog'
            ));
        }
        header('Location:' . URL . $this->idioma . '/admin/blog/');
    }

    public function listadoDTSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTSlider();
        echo $data;
    }

    public function listadoDTCertificaciones() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTCertificaciones();
        echo $data;
    }

    public function listadoDTProductos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTProductos();
        echo $data;
    }

    public function listadoDTServicios() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTServicios();
        echo $data;
    }

    public function listadoDTItemProductos() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id_producto' => $this->helper->cleanInput($_POST['id_producto'])
        );
        $data = $this->model->listadoDTItemProductos($datos);
        echo $data;
    }

    public function modalEditarDTSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTSlider($data);
        echo $datos;
    }

    public function modalEditarDTCertificaciones() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTCertificaciones($data);
        echo $datos;
    }

    public function modalEditarDTProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTProducto($data);
        echo $datos;
    }

    public function modalEditarDTServicios() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTServicios($data);
        echo $datos;
    }

    public function modalEditarDTItemProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTItemProducto($data);
        echo $datos;
    }

    public function frmEditarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'es_titulo_principal' => (!empty($_POST['es_titulo_principal'])) ? $this->helper->cleanInput($_POST['es_titulo_principal']) : NULL,
            'es_descripcion' => (!empty($_POST['es_descripcion'])) ? $this->helper->cleanInput($_POST['es_descripcion']) : NULL,
            'es_texto_boton' => (!empty($_POST['es_texto_boton'])) ? $this->helper->cleanInput($_POST['es_texto_boton']) : NULL,
            'es_url_boton' => (!empty($_POST['es_url_boton'])) ? $this->helper->cleanInput($_POST['es_url_boton']) : NULL,
            'es_data_title' => (!empty($_POST['es_data_title'])) ? $this->helper->cleanInput($_POST['es_data_title']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'en_titulo_principal' => (!empty($_POST['en_titulo_principal'])) ? $this->helper->cleanInput($_POST['en_titulo_principal']) : NULL,
            'en_descripcion' => (!empty($_POST['en_descripcion'])) ? $this->helper->cleanInput($_POST['en_descripcion']) : NULL,
            'en_texto_boton' => (!empty($_POST['en_texto_boton'])) ? $this->helper->cleanInput($_POST['en_texto_boton']) : NULL,
            'en_url_boton' => (!empty($_POST['en_url_boton'])) ? $this->helper->cleanInput($_POST['en_url_boton']) : NULL,
            'en_data_title' => (!empty($_POST['en_data_title'])) ? $this->helper->cleanInput($_POST['en_data_title']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmEditarSlider($datos);
        echo json_encode($data);
    }

    public function frmEditarCertificaciones() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'es_nombre' => (!empty($_POST['es_nombre'])) ? $this->helper->cleanInput($_POST['es_nombre']) : NULL,
            'en_nombre' => (!empty($_POST['en_nombre'])) ? $this->helper->cleanInput($_POST['en_nombre']) : NULL,
            'es_resumen' => (!empty($_POST['es_resumen'])) ? $this->helper->cleanInput($_POST['es_resumen']) : NULL,
            'en_resumen' => (!empty($_POST['en_resumen'])) ? $this->helper->cleanInput($_POST['en_resumen']) : NULL,
            'es_nombre_corto' => (!empty($_POST['es_nombre_corto'])) ? $this->helper->cleanInput($_POST['es_nombre_corto']) : NULL,
            'en_nombre_corto' => (!empty($_POST['en_nombre_corto'])) ? $this->helper->cleanInput($_POST['en_nombre_corto']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmEditarCertificaciones($datos);
        echo json_encode($data);
    }

    public function frmEditarServiciosHeader() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
        );
        $data = $this->model->frmEditarServiciosHeader($datos);
        echo json_encode($data);
    }

    public function uploadImgSlider() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen', 'slider', $idPost, 'slider');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/slider/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgSlider($data);
            echo json_encode($response);
        }
    }

    public function uploadImgCertificaciones() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen_certificacion', 'certificaciones', $idPost, 'certificaciones');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/certificaciones/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
//            $imagen = $serverdir . $filename;
//            $imagen_final = $filename;
//            $ancho = 232;
//            $alto = 232;
//            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgCertificaciones($data);
            echo json_encode($response);
        }
    }

    public function uploadImgProducto() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen', 'productos', $idPost, 'productos');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/productos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 770;
            $alto = 400;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgProducto($data);
            echo json_encode($response);
        }
    }

    public function uploadImgItemProducto() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen', 'productos_items', $idPost, 'productos/items');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/productos/items/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 770;
            $alto = 400;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgItemProducto($data);
            echo json_encode($response);
        }
    }

    public function uploadImgCabeceraProducto() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen_header', 'privatelabel_header', $idPost, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgCabeceraProducto($data);
            echo json_encode($response);
        }
    }

    public function uploadImgHeaderServicio() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkImagen('imagen_header', 'servicios_header', $idPost, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $idPost . '-' . $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'imagen' => $filename
            );
            $response = $this->model->uploadImgHeaderServicio($data);
            echo json_encode($response);
        }
    }

    public function modalAgregarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarSlider($this->idioma);
        echo json_encode($datos);
    }

    public function modalAgregarCertificacion() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarCertificacion($this->idioma);
        echo json_encode($datos);
    }

    public function modalAgregarProducto() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarProducto($this->idioma);
        echo json_encode($datos);
    }

    public function modalAgregarItemProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id_producto' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalAgregarItemProducto($data);
        echo json_encode($datos);
    }

    public function frmAgregarSlider() {
        if (!empty($_POST)) {
            $data = array(
                'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
                'es_titulo_principal' => (!empty($_POST['es_titulo_principal'])) ? $this->helper->cleanInput($_POST['es_titulo_principal']) : NULL,
                'es_descripcion' => (!empty($_POST['es_descripcion'])) ? $this->helper->cleanInput($_POST['es_descripcion']) : NULL,
                'es_texto_boton' => (!empty($_POST['es_texto_boton'])) ? $this->helper->cleanInput($_POST['es_texto_boton']) : NULL,
                'es_url_boton' => (!empty($_POST['es_url_boton'])) ? $this->helper->cleanInput($_POST['es_url_boton']) : NULL,
                'es_data_title' => (!empty($_POST['es_data_title'])) ? $this->helper->cleanInput($_POST['es_data_title']) : NULL,
                'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
                'en_titulo_principal' => (!empty($_POST['en_titulo_principal'])) ? $this->helper->cleanInput($_POST['en_titulo_principal']) : NULL,
                'en_descripcion' => (!empty($_POST['en_descripcion'])) ? $this->helper->cleanInput($_POST['en_descripcion']) : NULL,
                'en_texto_boton' => (!empty($_POST['en_texto_boton'])) ? $this->helper->cleanInput($_POST['en_texto_boton']) : NULL,
                'en_url_boton' => (!empty($_POST['en_url_boton'])) ? $this->helper->cleanInput($_POST['en_url_boton']) : NULL,
                'en_data_title' => (!empty($_POST['en_data_title'])) ? $this->helper->cleanInput($_POST['en_data_title']) : NULL,
                'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
            );
            $idPost = $this->model->frmAgregarSlider($data);
            #IMAGENES
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;
                $dir = 'public/images/slider/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $ancho = 1920;
                $alto = 1080;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddSliderImg($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el slider'
            ));
        }
        header('Location:' . URL . $this->idioma . '/admin/inicio/');
    }

    public function frmAgregarCertificacion() {
        if (!empty($_POST)) {
            $data = array(
                'es_nombre' => (!empty($_POST['es_nombre'])) ? $this->helper->cleanInput($_POST['es_nombre']) : NULL,
                'en_nombre' => (!empty($_POST['en_nombre'])) ? $this->helper->cleanInput($_POST['en_nombre']) : NULL,
                'es_resumen' => (!empty($_POST['es_resumen'])) ? $this->helper->cleanInput($_POST['es_resumen']) : NULL,
                'en_resumen' => (!empty($_POST['en_resumen'])) ? $this->helper->cleanInput($_POST['en_resumen']) : NULL,
                'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
                'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
                'es_nombre_corto' => (!empty($_POST['es_nombre_corto'])) ? $this->helper->cleanInput($_POST['es_nombre_corto']) : NULL,
                'en_nombre_corto' => (!empty($_POST['en_nombre_corto'])) ? $this->helper->cleanInput($_POST['en_nombre_corto']) : NULL,
                'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
            );
            $idPost = $this->model->frmAgregarCertificacion($data);
            #IMAGENES
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;
                $dir = 'public/images/certificaciones/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
//                $imagen_final = $fname;
//                $ancho = 232;
//                $alto = 232;
//                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddCertificacionImg($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente la certificación'
            ));
        }
        header('Location:' . URL . $this->idioma . '/admin/certifications/');
    }

    public function frmAgregarProducto() {
        if (!empty($_POST)) {
            $data = array(
                'es_producto' => (!empty($_POST['es_producto'])) ? $this->helper->cleanInput($_POST['es_producto']) : NULL,
                'en_producto' => (!empty($_POST['en_producto'])) ? $this->helper->cleanInput($_POST['en_producto']) : NULL,
                'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
                'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
                'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
                'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
                'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
            );
            $idPost = $this->model->frmAgregarProducto($data);
            #IMAGENES
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;
                $dir = 'public/images/productos/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $ancho = 770;
                $alto = 400;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddProductoImg($imagenes);
            }
            if (!empty($_FILES['file_archivoHeader']['name'])) {
                $error = false;
                $dir = 'public/images/header/';
                $serverdir = $dir;
                #IMAGENES
                $newname = $idPost . '-' . $_FILES['file_archivoHeader']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivoHeader']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdir . $fname;
                # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                $imagen_final = $fname;
                $ancho = 1920;
                $alto = 1080;
                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $fname
                );
                $this->model->frmAddProductoImgHeader($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el producto'
            ));
        }
        header('Location:' . URL . $this->idioma . '/admin/products/');
    }

    public function frmEditarIndexSeccion1() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0
        );
        $datos = $this->model->frmEditarIndexSeccion1($data);
        echo json_encode($datos);
    }

    public function frmEditarProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_producto' => (!empty($_POST['es_producto'])) ? $this->helper->cleanInput($_POST['es_producto']) : NULL,
            'en_producto' => (!empty($_POST['en_producto'])) ? $this->helper->cleanInput($_POST['en_producto']) : NULL,
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $_POST['orden'] : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0
        );
        $datos = $this->model->frmEditarProducto($data);
        echo json_encode($datos);
    }

    public function frmEditarProductoItem() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_nombre' => (!empty($_POST['es_nombre'])) ? $this->helper->cleanInput($_POST['es_nombre']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
            'en_nombre' => (!empty($_POST['en_nombre'])) ? $this->helper->cleanInput($_POST['en_nombre']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
            'orden' => (!empty($_POST['orden'])) ? $_POST['orden'] : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0
        );
        $datos = $this->model->frmEditarProductoItem($data);
        echo json_encode($datos);
    }

    public function frmEditarIndexSeccion2() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $_POST['en_titulo'] : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0
        );
        $datos = $this->model->frmEditarIndexSeccion2($data);
        echo json_encode($datos);
    }

    public function uploadImgSeccion2() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen', 'index_seccion2', 1, NULL);
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgSeccion2($data);
            echo json_encode($response);
        }
    }

    public function frmEditarAboutus_header() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
        );
        $datos = $this->model->frmEditarAboutus_header($data);
        echo json_encode($datos);
    }

    public function frmEditarContacto_header() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
        );
        $datos = $this->model->frmEditarContacto_header($data);
        echo json_encode($datos);
    }

    public function frmEditarRetailHeader() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
        );
        $datos = $this->model->frmEditarRetailHeader($data);
        echo json_encode($datos);
    }

    public function frmEditarCertificacionHeader() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
        );
        $datos = $this->model->frmEditarCertificacionHeader($data);
        echo json_encode($datos);
    }

    public function frmEditarAboutus_seccion1() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $this->helper->cleanInput($_POST['es_contenido']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $this->helper->cleanInput($_POST['en_contenido']) : NULL,
        );
        $datos = $this->model->frmEditarAboutus_seccion1($data);
        echo json_encode($datos);
    }

    public function frmEditarRetailSeccion1() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $this->helper->cleanInput($_POST['es_contenido']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $this->helper->cleanInput($_POST['en_contenido']) : NULL,
        );
        $datos = $this->model->frmEditarRetailSeccion1($data);
        echo json_encode($datos);
    }

    public function frmEditarFraseNosotros() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $datos = $this->model->frmEditarFraseNosotros($data);
        echo json_encode($datos);
    }

    public function frmEditarFraseRetail() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $datos = $this->model->frmEditarFraseRetail($data);
        echo json_encode($datos);
    }

    public function frmEditarNosotrosSeccion3() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $this->helper->cleanInput($_POST['es_contenido']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $this->helper->cleanInput($_POST['en_contenido']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $datos = $this->model->frmEditarNosotrosSeccion3($data);
        echo json_encode($datos);
    }

    public function uploadImgHeaderNosotros() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen_header', 'aboutus_header', 1, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgHeaderNosotros($data);
            echo json_encode($response);
        }
    }

    public function uploadImgHeaderContacto() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen_header', 'contact_header', 1, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgHeaderContacto($data);
            echo json_encode($response);
        }
    }

    public function uploadImgHeaderRetail() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen_header', 'privatelabel_header', 1, 'header');
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgHeaderRetail($data);
            echo json_encode($response);
        }
    }

    public function uploadImgHeaderCertificaciones() {
        if (!empty($_POST)) {
            $this->model->unlinkImagen('imagen_header', 'certificaciones_header', 1, NULL);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #REDIMENSIONAR
            $imagen = $serverdir . $filename;
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgHeaderCertificaciones($data);
            echo json_encode($response);
        }
    }

    public function listadoDTFraseNosotros() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTFraseNosotros();
        echo $data;
    }

    public function listadoDTFraseRetail() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTFraseRetail();
        echo $data;
    }

    public function listadoDTNosotrosSeccion3() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTNosotrosSeccion3();
        echo $data;
    }

    public function modalEditarDTFraseNosotros() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTFraseNosotros($data);
        echo $datos;
    }

    public function modalEditarDTFraseRetail() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTFraseRetail($data);
        echo $datos;
    }

    public function modalEditarDTNosotrosSeccion3() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
        );
        $datos = $this->model->modalEditarDTNosotrosSeccion3($data);
        echo $datos;
    }

    public function modalAgregarItemNosotrosSeccion3() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarItemNosotrosSeccion3();
        echo json_encode($datos);
    }

    public function modalAgregarItemFraseNosotros() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarItemFraseNosotros();
        echo json_encode($datos);
    }

    public function modalAgregarItemFraseReatil() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarItemFraseReatil();
        echo json_encode($datos);
    }

    public function frmAgregarFraseNosotros() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmAgregarFraseNosotros($datos);
        echo json_encode($data);
    }

    public function frmAgregarFraseRetail() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
            'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmAgregarFraseRetail($datos);
        echo json_encode($data);
    }

    public function frmAgregarNosotrosSeccion3() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_contenido' => (!empty($_POST['es_contenido'])) ? $this->helper->cleanInput($_POST['es_contenido']) : NULL,
            'en_contenido' => (!empty($_POST['en_contenido'])) ? $this->helper->cleanInput($_POST['en_contenido']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmAgregarNosotrosSeccion3($datos);
        echo json_encode($data);
    }

    public function uploadImgFraseNostros() {
        if (!empty($_POST)) {
            $error = false;
            $error = false;
            $this->model->unlinkImagen('imagen_frase', 'aboutus_header', 1, 'header');
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/header/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgFraseNostros($data);
            echo json_encode($response);
        }
    }

    public function uploadImgFraseRetail() {
        if (!empty($_POST)) {
            $error = false;
            $error = false;
            $this->model->unlinkImagen('imagen_frase', 'privatelabel_header', 1, NULL);
            $absolutedir = dirname(__FILE__);
            $dir = 'public/images/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);

            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'imagen' => $filename
            );
            $response = $this->model->uploadImgFraseRetail($data);
            echo json_encode($response);
        }
    }

    public function frmAgregarItemProducto() {
        $data = array();
        if (!empty($_POST)) {
            $insertar = array(
                'id_producto' => (!empty($_POST['id_producto'])) ? $this->helper->cleanInput($_POST['id_producto']) : NULL,
                'es_nombre' => (!empty($_POST['es_nombre'])) ? $this->helper->cleanInput($_POST['es_nombre']) : NULL,
                'en_nombre' => (!empty($_POST['en_nombre'])) ? $this->helper->cleanInput($_POST['en_nombre']) : NULL,
                'es_contenido' => (!empty($_POST['es_contenido'])) ? $this->helper->cleanInput($_POST['es_contenido']) : NULL,
                'en_contenido' => (!empty($_POST['en_contenido'])) ? $this->helper->cleanInput($_POST['en_contenido']) : NULL,
                'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : 0,
                'estado' => (!empty($_POST['estado'])) ? $_POST['estado'] : 0,
            );
            $idPost = $this->model->frmAgregarItemProducto($insertar);
            #ARCHIVO
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;
                $dir = 'public/images/productos/items/';
                $serverdir = $dir;
                #PDF
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fname = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdir . $fname, 'w');
                fwrite($handle, $contents);
                fclose($handle);
                #############
                $archivo = array(
                    'id' => $idPost,
                    'imagen' => $fname
                );
                $this->model->frmAddProductoItemImg($archivo);
            }
            #obtenemos los datos de la fila para mostrar
            $mostrar = $this->model->datosProductosItems($idPost);
            #retornamos los valores
            $data = array(
                'type' => 'success',
                'id' => $idPost,
                'orden' => $mostrar['orden'],
                'imagen' => $mostrar['imagen'],
                'es_nombre' => $mostrar['es_nombre'],
                'en_nombre' => $mostrar['en_nombre'],
                'estado' => $mostrar['estado'],
                'editar' => $mostrar['editar'],
                'mensaje' => $mostrar['mensaje']
            );
        }
        echo json_encode($data);
    }

    public function btnMostrarImg() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->btnMostrarImg($data);
        echo json_encode($datos);
    }

    public function uploadServiciosImagen() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $idInsertDB = $this->model->insertImagenServicios($idPost);
            $error = false;
            $dir = 'public/images/servicios/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            #insertamos la imagen para obtene

            $filename = $this->helper->cleanUrl($idInsertDB . '-' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;

            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 960;
            $alto = 600;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            $dataImagen = array(
                'id' => $idInsertDB,
                'archivo' => $filename
            );
            $response = $this->model->uploadServiciosImagen($dataImagen);
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function btnEliminarImg() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->btnEliminarImg($data);
        echo json_encode($datos);
    }

    public function modalAgregarServicios() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarServicios($this->idioma);
        echo json_encode($datos);
    }

    public function frmAgregarServicio() {
        if (!empty($_POST)) {
            $data = array(
                'es_servicio' => (!empty($_POST['es_servicio'])) ? $this->helper->cleanInput($_POST['es_servicio']) : NULL,
                'en_servicio' => (!empty($_POST['en_servicio'])) ? $this->helper->cleanInput($_POST['en_servicio']) : NULL,
                'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
                'estado' => (!empty($_POST['estado'])) ? $_POST['estado'] : 0,
                'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
                'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
                'es_frase' => (!empty($_POST['es_frase'])) ? $this->helper->cleanInput($_POST['es_frase']) : NULL,
                'en_frase' => (!empty($_POST['en_frase'])) ? $this->helper->cleanInput($_POST['en_frase']) : NULL,
                'es_contenido' => (!empty($_POST['es_contenido'])) ? $_POST['es_contenido'] : NULL,
                'en_contenido' => (!empty($_POST['en_contenido'])) ? $_POST['en_contenido'] : NULL,
            );
            $idPost = $this->model->frmAgregarServicio($data);
            #IMAGEN PRODUCTO HEADER
            if (!empty($_FILES['file_archivo']['name'])) {
                $error = false;

                #IMAGEN DEL HEADER
                $dirHeader = 'public/images/header/';
                $serverdirHeader = $dirHeader;
                $newname = $idPost . '-' . $_FILES['file_archivo']['name'];
                $fnameHeader = $this->helper->cleanUrl($newname);
                $contents = file_get_contents($_FILES['file_archivo']['tmp_name']);

                $handle = fopen($serverdirHeader . $fnameHeader, 'w');
                fwrite($handle, $contents);
                fclose($handle);

                #############
                #SE REDIMENSIONA LA IMAGEN
                #############
                # ruta de la imagen a redimensionar 
                $imagen = $serverdirHeader . $fnameHeader;
                $imagen_final = $fnameHeader;
                $ancho = 1920;
                $alto = 1080;

                $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdirHeader);
                #############
                $imagenes = array(
                    'id' => $idPost,
                    'imagen_header' => $fnameHeader
                );
                $this->model->frmAddServicioImg($imagenes);
            }
            if (!empty($_FILES['file_productos']['name'])) {
                $dir = 'public/images/servicios/';
                $serverdir = $dir;
                #IMAGENES
                $filename = array();
                $filenameThumb = array();
                #IMAGENES
                $cantImagenes = count($_FILES['file_productos']['name']) - 1;
                for ($i = 0; $i <= $cantImagenes; $i++) {
                    $newname = $idPost . '-' . $_FILES['file_productos']['name'][$i];

                    $fname = $this->helper->cleanUrl($newname);


                    $contents = file_get_contents($_FILES['file_productos']['tmp_name'][$i]);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);
                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 960;
                    $alto = 600;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    array_push($filename, $fname);
                }
                $imagenes = array(
                    'id' => $idPost,
                    'imagenes' => $filename,
                );
                $this->model->insertServicioImagen($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el contenido'
            ));
        }
        header('Location:' . URL . $this->idioma . '/admin/services/');
    }

    public function listadoDTContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTContacto($_REQUEST);
        echo $data;
    }

    public function modalVerContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalVerContacto($data);
        echo $datos;
    }

    public function frmContenidoContacto() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_titulo' => (!empty($_POST['es_titulo'])) ? $this->helper->cleanInput($_POST['es_titulo']) : NULL,
            'en_titulo' => (!empty($_POST['en_titulo'])) ? $this->helper->cleanInput($_POST['en_titulo']) : NULL,
            'es_input_nombre' => (!empty($_POST['es_input_nombre'])) ? $this->helper->cleanInput($_POST['es_input_nombre']) : NULL,
            'en_input_nombre' => (!empty($_POST['en_input_nombre'])) ? $this->helper->cleanInput($_POST['en_input_nombre']) : NULL,
            'es_input_email' => (!empty($_POST['es_input_email'])) ? $this->helper->cleanInput($_POST['es_input_email']) : NULL,
            'en_input_email' => (!empty($_POST['en_input_email'])) ? $this->helper->cleanInput($_POST['en_input_email']) : NULL,
            'es_input_asunto' => (!empty($_POST['es_input_asunto'])) ? $this->helper->cleanInput($_POST['es_input_asunto']) : NULL,
            'en_input_asunto' => (!empty($_POST['en_input_asunto'])) ? $this->helper->cleanInput($_POST['en_input_asunto']) : NULL,
            'es_input_mensaje' => (!empty($_POST['es_input_mensaje'])) ? $this->helper->cleanInput($_POST['es_input_mensaje']) : NULL,
            'en_input_mensaje' => (!empty($_POST['en_input_mensaje'])) ? $this->helper->cleanInput($_POST['en_input_mensaje']) : NULL,
            'es_boton' => (!empty($_POST['es_boton'])) ? $this->helper->cleanInput($_POST['es_boton']) : NULL,
            'en_boton' => (!empty($_POST['en_boton'])) ? $this->helper->cleanInput($_POST['en_boton']) : NULL,
        );
        $data = $this->model->frmContenidoContacto($datos);
        echo json_encode($data);
    }

    public function metatags() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Meta Tags';
        $this->view->public_css = array("css/plugins/dataTables/datatables.min.css", "css/plugins/iCheck/custom.css", "css/wfmi-style.css", "css/plugins/toastr/toastr.min.css");
        $this->view->public_js = array("js/plugins/dataTables/datatables.min.js", "js/plugins/iCheck/icheck.min.js", "js/plugins/toastr/toastr.min.js");
        $this->view->render('admin/header');
        $this->view->render('admin/metatags/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoDTMetas() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTMetas($_REQUEST);
        echo $data;
    }

    public function modalEditarMetaTag() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarMetaTag($data);
        echo $datos;
    }

    public function frmEditarMetaTags() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_title' => (!empty($_POST['es_title'])) ? $this->helper->cleanInput($_POST['es_title']) : NULL,
            'es_descripcion' => (!empty($_POST['es_descripcion'])) ? $this->helper->cleanInput($_POST['es_descripcion']) : NULL,
            'es_keywords' => (!empty($_POST['es_keywords'])) ? $this->helper->cleanInput($_POST['es_keywords']) : NULL,
            'en_title' => (!empty($_POST['en_title'])) ? $this->helper->cleanInput($_POST['en_title']) : NULL,
            'en_descripcion' => (!empty($_POST['en_descripcion'])) ? $this->helper->cleanInput($_POST['en_descripcion']) : NULL,
            'en_keywords' => (!empty($_POST['en_keywords'])) ? $this->helper->cleanInput($_POST['en_keywords']) : NULL
        );
        $data = $this->model->frmEditarMetaTags($datos);
        echo json_encode($data);
    }

    public function modalEditarMenu() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarMenu($data);
        echo $datos;
    }

    public function frmEditarMenu() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'es_texto' => (!empty($_POST['es_texto'])) ? $this->helper->cleanInput($_POST['es_texto']) : NULL,
            'en_texto' => (!empty($_POST['en_texto'])) ? $this->helper->cleanInput($_POST['en_texto']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmEditarMenu($datos);
        echo json_encode($data);
    }

    public function modalAgregarMenu() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarMenu($this->idioma);
        echo json_encode($datos);
    }

    public function frmAgregarMenu() {
        header('Content-type: application/json; charset=utf-8');
        $datos = array(
            'es_texto' => (!empty($_POST['es_texto'])) ? $this->helper->cleanInput($_POST['es_texto']) : NULL,
            'en_texto' => (!empty($_POST['en_texto'])) ? $this->helper->cleanInput($_POST['en_texto']) : NULL,
            'orden' => (!empty($_POST['orden'])) ? $this->helper->cleanInput($_POST['orden']) : NULL,
            'estado' => (!empty($_POST['estado'])) ? $this->helper->cleanInput($_POST['estado']) : 0,
        );
        $data = $this->model->frmAgregarMenu($datos);
        echo json_encode($data);
    }

    public function pagina() {
        $this->view->helper = $this->helper;
        $this->view->idioma = $this->idioma;
        $this->view->title = 'Páginas';
        $this->view->listadoPaginas = $this->model->listadoPaginas();
        $this->view->public_css = array("css/plugins/html5fileupload/html5fileupload.css", "css/plugins/iCheck/custom.css", "css/wfmi-style.css", "css/plugins/toastr/toastr.min.css", "css/plugins/summernote/summernote.css", "css/plugins/datapicker/datepicker3.css");
        $this->view->publicHeader_js = array("js/plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("js/plugins/iCheck/icheck.min.js", "js/plugins/toastr/toastr.min.js", "js/plugins/summernote/summernote.min.js", "js/plugins/datapicker/bootstrap-datepicker.js");
        $this->view->render('admin/header');
        $this->view->render('admin/paginas/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoDTBusqueda() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoDTBusqueda($_REQUEST);
        echo $data;
    }

}
