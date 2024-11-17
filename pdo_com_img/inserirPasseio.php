<?php

require "./conexao.php";

$titulo = $_POST['titulo'];
$dias = $_POST['dias'];
$imagem = $_FILES['imagem'];
$pasta = "images/";


$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);

if ($extensao != 'png'){

    header('location:index.html');
}

$novoNome = md5(rand());

$caminhoDaImagem = "$pasta$novoNome.$extensao";

$moverImagem = move_uploaded_file($imagem['tmp_name'], $caminhoDaImagem);

if($moverImagem){

$inserirPasseio = $pdo->prepare("INSERT INTO capa (titulo, dias, capa) VALUES (?,?,?)");

$inserirPasseio->bindParam(1, $titulo, PDO::PARAM_STR);
$inserirPasseio->bindParam(2, $dias, PDO::PARAM_INT);
$inserirPasseio->bindParam(3, $caminhoDaImagem, PDO::PARAM_STR);

if($inserirPasseio->execute()) {
header('location:mostrarcapa.php');
} else {
    echo "Algo deu errado para inserção de dados";
    ?>
<a href="index.html"> Voltar</a>
    <?php
}



} else {
    echo "Ops.. Algo deu errado";
}





?>