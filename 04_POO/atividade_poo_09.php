<?php 

class produto{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome,$preco,$estoque){
        $this -> nome = $nome;
        $this -> preco = $preco;
        $this -> estoque = $estoque;

    }

    public function vender ($quantidade){
        if($quantidade <= $this -> estoque){
            echo "venda realizada com sucesso!";
        }else{
            echo "estoque insuficiente.";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco += $this-> preco * ($percentual / 100);
    }

    public function exibirInfo(){
        echo "nome: " . $this-> nome;
        echo "preco: ". $this->preco,2;
        echo "estoque: ". $this->estoque. "unidades";
    }
}

$produto = new produto("teclado gamer" , 250, 10);
$produto -> vender(2);
$produto -> reajustarPreco(10);
$produto -> exibirInfo();