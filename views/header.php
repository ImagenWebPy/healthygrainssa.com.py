<!DOCTYPE html>
<html lang="<?= $this->idioma; ?>" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title><?= $this->title; ?></title>
        <meta name="description" content="<?= $this->description; ?>" />
        <meta name="keywords" content="<?= $this->keywords; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!--Favicon -->
        <link rel="icon" type="image/png" href="<?= URL; ?>public/images/<?= $this->logos['favicon']; ?>" />
        <!-- CSS Files -->
        <link rel="stylesheet" href="<?= URL; ?>public/css/reset.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/animate.min.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/socials.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/magnific-popup.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/flexslider.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/simpletextrotator.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/cubeportfolio.min.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/settings-ie8.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/settings.css" />
        <!-- Page Styles -->
        <link rel="stylesheet" href="<?= URL; ?>public/css/style.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/backgrounds.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/responsive.css" />
        <link rel="stylesheet" href="<?= URL; ?>public/css/custom.css" />
        <!-- End Page Styles -->
        <!-- Page Layout Color, night or dark -->
        <link id="changeable_tone" rel="stylesheet" href="<?= URL; ?>public/css/page_tones/dark.css" />
        <!-- End Page Layout Color -->
        <!-- Page Elements Color -->
        <link id="changeable_color" rel="stylesheet" href="<?= URL; ?>public/css/colors/red.css" />
        <!-- End Page Elements Color -->
        <!-- Page Fonts / Pacifico-->
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
        <!-- Raleway-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,,200,300,600,700' rel='stylesheet' type='text/css' />
        <!-- End CSS Files -->
    </head>
    <!-- Body Start -->
    <body class="parallax">
        <!-- Page Loader -->
        <article id="pageloader" class="white-loader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </article>
        <!-- PageTop -->
        <div id="pagetop" class="<?= $this->template['pagetop']; ?>">
            <!-- Inner -->
            <div class="pagetop_inner clearfix">
                <!-- Left Text -->
                <div class="f-left texts">
                    <!-- Text -->
                </div>
                <!-- Socials -->
                <div class="f-right socials">
                    <?php foreach ($this->redes as $red): ?>
                        <!-- Link -->
                        <a href="<?= utf8_encode($red['url']); ?>" class="<?= utf8_encode($red['descripcion']); ?>" target="_blank">
                            <i class="<?= utf8_encode($red['fontawesome']); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
                <!-- End Socials -->
            </div>
            <!-- End Inner -->
        </div>
        <!-- End Pagetop -->
        <!-- Navigation - select your nav color - dark-nav or white-nav -->
        <nav id="navigation" class="<?= $this->template['navigation']; ?>">
            <!-- Navigation -->
            <div class="navigation first-nav double-nav raleway">
                <!-- Navigation Inner -->
                <div class="nav-inner clearfix">
                    <!-- Logo Area -->
                    <div class="logo f-left">
                        <!-- Logo Link -->
                        <a href="<?= URL; ?>" class="logo-link scroll">
                            <!-- Logo Image / data-second-logo for only white nav -->
                            <img src="<?= URL; ?>public/images/<?= $this->logos['logo']; ?>" data-second-logo="<?= URL; ?>public/images/<?= $this->logos['logo']; ?>" alt="<?= utf8_encode($this->datos['nombre_empresa']); ?>" />
                        </a>
                    </div>
                    <!-- End Logo Area -->

                    <!-- Mobile Menu Button -->
                    <a class="mobile-nav-button"><i class="fa fa-bars"></i></a>

                    <!-- Navigation Links -->
                    <div class="nav-menu clearfix f-right">

                        <!-- Nav List -->
                        <ul class="nav uppercase normal">
                            <?php
                            foreach ($this->menu as $menu):
                                $submenu = $this->helper->cargarSubMenu($menu['id'], $this->idioma);
                                ?>
                                <li class="dropdown-toggle nav-toggle"><a href="#"><?= utf8_encode($menu['texto']); ?></a>
                                    <?php if (!empty($submenu)): ?>
                                        <!-- DropDown Menu -->
                                        <ul class="dropdown-menu pull-left clearfix">
                                            <?php foreach ($submenu as $sub): ?>
                                                <li><a href="#" class="ex-link"><?= utf8_encode($sub['texto']); ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                            <li class="dropdown-toggle nav-toggle"><a href="#" class="tahoma"><i class="fa fa-search"></i></a>
                                <!-- DropDown Menu -->
                                <ul class="dropdown-menu pull-right clearfix">
                                    <li class="ml-20 mt-15 mr-20 mb-15 raleway mini-text gray">
                                        <form method="post" class="search-form">
                                            <?php if ($this->idioma == 'en'): ?>
                                                <input type="text" name="search" id="search" class="transparent uppercase" placeholder="Search..." />
                                            <?php else: ?>
                                                <input type="text" name="search" id="search" class="transparent uppercase" placeholder="Buscar..." />
                                            <?php endif; ?>
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-toggle nav-toggle"><a href="#" class="tahoma"><?= $this->idioma; ?><i class="fa fa-angle-down"></i></a>
                                <!-- DropDown Menu -->
                                <ul class="dropdown-menu pull-right clearfix">
                                    <li><a href="#" class="changeLng" data-url="<?= URL; ?>" data-lng="en" data-page="<?= $this->page; ?>">English</a></li>
                                    <li><a href="#" class="changeLng" data-url="<?= URL; ?>" data-lng="es" data-page="<?= $this->page; ?>">Español</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Nav List -->
                    </div>
                    <!-- End Navigation Links -->
                </div>
                <!-- End Navigation Inner -->

            </div>

        </nav>
        <!-- End Nav -->