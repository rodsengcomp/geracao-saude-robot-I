
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

            <span class="fs-5 fw-bold pt-2 ps-4">Formulários</span>

        <hr style="border-style: solid;border-width: 2px;border-color: #0d6efd; opacity: unset">

        <?php

        ?>

        <div class="card shadow-lg mt-2"> <!-- Início do Card -->
            <div class="card-header text-start fw-bold fs-6 bg-white">
                <div class="text-dark fw-bold fs-5" style="font-size: 20px"><i class="fal fa-clipboard-check me-1 text-primary"></i> Notificações</div>
            </div>

            <div class="col-sm-3 mt-4 ms-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fal fa-search me-1 text-secondary"></i></span>
                    <input type="text" class="form-control col-3" disabled placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1" style="background-color: #e9ecef">
                </div>
            </div>

            <div class="card-body">
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
                        <td class="text-end">
                            <a href="#" tabindex="-1" data-toggle="tooltip" title="Incluir Notificação" aria-disabled="true" role="button" class="btn btn-outline-primary btn-sm rounded-circle disabled"><i class="fa fa-plus"></i></a>
                            <a href="lista" tabindex="-1" data-toggle="tooltip" title="Visualizar Notificação" aria-disabled="true" role="button" class="btn btn-outline-primary btn-sm rounded-circle"><i class="fa fa-eye"></i></a>
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
