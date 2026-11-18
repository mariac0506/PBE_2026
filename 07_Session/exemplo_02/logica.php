<?php
//estou na logica.php
session_start();

$nome = $_POST['nome'];
$curso = $_POST['curso'];

$_SESSION['nome'] = $nome;
$_SESSION['curso'] = $curso;

// criar a turma, sua lista de alunos.
$_SESSION['turma'][] = [
    'nome' => $nome,
    'curso' => $curso
];

echo "<a href='view_relatorio.php'> ver o relatorio </a>";
