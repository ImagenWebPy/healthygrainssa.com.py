<!-- Home Section -->
<section id="home" class="home rev-slider container">
    <!-- Container  -->
    <div class="tp-banner-container">
        <!-- Banner  -->
        <div class="revslider-standart-big t-center" >
            <ul>
                <?php foreach ($this->slider as $slider): ?>
                    <!-- Slide  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?= URL; ?>public/images/slider/<?= utf8_encode($slider['imagen']); ?>" data-delay="13000"  data-saveperformance="off"  data-title="<?= utf8_encode($slider['data_title']); ?>">
                        <!-- Background Image -->
                        <img src="<?= URL; ?>public/images/slider/<?= utf8_encode($slider['imagen']); ?>"  alt="slidebg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <?php if (!empty($slider['titulo'])): ?>
                            <!-- LAYERS / LAYER NR. 1 -->
                            <div class="tp-caption customin customout rs-parallaxlevel-5 normal gray-light georgia uppercase t-left" data-0="opacity:1;" data-600="opacity:0;"
                                 data-x="left" data-hoffset="0"
                                 data-y="center" data-voffset="-75"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1400"
                                 data-easing="Power4.easeOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                <!-- Layer Item  -->
                                <?= utf8_encode($slider['titulo']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($slider['titulo_principal'])): ?>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption customin customout rs-parallaxlevel-5 big normal white georgia uppercase" data-0="opacity:1;" data-600="opacity:0;"
                                 data-x="left" data-hoffset="0"
                                 data-y="center" data-voffset="-22"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                <!-- Layer Item  -->
                                <?= utf8_encode($slider['titulo_principal']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($slider['descripcion'])): ?>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption customin customout rs-parallaxlevel-5 third_text normal white normal" data-0="opacity:1;" data-600="opacity:0;"
                                 data-x="left" data-hoffset="0"
                                 data-y="center" data-voffset="30"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1600"
                                 data-easing="Power4.easeOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                <!-- Layer Item  -->
                                <?= utf8_encode($slider['descripcion']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ((!empty($slider['texto_boton'])) && (!empty($slider['url_boton']))): ?>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption customin customout rs-parallaxlevel-5"
                                 data-x="left" data-hoffset="0"
                                 data-y="center" data-voffset="75"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1700"
                                 data-easing="Power4.easeOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                <!-- Layer Item  -->
                                <a href="<?= utf8_encode($slider['url_boton']); ?>" class="home-button dark-button uppercase normal georgia scroll" data-0="opacity:1;" data-600="opacity:0;">
                                    <?= utf8_encode($slider['texto_boton']); ?>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                    <!-- End Slide  -->
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- End Slider  -->
    </div>
    <!-- End Container  -->
</section>
<!-- End Home Section -->
<?php if (!empty($this->seccion1)): ?>
    <!-- Features Section -->
    <section class="container gray-bg">
        <!-- Features Inner -->
        <div class="inner t-center">
            <!-- Header -->
            <h1 class="header header-style-1 greenHealthy normal uppercase georgia animated" data-animation="fadeIn" data-animation-delay="200">
                <?= utf8_encode($this->seccion1['titulo']); ?>
            </h1>
            <!-- Header Text -->
            <p class="light animated" data-animation="fadeIn" data-animation-delay="200">
                <?= utf8_encode($this->seccion1['contenido']); ?>
            </p>
            <div class="feature-boxes type-3 clearfix">
                <?php foreach ($this->seccion1_certificaciones as $key => $certificacion): ?>
                    <!-- Box  -->
                    <div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="100">
                        <!-- Box Icon  -->
                        <div class="f-left feature-icon">
                            <img src="<?= URL; ?>public/images/certificaciones/<?= utf8_encode($certificacion['imagen']); ?>" class="img-responsive">
                        </div>
                        <!-- Box Texts  -->
                        <div class="feature-text small-head f-left t-left dark">
                            <!-- Box Header  -->
                            <h4 class="no-margin normal no-padding georgia uppercase">
                                <?= utf8_encode($certificacion['titulo']); ?>
                            </h4>
                            <!-- Box Description  -->
                            <p>
                                <?= utf8_encode($certificacion['resumen']); ?>
                            </p>
                        </div>
                    </div>
                    <!-- End Box  -->
                <?php endforeach; ?>
            </div>
        </div>
        <!-- End Features Inner  -->
    </section>
    <!-- End Features Section  -->
<?php endif; ?>
<?php if (!empty($this->seccion2)): ?>
    <!-- Testimonials -->
    <section class="testimonials type-1 parallax3 xdark-bg" style="background-image:url(<?= URL; ?>public/images/<?= utf8_encode($this->seccion2['imagen']); ?>">
        <!-- Inner -->
        <div class="inner">
            <!-- Slider -->
            <div class="text-center">
                <!-- Item -->
                <div class="cbp-item">
                    <!-- Item Header -->
                    <h2 class="uppercase light white t-center"><?= utf8_encode($this->seccion2['titulo']); ?></h2>
                    <h3 class="t-center light">
                        <?= utf8_encode($this->seccion2['contenido']); ?>
                    </h3>
                    <!-- Item Description -->
                </div>
            </div>
            <!-- End Slider -->
        </div>
        <!-- End Inner -->
    </section>
    <!-- End Testimonials -->
<?php endif; ?>
<!-- Agency Notes -->
<section id="agency-notes">
    <!-- Inner -->
    <div class="inner t-center">

        <!-- Header -->
        <h1 class="header header-style-1 greenHealthy georgia uppercase t-center animated" data-animation="fadeIn" data-animation-delay="100">
            <?php if ($this->idioma == 'en'): ?>
                Products
            <?php else : ?>
                Productos
            <?php endif; ?>
        </h1>
        <!-- Header Text -->
        <!-- Boxes and Box Type -->
        <div class="boxes boxes-type-2 box-carousel four-items clearfix">
            <?php foreach ($this->productos as $producto): ?>
                <!-- Box -->
                <div class="box animated" data-animation="fadeIn" data-animation-delay="400">
                    <!-- Box Icon -->
                    <div class="box-icon fullwidth t-center normal">
                        <!-- Icon -->
                        <a href="">
                            <!-- Icon Selector -->
                            <img src="<?= URL; ?>public/images/productos/<?= $producto['imagen']; ?>" class="img-responsive">
                        </a>
                    </div>
                    <!-- End Box Icon -->
                    <!-- Box Header -->
                    <h4 class="box-header no-padding">
                        <?= utf8_encode($producto['producto']); ?>
                    </h4>
                </div>
                <!-- End Box -->
            <?php endforeach; ?>
        </div>
        <!-- End Boxes -->

        <!-- If you add here more boxes, here will be slider automatically -->

    </div>
    <!-- End Inner -->
</section>
<!-- End Section -->
<?php if (!empty($this->responsabilidad)): ?>
    <!-- Categories Section -->
    <section id="categories" class="xdark-bg parallax2" style="background-image:url(<?= URL; ?>public/images/<?= utf8_encode($this->responsabilidad['imagen_fondo']); ?>">

        <!-- Inner -->
        <div class="inner t-center animated" data-animation="fadeIn" data-animation-delay="100">
            <!-- Header -->
            <h1 class="header header-style-1 white oswald normal uppercase t-center ">
                <?= utf8_encode($this->responsabilidad['titulo']); ?>
            </h1>

            <div class="row">
                <div class="col-lg-4 imgResponsabilidad">
                    <img src="<?= URL; ?>public/images/<?= utf8_encode($this->responsabilidad['imagen_1']); ?>" alt="imagen responsabilidad 1" class="img-responsive">
                </div>
                <div class="col-lg-4 imgResponsabilidad">
                    <img src="<?= URL; ?>public/images/<?= utf8_encode($this->responsabilidad['imagen_2']); ?>" alt="imagen responsabilidad 2" class="img-responsive">
                </div>
                <div class="col-lg-4 imgResponsabilidad">
                    <img src="<?= URL; ?>public/images/<?= utf8_encode($this->responsabilidad['imagen_3']); ?>" alt="imagen responsabilidad 3" class="img-responsive">
                </div>
            </div>
            <!-- Header Text -->
            <div class="normal t-center white">
                <?= utf8_encode($this->responsabilidad['contenido']); ?>
            </div>
        </div>
        <!-- End Inner -->
        <div class="bottom-page-texts relative t-center" style=" margin-bottom: 40px;">
            <!-- Slider Texts Area -->
            <h2 class="oswald normal antialiased uppercase"><?= utf8_encode($this->responsabilidad['titulo_granjero']); ?></h2>
            <div class="normal raleway white"><?= utf8_encode($this->responsabilidad['contenido_granjero']); ?></div>
            <!-- Bottom Buttons -->

            <!-- End Buttons -->
        </div>
        <!-- Categories -->
        <div class="categories fullwidth">
            <!-- Boxes -->
            <div class="category-boxes minimal-texts double-slider relative clearfix">
                <?php foreach ($this->beneficios as $beneficios): ?>
                    <!-- Box -->
                    <div class="box animated" data-animation="fadeIn" data-animation-delay="300">
                        <!-- Category Inner Slider -->
                        <div class="category-inner-slider inner-slider">
                            <!-- Image Div -->
                            <div class="image">
                                <!-- Image SRC -->
                                <img src="<?= URL; ?>public/images/<?= utf8_encode($beneficios['imagen']); ?>" alt="crexis_image" />
                            </div>
                            <!-- Image Div -->
                        </div>
                        <!-- End Category Inner Slider -->

                        <!-- Box Texts -->
                        <div class="box-texts white">
                            <!-- Header -->
                            <h2 class="t-shadow oswald antialiased">
                                <?= utf8_encode($beneficios['titulo']); ?>
                            </h2>
                        </div>
                        <!-- End Box Texts -->
                    </div>
                    <!-- End Box -->
                <?php endforeach; ?>
            </div>
            <!-- End Category Boxes -->
            <!-- Bottom Page Texts -->

            <!-- End Bottom Page Texts -->
        </div>
        <!-- End Categories -->
    </section>
    <!-- End Our Categories Section -->
<?php endif; ?>
<!-- News From Blog -->
<section class="news border-1px soft-border no-border-bottom">
    <!-- Inner -->
    <div class="inner t-center">

        <!-- Header -->
        <h1 class="header header-style-1 greenHealthy oswald uppercase t-center animated" data-animation="fadeIn" data-animation-delay="100">
            Blog
        </h1>
        <!-- Blog Slider -->
        <div class="blog-slider t-left box-carousel three-items">
            <?php foreach ($this->blog as $blog): ?>
                <!-- Box -->
                <div class="box">
                    <!-- Inner Sldier -->
                    <div class="inner-slider">
                        <!-- image / Slide -->
                        <div class="image">
                            <!-- Image SRC -->
                            <img src="<?= URL; ?>public/images/blog/thumb/<?= utf8_encode($blog['imagen']); ?>" alt="<?= utf8_encode($blog['titulo']); ?>" />
                        </div>
                        <!-- image / Slide -->
                    </div>
                    <!-- End Inner Sldier -->

                    <!-- Post Details -->
                    <div class="details extra-light">
                        <!-- Header -->
                        <h3 class="no-padding uppercase oswald greenHealthy">
                            <?= utf8_encode($blog['titulo']); ?>
                        </h3>
                        <!-- Post Details -->
                        <p class="post-details">
                            <i class="fa fa-clock-o"></i>
                            <?= utf8_encode($blog['fecha']); ?>
                        </p>
                        <!-- Post Message -->
                        <p class="post_message">
                            <?= strip_tags(utf8_encode($blog['contenido'])); ?>...
                        </p>
                        <!-- Red More Button -->
                        <a href="#l" class="post_read_more_button ex-link uppercase">
                            <?php if ($this->idioma == 'en'): ?>
                                Read More
                            <?php else: ?>
                                Leer Más
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- End Post Details -->
                </div>
                <!-- End Box -->
            <?php endforeach; ?>
        </div>
        <!-- End Blog Slider -->

    </div>
    <!-- End Inner -->
</section>
<!-- End News Section -->

