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
<section class="about_with_slider clearfix inner">
    <!-- Left -->
    <div class="left col-xs-6 no-padding">
        <!-- Slider  -->
        <div class="images basic_slider">
            <!-- Image Slider  -->
            <ul class="image_slider clearfix">
                <?php foreach ($this->images as $image): ?>
                    <!-- Slide  -->
                    <li class="slide">
                        <!-- Image SRC  -->
                        <img src="<?= URL; ?>public/images/servicios/<?= utf8_encode($image['imagen']); ?>" alt="Content" />
                    </li>
                    <!-- Slide  -->
                <?php endforeach; ?>
            </ul>
            <!-- End Image Slider  -->
        </div>
        <!-- End Slider  -->
    </div>
    <!-- End Left -->

    <!-- Texts  -->
    <div class="right texts col-xs-6">
        <?= utf8_encode($this->contenido['contenido']); ?>
    </div>
    <!-- End Texts  -->
</section>