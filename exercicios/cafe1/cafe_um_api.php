<?php

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST_METHOD'];


    switch ($metodo){
        case 'GET':
            echo  json_encode("Método GET consultado com sucesso");
            break;
        case 'POST':
            verificarMensagem();
            break;
        case 'PUT';

            break;
        case 'DELETE':
            echo 'eca';
            break;
        default:
        
            break;
    }

    function verificarMensagem(){
        $mensagem = json_decode(file_get_contents("php://input"), true);

        if ($mensagem['informacao'] == 'elogio')
            echo json_encode("Muito obrigado", JSON_UNESCAPED_UNICODE);
        if ($mensagem['informacao'] == 'critica')
            echo json_encode("vai caçar o que fazer", JSON_UNESCAPED_UNICODE);
    }
?>