<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Contacto</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <a>Contacto</A>
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
                        <form role="form" id="frmEditarContacto_header" method="POST">
                            <input type="hidden" name="id" value="<?= utf8_encode($this->datosContactoHeader['id']); ?>">
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
                                                        <input type="text" name="es_titulo" class="form-control" value="<?= utf8_encode($this->datosContactoHeader['es_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="es_frase" class="form-control" value="<?= utf8_encode($this->datosContactoHeader['es_frase']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="seccionEncabezado-en" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" value="<?= utf8_encode($this->datosContactoHeader['en_titulo']); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="en_frase" class="form-control" value="<?= utf8_encode($this->datosContactoHeader['en_frase']); ?>">
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
                                    <div class="html5fileupload fileImagenHeaderContacto" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgHeaderContacto" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                                        <input type="file" name="file_archivo" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.fileImagenHeaderContacto").html5fileupload({
                                            onAfterStartSuccess: function (response) {
                                                $("#imgImagenContactoHeader").html(response.content);
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12" id="imgImagenContactoHeader">
                                            <img class="img-responsive" src="<?= URL ?>public/images/header/<?= $this->datosContactoHeader['imagen_header']; ?>">';
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
                    <h5>Listado de Contactos desde el sitio web</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-contacto" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Fecha Creado</th>
                                    <th>Visto</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Fecha Creado</th>
                                    <th>Visto</th>
                                    <th>Accion</th> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Textos de la Página</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <form id="frmContenidoContacto" method="POST">
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tabContacto-1"> ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tabContacto-2">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tabContacto-1" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="es_titulo" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_titulo']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Nombre</label>
                                                        <input type="text" name="es_input_nombre" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_input_nombre']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Email</label>
                                                        <input type="text" name="es_input_email" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_input_email']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Asunto</label>
                                                        <input type="text" name="es_input_asunto" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_input_asunto']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Mensaje</label>
                                                        <input type="text" name="es_input_mensaje" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_input_mensaje']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Botón</label>
                                                        <input type="text" name="es_boton" class="form-control"  value="<?= utf8_encode($this->datosContacto['es_boton']) ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tabContacto-2" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_titulo']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Nombre</label>
                                                        <input type="text" name="en_input_nombre" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_input_nombre']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Email</label>
                                                        <input type="text" name="en_input_email" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_input_email']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Asunto</label>
                                                        <input type="text" name="en_input_asunto" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_input_asunto']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Mensaje</label>
                                                        <input type="text" name="en_input_mensaje" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_input_mensaje']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Formulario Botón</label>
                                                        <input type="text" name="en_boton" class="form-control"  value="<?= utf8_encode($this->datosContacto['en_boton']) ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Editar Contenido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.dataTables-contacto').DataTable({
            "processing": true,
            "serverSide": true,
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTContacto',
            type: "post",
            pageLength: 25,
            responsive: true,
            "order": [[0, "desc"]],
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }

        });
        $(document).on("click", ".btnVerContacto", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/modalVerContacto",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.content);
                    $(".genericModal").modal("toggle");
                    $('#contacto_' + id).html(data.row);
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmContenidoContacto", function (e) {
            var url = "<?= URL . $this->idioma; ?>/admin/frmContenidoContacto"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                data: $("#frmContenidoContacto").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data.type == 'success') {
                        mostrarToastr(data.content)
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("submit", "#frmEditarContacto_header", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarContacto_header"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarContacto_header").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    mostrarToastr(data.content);
                }
            });
        });
    });
</script>