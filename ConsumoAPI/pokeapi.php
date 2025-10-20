<?php
    $ids = [25, 1, 4, 7];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
</head>
<body>
    
    <?php foreach($ids as $id): ?>
    <?php
        $lista = json_decode(file_get_contents("https://pokeapi.co/api/v2/pokemon/$id"), true);
    ?>
    <p>Nome: <?=$lista['name']?></p>
    <p>Formas: <?=$lista['types'][0]['type']['name']?></p>
    <p><img src="<?=$lista['sprites']['other']['dream_world']['front_default']?>" alt=""></p>
    <hr>
    <br>
    <?php endforeach ?>
</body>
</html>