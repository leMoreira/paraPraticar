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
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-sm-12 d-flex justify-content-around">
                  
   <?php             
        include("./conexao.php");

        $selectCapa = $pdo->prepare("SELECT * FROM capa");
        $selectCapa->execute();

        $listar = $selectCapa->fetchAll();

    ?>
    
    <?php foreach($listar as $l): ?>
        <div class="card" style="width: 18rem;">
  <img src="<?=$l['capa']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $l['titulo'];?></h5>
    <p class="card-text"><?= $l['dias'];?></p>
    <a href="#" class="btn btn-primary">Cadastrar Imagens do passeio</a>
  </div>
</div>
    <?php endforeach; ?>

     </div>
        
           </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>