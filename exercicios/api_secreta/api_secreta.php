<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST_METHOD'];

    switch($metodo){
        case 'GET':
            echo "Acesso ao GET";
            verificarMetodo();
            break;
        case 'POST':
            verificarMetodo();
            break;
        case 'PUT':
            verificarMetodo();
            break;
        case 'DELETE':
            verificarMetodo();
            break;
        default:
            verificarMetodo();
            echo "Opção Incorreta";
            break;
    }

    function verificarMetodo(){

        $pcao_metodo = json_decode(file_get_contents('php://input'), true);
        $texto_padrao = "Método utilizado: ";
        $tipo_metodo = ['GET', 'POST', 'PUT', 'DELETE'];
        $opcao_metodo = $metodo;

        if ($opcao_metodo['rest'] === 'GET'){
            echo json_encode($texto_padrao.$tipo_metodo[0]);
        } else if ($opcao_metodo['rest'] === 'POST'){
            echo json_encode($texto_padrao.$tipo_metodo[1]);
        } else if($opcao_metodo['rest'] === 'PUT'){
            echo json_encode($texto_padrao.$tipo_metodo[2]);
        }else if($opcao_metodo['rest'] === 'DELETE'){
            echo json_encode($texto_padrao.$tipo_metodo[3]);
        }
    }
?>