<!DOCTYPE html>

<html lang="pt-BR">

<head>

```
<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Resumo da Compra</title>

<style>

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        min-height: 100vh;

        background: linear-gradient(
            135deg,
            #f8f4ec,
            #e7d8c5
        );

        display: flex;
        justify-content: center;
        align-items: center;

        padding: 25px;
    }

    .container {
        width: 100%;
        max-width: 900px;

        background: white;

        padding: 35px;

        border-radius: 22px;

        box-shadow:
            0 12px 35px rgba(0, 0, 0, 0.15);
    }

    .topo {
        text-align: center;

        margin-bottom: 30px;
    }

    .topo h1 {
        color: #3d2b1f;

        margin-bottom: 8px;
    }

    .topo p {
        color: #777;
    }

    .cliente {
        background: #f8f4ec;

        padding: 20px;

        border-radius: 15px;

        margin-bottom: 25px;
    }

    .cliente h2 {
        color: #5a3d2b;

        margin-bottom: 8px;
    }

    .cliente p {
        color: #555;

        font-size: 16px;
    }

    .tabela {
        overflow-x: auto;
    }

    table {
        width: 100%;

        border-collapse: collapse;

        margin-bottom: 25px;
    }

    th {
        background: #6f4e37;

        color: white;

        padding: 14px;

        text-align: left;
    }

    td {
        padding: 14px;

        border-bottom: 1px solid #ddd;

        color: #444;
    }

    tr:nth-child(even) {
        background: #fafafa;
    }

    .desconto {
        background: #e8f5e9;

        border-left: 5px solid #4caf50;

        padding: 16px;

        border-radius: 10px;

        color: #28632d;

        text-align: center;

        font-weight: bold;

        margin-bottom: 20px;
    }

    .sem-desconto {
        background: #fff4d6;

        border-left: 5px solid #d89b20;

        padding: 16px;

        border-radius: 10px;

        color: #70551d;

        text-align: center;

        margin-bottom: 20px;
    }

    .valores {
        background: #f8f4ec;

        padding: 20px;

        border-radius: 15px;
    }

    .linha {
        display: flex;

        justify-content: space-between;

        padding: 9px 0;

        color: #555;
    }

    .linha.total {
        border-top: 2px solid #d6c8b8;

        margin-top: 10px;

        padding-top: 15px;

        font-size: 21px;

        font-weight: bold;

        color: #3d2b1f;
    }

    .botao {
        display: block;

        width: 100%;

        padding: 15px;

        margin-top: 25px;

        background: #6f4e37;

        color: white;

        text-decoration: none;

        text-align: center;

        border-radius: 10px;

        font-size: 17px;

        font-weight: bold;

        transition: 0.3s;
    }

    .botao:hover {
        background: #4f3626;

        transform: translateY(-2px);
    }

    .rodape {
        text-align: center;

        color: #999;

        font-size: 13px;

        margin-top: 20px;
    }

    @media (max-width: 600px) {

        body {
            padding: 15px;
        }

        .container {
            padding: 20px;
        }

        th,
        td {
            padding: 9px;

            font-size: 13px;
        }

        .linha.total {
            font-size: 18px;
        }

    }

</style>
```

</head>

<body>

```
<main class="container">


    <!-- CABEÇALHO -->

    <div class="topo">

        <h1>✅ Compra realizada!</h1>

        <p>
            Confira abaixo o resumo da sua compra.
        </p>

    </div>


    <!-- CLIENTE -->

    <div class="cliente">

        <h2>👤 Dados do cliente</h2>

        <p>

            <strong>Nome:</strong>

            <?php
            echo htmlspecialchars($nome);
            ?>

        </p>

    </div>


    <!-- LIVROS -->

    <div class="tabela">

        <table>

            <tr>

                <th>
                    Livro
                </th>

                <th>
                    Autor
                </th>

                <th>
                    Gênero
                </th>

                <th>
                    Preço
                </th>

            </tr>


            <!-- PRIMEIRO LIVRO -->

            <tr>

                <td>
                    <?php
                    echo htmlspecialchars($livro);
                    ?>
                </td>

                <td>
                    <?php
                    echo htmlspecialchars($autor);
                    ?>
                </td>

                <td>
                    <?php
                    echo htmlspecialchars($genero1);
                    ?>
                </td>

                <td>

                    R$

                    <?php
                    echo number_format(
                        $preco1,
                        2,
                        ',',
                        '.'
                    );
                    ?>

                </td>

            </tr>


            <!-- SEGUNDO LIVRO -->

            <tr>

                <td>
                    Segundo livro
                </td>

                <td>
                    —
                </td>

                <td>
                    <?php
                    echo htmlspecialchars($genero2);
                    ?>
                </td>

                <td>

                    R$

                    <?php
                    echo number_format(
                        $preco2,
                        2,
                        ',',
                        '.'
                    );
                    ?>

                </td>

            </tr>

        </table>

    </div>


    <!-- DESCONTO -->

    <?php if ($desconto > 0): ?>

        <div class="desconto">

            🎉 Parabéns!

            Você recebeu
            <?php echo $desconto; ?>%
            de desconto nesta compra!

        </div>

    <?php else: ?>

        <div class="sem-desconto">

            ℹ️ Esta compra não possui desconto.

        </div>

    <?php endif; ?>


    <!-- VALORES -->

    <div class="valores">

        <div class="linha">

            <span>
                Subtotal:
            </span>

            <strong>

                R$

                <?php
                echo number_format(
                    $precoTotal,
                    2,
                    ',',
                    '.'
                );
                ?>

            </strong>

        </div>


        <div class="linha">

            <span>
                Desconto:
            </span>

            <strong>
                <?php echo $desconto; ?>%
            </strong>

        </div>


        <div class="linha">

            <span>
                Valor descontado:
            </span>

            <strong>

                R$

                <?php
                echo number_format(
                    $valorDesconto,
                    2,
                    ',',
                    '.'
                );
                ?>

            </strong>

        </div>


        <div class="linha total">

            <span>
                Total a pagar:
            </span>

            <strong>

                R$

                <?php
                echo number_format(
                    $precoFinal,
                    2,
                    ',',
                    '.'
                );
                ?>

            </strong>

        </div>

    </div>


    <!-- VOLTAR -->

    <a
        href="view.php"
        class="botao"
    >
        ← Fazer nova compra
    </a>


    <p class="rodape">
        Desafio 03 • Sistema de Livraria
    </p>

</main>
```

</body>

</html>

