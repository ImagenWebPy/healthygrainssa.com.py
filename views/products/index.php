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
<section id="blog" class="clearfix boxed pt-40 mb-80">
    <!-- Posts -->
    <div class="posts col-md-12 pl-00 pr-10 mt-90">
        <?php foreach ($this->productos as $producto): ?>
            <!-- Post -->
            <div class="post clearfix">
                <!-- Left, Dates -->
                <div class="dates f-left">
                    <!-- Post Time -->
                    <h6 class="date">
                        <span class="day greenHealthy helvetica">
                            <?= utf8_encode($producto['nombre']); ?>
                        </span>
                    </h6>
                    <!-- Details -->
                    <div class="details">
                        <ul class="t-right fullwidth">
                            <!-- Posted By -->
                        </ul>
                    </div>
                    <!-- End Details -->
                </div>
                <!-- End Left, Dates -->
                <!-- Post Inner -->
                <div class="post-inner f-right">
                    <!-- Media -->
                    <div class="post-media mp-gallery">
                        <a href="<?= URL; ?>public/images/productos/items/<?= utf8_encode($producto['imagen']); ?>" title="<?= utf8_encode($producto['imagen']); ?>">
                            <img src="<?= URL; ?>public/images/productos/items/<?= utf8_encode($producto['imagen']); ?>" alt="<?= utf8_encode($producto['imagen']); ?>">
                        </a>
                    </div>
                    <!-- Description -->
                    <div class="post-text light">
                        <?= utf8_encode($producto['contenido']); ?>
                    </div>
                    <!-- Load More Button -->
                </div>
                <!-- End Post Inner -->
            </div>
            <!-- End Post -->
        <?php endforeach; ?>
    </div>
    <!-- End Posts -->
</section>