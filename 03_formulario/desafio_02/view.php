<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 02</title>
</head>
<body>
    <h1>carrinho de compras</h1>
    <h2>dados do cliente</h2>
    <form action="logica.php" method = "POST">
        <label for="">nome:</label>
        <br>
        <input type="text" name="nome">
        <br>
        <h2>Produto 01</h2>
        <label for="">nome do produto:</label>
        <br>
        <input type="text" name="nome_produto01">
        <br>
        <label for="">preço:</label>
        <br>
        <input type="number" name="preco01" >
        <br>
        <label for="">quantidade:</label>
        <br>
        <input type="number" name="quantidade01">
        <br>
            <h2>produto 02</h2>
            <label for="">nome produto:</label>
            <br>
            <input type="text" name="nome_produto02">
            <br>
            <label for="">preço:</label>
            <br>
            <input type="number" name="preco02" >
            <br>
            <label for="">quantidade:</label>
            <br>
            <input type="number" name="quantidade02">
            <br>
                <h2>Produto 03</h2>
                <label for="">nome do produto:</label>
                <br>
                <input type="text" name="nome_produto03">
                <br>
                <label for="">preço:</label>
                <br>
                <input type="number" name="preco03" >
                <br>
                <label for="">quantidade:</label>
                <br>
                <input type="number" name="quantidade03">
                <br>
                <br><br>
        <button type="submit">Finalizar compra</button>
</body>
</html>
