<?php
//estou no arquivo logica.php
session_start();

$_SESSION['nome'] = "Maria";
$_SESSION['curso'] = "Desenvolvimento de sistemas";

echo "<h4> Primeiro Print </h4>";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

// criar uma lista adicionando os valores
// igual o append do python
$_SESSION['turma'][] = [
    "nome" => "Maria Clara",
    "curso" => "ADS"
];

$_SESSION['turma'][] = [
    "nome" => "jose",
    "curso" => "TI"
];

echo "<h4> Segundo Print </h4>";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";


echo "<a href='deletar.php'> apagar </a>";
echo "<br>";
echo "<a href='view_relatorio.php'> exibir dados </a>";

