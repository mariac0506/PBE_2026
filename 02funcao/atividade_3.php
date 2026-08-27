<?php
    function analisarAluno ($numero){

        $dobro = $numero *2;
        $triplo = $numero *3;
        $quadrado = $numero * $numero;

        if($numero > 0){
            $situacao = "positivo";
        }
        else{
            $situacao = "negativo";
        }
        return [
            "numero" => $numero,
            "dobro" => $dobro,
            "triplo" => $triplo,
            "quadrado" => $quadrado,
            "situacao" => $situacao
        ];
    }
    $numero = 5;
        $resultado = analisarAluno($numero);
        echo "numero: " . $resultado["numero"] . "<br>";
        echo "dobro: " . $resultado["dobro"] . "<br>";
        echo "triplo: " . $resultado["triplo"] . "<br>";
        echo "quadrado: " . $resultado["quadrado"] . "<br>";
        echo "situacao: " . $resultado["situacao"] . "<br>";

?>
