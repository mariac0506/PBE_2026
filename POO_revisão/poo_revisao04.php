<?php

class Paciente{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function ($nome,$idade,$peso,$altura){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> peso = $peso;
        $this -> altura = $altura;
    }

    public function nome(){
        echo "$this -> nome $nome";

    }
    public function idade(){
         $this -> idade +=18;

    }
    public function peso(){

    }
    public function altura(){
         $this -> altura +=1,65;

    }
}
$pacinte = new Paciente ("maria clara", 17);
$this -> peso();
$this -> altura();