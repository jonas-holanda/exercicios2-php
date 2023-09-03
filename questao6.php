<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 6</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="fluent:text-word-count-24-filled"></span> Contagem Regressiva</h2>
                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="n1" class="col-sm-2 col-form-label"><strong>Informe um Número:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" min="1" class="form-control border-primary" id="n1" name="n1" required>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 text-center">
                                <button class="btn btn-success" type="submit" ><span class="iconify" data-icon="mdi:counter"></span> Iniciar Contagem</button>
                            </div>

                          
                        </form>

                        
                    </div>
                    
                    <?php
                        
                        if (!empty($_POST)) :
                    ?>

                    <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                    <?php        
                            $n1 = $_POST['n1'];
                            $controle = $n1;
                            while ($n1 > 0) {
                                if ($controle > 10 && $controle < 20) {
                                    echo str_repeat("⤡ <strong>$n1</strong> ⤢", $n1/2+1)."<br>";
                                }elseif($controle >19) {
                                    echo "<strong>".str_pad($n1, $n1, "_", STR_PAD_BOTH)."</strong><br>";
                                }else {
                                    echo str_repeat("⤡ <strong>$n1</strong> ⤢", $n1)."<br>";
                                    
                                }
                                $n1--;
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