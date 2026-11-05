<?php 

class Filme{
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function ($titulo,$genero,$duracao,$assistido){
        $this -> titulo = $titulo;
        $this -> genero = $genero;
        $this -> duracao = $duracao;
        $this -> assistido = $assistido;

    }

    public function titulo(){
        echo "$this -> titulo $titulo";
    }

    public function genero(){

    }

    public function duracao(){

    }

    public function assistido(){

    }
}
$filme = new Filme ("menino do pijama listrado", 2008)
$this -> genero();
$this -> duracao();
$this -> assistido();