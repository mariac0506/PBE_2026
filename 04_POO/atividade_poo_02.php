<?php

class conta{
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor){
        $this->saldo = $this-> saldo + $valor;
        echo "o saldo aumentou para $this->saldo";
    }
    function sacar($valor){
        $this->saldo = $this-> saldo - $valor;
        echo "o saldo resultou em $this->saldo";
    }
    function consultarSaldo(){
        echo "o valor do saldo é de $this->saldo";
    }
}

$conta1 = new conta();