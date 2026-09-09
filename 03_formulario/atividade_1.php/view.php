<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <h1>Cadastro de usuario</h1>
    <form action="logica.php" method = "POST">
        <label for="">nome</label>
        <input type="text" name="nome">
        <br><br>
        <label for="">email</label>
        <input type="email" name="email">
        <br><br>
        <label for="">senha</label>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">cadastrar</button>
        <button type="reset">Limpar</button>

    </form>
</body>
</html>