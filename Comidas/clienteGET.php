<?php
// lado cliente (consumindo API)

// Precisamo de uma URL com endpoint para requisitar serviço à API
    $url = "http://localhost/SENAC-API/apiGET.php";

    $resposta = file_get_contents($url);

    $dados = json_decode($resposta, true);

?>