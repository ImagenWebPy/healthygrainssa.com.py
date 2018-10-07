<?php

class Contact extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        /* CONTENIDO OBLIGATORIO PARA CADA VISTA */
        $url = $this->url;
        $lng = $url[0];
        $metas = $this->helper->getMetaTags($lng, $url);
        $this->view->idioma = $lng;
        $this->view->page = $this->page;
        $this->view->logos = $this->helper->getLogos();
        $this->view->menu = $this->helper->cargarMenu($lng);
        $this->view->redes = $this->helper->cargarRedesSociales();
        $this->view->datos = $this->helper->obtenerDatos($lng);
        $this->view->datosContacto = $this->helper->getDatosContacto();
        $this->view->footerProductos = $this->helper->footerProductos($lng);
        $this->view->footerServicios = $this->helper->footerServicios($lng);
        $this->view->title = SITE_TITLE . $metas['title'];
        $this->view->description = $metas['description'];
        $this->view->keywords = $metas['keywords'];
        $this->view->template = $this->helper->getTemplate();
        $this->view->footerBackground = $this->helper->footerBackground();
        $this->view->helper = $this->helper;
        /* FIN CONTENIDO OBLIGATORIO PARA CADA VISTA */

        $this->view->header = $this->model->header($lng);
        $this->view->contact = $this->model->contact($lng);

        $this->view->render('header');
        $this->view->render('contact/index');
        $this->view->render('footer');
    }

    public function frmContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'url' => (!empty($_POST['url'])) ? $this->helper->cleanInput($_POST['url']) : NULL,
            'idioma' => (!empty($_POST['idioma'])) ? $this->helper->cleanInput($_POST['idioma']) : NULL,
            'name' => (!empty($_POST['name'])) ? $this->helper->cleanInput($_POST['name']) : NULL,
            'email' => (!empty($_POST['email'])) ? $this->helper->cleanInput($_POST['email']) : NULL,
            'subject' => (!empty($_POST['subject'])) ? $this->helper->cleanInput($_POST['subject']) : NULL,
            'comment' => (!empty($_POST['comment'])) ? $this->helper->cleanInput($_POST['comment']) : NULL
        );
        $datos = $this->model->frmContacto($data);
        echo json_encode($datos);
    }

}
