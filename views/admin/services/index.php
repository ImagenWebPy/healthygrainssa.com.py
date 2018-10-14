<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Inicio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <strong>Servicios</strong>
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
                    <h5>Servicios</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-servicios" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Servicio ES</th>
                                    <th>Servicio EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Orden</th>
                                    <th>Servicio ES</th>
                                    <th>Servicio EN</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarServicios" data-pagina="servicios">Agregar Servicio</button>
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
        $('.dataTables-servicios').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTServicios',
            columns: [
                {data: 'orden'},
                {data: 'es_servicio'},
                {data: 'en_servicio'},
                {data: 'estado'},
                {data: 'editar'}
            ],
            pageLength: 25,
            responsive: true,
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("click", ".mostrarListadoServicios", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var id_producto = $(this).attr('data-id');
            var url = "<?= URL . $this->idioma ?>/admin/listadoServicios"; // the script where you handle the form input.
            $.redirect(url, {'id': id_producto});
        });
        $(document).on("submit", "#frmEditarServicios", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarServicios"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarServicios").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#servicios_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.mensaje);
                }
            });
        });
        $(document).on("submit", "#frmEditarServiciosHeader", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarServiciosHeader"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarServiciosHeader").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    mostrarToastr(data.mensaje);
                }
            });
        });
    });
</script>