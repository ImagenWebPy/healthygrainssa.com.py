<!-- Page Header - litle-header - big-header or bigger-header -->
<section id="page-header" class="parallax big-header xxdark-bg" style="background-image:url(<?= URL; ?>public/images/header/<?= utf8_encode($this->header['imagen']); ?>">
    <!-- Page Header Inner -->
    <div class="page_header_inner clearfix white">
        <!-- Left -->
        <div class="left f-left">
            <!-- Header -->
            <h2 class="page_header thin">
                <?= utf8_encode($this->header['titulo']); ?>
            </h2>
            <!-- Sub Page Text -->
            <h5 class="page_note extra-light">
                <?= utf8_encode($this->header['frase']); ?>
            </h5>
        </div>
    </div>
    <!-- End Inner -->
</section>
<!-- End #page-header -->
<?php if (!empty($this->seccion1)): ?>
    <section class="about_with_slider clearfix inner">
        <!-- Texts  -->
        <div class="texts col-xs-12">
            <?= utf8_encode($this->seccion1['contenido']); ?>
        </div>
        <!-- End Texts  -->
    </section>
<?php endif; ?>
<?php if (!empty($this->seccion2)): ?>
    <section class="testimonials type-1 parallax3 xxdark-bg" style="background-image:url(<?= URL; ?>public/images/header/<?= utf8_encode($this->header['imagen_frase']); ?>">
        <!-- Inner -->
        <div class="inner">
            <!-- Quote -->
            <div class="quote white t-center circle light">
                <i class="fa fa-quote-left"></i>
            </div>
            <!-- Slider -->
            <div class="testimonial-slide">
                <?php foreach ($this->seccion2 as $frase): ?>
                    <!-- Item -->
                    <div class="cbp-item">
                        <!-- Item Header -->
                        <h2 class="t-center light">
                            <?= utf8_encode($frase['frase']); ?>
                        </h2>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End Slider -->
        </div>
        <!-- End Inner -->
    </section>
<?php endif; ?>
<?php if (!empty($this->seccion3)): ?>
    <section id="agency-notes">
        <!-- Inner -->
        <div class="inner t-center">
            <!-- Boxes and Box Type -->
            <div class="boxes boxes-type-2 no-padding box-carousel four-items clearfix">
                <?php foreach ($this->seccion3 as $seccion3): ?>
                    <!-- Box -->
                    <div class="box animated" data-animation="fadeIn" data-animation-delay="400">
                        <!-- Box Header -->
                        <h4 class="box-header no-padding greenHealthy">
                            <?= utf8_encode($seccion3['titulo']); ?>
                        </h4>
                        <!-- Box Description -->
                        <div class="no-padding no-margin">
                            <?= utf8_encode($seccion3['contenido']); ?>
                        </div>

                    </div>
                    <!-- End Box -->
                <?php endforeach; ?>
            </div>
            <!-- End Boxes -->
        </div>
        <!-- End Inner -->
    </section>
<?php endif; ?>