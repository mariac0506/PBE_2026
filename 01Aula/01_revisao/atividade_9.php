<?php 

$idade_pessoa = 17;
$acompanhada = true;

if ($idade_pessoa >= 18){
    echo "pode entar sozinha!";
}
elseif ($idade_pessoa >=14
    && $idade_pessoa <= 17
    && $acompanhada == true){
    echo "entrada liberada com sucesso!!";
}
else{
    echo "menores de 14 anos não pode entrar, mesmo acompanhados"
}
?>






















