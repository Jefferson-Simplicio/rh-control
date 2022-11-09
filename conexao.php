<?php

$usuario = 'root';
$host = 'localhost';
$senha = '';
$database = 'rh-control';
$port = 3307;

$mysqli = new mysqli($host,$usuario,$senha,$database,$port);

if ($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}