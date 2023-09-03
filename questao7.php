<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Questão 7</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border border-primary rounded-4 p-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5"><span class="iconify" data-icon="bi:table"></span> Gerador de Tabelas</h2>
                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="linhas" class="col-sm-2 col-form-label"><strong>Número de Linhas:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control border-primary" id="linhas" name="linhas" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colunas" class="col-sm-2 col-form-label"><strong>Número de Colunas:</strong></strong></label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control border-primary" id="colunas" name="colunas" required>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 text-center">
                                <button class="btn btn-success" type="submit" ><span class="iconify" data-icon="majesticons:table-plus"></span> Gerar a Tabela</button>
                            </div>

                          
                        </form>
   
                    </div>
                       
                    <?php
                        
                        if (!empty($_POST)) :
                    
                            $linhas = $_POST['linhas'];
                            $colunas = $_POST['colunas'];
         
                    ?>
                    <div class="card border border-success rounded-4 mt-2 text-center">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered border-success">
                                    <thead>
                    <?php

                        for ($i=1; $i <= $colunas; $i++) {
                            echo "<th class='table-dark'>Coluna $i</th>";
                        }
                    ?>
                                    </thead>
                                    <tbody>
                    <?php
                        for ($i=1; $i<= $linhas; $i++) {
                            echo "<tr>";
                            for ($celula=1; $celula<= $colunas; $celula++) {
                                echo "<td>Célula $celula da Linha $i</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                                    </tbody>
                                </table>
                            </div>
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