<?php

function comparaIdade($idadedaPessoa){
    if($idadedaPessoa <= 17){
    //    return "Você é menor de idade";
    $resposta = "Você é menor de idade";

    } else {
        // return "Você é maior de idade";
        $resposta = "Você é maior de idade";
    }

    return $resposta;

}

function mostraOlaMundo(){

    // echo "<br />";
    return "Olá mundo";
    // echo "<br />";

}

function dd($arg){
    $resultado = "<pre>".var_dump($arg)."</pre>";
    return $resultado;
}


$nome = $_POST['nome'];
$idade = $_POST['idade'];

dd($idade);
echo "<br />";

echo comparaIdade($idade);
// mostraOlaMundo();
echo "<br />";
echo "Bom dia Leandro, " . mostraOlaMundo();
