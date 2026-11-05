<?php 

require_once "Pessoa.php";

class Professor extends Pessoa{
    private $disciplina;

    public function __construct($nome , $email , $disciplina){
        $this -> disciplina = $disciplina;

        //executa o construtor da classe pessoa
        //passando os seus atributos
        parent::__construct($nome , $email);
    }

    //metodo para buscar a disciplina
    public function getDisciplina(){
        return $this -> disciplina;
    }

    //exibir todos os dados do professor
    public function exibirDados(){
        echo "disciplina $this->disciplina <br>";
    }

    public function exibirDadosProfessor(){
        parent::exibirDadosPessoa();
        echo "Nome: $this->disciplina <br><hr>";
    }

}