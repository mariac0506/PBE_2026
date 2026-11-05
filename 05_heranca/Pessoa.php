<?php

 class Pessoa{
    protected $nome;
    protected $email;

    public function __construct($nome , $email){
        $this -> nome = $nome;
        $this -> email = $email;    
    }

    //metodo que busca e retorna o nome do objeto
    public function getNome(){
        return $this -> nome;
    }

    //metodo que ultiliza o nome
    public function setNome($nome){
        $this -> nome = $nome;
    }

    // metodo que busca e retorna o email do objeto
    public function getEmail(){
        return $this -> email;
    }

    //metodo para atualizar o email
    public function setEmail($email){
        $this -> email = $email;
    }

    //metodo para exibir todos os dados
    //normalmente chamado de toString()
    public function exibirDadosPessoa(){
        echo "Nome: ". $this -> nome ." <br> Email:". $this -> email ."<br>";
    }

 }