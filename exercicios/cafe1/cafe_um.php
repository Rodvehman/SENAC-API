<?php

    header("Content-Type: aplication/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo == 'POST'){
        verificarMensagem();
    }

    function verificarMensagem(){
        $mensagem = json_decode(file_get_contents("http://"), true);

        if ($mensagem['informacao'] == 'elogio')
            echo "Muito obrigado";
        
        if ($mensagem['informacao'] == 'critica')
                echo "vai caçar o que fazer";
    }
?>