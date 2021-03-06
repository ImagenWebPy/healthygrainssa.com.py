<div class="footer">
    <div class="pull-right">
        <!--Desarrollo <a href="https://imagenwebhq.com" target="_blank"><img class="logoIweb" src="<?= URL; ?>/public/admin/img/logo-iweb.png" alt="Imagen Web"></a>-->
    </div>
</div>
</div>
</div>

</div>
</div>
<!-- Modal -->
<div class="modal fade genericModal bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?= URL; ?>public/admin/js/bootstrap.min.js"></script>
<script src="<?= URL; ?>public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= URL; ?>public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= URL; ?>public/admin/js/inspinia.js"></script>
<script src="<?= URL; ?>public/admin/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?= URL; ?>public/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<?php
#cargamos los js de las vistas
if (isset($this->external_js)) {
    foreach ($this->external_js as $external) {
        echo '<script async defer src="' . $external . '"></script>';
    }
}
if (isset($this->public_js)) {
    foreach ($this->public_js as $public_js) {
        echo '<script type="text/javascript" src="' . URL . 'public/admin/' . $public_js . '"></script>';
    }
}
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
    }
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("click", ".editDTContenido", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var url = $(this).attr("data-url");
                var pagina = $(this).attr("data-pagina");
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/" + url,
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.content);
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
                    switch (pagina) {
                        case 'blog':
                            $(".html5fileupload.fileBlog").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgBlog" + response.id).html(response.content);
                                }
                            });
                            $(".html5fileupload.fileTestimonio").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgBlogHeader" + response.id).html(response.content);
                                }
                            });
                            break;
                        case 'slider':
                            $(".html5fileupload.fileSliderHealthy").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgSlider" + response.id).html(response.content);
                                }
                            });
                            break;
                        case 'itemProductos':
                            $(".html5fileupload.fileItemProducto").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgSlider" + response.id).html(response.content);
                                    $("#productos_" + response.id).html(response.row);
                                }
                            });

                            break;
                        case 'productos':
                            $(".html5fileupload.fileProducto").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgSlider" + response.id).html(response.content);
                                    $("#productos_" + response.id).html(response.row);
                                }
                            });
                            $(".html5fileupload.fileCabeceraProducto").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgCabeceraProducto" + response.id).html(response.content);
                                }
                            });
                            break;
                        case 'certificaciones':
                            $(".html5fileupload.fileCertificacionesEditar").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgCertificaciones" + response.id).html(response.content);
                                    $("#certificaciones_" + response.id).html(response.row);
                                }
                            });
                            break;
                        case 'servicios':
                            $(".html5fileupload.fileImagenServiciosHeader").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imgImagenCertificacionesHeader").html(response.content);
                                }
                            });
                            $(".html5fileupload.fileImagenesServivios").html5fileupload({
                                data: {id: data.id},
                                onAfterStartSuccess: function (response) {
                                    $("#imagenesServicios").append(response.content);
                                }
                            });
                            break;
                    }
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnCambiarEstado", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var tabla = $(this).attr("data-tabla");
                var campo = $(this).attr("data-campo");
                var estado = $(this).attr("data-estado");
                var seccion = $(this).attr("data-seccion");
                var rowid = $(this).attr("data-rowid");
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/cambiarEstado",
                    type: "POST",
                    data: {id: id, tabla: tabla, campo: campo, estado: estado, seccion: seccion},
                    dataType: "json"
                }).done(function (data) {
                    $('#' + rowid + id).html(data.content);
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnAgregarContenido", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var url = $(this).attr("data-url");
                var pagina = $(this).attr("data-pagina");
                console.log(pagina);
                var id = 0;
                if (url == 'modalAgregarItemProducto') {
                    id = $(this).attr("data-id");
                }
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/" + url,
                    type: "POST",
                    dataType: "json",
                    data: {id: id},
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.content);
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
                    switch (pagina) {
                        case 'itemProductos':
                            $(".html5fileupload.fileAgregarItemProducto").html5fileupload();
                            break;
                        case 'productos':
                            $(".html5fileupload.fileAgregarProducto").html5fileupload();
                            break;
                        case 'servicios':
                            $(".html5fileupload.fileImgCabecera").html5fileupload();
                            $(".html5fileupload.files").html5fileupload();
                            break;
                    }
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".deletDTContenido", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var tabla = $(this).attr("data-tabla");
                var rowid = $(this).attr("data-rowid");
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/modalEliminarContenido",
                    type: "POST",
                    data: {id: id, tabla: tabla, rowid: rowid},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-danger");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.content);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnEliminarContenido", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var tabla = $(this).attr("data-tabla");
                var rowid = $(this).attr("data-rowid");
                $.ajax({
                    url: "<?= URL . $this->idioma; ?>/admin/eliminarContenido",
                    type: "POST",
                    data: {id: id, tabla: tabla},
                    dataType: "json"
                }).done(function (data) {
                    $('#' + rowid + id).remove();
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.mensaje);
                });
            }
            e.handled = true;
        });
        $(document).on('click', '.btnMostrarImg', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '<?= URL . $this->idioma; ?>/admin/btnMostrarImg',
                    type: 'POST',
                    data: {id: id},
                    dataType: 'json'
                }).done(function (data) {
                    $('#mostrarImg' + data.id).html(data.content);
                });
            }
            e.handled = true;
        });
        $(document).on('click', '.btnEliminarImg', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '<?= URL . $this->idioma; ?>/admin/btnEliminarImg',
                    type: 'POST',
                    data: {id: id},
                    dataType: 'json'
                }).done(function (data) {
                    $('#imagenGaleria' + data.id).remove();
                });
            }
            e.handled = true;
        });
    });
</script>
</body>
</html>
