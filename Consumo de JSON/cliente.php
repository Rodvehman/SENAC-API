<?php
    $url = "http://localhost/SENAC-API/Consumo%20de%20JSON/api.php?";

    $resposta = file_get_contents($url);

    echo $resposta;
?>