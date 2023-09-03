<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 4</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="fluent:text-word-count-24-filled"></span> Soma de Números Primos</h2>
                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="n1" class="col-sm-2 col-form-label"><strong>Informe um Número:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control border-primary" id="n1" name="n1" required>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 text-center">
                                <button class="btn btn-success" type="submit" ><span class="iconify" data-icon="mdi:counter"></span> Mostrar soma de números primos</button>
                            </div>

                          
                        </form>

                        
                    </div>
                    <?php
                        
                        if (!empty($_POST)) :
                            $n1 = $_POST['n1'];
                            $i = 2;
                            $resultado = null;
                            $numerosPrimos = "";
                            if(!empty($n1)) {
                             
                                if ($n1 < $i) {
                                    $resultado = '<div class="alert alert-warning" role="alert"><strong><span class="iconify" data-icon="ic:sharp-warning"></span> Informe um número maior que 1!</strong></div>';
                                } else {
                                    while ($i <= $n1) {
                                       $j = 1;
                                       $cont = 0;
                                       while($j <= $i) {
                                            if($i % $j == 0) {
                                                $cont++;
                                            }
                                            $j++;
                                       }
                                       if ($cont == 2) {
                                            $resultado += $i;
                                            $numerosPrimos = "$numerosPrimos, ".$i;
                                       }
                                       $i++;
                                    }
                                    $numerosPrimos = substr($numerosPrimos, 1);
                                    $numerosPrimos = "<h5><strong>E os números primos são: $numerosPrimos </strong></h5>";

                                    $resultado = "<h4>A soma de todos os números primos menores ou iguais a $n1 é: $resultado </h4><br>";
                                }
                                
                                
                            } else {
                                $resultado = '<div class="alert alert-danger" role="alert"><strong><span class="iconify" data-icon="ic:sharp-warning"></span> Informe um Número!</strong></div>';
                            }
 
                    ?>
                    <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                            <?= $resultado ?>
                            <?= $numerosPrimos ?>
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