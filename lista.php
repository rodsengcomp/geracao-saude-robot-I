
<!doctype html>
<html lang="en">

<?php

?>

<head>
    <?php require(__DIR__ . '/head.php'); ?>
</head>

<body>

<main>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">

        <?php require (__DIR__ . '/sidebar.php'); ?>

    </div>

    <div class="b-example-divider" style="width: 0.05rem"></div>

    <div class="d-flex flex-column align-items-stretch flex-shrink-0 p-3 bg-white" style="width: 1500px;">

        <span class="fw-bold pt-2 ps-4" style="font-size: 18px;font-family: 'Rawline', sans-serif">Notificações</span>

        <hr style="border-style: solid;border-width: 2px;border-color: #0d6efd; opacity: unset">

        <?php

        ?>

        <div class="text-dark fw-bold fs-5" style="font-size: 20px"> Coronavírus</div>
        <div class="fw-bold" style="font-size: 13px;color: #769CBD;font-family: 'Rawline', sans-serif"> Notificações / Formulário / Coronavírus</div>

        <div class="card shadow-lg mt-2"> <!-- Início do Card -->

            <div class="ms-4 mt-4" style="font-size: .8rem;font-family: 'Rawline', sans-serif;color: #EB445A; letter-spacing: .03rem"> *A pesquisa por nome deve conter no mínimo 10 caracteres.</div>

            <div class="card-header text-start fw-bold fs-6 bg-white">
                <div class="text-dark fw-bold fs-5" style="font-size: 20px;font-family: 'Rawline', sans-serif"> Coronavírus</div>
            </div>

            <div class="col-sm-3 mt-4 ms-3">
                <div class="input-group mb-3 ms-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fal fa-search me-1 text-secondary"></i></span>
                    <input type="text" class="form-control col-3" placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1" style="background-color: #e9ecef">
                </div>
            </div>

            <div class="card-body">

                <script type="text/javascript">

                    $(document).ready(function() {
                        $('#covid').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": "server/server_processing.php",
                            "language": {
                                "sEmptyTable": "Nenhum registro encontrado",
                                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros","sInfoEmpty": "Mostrando 0 até 0 de 0 registros","sInfoFiltered": "(Filtrados de _MAX_ registros)",
                                "sInfoThousands": ".","sLengthMenu": "_MENU_ Resultados por Página","sLoadingRecords": "Carregando...","sProcessing": "Processando...","sZeroRecords": "Nenhum registro encontrado",
                                "sSearch": "Pesquisar","oPaginate": {"sNext": "Próximo","sPrevious": "Anterior","sFirst": "Primeiro","sLast": "Último"},
                                "oAria": {"sSortAscending": "Ordenar colunas de forma ascendente","sPrevious": "Ordenar colunas de forma descendente"} },
                            "aaSorting": [3, 'asc'], /* 'desc' Carregar table decrescente e asc crescente*/
                            "lengthMenu": [[5, 10, 20, 30, 40, 50, -1], [5, 10, 20 ,30, 40, 50, "Todos"]],
                            "aoColumnDefs": [
                                {
                                    "aTargets": [3], // o numero 6 é o nº da coluna
                                    "mRender": function (data, type, full) { //aqui é uma funçãozinha para pegar os ids
                                    return '<a href="edicao?id=' + full[0] + '" role="button" class="btn btn-outline-warning btn-sm rounded-circle text-center"><i class="fa fa-pencil"></i></a>';
                                    }
                                }
                            ]
                        });
                    });
                </script>

                <table id="covid" class="table table-striped table-bordered flex-nowrap border-secondary" style="width:100%">
                    <thead>
                    <tr>
                        <th>Numero Notificação</th>
                        <th>Nome</th>
                        <th>Sobremone</th>
                        <th>Editar</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
</main>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/sidebars.js"></script>
</body>
</html>
