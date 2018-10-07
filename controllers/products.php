<?php

class Products extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function seeds() {
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

        $this->view->header = $this->model->header($lng, 1);
        $this->view->productos = $this->model->productos($lng, 1);

        $this->view->render('header');
        $this->view->render('products/index');
        $this->view->render('footer');
    }

}
