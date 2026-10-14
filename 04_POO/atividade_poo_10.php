<?php

class Carro{
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo,$consumo,$tanque){
        $this -> modelo = $nome;
        $this -> consumo = $consumo;
        $this -> tanque = $tanque;
    }

    public function abastecer($litros){
        if ($litros > 0){
            $this -> tanque += $litros;
            echo"abastecidos $litros litro(s) no {$this->modelo}.<br>";
         }else{
            echo"quantidade invalida para abastecimento!<br>";

         }
    }

    public function dirigir($km){
        $litrosnecessarios = $km / $this->consumo;

        if ($litrosnecessarios <= $this->tanque){
            $this->tanque -= $litrosnecessarios;
            echo "o carro {$this->modelo} percorreu $km km e consumiu". 
                number_format($litrosnecessarios, 2,',','.') . "litros.<br>";
        }else{
            echo "combustivel insuficiente para percorrer $km km!<br>";

        }
    }

    public function exibirInfo(){
        echo "modelo: {$this->modelo} | consumo: {$this->consumo} km/l | tanque: " .  
            number_format9($this->tanque, 2,',','.') . "L <br>";
    }
}
$carro = new Carro("honda civic" , 12 , 20); // 12km/l, tanque inicial de 20l
$carro -> exibirInfo();
$carro -> dirigir(60); // deve consumir 5L
$carro -> abastecer(10);
$carro -> exibirInfo();
