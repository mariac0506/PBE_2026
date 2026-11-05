<!DOCTYPE html>

<html lang="pt-BR">

<head>

```
<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Livraria - Desafio 03</title>

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
        max-width: 650px;

        background: white;

        padding: 35px;

        border-radius: 22px;

        box-shadow:
            0 12px 35px rgba(0, 0, 0, 0.15);
    }

    .logo {
        display: block;

        width: 140px;
        max-width: 60%;

        margin: 0 auto 20px;
    }

    h1 {
        text-align: center;

        color: #3d2b1f;

        margin-bottom: 8px;
    }

    .subtitulo {
        text-align: center;

        color: #777;

        margin-bottom: 30px;
    }

    .grupo {
        margin-bottom: 20px;
    }

    label {
        display: block;

        color: #3d2b1f;

        font-weight: bold;

        margin-bottom: 8px;
    }

    input,
    select {
        width: 100%;

        padding: 13px;

        border: 1px solid #ccc;

        border-radius: 10px;

        font-size: 15px;

        outline: none;

        background: #fafafa;
    }

    input:focus,
    select:focus {
        border-color: #6f4e37;

        background: white;

        box-shadow:
            0 0 0 3px rgba(111, 78, 55, 0.12);
    }

    .livro {
        background: #f8f4ec;

        padding: 20px;

        border-radius: 15px;

        margin-bottom: 20px;
    }

    .livro h2 {
        font-size: 20px;

        color: #5a3d2b;

        margin-bottom: 18px;
    }

    .promocao {
        background: #fff4d6;

        border-left: 5px solid #d89b20;

        padding: 15px;

        border-radius: 10px;

        line-height: 1.5;

        color: #60491f;

        margin: 25px 0;
    }

    .promocao strong {
        color: #513b18;
    }

    button {
        width: 100%;

        padding: 15px;

        border: none;

        border-radius: 10px;

        background: #6f4e37;

        color: white;

        font-size: 17px;

        font-weight: bold;

        cursor: pointer;

        transition: 0.3s;
    }

    button:hover {
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
            padding: 22px;
        }

    }

</style>
```

</head>

<body>

```
<main class="container">

    <img
        src="logo.png"
        alt="Logo da livraria"
        class="logo"
    >

    <h1>📚 Minha Livraria</h1>

    <p class="subtitulo">
        Escolha seus livros e confira sua compra.
    </p>


    <!-- FORMULÁRIO -->

    <form action="logica.php" method="POST">


        <!-- DADOS DO CLIENTE -->

        <div class="grupo">

            <label for="nome">
                Nome do cliente:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite seu nome"
                required
            >

        </div>


        <!-- PRIMEIRO LIVRO -->

        <div class="livro">

            <h2>📖 Primeiro livro</h2>


            <div class="grupo">

                <label for="livro">
                    Nome do livro:
                </label>

                <input
                    type="text"
                    id="livro"
                    name="livro"
                    placeholder="Digite o nome do livro"
                    required
                >

            </div>


            <div class="grupo">

                <label for="autor">
                    Autor:
                </label>

                <input
                    type="text"
                    id="autor"
                    name="autor"
                    placeholder="Digite o nome do autor"
                    required
                >

            </div>


            <div class="grupo">

                <label for="genero1">
                    Gênero:
                </label>

                <select
                    id="genero1"
                    name="genero1"
                    required
                >

                    <option value="">
                        Selecione o gênero
                    </option>

                    <option value="romance">
                        Romance
                    </option>

                    <option value="terror">
                        Terror
                    </option>

                    <option value="suspense">
                        Suspense / Policial
                    </option>

                    <option value="acao">
                        Ação
                    </option>

                    <option value="fantasia">
                        Fantasia
                    </option>

                    <option value="ficcao">
                        Ficção Científica
                    </option>

                    <option value="aventura">
                        Aventura
                    </option>

                </select>

            </div>

        </div>


        <!-- SEGUNDO LIVRO -->

        <div class="livro">

            <h2>📚 Segundo livro</h2>

            <div class="grupo">

                <label for="genero2">
                    Gênero do segundo livro:
                </label>

                <select
                    id="genero2"
                    name="genero2"
                    required
                >

                    <option value="">
                        Selecione o gênero
                    </option>

                    <option value="romance">
                        Romance
                    </option>

                    <option value="terror">
                        Terror
                    </option>

                    <option value="suspense">
                        Suspense / Policial
                    </option>

                    <option value="acao">
                        Ação
                    </option>

                    <option value="fantasia">
                        Fantasia
                    </option>

                    <option value="ficcao">
                        Ficção Científica
                    </option>

                    <option value="aventura">
                        Aventura
                    </option>

                </select>

            </div>

        </div>


        <!-- PROMOÇÃO -->

        <div class="promocao">

            🎁 <strong>Promoção especial!</strong>

            <br>

            Ao comprar dois livros, sendo um de
            <strong>Fantasia</strong> e outro de
            <strong>Ficção Científica</strong>,
            você ganha <strong>25% de desconto!</strong>

        </div>


        <!-- BOTÃO -->

        <button type="submit">
            Comprar livros
        </button>

    </form>


    <p class="rodape">
        Desafio 03 • Sistema de Livraria
    </p>

</main>
```

</body>

</html>
