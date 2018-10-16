<?php
$helper = new Helper();
$pagina = (!empty($helper->getPage()[2])) ? $helper->getPage()[2] : '';
$paginaActual = $helper->getActivePageAdmin($pagina);
$rol = $_SESSION['usuarioLogueado']['rol'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $this->title; ?></title>
        <link href="<?= URL; ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= URL; ?>public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= URL; ?>public/admin/css/animate.css" rel="stylesheet">
        <link href="<?= URL; ?>public/admin/css/style.css" rel="stylesheet">
        <link href="<?= URL; ?>public/admin/css/custom.css" rel="stylesheet">
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/admin/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <script src="<?= URL; ?>public/admin/js/jquery-3.1.1.min.js"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/admin/' . $public_js . '"></script>';
            }
        }
        ?>
        <script src="<?= URL; ?>public/admin/js/custom.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <?php if (empty($_SESSION['usuarioLogueado']['img'])): ?>
                                        <img alt="image" class="img-circle img-responsive" src="<?= URL; ?>public/admin/img/profile/profile.png" style="width: 40px;" />
                                    <?php else: ?>
                                        <img alt="image" class="img-circle img-responsive" src="<?= URL; ?>public/admin/img/profile/<?= $_SESSION['usuarioLogueado']['img']; ?>" style="width: 40px;" />
                                    <?php endif; ?>
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $_SESSION['usuarioLogueado']['nombre']; ?></strong>
                                        </span> <span class="text-muted text-xs block"><?= $_SESSION['usuarioLogueado']['rol']; ?> <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="#">Mis Datos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= URL . $this->idioma ?>/login/salir">Salir</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                IN+
                            </div>
                        </li>
                        <li <?= $paginaActual['paginas']['dashboard']; ?>><a href="<?= URL . $this->idioma ?>/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a></li>
                        <?php if (($rol == 'Administrador') || ($rol == 'Editor')): ?>
                            <li <?= $paginaActual['paginas']['inicio']; ?>><a href="<?= URL . $this->idioma ?>/admin/inicio"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a></li>
                            <li <?= $paginaActual['paginas']['aboutus']; ?>><a href="<?= URL . $this->idioma ?>/admin/aboutus"><i class="fa fa-building"></i> <span class="nav-label">Sobre Nosotros</span></a></li>
                            <li <?= $paginaActual['paginas']['products']; ?>><a href="<?= URL . $this->idioma ?>/admin/products"><i class="fa fa-shopping-basket"></i> <span class="nav-label">Productos</span></a></li>
                            <li <?= $paginaActual['paginas']['certificactions']; ?>><a href="<?= URL . $this->idioma ?>/admin/certifications"><i class="fa fa-certificate"></i> <span class="nav-label">Certificaciones</span></a></li>
                            <li <?= $paginaActual['paginas']['services']; ?>><a href="<?= URL . $this->idioma ?>/admin/services"><i class="fa fa-compass"></i> <span class="nav-label">Servicios</span></a></li>
                            <li <?= $paginaActual['paginas']['retail']; ?>><a href="<?= URL . $this->idioma ?>/admin/retail"><i class="fa fa-trophy"></i> <span class="nav-label">Retail & Private Label</span></a></li>
                            <li <?= $paginaActual['paginas']['blog']['blog']; ?>>
                                <a href="#"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse" style="height: 0px;">
                                    <li <?= $paginaActual['paginas']['blog']['listado']; ?>><a href="<?= URL . $this->idioma ?>/admin/blog">Listado</a></li>
                                    <li <?= $paginaActual['paginas']['blog']['busqueda']; ?>><a href="<?= URL . $this->idioma ?>/admin/busquedas">Busquedas</a></li>
                                </ul>
                            </li>
                            <li <?= $paginaActual['paginas']['contacto']; ?>><a href="<?= URL . $this->idioma ?>/admin/contacto"><i class="fa fa-envelope-o"></i> <span class="nav-label">Contacto</span></a></li>
                            <li <?= $paginaActual['paginas']['menu']; ?>><a href="<?= URL . $this->idioma ?>/admin/menu"><i class="fa fa-bars"></i> <span class="nav-label">Menu</span></a></li>
                            <!--<li <?= $paginaActual['paginas']['pagina']; ?>><a href="<?= URL . $this->idioma ?>/admin/pagina"><i class="fa fa-file-text-o"></i> <span class="nav-label">Páginas</span></a></li>-->
                            <li <?= $paginaActual['paginas']['redes']; ?>><a href="<?= URL . $this->idioma ?>/admin/redes"><i class="fa fa-share-square-o"></i> <span class="nav-label">Redes</span></a></li>
                            <li <?= $paginaActual['paginas']['logo']; ?>><a href="<?= URL . $this->idioma ?>/admin/logo"><i class="fa fa-arrows-alt"></i> <span class="nav-label">Logos</span></a></li>
                            <li <?= $paginaActual['paginas']['direccion']; ?>><a href="<?= URL . $this->idioma ?>/admin/direccion"><i class="fa fa-map-marker"></i> <span class="nav-label">Direcciones</span></a></li>
                            <li <?= $paginaActual['paginas']['metatags']; ?>><a href="<?= URL . $this->idioma ?>/admin/metatags"><i class="fa fa-tags"></i> <span class="nav-label">Meta-tags</span></a></li>
                        <?php endif; ?>
                        <?php if ($rol == 'Administrador'): ?>
                            <li <?= $paginaActual['paginas']['usuarios']; ?>>
                                <a href="<?= URL . $this->idioma ?>/admin/usuarios"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?= URL . $this->idioma ?>/login/salir">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12">