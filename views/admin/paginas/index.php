<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= URL . $this->idioma; ?>/admin">Inicio</a>
            </li>
            <li class="active">
                <a>Páginas</A>
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
                        <table class="table table-striped table-bordered table-hover dataTables-paginas" >
                            <thead>
                                <tr>
                                    <th>ES Nombre</th>
                                    <th>EN Nombre</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->listadoPaginas as $item):
                                    $id = $item['id'];
                                    $btnEditar = '<a class="editDTContenido pointer btn-xs" data-id="' . $id . '" data-url="modalEditarPaginas"><i class="fa fa-edit"></i> Editar </a>';
                                    ?>
                                    <tr id="pagina_<?= $id; ?>">
                                        <td><?= utf8_encode($item['es_texto']); ?></td>
                                        <td><?= utf8_encode($item['en_texto']); ?></td>
                                        <td><?= $btnEditar; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ES Nombre</th>
                                    <th>EN Nombre</th>
                                    <th>Accion</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on("submit", "#frmEditarPagina", function (e) {
            var url = "<?= URL . $this->idioma ?>/admin/frmEditarPagina"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarPagina").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data.type == 'success') {
                        $('#pagina_' + data.id).html(data.content);
                        $(".genericModal").modal("toggle");
                        toastr.success(data.mensaje);
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>