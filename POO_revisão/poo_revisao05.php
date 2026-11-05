<?php 
class turma{
    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function ($nome,$professor,$qtdAlunos,$capacidade){
        $this -> nome = $nome;
        $this -> idade = $professor;
        $this -> peso = $qtdAlunos;
        $this -> altura = $capacidade;
    }

    public function nome(){
        echo "$this -> nome $nome";

    }
    public function professor(){
        echo "$this -> professor $professor";

    }
    public function qtdAlunos(){
        $this -> qtdAlunos +=31;

    }
    public function capacidade(){
        $this -> capacidade +=60;

    }
}
$pacinte = new turma ("maria clara", "leornardo");
$this -> nome();
$this -> professor();
$this -> qtdAlunos();
$this -> capacidade();