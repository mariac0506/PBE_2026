<?php

// ==========================================================
// LOGICA.PHP
// Recebe os dados do formulário, calcula os preços,
// verifica o desconto e envia tudo para o relatório.
// ==========================================================


// ----------------------------------------------------------
// 1. RECEBENDO OS DADOS DO FORMULÁRIO
// ----------------------------------------------------------

$nome   = $_POST['nome'] ?? '';
$livro  = $_POST['livro'] ?? '';
$autor  = $_POST['autor'] ?? '';

$genero1 = $_POST['genero1'] ?? '';
$genero2 = $_POST['genero2'] ?? '';


// ----------------------------------------------------------
// 2. VERIFICAÇÃO DOS CAMPOS
// ----------------------------------------------------------

if (
    empty($nome) ||
    empty($livro) ||
    empty($autor) ||
    empty($genero1) ||
    empty($genero2)
) {
    die("Erro: preencha todos os campos do formulário.");
}


// ----------------------------------------------------------
// 3. FUNÇÃO QUE DEFINE O PREÇO DE CADA GÊNERO
// ----------------------------------------------------------

function valorLivro($genero)
{
    switch ($genero) {

        case "romance":
            return 120;

        case "terror":
            return 300;

        case "suspense":
            return 100;

        case "acao":
            return 150;

        case "fantasia":
            return 50;

        case "ficcao":
            return 250;

        case "aventura":
            return 200;

        default:
            return 0;
    }
}


// ----------------------------------------------------------
// 4. PEGANDO O PREÇO DOS DOIS LIVROS
// ----------------------------------------------------------

$preco1 = valorLivro($genero1);
$preco2 = valorLivro($genero2);


// ----------------------------------------------------------
// 5. CALCULANDO O SUBTOTAL
// ----------------------------------------------------------

$precoTotal = $preco1 + $preco2;


// ----------------------------------------------------------
// 6. VERIFICANDO A PROMOÇÃO
//
// Fantasia + Ficção Científica
// = 25% de desconto
// ----------------------------------------------------------

$desconto = 0;

if (
    ($genero1 == "fantasia" && $genero2 == "ficcao") ||
    ($genero1 == "ficcao" && $genero2 == "fantasia")
) {
    $desconto = 25;
}


// ----------------------------------------------------------
// 7. CALCULANDO O VALOR DO DESCONTO
// ----------------------------------------------------------

$valorDesconto = $precoTotal * ($desconto / 100);


// ----------------------------------------------------------
// 8. CALCULANDO O VALOR FINAL
// ----------------------------------------------------------

$precoFinal = $precoTotal - $valorDesconto;


// ----------------------------------------------------------
// 9. ENVIANDO OS DADOS PARA O RELATÓRIO
// ----------------------------------------------------------

require_once "view_relatorio.php";

?>
