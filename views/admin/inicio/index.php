<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Inicio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li><a>Contenido</a></li>
            <li class="active">
                <strong>Página Inicio</strong>
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
                    <h5>Contenido Slider Inicio</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-slider" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Imagen</th>
                                    <th>Titulo ES</th>
                                    <th>Titulo EN</th>
                                    <th>Titulo Principal ES</th>
                                    <th>Titulo Principal EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Orden</th>
                                    <th>Imagen</th>
                                    <th>Titulo ES</th>
                                    <th>Titulo EN</th>
                                    <th>Titulo Principal ES</th>
                                    <th>Titulo Principal EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarSlider">Agregar Slider</button>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /COL-LG-12-->
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Seccion 1</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <form role="form" id="frmEditarIndexSeccion1" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosSeccion1['id']); ?>">
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" <?= ($this->datosSeccion1['estado'] == 1) ? 'checked' : '' ?>> <i></i> Mostrar </label></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1Seccion1">ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2Seccion1">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1Seccion1" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ES Título</label>
                                                        <input type="text" name="es_titulo" class="form-control" value="<?= utf8_encode($this->datosSeccion1['es_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ES Contenido</label>
                                                        <textarea style="height:80px;" name="es_contenido" class="summernote"><?= utf8_encode($this->datosSeccion1['es_contenido']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2Seccion1" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>EN Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="<?= utf8_encode($this->datosSeccion1['en_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>EN Contenido</label>
                                                        <textarea style="height:80px;" name="en_contenido" class="summernote"><?= utf8_encode($this->datosSeccion1['en_contenido']); ?></textarea>
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
                </div>

            </div>
        </div><!-- /COL-LG-12-->
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Seccion 2</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <form role="form" id="frmEditarIndexSeccion2" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosSeccion2['id']); ?>">
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" <?= ($this->datosSeccion2['estado'] == 1) ? 'checked' : '' ?>> <i></i> Mostrar </label></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#seccion2-1">ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#seccion2-2">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="seccion2-1" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ES titulo</label>
                                                        <input type="text" name="es_titulo" class="form-control" value="<?= utf8_encode($this->datosSeccion2['es_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ES Contenido</label>
                                                        <textarea style="height:80px;" name="es_contenido" class="summernote"><?= utf8_encode($this->datosSeccion2['es_contenido']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="seccion2-2" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>EN Titulo</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="<?= utf8_encode($this->datosSeccion2['en_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea style="height:80px;" name="en_contenido" class="summernote"><?= utf8_encode($this->datosSeccion2['en_contenido']); ?></textarea>
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
                                    <h5>Imagen de Fondo</h5>
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
                                    <div class="html5fileupload fileImagenSeccion2" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgSeccion2" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenSeccion2").html5fileupload({
                                            onAfterStartSuccess: function (response) {
                                                $("#imgImagenSeccion2").html(response.content);
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12" id="imgImagenSeccion2">
                                            <img class="img-responsive" src="<?= URL ?>public/images/<?= $this->datosSeccion2['imagen']; ?>">';
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        $('.dataTables-slider').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTSlider',
            columns: [
                {data: 'orden'},
                {data: 'imagen'},
                {data: 'es_titulo'},
                {data: 'en_titulo'},
                {data: 'es_titulo_principal'},
                {data: 'en_titulo_principal'},
                {data: 'estado'},
                {data: 'editar'}
            ],
            pageLength: 25,
            responsive: true,
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }

        });
        $(document).on("submit", "#frmEditarSlider", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarSlider"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarSlider").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#slider_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.message);
                }
            });
        });
        $(document).on("submit", "#frmEditarIndexSeccion1", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "<?= URL . $this->idioma ?>/admin/frmEditarIndexSeccion1"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmEditarIndexSeccion1").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        mostrarToastr(data.mensaje);
                    }
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEditarIndexSeccion2", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "<?= URL . $this->idioma ?>/admin/frmEditarIndexSeccion2"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmEditarIndexSeccion2").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        mostrarToastr(data.mensaje);
                    }
                });
            }
            e.handled = true;
        });
    });
</script>