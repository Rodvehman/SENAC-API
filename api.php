<?php
    $url = "https://brasilapi.com.br/api/cep/v1/04815290";

    $resposta = file_get_contents($url);

    $dados = json_decode($resposta, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de CEP</title>
</head>
<body>
    <h1>CEP</h1>
    <p>CEP: <?=$dados['cep']?></p>
    <p>Endereço: <?=$dados['street']?></p>
    <p>Bairro: <?=$dados['neighborhood']?></p>
    <p>Cidade: <?=$dados['city']?></p>
    <p>Estado: <?=$dados['state']?></p>

</body>
</html>