<?php
    $url = "http://localhost/SENAC-API/Consumo_de_json/api.php?comidas=feijoada";

    $resposta = file_get_contents($url);

    $resposta_decodificada = json_decode($resposta, true);

    var_dump($resposta_decodificada);
?>