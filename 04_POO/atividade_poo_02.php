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

$conta1 -> $titular = "Maria";
$conta1 -> $numero = "291305";
$conta1 -> $saldo = 10.000;
$conta1 -> $tipo = "c/c";

$conta1 -> ConsultarSaldo();
$conta1 -> sacar(200);
$conta1 -> ConsultarSaldo();
echo "<br> conta 02 <br>"

$conta1 -> $titular = "João";
$conta1 -> $numero = "051329";
$conta1 -> $saldo = 10.000;
$conta1 -> $tipo = "c/c";

$conta1 -> ConsultarSaldo();
$conta1 -> sacar(200);
$conta1 -> ConsultarSaldo();





