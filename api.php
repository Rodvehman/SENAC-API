<?php
    $url = "https://brasilapi.com.br/api/cep/v1/04815290";

    $datajson = file_get_contents($url);

    $dados = json_decode($datajson, TRUE);

    var_dump($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de CEP</title>
</head>
<body>
    <h1>CEP</h1>
    <form action="">
        <label for="">CEP</label>
        <input type="text"></input>
    </form>
</body>
</html>