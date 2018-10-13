<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Certificaciones</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <strong>Certificaciones</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Datos del Encabezado</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <form role="form" id="frmEditarCertificacionHeader" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosHeaderCertificaciones['id']); ?>">
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#seccionEncabezado-es">ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#seccionEncabezado-en">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="seccionEncabezado-es" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="es_titulo" class="form-control" value="<?= utf8_encode($this->datosHeaderCertificaciones['es_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="es_frase" class="form-control" value="<?= utf8_encode($this->datosHeaderCertificaciones['es_frase']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="seccionEncabezado-en" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="<?= utf8_encode($this->datosHeaderCertificaciones['en_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="en_frase" class="form-control" value="<?= utf8_encode($this->datosHeaderCertificaciones['en_frase']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Actualizar Contenido</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Imagen de la Cabecera</h5>
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
                                        -Formato: JPG, PNG<br>
                                        -Dimensión Recomendada: 1400 x 788px<br>
                                        -Tamaño: 2MB<br>
                                        <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                                    </div>
                                    <div class="html5fileupload fileImagenCertificacionesHeader" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgHeaderCertificaciones" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenCertificacionesHeader").html5fileupload({
                                            onAfterStartSuccess: function (response) {
                                                $("#imgImagenCertificacionesHeader").html(response.content);
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12" id="imgImagenCertificacionesHeader">
                                            <img class="img-responsive" src="<?= URL ?>public/images/header/<?= $this->datosHeaderCertificaciones['imagen_header']; ?>">';
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /COL-LG-12-->
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listado</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-certificaciones" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Imagen</th>
                                    <th>Nombre ES</th>
                                    <th>Nombre EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Orden</th>
                                    <th>Imagen</th>
                                    <th>Nombre ES</th>
                                    <th>Nombre EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarCertificacion">Agregar Certificación</button>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /COL-LG-12-->
    </div><!-- /row-->
</div>
<script>
    $(document).ready(function () {
        $(".i-checks").iCheck({
            checkboxClass: "icheckbox_square-green"
        });
        $(".summernote").summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null // set maximum height of editor
        });
        $('.dataTables-certificaciones').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTCertificaciones',
            columns: [
                {data: 'orden'},
                {data: 'imagen'},
                {data: 'es_nombre'},
                {data: 'en_nombre'},
                {data: 'estado'},
                {data: 'editar'}
            ],
            pageLength: 25,
            responsive: true,
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }

        });
        $(document).on("submit", "#frmEditarCertificacionesHeader", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarCertificacionesHeader"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarCertificacionesHeader").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    mostrarToastr(data.mensaje);
                }
            });
        });
        $(document).on("submit", "#frmEditarCertificaciones", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarCertificaciones"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarCertificaciones").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#certificaciones_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.message);
                }
            });
        });
    });
</script>