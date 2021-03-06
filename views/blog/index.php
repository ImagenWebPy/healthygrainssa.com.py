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
<section id="blog" class="clearfix boxed pt-40 mb-80">
    <!-- Posts -->
    <div class="posts col-md-12 pl-00 pr-10 mt-90">
        <?php foreach ($this->listado['listado'] as $item): ?>
            <!-- Post -->
            <div class="post clearfix">
                <!-- Left, Dates -->
                <div class="dates f-left">
                    <!-- Post Time -->
                    <h6 class="date">
                        <span class="day colored helvetica">
                            <?= utf8_encode($item['fecha_dia']); ?>
                        </span>
                        <?= utf8_encode($item['fecha']); ?>
                    </h6>
                    <!-- Details -->
                    <div class="details">
                        <ul class="t-right fullwidth">
                            <!-- Tags -->
                            <li>
                                <?= utf8_encode($item['tags']); ?>
                                <i class="fa fa-user"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- End Details -->
                </div>
                <!-- End Left, Dates -->
                <!-- Post Inner -->
                <div class="post-inner f-right">
                    <!-- Header -->
                    <h2 class="post-header semibold">
                        <?= utf8_encode($item['titulo']); ?>
                    </h2>
                    <!-- Media -->
                    <div class="post-media mp-gallery">
                        <a href="<?= utf8_encode($item['url']); ?>" title="<?= utf8_encode($item['titulo']); ?>">
                            <img src="<?= URL; ?>public/images/blog/<?= utf8_encode($item['imagen']); ?>" alt="<?= utf8_encode($item['titulo']); ?>">
                        </a>
                    </div>
                    <!-- Description -->
                    <p class="post-text light">
                        <?= utf8_encode($item['contenido']); ?>
                    </p>
                    <!-- Load More Button -->
                    <a href="<?= utf8_encode($item['url']); ?>" class="ex-link post-more uppercase light st">
                        <?= utf8_encode($item['mas']); ?>
                    </a>
                </div>
                <!-- End Post Inner -->
            </div>
            <!-- End Post -->
        <?php endforeach; ?>
    </div>
    <!-- End Posts -->

    <!-- Pagination -->
    <div class="col-md-12 pagination block t-center mt-90 mb-00">
        <?= $this->listado['paginador']; ?>
    </div>

</section>