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
<section id="about" class="container">

    <!-- About Inner -->
    <div class="inner t-center">

        <!-- Header -->
        <h1 class="header header-style-1 dark light animated fadeIn visible" data-animation="fadeIn" data-animation-delay="200">
            <?= utf8_encode($this->contact['titulo']); ?>
        </h1>
        <!-- Header Text -->

        <!-- Boxes and Box Type -->
        <div class="boxes boxes-type-5 clearfix">

            <!-- Box -->
            <div class="col-xs-5 box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="300">
                <!-- Box Icon -->
                <div id="divFrmContacto">
                    <form id="frmContacto" class="contact">
                        <input type="hidden" value="<?= URL; ?>" name="url">
                        <input type="hidden" value="<?= $this->idioma; ?>" name="idioma">
                        <div class="form-group">
                            <input type="text" name="name" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="<?= utf8_encode($this->contact['nombre']); ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="<?= utf8_encode($this->contact['email']); ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="<?= utf8_encode($this->contact['asunto']); ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="comment" id="comment" cols="40" rows="6" class="form-control" aria-required="true" aria-invalid="false" placeholder="<?= utf8_encode($this->contact['mensaje']); ?>"></textarea>
                        </div>
                        <input type="submit" id="submit_contact" value="<?= utf8_encode($this->contact['boton']); ?>" class="btn btn-default btn-lg" style="padding: 20px; background: #56a144; color: #fff;">
                        <p></p>
                    </form>
                </div>
            </div>
            <!-- End Box -->
            <div class="col-xs-5 box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="800">
                <table class="table table-condensed table-hover">
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td><?= utf8_encode($this->datosContacto['direccion']); ?><br>
                            <?= utf8_encode($this->datosContacto['ciudad']); ?> - <?= utf8_encode($this->datosContacto['pais']); ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td> <?= utf8_encode($this->datosContacto['telefono']); ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope"></i></td>
                        <td><a href="mailto: <?= utf8_encode($this->datosContacto['email']); ?>"> <?= utf8_encode($this->datosContacto['email']); ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- End Boxes -->
    </div>
    <!-- End About Inner -->
</section>