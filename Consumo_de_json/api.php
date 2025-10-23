<?php
    header("Content-Type: application/json; charset: UTF-8");
    header("Access-Control-Allow-Origin: *");

    $jason_data = file_get_contents("comida.json");
    $comidas = json_decode($jason_data, true);

    $comida_especifica = $_GET['comidas'];

    switch($comida_especifica){
        case 'feijoada':
            $feijoada = $comidas['comida']['feijoada'];
            echo json_encode($feijoada);
            break;
        case 'pastel':
            $pastel = $comidas['comida']['pastel'];
            echo json_decode($pastel);
            break;
        default:
            echo "prato não localizado";
            break;
    }    
?>