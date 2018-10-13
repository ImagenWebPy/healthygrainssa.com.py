<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Inicio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin/products/">Productos</a>
            </li>
            <li class="active">
                <strong>Listado</strong>
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
                    <h5>Listado</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-listadoProductos" style="width: 100%">
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
                            <button type="button" class="btn btn-block btn-primary btnAgregarContenido" data-url="modalAgregarItemProducto" data-id="<?= $this->id_producto; ?>" data-pagina="itemProductos">Agregar Item Producto</button>
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
        $('.dataTables-listadoProductos').DataTable({
            ajax: '<?= URL . $this->idioma; ?>/admin/listadoDTItemProductos',
            ajax: {
                'type': 'POST',
                'url': '<?= URL . $this->idioma; ?>/admin/listadoDTItemProductos',
                'data': {
                    id_producto: <?= $this->id_producto; ?>,
                },
            },
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
        $(document).on("submit", "#frmEditarProductoItem", function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarProductoItem"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarProductoItem").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#itemProductos_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                    mostrarToastr(data.message);
                }
            });
        });
        $(document).on("submit", "#frmAgregarItemProducto", function (e) {
            console.log('holaaa aaa');
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "<?= URL . $this->idioma ?>/admin/frmAgregarItemProducto"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data)
                    {
                        if (data.type == 'success') {
                            var table = $(".dataTables-listadoProductos").DataTable();
                            table.row.add({
                                "orden": data.orden,
                                "imagen": data.imagen,
                                "es_nombre": data.es_nombre,
                                "en_nombre": data.en_nombre,
                                "estado": data.estado,
                                "editar": data.editar
                            }).node().id = 'itemProductos_' + data.id;
                            table.draw();
                            $(".genericModal").modal("toggle");
                            mostrarToastr(data.mensaje);
                        }

                    }
                });
            }
            e.handled = true;
        });
    });
</script>