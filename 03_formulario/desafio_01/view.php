<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 01</title>
</head>
<body>
    <h1>Calculadora de salario líquido</h1>
    <form action="logica.php" method = "POST">
        <label for="">nome do funcionario:</label>
        <br>
        <input type="text" name="nome">
        <br>
        <label for="">salario bruto:</label>
        <br>
        <input type="number" name="salario_bruto">
        <br>
        <label for="">horas extras:</label>
        <br>
        <input type="number" name="horas_extras" >
        <br>
        <label for="">beneficios:</label>
        <br>
        <input type="number" name="beneficio">
        <br>
        <label for="">desconto:</label>
        <br>
        <input type="numer" name="desconto">

        <br><br>
        <button type="submit">calcular salario</button>
</body>
</html>
