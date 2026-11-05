<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{
    private $matricula;
    private $notas = []; //notas é um array(lista)
    //a lista de notas ja irá iniciar vazia

    public function __construct($nome , $email , $matricula){
        //construtor da classe pessoa
        parent::__construct($nome , $email);
        $this -> matricula = $matricula;
    }

    //adicionar nota(numero) a lista de notas
    public function adicionarNota($nota){
        $this -> Notas[] = $nota;
    }

    public function calcularMedia(){
        // verificar a quantidade de notas. se for 0, ja para a execução
        // e sai do metodo, não fazendo a conta
        if(count($this -> notas) == 0) return 0;
        //só é caulculado se tiver quantidade de notas > 0
        return array_sum($this -> notas) / count($this -> notas);
        // array_sum = soma todos os itens da lista de notas
        // count = pega a quantidade de itens da lista
    }

    public function verificarSituacao(){
        return $this -> calcularMedia() >= 7 ? "Aprovado" : "Reprovado";
        /*
            $media = $this -> calcularMedia();
            if($media >= 7){
            return "Aprovado";
            }else{
                return "reprovado";
            }
        */
        //verifica se a media calculada é maior ou igual a 7
        //se sim retorna "Aprovado"
        // se não, "Reprovado"
    }

    public function exibirDadosAluno(){
        parent::exibirDadosPessoa();
        echo "matricula:". $this -> matricula ." <br>";
        echo "média: ".number_format($this->calcularMedia(), 2) . "<br>";
        echo "situação: ".$this->verificarSituacao() . "<br><hr>";
    }
}
