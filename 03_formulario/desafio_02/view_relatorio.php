<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 02</title>
</head>
<body>
    <h1>Resumo da compra</h1>
    <p><b>Cliente:</b> <?=$nome ?></p>
    <table style=border:"1" width="100%">
        <tr>
            <td><b>produto</b></td>
            <td><b>preço</b></td>
            <td><b>quantidade</b></td>
            <td><b>subtotal</b></td>           
        </tr>
        <tbody>
            <?php foreanch ($produto as $produtos): ?>
                <tr>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['preco']?></td>
                    <td><?=$produto['quantidade']?></td>
                    <td><?=$produto['subtotal']?></td>
                </tr>
                <?php endforeach ?>
                </tbody>
                </table>
                <br>
                <p><b>desconto</b><?= $valordesconto ?></p>
                <?php if ($desconto > 0): ?>
                    <h2>parabens voce ganhou um desconto</h2>
                <?php endif ?>
                <h2>total da compra<?= $total ?></h2>

</body>
</html>