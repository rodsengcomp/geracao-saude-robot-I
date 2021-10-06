
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
                        /*Configurações da Lista de Memorandos*/
                        $('#list-covid').DataTable({
                            responsive: {details:
                                    {display: $.fn.dataTable.Responsive.display.modal(
                                            {header: function (row)
                                                {var data = row.data();
                                                    return 'DETALHES DO ' +data[3]+ '&nbspNº&nbsp:&nbsp'  + data[0];}
                                            }),
                                        renderer: function ( api, rowIdx, columns ) {
                                            var data = $.map( columns, function ( col, i ) {
                                                return '<tr>'+'<td>'+col.title+':'+'</td> '+'<td>'+col.data+'</td>'+'</tr>';} ).join('');
                                            return $('<table/>').append( data ); } } },
                            <?=$button->language()?>,
                            dom: "lBfrtip",
                            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]], "aaSorting": [ 0, 'desc' ],
                            buttons: [ {extend:'excel',title:'$system - $nameform - $get_year',header: '$system - $nameform - $get_year',filename:'$system - $nameform - $get_year',className: 'btn btn-outline-success',text:'$i_excel' },
                                {extend: 'pdfHtml5',exportOptions: {columns: ':visible'},title:'$system - $nameform - $get_year',header: '$system - $nameform - $get_year',filename:'$system - $nameform - $get_year',orientation: 'landscape',pageSize: 'LEGAL',className: 'btn btn-outline-danger',text:'$i_pdf'},
                                {extend:'print', exportOptions: {columns: ':visible'},title:'$system - $nameform - $get_year',header: '$system - $nameform - $get_year',filename:'$system - $nameform - $get_year',orientation:'landscape',className: 'btn btn-outline-secondary',text:'$i_print'},
                                {extend:'colvis',titleAttr: 'Select Colunas',className: 'btn btn-outline-primary',text:'$i_list'} ]
                        });
                    });
                </script>

                <table id="list-covid" class="table table-striped table-bordered flex-nowrap border-<?=$btncolorlistsv2?> text-center" style="width:100%">
                    <thead class="table-<?=$btncolorlistsv2?>">
                    <tr class="bg-light text-<?php if($btncolorlistsv2 === 'dark'): echo 'white border-white'; else: echo $btncolorlistsv2.' border-'.$btncolorlistsv2; endif;?>">
                        <th class="text-center">ENTRADA</th>
                        <th class="text-center">SE</th>
                        <th class="text-center">PROTOCOLO SV2</th>
                        <th class="text-center">SINAN</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

                <table class="table mb-5">
                    <thead>
                    <tr class="text-secondary">
                        <th scope="col">Formulário</th>
                        <th scope="col">Descrição</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-primary fw-bold">Coronavírus</td>
                        <td>COVID-19</td>
                        <td class="text-end"><a href="#" tabindex="-1" data-toggle="tooltip" title="Incluir Notificação" aria-disabled="true" role="button" class="btn btn-outline-primary btn-sm rounded-circle disabled"><i class="fa fa-plus"></i></a>
                            <a href="" tabindex="-1" data-toggle="tooltip" title="Visualizar Notificação" aria-disabled="true" role="button" class="btn btn-outline-primary btn-sm rounded-circle"><i class="fa fa-eye"></i></a>
                        </td>
                        <td class="text-end"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
</main>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/sidebars.js"></script>
</body>
</html>
