<?php

    $url = "http://localhost/SENAC-API/exercicios/cafe1/cafe_um_api.php";

    
    $mensagem = [
        'informacao' => 'critica'
    ];
    
    $estrututa_http = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json\r\n',
            'content' => json_encode($mensagem)
             ]
        ];
    
    $contexto = stream_context_create($estrututa_http);

    $resposta = file_get_contents($url, false, $contexto);

    echo $resposta;

?>