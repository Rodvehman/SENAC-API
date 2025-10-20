<?php
// Consumo de API (Serviço WEB)

    // Requisição através de um URL (protocolo HTTP)

    $url = "http://localhost/SENAC-API/api.php";

    // Guardar um valor de resposta da API
    $resposta = file_get_contents($url);

    // Decodificar JSON para um Array Associativo, com dois argumentos, sendo a variáveç $resposta e true

    echo $resposta;
?>