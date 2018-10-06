<!-- Page Header - litle-header - big-header or bigger-header -->
<section id="page-header" class="parallax big-header xxdark-bg" style="background-image:url(<?= URL; ?>public/images/blog/header/<?= utf8_encode($this->post['imagen_header']); ?>">
    <!-- Page Header Inner -->
    <div class="page_header_inner clearfix white">
        <!-- Left -->
        <div class="left f-left">
            <!-- Header -->
            <h2 class="page_header thin">
                <?= utf8_encode($this->post['titulo']); ?>
            </h2>
        </div>
    </div>
    <!-- End Inner -->
</section>
<section id="blog" class="clearfix boxed pt-40 mb-80">
    <!-- Posts -->
    <div class="posts col-md-12 pl-00 pr-10 mt-90">
        <!-- Post -->
        <div class="post clearfix">
            <!-- Left, Dates -->
            <div class="dates f-left">
                <!-- Post Time -->
                <h6 class="date">
                    <span class="day colored helvetica">
                        <?= utf8_encode($this->post['fecha_dia']); ?>
                    </span>
                    <?= utf8_encode($this->post['fecha']); ?>
                </h6>
                <!-- Details -->
                <div class="details">
                    <ul class="t-right fullwidth">
                        <!-- Tags -->
                        <li>
                            <?= utf8_encode($this->post['tags']); ?>
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
                <!-- Media -->
                <div class="post-media mp-gallery">
                    <img src="<?= URL; ?>public/images/blog/<?= utf8_encode($this->post['imagen']); ?>" alt="<?= utf8_encode($this->post['titulo']); ?>">
                </div>
                <!-- Description -->
                <div class="post-text light">
                    <?= utf8_encode($this->post['contenido']); ?>
                </div>
                <!-- Load More Button -->
            </div>
            <!-- End Post Inner -->
        </div>
        <!-- End Post -->
    </div>
    <!-- End Posts -->
</section>