<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Logos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <strong>Logos</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<?php
if (isset($_SESSION['message'])) {
    echo $this->helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
}
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Logo Principal</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="alert alert-info alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        Detalles de la imagen a subir:<br>
                        -Formato: PNG (transparente)<br>
                        -Dimensión Recomendada: 180px x 43px<br>
                        -Tamaño: 2MB<br>
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Subir imagenes en otras dimensiones a las no recomendadas puede afectar la correcta visualización del sitio.
                    </div>
                    <div class="html5fileupload fileLogoCabecera" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgLogoCabacera" data-valid-extensions="png,PNG" style="width: 100%;">
                        <input type="file" name="file_archivo" />
                    </div>
                    <script>
                        $(".html5fileupload.fileLogoCabecera").html5fileupload({
                            onAfterStartSuccess: function (response) {
                                $("#imgLogoCabecera").html(response.content);
                            }
                        });
                    </script>
                    <div class="row">
                        <div class="col-md-12" id="imgLogoCabecera">
                            <img class="img-responsive" src="<?= URL ?>public/images/<?= $this->logos['logo']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Favicon</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="alert alert-info alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        Detalles de la imagen a subir:<br>
                        -Formato: PNG (transparente)<br>
                        -Dimensión requerida: 32px x 32px<br>
                        -Tamaño: 2MB<br>
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Sí se sube una imagen diferente a la dimensión requerida, el favicon podría no mostrarse.
                    </div>
                    <div class="html5fileupload fileFavicon" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgFavicon" data-valid-extensions="png,PNG" style="width: 100%;">
                        <input type="file" name="file_archivo" />
                    </div>
                    <script>
                        $(".html5fileupload.fileFavicon").html5fileupload({
                            onAfterStartSuccess: function (response) {
                                $("#imgFavicon").html(response.content);
                            }
                        });
                    </script>
                    <div class="row">
                        <div class="col-md-12" id="imgFavicon">
                            <img class="img-responsive" src="<?= URL ?>public/images/<?= $this->logos['favicon']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>