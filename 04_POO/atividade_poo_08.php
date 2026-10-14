<?php
class Funcionario{

    private $nome;
    private $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function AumentarSalario($percentual){
        if($percentual <= (10/100)){
            $this->salario = $this->salario * $percentual;
        }else{
            echo "ERRO!";
        }
    }

    public function exibirSalario(){
        echo "O Titular é: $this->nome <br> Seu salário é de $this->salario";
    }
}

$func = new Funcionario("maria", 29000);
$func->AumentarSalario(0.1);
$func->exibirSalario();
?>
