<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Holerite</title>
</head>
<body>
    <h1>Holerite</h1>
    <p>Nome: <?= $funcionario->getNome() ?></p>
    <p>Cargo: <?= $funcionario->getCargo() ?></p>

    <table border="1">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Proventos</th>
                <th>Descontos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Salário base</td>
                <td>R$ <?= number_format($funcionario->getSalarioBase(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>Horas extras (<?= $funcionario->getHorasExtras() ?>h)</td>
                <td>R$ <?= number_format($funcionario->calcularHorasExtras(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>INSS (<?= $funcionario->calcularPercentualINSS() ?>%)</td>
                <td>-</td>
                <td>R$ <?= number_format($funcionario->calcularINSS(), 2, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Vale-transporte</td>
                <td>-</td>
                <td>R$ <?= number_format($funcionario->calcularValeTransporte(), 2, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>

    <br>

    <h2>Salário Bruto: R$ <?= number_format($funcionario->calcularSalarioBruto(), 2, ',', '.') ?></h2>
    <h2>Salário Líquido: R$ <?= number_format($funcionario->calcularSalarioLiquido(), 2, ',', '.') ?></h2>

    <br>
    <a href="view.php">Voltar</a>
</body>
</html>