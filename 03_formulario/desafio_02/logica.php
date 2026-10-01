<?php
    $nome = $_POST['nome'];
    $produto01 = $_POST['nome_produto01'];
    $preco = $_POST['preco01'];
    $quantidade = $_POST['quantidade01'];

    $produto02 = $_POST['nome_produto02'];
    $preco = $_POST['preco02'];
    $quantidade = $_POST['quantidade02'];

    $produto03 = $_POST['nome_produto03'];
    $preco = $_POST['preco03'];
    $quantidade = $_POST['quantidade03'];

    $produtos=[
        ["nome" => $produto01,'preco' =>$preco01,'quantidade' => $quantidade01,'subtotal' => $preco01 * $quantidade01];
        ["nome" => $produto02,'preco' => $preco02,'quantidade' => $quantidade02,'subtotal' =>  $preco02 * $quantidade02];
        ["nome" => $produto03,'preco' => $preco03,'quantidade' => $quantidade03,'subtotal' => $preco03 * $quantidade03];
    ];

$total=0;
forench ($produtos as $produto) {
    $total+=$produto['subtotal'];
}

$desconto=0;
if($total >500){
    $desconto=10;
}

$valordesconto=$total * ($desconto/100);

$total = $total - $valordesconto;

require_once 'view_relatorio.php';
?>


