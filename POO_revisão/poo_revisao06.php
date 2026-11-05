<?php 

class cadastro{
    private $nome;
    private $idade;
    private $cidade;
    private $telefone;

    public function ($nome,$idade,$cidade,$telefone){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> cidade = $cidade;
        $this -> telefone = $telefone;

    }

    public function nome(){
        echo "$this -> nome $nome";
    }

    public function idade(){
        $this -> idade +=18;

    }

    public function cidade(){
       echo "$this -> cidade $cidade";

    }

    public function telefone(){
        $this -> telefone +=11;

    }
}
$filme = new cadastro ("maria clara", "tambau")
$this -> nome();
$this -> idade();
$this -> cidade();
$this -> telefone();