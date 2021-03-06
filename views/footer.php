<!-- Address Type2 -->
<section class="address type-2 parallax9 dark-bg" style="background-image:url(<?= URL; ?>public/images/<?= utf8_encode($this->footerBackground); ?>">
    <!-- Boxed div -->
    <div class="boxed clearfix relative">

        <!-- Box -->
        <a class="box clearfix block f-left" href="tel:<?= utf8_encode($this->datosContacto['telefono']); ?>">
            <!-- Icon -->
            <div class="f-left icon">
                <i class="fa fa-mobile"></i>
            </div>
            <!-- Texts -->
            <div class="f-right texts">
                <!-- Arrow -->
                <span class="arrow"></span>
                <!-- Header -->
                <h3 class="no-padding no-margin extra-light">
                    <?php if ($this->idioma == 'en'): ?>
                        Phone:
                    <?php else: ?>
                        Teléfono:
                    <?php endif; ?>
                </h3>
                <!-- Detail -->
                <p class="no-margin no-padding extra-light">
                    <?= utf8_encode($this->datosContacto['telefono']); ?>
                </p>
            </div>
            <!-- End Texts -->
        </a>
        <!-- End Box -->

        <!-- Box -->
        <a class="box clearfix block f-left" href="mailto:<?= utf8_encode($this->datosContacto['email']); ?>m">
            <!-- Icon -->
            <div class="f-left icon">
                <i class="fa fa-envelope"></i>
            </div>
            <!-- Texts -->
            <div class="f-right texts">
                <!-- Arrow -->
                <span class="arrow"></span>
                <!-- Header -->
                <h3 class="no-padding no-margin extra-light">
                    E-Mail
                </h3>
                <!-- Detail -->
                <p class="no-margin no-padding extra-light">
                    <?= utf8_encode($this->datosContacto['email']); ?>
                </p>
            </div>
            <!-- End Texts -->
        </a>
        <!-- End Box -->

        <!-- Box -->
        <a class="box clearfix block f-left scroll" href="#map">
            <!-- Icon -->
            <div class="f-left icon">
                <i class="fa fa-map-marker"></i>
            </div>
            <!-- Texts -->
            <div class="f-right texts">
                <!-- Arrow -->
                <span class="arrow"></span>
                <!-- Header -->
                <h3 class="no-padding no-margin extra-light">
                    <?php if ($this->idioma == 'en'): ?>
                        Address;
                    <?php else: ?>
                        Dirección:
                    <?php endif; ?>
                </h3>
                <!-- Detail -->
                <p class="no-margin no-padding extra-light">
                    <?= utf8_encode($this->datosContacto['direccion']); ?><br>
                    <?= utf8_encode($this->datosContacto['ciudad']); ?> - <?= utf8_encode($this->datosContacto['pais']); ?>
                </p>
            </div>
            <!-- End Texts -->
        </a>
        <!-- End Box -->

    </div>
    <!-- End Boxed div -->
</section>
<!-- End Address Section -->
<!-- Footer -->
<footer class="big-footer fullwidth dark-footer t-left">
    <!-- Footer Inner -->
    <div class="clearfix boxed footer_inner">

        <!-- Box -->
        <div class="col-xs-4">
            <!-- Header -->
            <h3 class="footer_header light no-margin no-padding">
                About Us
            </h3>
            <!-- Text -->
            <p class="footer_text text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec erat at lacus vestibulum commodo. Sed commodo urna tellus, vitae mattis ex dictum at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam euismod, nisl at ultrices volutpat, nulla felis auctor dui, vitae mollis magna ligula id justo. Aliquam consectetur iaculis porta. Aenean ultrices tincidunt diam, et tempus nibh ultrices in. Donec aliquet eleifend dolor tincidunt facilisis.
            </p>
        </div>
        <!-- End Box -->

        <!-- Box -->
        <div class="col-xs-4">
            <!-- Header -->
            <h3 class="footer_header light no-margin no-padding">
                Productos
            </h3>
            <!-- List -->
            <ol>
                <?php foreach ($this->footerProductos as $fproductos): ?>
                    <li>
                        <!-- Link -->
                        <a href="#" class="ex-link">
                            <?= utf8_encode($fproductos['producto']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
        <!-- End Box -->

        <!-- Box -->
        <div class="col-xs-4">
            <!-- Header -->
            <h3 class="footer_header light no-margin no-padding">
                Servicios
            </h3>
            <ol>
                <?php foreach ($this->footerServicios as $fservicios): ?>
                    <li>
                        <!-- Link -->
                        <a href="#" class="ex-link">
                            <?= utf8_encode($fservicios['servicio']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
        <!-- End Box -->
    </div>
    <!-- End Footer Inner -->

    <!-- Bottom -->
    <div class="footer_bottom">
        <!-- Bottom Inner -->
        <div class="boxed clearfix">
            <!-- Left, Copyright Area -->
            <div class="left f-left">
                <!-- Text and Link -->
                <p class="copyright">
                    Powered by <a href="https://imagenwebhq.com" target="_blank" class="author_link"><img src="<?= URL; ?>public/images/iweb-logo-bn.png" style="display: inline-block; width: 50%;"></a>
                </p>
            </div>
            <!-- End Left -->
            <!-- Right, Socials -->
            <div class="right f-right">
                <?php foreach ($this->redes as $red): ?>
                    <!-- Link -->
                    <a href="<?= utf8_encode($red['url']); ?>" class="social" target="_blank">
                        <i class="<?= utf8_encode($red['fontawesome']); ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <!-- End Right -->
        </div>
        <!-- End Inner -->
    </div>
    <!-- End Footer, Bottom -->
</footer>
<!-- End Footer -->



<!-- JS Files -->
<script type="text/javascript" src="<?= URL; ?>public/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/waypoint.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/modernizr-latest.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.superslides.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.simple-text-rotator.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.cubeportfolio.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.parallax-1.1.3.js"></script>
<!--<script type="text/javascript" src="<?= URL; ?>public/js/google-map.js"></script>-->
<script type="text/javascript" src="<?= URL; ?>public/js/skrollr.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/jquery.mb.YTPlayer.js"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="<?= URL; ?>public/js/rev_slider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/rev_slider/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/rev_slider/rev_plugins.js"></script>
<!-- Page Plugins -->
<script type="text/javascript" src="<?= URL; ?>public/js/plugins.js"></script>
<script type="text/javascript" src="<?= URL; ?>public/js/custom.js"></script>
<!-- Portfolio Plugins -->
<script type="text/javascript" src="<?= URL; ?>public/js/portfolio.js"></script>
<!-- End JS Files -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = '8L8uwEALbp';
        var d = document;
        var w = window;
        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }
        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
<!-- Body End -->
</html>