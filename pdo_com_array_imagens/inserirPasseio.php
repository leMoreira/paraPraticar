<?php
require "./conexao.php";

$titulo = $_POST['titulo'];
$dias = $_POST['dias'];
$imagem = $_FILES['imagem'];
$pasta = "images/";

$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);

// if ($extensao != 'png' || $extensão != 'jpg'){

//     header('location:index.html');
// }

$novoNome = md5(rand());

$caminhoDaImagem = "$pasta$novoNome.$extensao";

$moverImagem = move_uploaded_file($imagem['tmp_name'], $caminhoDaImagem);

if($moverImagem){
// Aqui vai a inserção com o banco de dados

    $inserirNaTabelaCapa = $pdo->prepare("
    INSERT INTO capa(titulo, dias, capa) VALUES(?,?,?) 
    ");
    $inserirNaTabelaCapa->bindParam(1,$titulo, PDO::PARAM_STR);
    $inserirNaTabelaCapa->bindParam(2,$dias, PDO::PARAM_INT);
    $inserirNaTabelaCapa->bindParam(3,$caminhoDaImagem,PDO::PARAM_STR);

    if($inserirNaTabelaCapa->execute()){
        header('location:mostrarcapa.php');
        } else {
        header('location:index.html');
    }

} else {
    echo "Ops.. Algo deu errado";
    }





?>