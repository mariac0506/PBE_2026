<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Relatorio da session</h1>
    <!-- dados simples: nome e curso --> 
    <!-- tratamento de erro, caso não existir nada na session -->

    <?php if(isset($_SESSION['nome'])) : ?>
        <p>Nome: <?= $_SESSION['nome']?></p>
        <br>
        <p>Curso: <?= $_SESSION['curso']?></p>

    <?php else: ?>
        <p>Nenhum nome encontrado</p>
    <?php endif; ?>
        <!-- lista dos alunos da turma -->

    <h2>Turma</h2>
    <?php if(isset($_SESSION['turma'])) : ?>

        <!-- count() conta quantas posições existem na lista no caso -->

        <p>total de alunos: <?= count($_SESSION['turma']) ?></p>

        <table border="1">
            <thead>
                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach($_SESSION['turma'] as $id => $aluno) : ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['curso'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Nenhum aluno encontrado</p>
    <?php endif; ?>
    
</body>
</html>