<?php 

$frequencia = 90;
$nota = 9;

echo "Maria Clara - ";
if ($frequencia < 75) { // frequencia suficiente
    echo "reprovado por falta";
}
elseif ($nota >=7) { // maior que 7 aprovado
    echo "aprovado";
}
elseif ($nota >=5) {// nota: entre 5 e 6.9 = recuperação
    echo "recuperação";
}
else{ // media insufiente reprovado
    echo "reprovado";
}


$frequencia2 = 74;
$nota = 9;

echo "maria - ";
if ($frequencia < 75) { // frequencia suficiente
    echo "reprovado por falta";
}
elseif ($nota >=7) { // maior que 7 aprovado
    echo "aprovado";
}
elseif ($nota >=5) {// nota: entre 5 e 6.9 = recuperação
    echo "recuperação";
}
else{ // media insufiente reprovado
    echo "reprovado";
}


$frequencia3 = 80;
$nota = 4;

echo "maria - ";
if ($frequencia < 75) { // frequencia suficiente
    echo "reprovado por falta";
}
elseif ($nota >=7) { // maior que 7 aprovado
    echo "aprovado";
}
elseif ($nota >=5) {// nota: entre 5 e 6.9 = recuperação
    echo "recuperação";
}
else{ // media insufiente reprovado
    echo "reprovado";
}

?>



