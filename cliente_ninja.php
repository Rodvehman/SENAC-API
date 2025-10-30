<?php
    $url = "http://localhost/SENAC-API/api_ninja.php";

    $chave_ninja = [
        'codigo' => 'ABCDE1234',
        'nome' => 'Rodrigo'
    ];

    $estrutura_http = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json\r\n',
            'content' => json_encode($chave_ninja)
            ]
    ];

    $contexto = stream_context_create($estrutura_http);

    $resposta = file_get_contents($url, false, $contexto);

    echo $resposta;
?>