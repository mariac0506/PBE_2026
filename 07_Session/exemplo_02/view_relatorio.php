<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatorio de alunos</title>
</head>
<body>
    <h1>Relatorio de alunos</h1>
        <?php if(isset($_SESSION['nome'])): ?>
            <p>Nome: <?= $_SESSION['nome'] ?></p>
            <p>curso: <?= $_SESSION['curso'] ?></p>
    <?php else: ?>
        <p>Nenhum nome encontrado</p>
    <?php endif; ?>
    <h2>Turma</h2>
        <?php if(isset($_SESSION['turma'])): ?>
                <p>total de alunos: <?= count($_SESSION['turma']) ?></p>
                <table border="1">
                    <thead>
                        <tr>
                            <td>Posição</td>
                            <td>Nome</td>
                            <td>Curso</td>
                            <td>Excluir</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($_SESSION['turma'] as $id => $aluno): ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $aluno['nome'] ?></td>
                                <td><?= $aluno['curso'] ?></td>
                                <td>depois</td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>nenhum aluno na turma</p>
            <?php endif; ?>    
</body>
</html>