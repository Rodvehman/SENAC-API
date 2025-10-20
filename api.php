<?php
// Estruturando uma API

    // Cabeçalho da API
    header("Content-Type: application/json; charset: UTF-8");
    header("Access-Control-Alow-Origin: *");

    // Sistemas do Serviço Web

    // Leitura de arquivo JSON e armazenando em Array Variável.
    $pacocas = json_decode(file_get_contents("pacoca.json"), true);

    // Variável para guardar na posição enviada pelo link
    $pacoca_especifica = $_GET['pacoca'];
    
    $tipo = $_GET['tipo'];

    switch($pacoca_especifica){

        case "coco":
            $pacoca_coco = $pacocas['paçocas']['Paçoca de Coco'];
            echo json_encode($pacoca_coco);

            break;
        default:
            echo json_encode($pacocas); 
            break;
    }

    function cadastrar_pacoca($nome, $tipo, $origem, $nutrientes){
            $pacocas['paçocas'][$nome]['nome'] = $nome;
            $pacocas['paçocas'][$nome]['tipo'] = $tipo;
            $pacocas['paçocas'][$nome]['origem'] = $origem;
            $pacocas['paçocas'][$nome]['nutrientes'] = $nutrientes;
        
        if (false){
            salvar_dados($pacocas);
        }
    }

    function salvar_dados($variavel){
        // Salva dados no arquivo
        file_put_contents('pacoca.json', json_encode($pacocas, JSON_PRETTY_PRINT));
    }

    // echo $pacocas['paçocas']['Paçoca de Mel']['nome'];
    // echo $pacocas['paçocas']['Paçoca de Côco']['nome'];
    
    // Saída da API
    
    // echo json_encode($pacocas); 
?>