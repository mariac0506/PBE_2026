<?php

function analisarNotas ($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3)/3;
    $notas = [$nota1, $nota2, $nota3];
    $maior = $notas[0];
    $menor = $notas [0];

    foreach ($notas as $nota){
        if ($nota > $maior){
            $maior = $nota;
        }
        else{
            $menor = $nota;
        }
    }

    if ($media >=7){
        $situacao = "aprovado";
    }
    elseif ($media >=5 && $media < 7){
        $situacao = "recuperacao";
    }
    else{
        $situacao = "reprovado";
    }
    return [
        "media" => $media,
        "maior nota" => $maior,
        "menor nota" => $menor,
        "situacao" => $situacao
    ];

    $nota1 = 7;
    $nota2 = 5;
    $nota3 = 8;

    $resultado = analisarNotas ($nota1, $nota2, $nota3);
    echo "a media do aluno foi: " . $resultado["media"]."<br>";
    echo "a maior nota foi: ".$resultado ["maior nota"] . "<br>";
    echo "a menor nota foi: ".$resultado ["menor nota"] . "<br>";
    echo "a situacao do aluno foi: "$situacao ["situacao"]."<br>";

}

?>