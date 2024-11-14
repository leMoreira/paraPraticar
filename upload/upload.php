<?php
$pasta = 'images/';
$novoNome = md5(rand());
$imagem = $_FILES['imagem'];
$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);

$caminhoDaImagem = "$pasta/$novoNome.$extensao";

$moverImagem = move_uploaded_file($imagem['tmp_name'], $caminhoDaImagem);

if($moverImagem){
    
    $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);
    
  echo   "<h3 style='text-align:center'>Total de Imagens" . count($arquivos) . "</h3>";


    ?>
<div>
    <h1 style="">Imagem Recebida com sucesso</h1>
   <?php 
   foreach($arquivos as $img):?>
    <img src="<?=$img?>" alt="" style="width:200px;height:200px">

   <?php endforeach; ?>
</div>
    <?php
} else {
?>
    <div>
        <h1>Ops Algo deu errado</h1>
    </div>

    <?php
}