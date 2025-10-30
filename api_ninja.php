<?php
    header("Content-Type: application/json; charset= UTF-8");
    header("Access-Control-Allow-Origin: *");

    // Definindo o método de requisição da API
    $metodo = $_SERVER['REQUEST_METHOD'];

      switch ($metodo){
        case 'GET':
            break;
        case 'POST':
            break;
        case 'PUT';
            break;
        case 'DELETE':
            break;
        default:
            break;
      }
?>