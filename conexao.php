<?php

$host = '189.8.214.5:33061';
$usuario = 'pi351meadote';
$senha = '01200822!mãedabea';
$database = 'pi351meadote';


$mysqli = new mysqli($host,$usuario,$senha,$database);

if ($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
