<?php 

class Aluno{
    private $nome;
    private $soma;

    public function __construct($nome, $nota = 0){
        $this -> nome = $nome;
        $this -> nota = $nota;
    }
    
    public function getstatus(){
        if($this -> nota >=6){
            return "aprovado";
        }else{
            return "reprovado";
        }
    }
}

    $aluno1 = new Aluno();
    
    echo "<pre>";
    print_r($aluno1);
    echo "</pre>";

    $aluno2 = new Aluno();

    echo "<pre>";
    print_r($aluno1);
    echo "</pre>";

echo $aluno2 -> getstatus();
