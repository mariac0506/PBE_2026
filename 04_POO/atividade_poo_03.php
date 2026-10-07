<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $n_sala;
    public $bloco;

    function exibirInformações(){
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da sala: $this->n_sala <br>";
        echo "Bloco: $this->bloco";
    }

    function TrocarProfessor($nome_professor){
        $this -> professor = $nome_professor;
        echo "O novo professor é $this->professor <br>";
    }
    function alterarLocal($novo_bloco, $novo_numero_sala){
        $this->n_sala = $novo_numero_sala;
        $this->bloco = $novo_bloco;

        echo "o novo local é $this->bloco $this->n_sala <br>";
    }
}

$aula1 = new Aula();
$aula1-> disciplina = "geografia";
$aula1-> professor = "plinio";
$aula1-> duracao = "2";
$aula1-> n_sala = "10";
$aula1-> bloco = "02";

$aula1->exibirInformações();
echo"<hr";
$aula1->TrocarProfessor("Angelo");
echo"<hr";
$aula1->AlterarLocal("quadra");
echo"<hr";
$aula1->ExibirInformações();
