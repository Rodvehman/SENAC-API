<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST_METHOD'];

    switch($metodo){
        case 'GET':
            echo "Acesso ao GET";
            break;
        case 'POST':
            break;
        case 'PUT':
            break;
        case 'DELETE':
            break;
        default:
            echo "Opção Incorreta";
            break;
    }

    
?>