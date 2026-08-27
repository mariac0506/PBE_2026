<?php

require_once "funcao.php";

$resultadocalcularPedido("teclado",100,10,5,7);
echo "nome: ".$resultado['nomeProduto']."<br>";
echo "sunTotal: ".$resultado['subTotal']."<br>";
echo "desconto: ".$resultado['valorDesconto']."<br>";
echo "total: ".$resultado['totalFinal']."<br>";

$totalComFrete = CalculoFrete($resultado['totalFinal']);
echo "total com frete".$totalComFrete;

?>
