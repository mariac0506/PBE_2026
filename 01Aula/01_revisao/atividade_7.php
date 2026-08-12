<?php

$alunonota =[
    "maria" => 8.5,
    "joão" => 5.5,
    "Ayla" =>  10,
    "Henrique" =>9.5
    
];

$somanotas = 0;
$totalalunos = count($alunonota);

foreach ($alunonota as $nome => $nota){


   $notaFormatada = number_format($nota, 1, '-','');
   echo "O aluno $nome irou nota $notaFormatada.<br>"
 
    $somaNota += $nota;

}

$mediaTurma = $somaNotas / $totalAlunos;
$mediaFormatada = number_format($mediaTurma, 2, '.','');

echo "<br> ao final exiba a média da turma $mediaFormatada.";



?>