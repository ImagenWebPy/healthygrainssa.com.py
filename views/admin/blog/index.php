<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blog</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <a>Blog</A>
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
                    <h5>Imagen Cabecera</h5>
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
                        -Formato: JPG,PNG<br>
                        -Dimensión Recomendada: 1400 x 788px<br>
                        -Tamaño: 2MB<br>
                        <p><strong>Obs.: Esta imagen solamente se usura en el listado del blog y en caso de que no se suba una para un artículo.</strong></p>
                    </div>
                    <div class="html5fileupload fileImagenBlogHeaderListado" data-max-filesize="2048000" data-url="<?= URL . $this->idioma; ?>/admin/uploadImgBlogHeaderListado" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                        <input type="file" name="file_archivo" />
                    </div>
                    <script>
                        $(".html5fileupload.fileImagenBlogHeaderListado").html5fileupload({
                            onAfterStartSuccess: function (response) {
                                $("#imgImagenBlogHeaderListado").html(response.content);
                            }
                        });
                    </script>
                    <div class="row">
                        <div class="col-md-12" id="imgImagenBlogHeaderListado">
                            <img class="img-responsive" src="<?= URL ?>public/images/header/<?= $this->datosBlog['imagen_header']; ?>">';
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
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
                        <form id="frmBlogTextos" method="POST">
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1BlogTextos"> ES Contenido</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2BlogTextos">EN Contenido</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1BlogTextos" class="tab-pane active">
                                            <div class="panel-body">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="es_titulo" class="form-control" placeholder="ES header Text" value="<?= utf8_encode($this->datosBlog['es_titulo']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="es_frase" class="form-control" placeholder="ES footer Text" value="<?= utf8_encode($this->datosBlog['es_frase']) ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2BlogTextos" class="tab-pane">
                                            <div class="panel-body">
                                                <<div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input type="text" name="en_titulo" class="form-control" placeholder="ES header Text" value="<?= utf8_encode($this->datosBlog['en_titulo']) ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Frase</label>
                                                        <input type="text" name="en_frase" class="form-control" placeholder="ES footer Text" value="<?= utf8_encode($this->datosBlog['en_frase']) ?>">
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
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listado de publicaciones</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-blog" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ES Titulo</th>
                                    <th>EN Titulo</th>
                                    <th>Imagen/Video</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>ES Titulo</th>
                                    <th>EN Titulo</th>
                                    <th>Imagen/Video</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary btnAgregarContenido" data-url="modalAgregarBlogPost">Agregar Entrada</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('.dataTables-blog').DataTable({
            "processing": true,
            "serverSide": true,
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTBlog',
            type: "post",
            pageLength: 25,
            responsive: true,
            searching: false,
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
        $(document).on("submit", "#frmEditarBlogPost", function (e) {
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarBlogPost"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarBlogPost").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data.type == 'success') {
                        $("#blog_" + data.id).html(data.content);
                        $(".genericModal").modal("toggle");
                        $(".summernote").summernote({
                            height: 300, // set editor height
                            minHeight: null, // set minimum height of editor
                            maxHeight: null // set maximum height of editor
                        });
                        $(".i-checks").iCheck({
                            checkboxClass: "icheckbox_square-green",
                            radioClass: "iradio_square-green",
                        });
                        $("#data_1 .input-group.date").datepicker({
                            todayBtn: "linked",
                            keyboardNavigation: false,
                            forceParse: false,
                            calendarWeeks: true,
                            autoclose: true,
                            format: "dd/mm/yyyy",
                        });
                        mostrarToastr(data.mensaje)
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("submit", "#frmBlogTextos", function (e) {
            var url = "<?= URL . $this->idioma; ?>/admin/frmBlogTextos"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                data: $("#frmBlogTextos").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data.type == 'success') {
                        mostrarToastr(data.content)
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>