<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 8</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="fluent-mdl2:globe-2"></span> Números da Mega Sena</h2>
                        <form action="#" method="POST">
                            
                            <div class="d-grid gap-2 text-center">
                                <button class="btn btn-success" type="submit" name="sortear"><span class="iconify" data-icon="pixelarticons:sort-numeric"></span> Sortear</button>
                            </div>

                          
                        </form>

                        
                    </div>
                    
                    <?php
                        
                        if (!empty($_POST)) :
                            # Algoritmo de sorteio sem números iguais
                            $sorteio = [];
                            $i = 0;
                            while ($i < 6) {
                                $sorteio[$i] = rand(1,60);
                                $igual = 0;
                                for ($j=0; $j<$i; $j++) {
                                    if ($sorteio[$j] == $sorteio[$i] ) {
                                        $igual = 1;
                                    }
                                }
                                if ($igual == 0) {
                                    $i++;
                                }
                            }
                            

                            # Estilizando a apresentação do Resultado
                            sort($sorteio);
                            $resultado = "";
                            for ($i=0; $i<6; $i++) {
                                if (strlen($sorteio[$i]) == 1) {
                                    $sorteio[$i] = substr_replace($sorteio[$i], '0', 0, 0) ;
                                }
                                $resultado = "$resultado, ".$sorteio[$i];
                            }
                            $resultado = substr($resultado, 1);
                     
                    ?>
                     <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                            <h2>As Seis dezenas sorteadas foram:</h2>
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