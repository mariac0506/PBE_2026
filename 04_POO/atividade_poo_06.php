<?php
    class aluno{
        public $nome
        public $nota1
        public $nota2
        public $media

        public function __construct($nome, $nota1, $nota2, $media){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->media = $media;

        }


        public function CalcularMedia(){
            return($this->nota1 + $this->nota2)/2;
        }
    }

$aluno = new aluno("maria", 10, 9.9);
echo"<pre>";
print_r($aluno);
echo"<pre>";
