<?php
$pasta = "images/";
$imagem = $_FILES['imagem'];
$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);

if ($extensao != 'png'){

    header('location:index.html');
}

$novoNome = md5(rand());

$caminhoDaImagem = "$pasta$novoNome.$extensao";

$moverImagem = move_uploaded_file($imagem['tmp_name'], $caminhoDaImagem);

if($moverImagem){
    echo "Imagem carregada corretamente!";
} else {
    echo "Ops.. Algo deu errado";
}

$arquivos = glob("$pasta{*.jpg,*.JPG,*.png}", GLOB_BRACE);

echo "<br />";

echo "Total de Imagens: ".count($arquivos);
echo "<br />";
?>

<?php foreach($arquivos as $img): ?>

<!-- <img src="<?php echo $img; ?>" alt="" width="200px"> -->
<img src="<?=$img?>" alt="" width="200px">
<?php endforeach; ?>






