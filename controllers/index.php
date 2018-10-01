<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        /* CONTENIDO OBLIGATORIO PARA CADA VISTA */
        $lng = $this->idioma;
        $metas = $this->helper->getMetaTags($lng, $this->url);
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
        /* FIN CONTENIDO OBLIGATORIO PARA CADA VISTA */

        $this->view->slider = $this->helper->cargarSlider($lng);
        $this->view->seccion1 = $this->helper->cargarSeccion1($lng);
        $this->view->seccion1_certificaciones = $this->helper->cargarSeccion1_Certificaciones($lng);
        $this->view->seccion2 = $this->helper->cargarSeccion2($lng);
        $this->view->productos = $this->helper->cargarProductos($lng);
        $this->view->responsabilidad = $this->helper->obtenerDatosResponsabilidad($lng);
        $this->view->beneficios = $this->helper->obtenerDatosBeneficiosResponsabilidad($lng);
        $this->view->blog = $this->helper->obtenerEntradasBlog($lng);

        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
