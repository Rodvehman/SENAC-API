<?php
    header("Content-Type: application/json; charset: UTF-8");
    header("Access-Control-Alow-Origin: *");

    $comidas = json_decode(file_get_contents("comida.json", true));

    $comida_especifica = $_GET['comida'];

    
?>