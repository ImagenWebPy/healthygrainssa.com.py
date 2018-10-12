<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Inicio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li><a>Contenido</a></li>
            <li class="active">
                <strong>About Us</strong>
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
                        <form role="form" id="frmEditarAboutus_header" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosHeaderNosotros['id']); ?>">
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
                                                        <input type="text" name="es_titulo" class="form-control" value="<?= utf8_encode($this->datosHeaderNosotros['es_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="es_frase" class="form-control" value="<?= utf8_encode($this->datosHeaderNosotros['es_frase']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="seccionEncabezado-en" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="<?= utf8_encode($this->datosHeaderNosotros['en_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="en_frase" class="form-control" value="<?= utf8_encode($this->datosHeaderNosotros['en_frase']); ?>">
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
                                    <div class="html5fileupload fileImagenSeccion2" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgHeaderNosotros" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenSeccion2").html5fileupload({
                                            onAfterStartSuccess: function (response) {
                                                $("#imgImagenNosotrosHeader").html(response.content);
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12" id="imgImagenNosotrosHeader">
                                            <img class="img-responsive" src="<?= URL ?>public/images/header/<?= $this->datosHeaderNosotros['imagen_header']; ?>">';
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
                    <h5>Contenido</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <form role="form" id="frmEditarAboutus_seccion1" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosContenidoNosotros['id']); ?>">
                            <div class="col-md-6">
                                <div class="i-checks"><label> <input type="checkbox" name="estado" value="1" <?= ($this->datosContenidoNosotros['estado'] == 1) ? 'checked' : '' ?>> <i></i> Mostrar </label></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1Contenido">ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2Contenido">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1Contenido" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ES Contenido</label>
                                                        <textarea style="height:80px;" name="es_contenido" class="summernote"><?= utf8_encode($this->datosContenidoNosotros['es_contenido']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2Contenido" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>EN Contenido</label>
                                                        <textarea style="height:80px;" name="en_contenido" class="summernote"><?= utf8_encode($this->datosContenidoNosotros['en_contenido']); ?></textarea>
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
                    <h5>Frases</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered table-hover dataTables-fraseNosotros" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Es Frase</th>
                                        <th>En Frase</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Es Frase</th>
                                        <th>En Frase</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarItemFraseNosotros">Agregar Item</button>
                            </div>
                        </div>
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
                                        -Dimensión Recomendada: 555 x 450px<br>
                                        -Tamaño: 2MB<br>
                                        <strong>Obs.: Las imagenes serán redimensionadas automaticamente a la dimensión especificada y se reducirá la calidad de la misma.</strong>
                                    </div>
                                    <div class="html5fileupload fileImagenFraseNosotros" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgFraseNostros" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenFraseNosotros").html5fileupload({
                                            onAfterStartSuccess: function (response) {
                                                $("#imgImagenFraseNosotros").html(response.content);
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12" id="imgImagenFraseNosotros">
                                            <img class="img-responsive" src="<?= URL ?>public/images/header/<?= $this->datosHeaderNosotros['imagen_frase']; ?>">';
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /COL-LG-12 -->
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Contenido Pie</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered table-hover dataTables-NosotrosSeccion3" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Es Titulo</th>
                                        <th>En Tiulo</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Es Titulo</th>
                                        <th>En Tiulo</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarItemNosotrosSeccion3">Agregar Item</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /COL-LG-12 -->

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
        $(document).on("submit", "#frmEditarAboutus_header", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarAboutus_header"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarAboutus_header").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    mostrarToastr(data.content);
                }
            });
        });

        $(document).on("submit", "#frmEditarAboutus_seccion1", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarAboutus_seccion1"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarAboutus_seccion1").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    mostrarToastr(data.content);
                }
            });
        });

        $(document).on("submit", "#frmEditarFraseNosotros", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarFraseNosotros"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarFraseNosotros").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#fraseNosotros_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.mensaje);
                }
            });
        });
        $(document).on("submit", "#frmEditarNosotrosSeccion3", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarNosotrosSeccion3"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarNosotrosSeccion3").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#nosotrosSeccion3_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.mensaje);
                }
            });
        });
        $('.dataTables-fraseNosotros').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTFraseNosotros',
            columns: [
                {data: 'orden'},
                {data: 'es_frase'},
                {data: 'en_frase'},
                {data: 'estado'},
                {data: 'editar'}
            ],
            pageLength: 25,
            responsive: true,
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $('.dataTables-NosotrosSeccion3').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTNosotrosSeccion3',
            columns: [
                {data: 'orden'},
                {data: 'es_titulo'},
                {data: 'en_titulo'},
                {data: 'estado'},
                {data: 'editar'}
            ],
            pageLength: 25,
            responsive: true,
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("submit", "#frmAgregarFraseNosotros", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "<?= URL . $this->idioma ?>/admin/frmAgregarFraseNosotros"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: $("#frmAgregarFraseNosotros").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        $(".dataTables-fraseNosotros > tbody").append(data.content);
                        $(".genericModal").modal("toggle");
                        mostrarToastr(data.mensaje);
                    }
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmAgregarNosotrosSeccion3", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "<?= URL . $this->idioma ?>/admin/frmAgregarNosotrosSeccion3"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: $("#frmAgregarNosotrosSeccion3").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        $(".dataTables-NosotrosSeccion3 > tbody").append(data.content);
                        $(".genericModal").modal("toggle");
                        mostrarToastr(data.mensaje);
                    }
                });
            }
            e.handled = true;
        });
    });
</script>