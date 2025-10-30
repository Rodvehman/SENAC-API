<?php

    //  Vai necessitar de um cabeçalho com configurações da API
    header('Content-Type: Application/json; charset=UTF-8');
    header("Acess-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST METHOD'];

    //  Sistema API (código PHP)
    switch($metodo){
        case "GET":
            metodoGET();
            break;
        case 'POST':

            break;
        default:
            echo "Método não identificado";
            break;
    }

    function metodoGET(){
        $pacocas = json_decode(file_get_contents("pacoca.json"),true);
        $pacoca_especifica = $_GET['pacoca'];

        switch ($pacoca_especifica){
            case "coco":
                $pacoca_coco = $pacocas['pacocas']['Paçoca de Coco']
                echo json_encode($pacoca_coco);
                break
                
        }
    }
?>