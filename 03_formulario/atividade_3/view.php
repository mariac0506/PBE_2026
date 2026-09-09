<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="logica.php" method = "POST">
        <label for="">primeiro numero:</label>
        <br>
        <input type="number" name="n_01">
        <br><br>
        <label for="">segundo numero:</label>
        <br>
        <input type="number" name="n_02">
        <br>
        <select name="operação:" required>
            <option value="">soma</option>
            <option value="+">adição</option>
            <option value="-">subtração</option>
            <option value="*">multiplicação</option>
            <option value="/">divisão</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>