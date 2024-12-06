<?php
// Contagem 0 até 10

$cont = 0;

while ($cont <= 10) {
    echo $cont;
    echo "<br />";
    $cont ++;
}
echo "<br />";
$contador = 11;
while ($contador <= 34) {

   if ($contador % 2 == 0) {
    echo $contador;
    echo "<br />";
   }
   
   $contador ++ ;
}
echo "<br />";

for ($i = 5; $i <= 38; $i ++){
    echo $i;
    echo "<br />";
}

echo "<br />";
for ($i = 38; $i >= 5; $i --){
    echo $i;
    echo "<br />";
}

