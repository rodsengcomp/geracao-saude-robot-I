
<!doctype html>
<html lang="en">

<?php

include_once 'Conexao.php';

// Recebe os dados enviados pela submissão
$id = (isset($_GET['id'])) ? $_GET['id'] : '';

// Valida se existe um id e se ele é numérico
if (!empty($id) && is_numeric($id)):
    $conexao = conexao::getInstance();
    $table = 'covid';
    // Captura os dados do cliente solicitado
    $sql = "SELECT * FROM $table WHERE nu_notific = :id";
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':id', $id);
    $stm->execute();
    $nm_not = $stm->fetch(PDO::FETCH_OBJ);
else :
    $_SESSION['msgerro'] = '<div class="alert alert-danger text-center text-uppercase" role="alert">
                <strong>ERRO AO EDITAR: PROTOCOLO : '.$nunotific.' - NÃO ENCONTRADO !!!</strong></div>';
    header("Location: lista");
endif;

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

        <div class="row mt-0">
            <div class="col-sm-1">
                <a class="btn btn-light fw-bold" href="lista" role="button" style="background-color: white"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="col-sm-1 mt-1 ms-0 ps-0">
                <span class="fw-bold" style="font-size: 18px">Notificações</span>
            </div>
        </div>

        <hr style="border-style: solid;border-width: 2px;border-color: #0d6efd; opacity: unset">

        <?php

        ?>

        <div class="card shadow-lg mt-2"> <!-- Início do Card -->

            <div class="card-header text-start fw-bold fs-6" style="background-color: #f5f9ff">
                <div class="text-dark fw-bold fs-6 mt-2 mb-2" style="font-size: 20px;font-family: 'Rawline', sans-serif"> Coronavírus</div>
            </div>

            <div class="col-sm-3 mt-4 ms-3">

                <div class="text-secondary fw-bold fs-6 ms-2 mb-2"> IDENTIFICAÇÃO <i class="fa fa-angle-up"></i></div>

                <div class="col-sm-6 mt-3">
                    <label class="col-form-label-sm fw-bold" for="inputNumero">Número de Notificação</label>
                    <input type="text" data-toggle="tooltip" title="Nome Completo"
                           class="form-control form-control-sm text-start" value="<?=$nm_not->nu_notific?>">
                </div>

                <div class="col-sm-6">
                    <label class="col-form-label-sm fw-bold" for="inputNumero">Nome Completo</label>
                    <input type="text" data-toggle="tooltip" title="Nome Completo"
                           class="form-control form-control-sm text-start" value="<?=$nm_not->nm_nome.' '.$nm_not->nm_sobrenome?>">
                </div>

                <div class="text-dark fw-bold fs-6 ms-2 mb-3 mt-3"> Tem CPF? </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" style="padding: 10px" id="flexRadioDefault1">
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexRadioDefault1">Sim</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" style="padding: 10px" checked>
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexCheckDefaul2">Não</label>
                        </div>
                    </div>
                </div>

                <div class="text-dark fw-bold fs-6 ms-2 mb-3 mt-3"> É profissional de saúde? </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" style="padding: 10px" id="flexRadioDefault1" checked>
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexRadioDefault3">Sim</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" style="padding: 10px">
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexCheckDefaul4">Não</label>
                        </div>
                    </div>
                </div>

                <div class="text-dark fw-bold fs-6 ms-2 mb-3 mt-3"> É profissional de segurança? </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" style="padding: 10px" id="flexRadioDefault1">
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexRadioDefault3">Sim</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" style="padding: 10px" checked>
                            <label class="form-check-label text-secondary ms-3 fw-bold" for="flexCheckDefaul4">Não</label>
                        </div>
                    </div>
                </div>

                <hr class="mb-2">

                <div class="text-secondary fw-bold fs-6 ms-2 mb-2 mt-3"> TESTE COVID19 <i class="fa fa-angle-up"></i></div>

                <div class="row">
                    <div class="col-sm-4 mt-3">
                        <label class="col-form-label-sm fw-bold" for="inputNumero">Data de Exame</label>
                        <input type="text" data-toggle="tooltip" title="Nome Completo"
                               class="form-control form-control-sm text-start" value="07/10/2021">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label-sm fw-bold" for="inputNumero">Tipo de Exame</label>
                        <select id="inputState" class="form-select">
                            <option selected>TESTE</option>
                            <option value="1">IGM</option>
                            <option value="2">IGG</option>
                            <option value="3">IGA</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label-sm fw-bold" for="inputNumero">Resultado do Exame</label>
                        <select id="inputStates" class="form-select">
                            <option selected>POSITIVO</option>
                            <option value="1">NEGATIVO</option>
                            <option value="2">INCONCLUSIVO</option>
                            <option value="3">NDA</option>
                        </select>
                    </div>
                </div>

                <br>
            </div>
        </div>

                <div class="card shadow-lg mt-2"> <!-- Início do Card -->
                    <div class="col-sm-3 mt-4 mb-4 ms-3">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn btn-primary fw-bold" role="button" href="lista">Salvar</a>
                            </div>
                            <div class="col-md-3">
                                <input class="btn btn-light fw-bold text-danger border-secondary" type="submit" value="Cancelar">
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>



    </div>

</main>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/sidebars.js"></script>
</body>
</html>
