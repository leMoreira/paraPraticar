<?php
$valor = 23;
if($valor > 20){
    echo "Valor maior que 20";
} else {
    echo "Valor menor que 20";
}

echo "<br />";


// Se o aluno obter uma nota 6 até 10 - passou de ano
// Se o aluno obter uma nota 4 até 5.5 - Está de recuperação
// Se o aluno obter uma nota 0 até 3.5 - reprovado
$mediaDoAluno =8;

if($mediaDoAluno >= 6) {
    echo "Aluno passou de ano";
} else if ($mediaDoAluno >= 4){
    echo "Aluno está de recuperação";
} else {
    echo "Aluno está reprovado";
}








