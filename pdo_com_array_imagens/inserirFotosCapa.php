<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minhas Viagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2>Cadastro de Fotos</h2>

                 <form action="inserirFotosDoPasseio.php" method="post" enctype="multipart/form-data">
<?php
require "./conexao.php";
$idPasseio = $_GET['id'];
$consV = $pdo->prepare("SELECT * FROM capa WHERE id= ?");
$consV->bindParam(1,$idPasseio, PDO::PARAM_INT);
$consV->execute();
$selecionaViagem = $consV->fetch(PDO::FETCH_ASSOC);
?>
<h2><?=$selecionaViagem['titulo'];?></h2>
                  <div class="mb-3">
                    <label for="capa" class="form-label">Fotos</label>
                    <input type="hidden" name="id" value="<?= $idPasseio;?>" />
                    <input class="form-control" type="file" id="imagens" name="imagens[]" multiple>
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
     
                 </form>   
                </div>
              
              </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>