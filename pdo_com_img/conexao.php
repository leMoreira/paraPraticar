<?php
$username = "root";
$password ="";

$pdo = new PDO('mysql:host=127.0.0.1;dbname=viagens', $username, $password);
if (!$pdo) {
    echo "Ops algo deu errado";
}

?>