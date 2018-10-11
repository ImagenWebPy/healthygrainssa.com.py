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

    public function modalEditarDTSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'lng' => $this->idioma,
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarDTSlider($data);
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

    public function modalAgregarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarSlider($this->idioma);
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
}
