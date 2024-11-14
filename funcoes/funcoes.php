<?php
function compararIdade($nomeDaPessoa, $idadeDaPessoa){

    if ($idadeDaPessoa <= 17)
        {
            // return "Você é menor de idade!";

            $resultado = "$nomeDaPessoa, você é menor de idade!";

        } else {
            // return "Você é maior de idade";
            $resultado = "$nomeDaPessoa, você é maior de idade";
        }

        return $resultado;

}

function textoAleatorio(){
    return "<h1>Olá mundo, tudo bem com você?</h1>";

}

function dd ($param){
    $resultado = var_dump($param);

return $resultado;

}


$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo compararIdade($nome, $idade);
echo "<br />";

echo textoAleatorio();
echo "<br />";

$array = [
[1 => "Ola"],
[2 => "tudo bem"],
];

echo "<pre>";
dd($array);