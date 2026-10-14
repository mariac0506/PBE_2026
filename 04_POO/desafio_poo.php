<?php

class Pedido{
    private $clientes;
    private $ValorItens;

    public function __construct($clientes,$ValorItens = 0){
        $this -> clientes = $clientes;
        $this -> ValorItens = $ValorItens;
    }

    public function  adicionarItem($valor){
        $this ->ValorItens += $valor;
    }

    public function getTotal(){
        return $this -> $ValorItens;
    }

    public function exibirPedido(){
        echo "cliente: $this->cliente - 
            total dos itens: $this->ValorItens <br>";
    }

}

class NotaFiscal{
    private $totalpedido;
    private $imposto;
    private $totalpagar; // total do pedido + porcentagem do imposto

    public function __construct($totalpedido, $imposto = 10){
        $this -> totalpedido = $totalpedido;
        $this -> imposto = $imposto;
        $this -> totalapagar = 0;
    }

    public function calculartotal(){
        $this -> $totalpagar = $this -> totalpedido + ($this -> totalpedido * ($this -> imposto / 100));

    }

    public function exibirnota(){
        echo "subtotal: r$ $this -> totalpedido <br>";
        echo "imposto: r$ $this -> imposto <br>";
        echo "toatal pagar: r$ $this -> totalpagar <br>";
    }
}

$pedido = new pedido("leonardo", 20);
$pedido -> adicionaritem(50);
$pedido -> adicionaritem(79);
echo $pedido -> exibirpedido();

$notafiscal = new NotaFiscal($pedido->getTotal(), 8);
$NotaFiscal -> calculartotal();
$NotaFiscal -> exibirnota();



