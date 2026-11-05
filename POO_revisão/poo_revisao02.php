<?php
class Carro{
    private $modelo;
    private $velocidade;

    public function __construct($modelo,$velocidade = 0){
        $this -> modelo = $modelo;
        $this -> velocidade = $velocidade;
    }

    public function acelerar(){
        $this -> velocidade +=10;
    }

    public function freiar(){
        $this -> velocidade -=10;
    }

    public function vervelocidade(){
        echo "o carro $this -> modelo está atualmente com a velocidade de $this -> velocidade <br>";
    }
}
$carro = new carro ("Hb20", 2000);
$carro -> velocidade();