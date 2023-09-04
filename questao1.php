<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 1</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="flat-color-icons:calculator"></span> CALCULADORA</h2>
                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="n1" class="col-sm-2 col-form-label"><strong>Primeiro Número:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control border-primary" id="n1" name="n1" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="n2" class="col-sm-2 col-form-label"><strong>Segundo Número:</strong></label>
                                <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control border-primary" id="n2" name="n2" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="operacao" class="col-sm-2 col-form-label"><strong>Operação:</strong></label>
                                <div class="col-sm-10">
                                    <select class="form-select border-primary" id="operacao" name="operacao">
                                        <option selected>Selecione Uma Operação</option>
                                        <option value="soma">Soma</option>
                                        <option value="subtração">Subtração</option>
                                        <option value="multiplicação">Multiplicação</option>
                                        <option value="divisão">Divisão</option>
                                    </select>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0"><strong>Ordem do Cálculo</strong></legend>
                                <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ordem" id="ordem1" value="1" checked>
                                    <label class="form-check-label" for="ordem1">
                                    Primeiro Número -<b> EM PRIMEIRO</b>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ordem" id="ordem2" value="2">
                                    <label class="form-check-label" for="ordem2">
                                    Segundo Número -<b> EM PRIMEIRO</b>
                                    </label>
                                </div>
                                
                                </div>
                            </fieldset>
                            <div class="d-grid gap-2 d-md-block text-center">
                                <button class="btn btn-success" type="submit" ><span class="iconify" data-icon="tdesign:calculation"></span> Calcular</button>
                                <button class="btn btn-secondary" type="reset" style="color:#fff;"><span class="iconify" data-icon="ant-design:clear-outlined"></span> Limpar</button>
                            </div>

                          
                        </form>

                        
                    </div>
                    <?php
                        if (!empty($_POST)) :

                            $n1 = $_POST['n1'];
                            $n2 = $_POST['n2'];
                            $operacao = $_POST['operacao'];
                            $ordem = $_POST['ordem'];
                            
                            if ($ordem == 2) {
                                # O segundo número em primeiro
                                $aux = $n2;
                                $n2 = $n1;
                                $n1 = $aux;
                            } 

                            if ($operacao == "soma") {
                                $operacao = "&#43;";
                                $resultado = $n1+$n2;
                            } elseif ($operacao == "subtração") {
                                $operacao = "&#8722;";
                                $resultado = $n1-$n2;
                            } elseif ($operacao == "multiplicação") {
                                $operacao = "&#215;";
                                $resultado = $n1 * $n2;
                            } elseif ($operacao == "divisão") {
                                if ($n2 == 0) {
                                    $resultado = '<div class="alert alert-warning" role="alert"><span class="iconify" data-icon="ic:sharp-warning"></span>Nenhum número pode ser dividido por zero!</div>';
                                } else {
                                    $operacao = "&#247;";
                                    $resultado = $n1/$n2;
                                    $resultado = number_format($resultado,2,",",".");
                                }
                            } else {
                                $resultado = '<div class="alert alert-danger" role="alert"><span class="iconify" data-icon="ic:sharp-warning"></span> Informe uma Operação!</div>';
                            }
                            
                       
                    ?>
                    <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                            <h2>O Resultado de <?= $n1 ?> <?= $operacao ?> <?= $n2 ?> é:</h2>
                            <h4><strong><?= $resultado ?></strong></h4>
                            
                        </div>
                    </div>
                    <?php
                         endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>