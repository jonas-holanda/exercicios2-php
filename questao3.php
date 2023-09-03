<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 3</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="flat-color-icons:calculator"></span> Tabuada de Multiplicação</h2>
                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="n1" class="col-sm-2 col-form-label"><strong>Informe um Número:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control border-primary" id="n1" name="n1" required>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 text-center">
                                <button class="btn btn-success" type="submit" ><span class="iconify" data-icon="tdesign:calculation"></span> Mostrar Tabuada de 1 até 10</button>
                            </div>

                          
                        </form>

                        
                    </div>
                    <?php
                        
                        if (!empty($_POST)) :
                            $n1 = $_POST['n1'];

                    ?>
                    
                    <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                            <h2>A tabuada de 1 a 10 do número <?= $n1 ?>:</h2>
                    <?php
                            if(!empty($n1)) {
                                for ($i=1; $i < 11; $i++):
                    ?>
                                <h4><strong><?= $i ?> x <?= $n1 ?> = <?= $i * $n1 ?></strong></h4>
                    <?php
                                endfor;
                               
                            } else {
                    ?>            
                                <div class="alert alert-danger" role="alert"><span class="iconify" data-icon="ic:sharp-warning"></span> Informe um Número!</div>
                    <?php
                            }
 
                    ?>
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