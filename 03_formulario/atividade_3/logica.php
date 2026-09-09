<?php
$primeiro_numero = $_POST['n_01'];
$segundo_numero = $_POST['n_02'];
$operacao = 0;

echo $primeiro_numero . "<br>";
echo $segundo_numero . "<br>";
echo $operacao . "<br>";

if ($operacao == "adição"){
    echo $primeiro_numero + $segundo_numero;
}elseif($operacao =="subtração"){
    echo $primeiro_numero - $segundo_numero;
}elseif($operacao == "multiplicação"){
    echo $primeiro_numero * $segundo_numero;
}elseif($operacao == "divisão"){
    if($segundo_numero == 0")
        echo "numero não pode ser dividido por 0";
    }else{
        echo $primeiro_numero/$segundo_numero;
    }
?>