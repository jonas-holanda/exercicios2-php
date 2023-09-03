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
                     
                        $resultado = "";
                        $arrayRand = [];      
                        for ($i=1; $i < 7; $i++) { 
                            $random = random_int(1, 60);
                            # Não pode se repetir, tenho que ajeitar isso
                            echo "$random -".strlen($random)."<br>";
                            if (strlen($random) == 1) {
                                $random = substr_replace($random, '0', 0, 0) ;
                                echo $random."<hr>";
                            }

                            array_push($arrayRand, $random);
                            
                            $resultado = "$resultado, ".$random;
                        }
                        $arrayUnico = $arrayRand;
                        echo "<pre>";
                        print_r($arrayRand);
                        echo "</pre>";

                        echo "<pre>";
                        print_r($arrayUnico);
                        echo "</pre>";
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