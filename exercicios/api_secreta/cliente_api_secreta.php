<?php
    $url = "http://localhost/SENAC-API/exercicios/api_secreta/api_secreta.php";

    $opcao = [
        'rest' => 'GET',
    ];

    $estrutura_http = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json\r\n',
            'content' => json_encode($opcao)
        ]
    ];

    $contexto = stream_context_create($estrutura_http);

    $resposta = file_get_contents($url, false, $contexto);

    echo $resposta;
?>