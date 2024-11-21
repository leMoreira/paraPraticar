<?php
require("./conexao.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Diretório para onde as imagens serão enviadas
    $diretorioDestino = "itens_capa/";
$id = $_POST['id'];
$comentario = "";
$contar = count($_FILES['imagens']['name']);

    // Verifique se o diretório de destino existe, se não, crie-o
    // if (!is_dir($diretorioDestino)) {
    //     mkdir($diretorioDestino, 0777, true);
    // }

    // Defina um array de tipos de arquivos permitidos
    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];

    // Iterar sobre os arquivos enviados
    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {
        // Obtenha as informações sobre o arquivo
        $nomeArquivo = $_FILES['imagens']['name'][$key];
        $tipoArquivo = $_FILES['imagens']['type'][$key];
        $tamanhoArquivo = $_FILES['imagens']['size'][$key];

        // Verifique o tipo de arquivo
        if (!in_array($tipoArquivo, $tiposPermitidos)) {
            echo "O arquivo '$nomeArquivo' não é um tipo de imagem válido.<br>";
            continue;
        }

        // Verifique o tamanho do arquivo (limite de 2MB por exemplo)
        // if ($tamanhoArquivo > 2 * 1024 * 1024) {
        //     echo "O arquivo '$nomeArquivo' é muito grande. O limite é 2MB.<br>";
        //     continue;
        // }

        // Gera um nome único para o arquivo (para evitar conflitos)
        $nomeUnico = md5(rand()) . '-' . basename($nomeArquivo);
        $caminhoDestino = $diretorioDestino . $nomeUnico;

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($tmp_name, $caminhoDestino)) {
            
          
$stmt = $pdo->prepare("INSERT INTO fotos (id_capa, comentario, desc_imagem) VALUES (?,?,?)");
$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $comentario, PDO::PARAM_STR);
$stmt->bindParam(3, $caminhoDestino, PDO::PARAM_STR);

if($stmt->execute()){
    echo "Inserido com sucesso";
} else {
    echo "Não ionseriu as imagens";
}


        } else {
            echo "Houve um erro ao enviar a imagem '$nomeArquivo'.<br>";
        }
    }
} else {
    echo "Nenhum arquivo foi enviado.";
}

