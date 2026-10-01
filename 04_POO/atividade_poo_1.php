<?php
class celular{

   public $Marca;
   public $Modelo;
   public $cor;
   public $bateria;
   public $ligado;

   function ligar(){
    $this->ligado=true;
    echo "o celular foi ligado.<br>";
   }

   function desligar(){
    $this->ligado= false;
    echo"o celular foi desligado <br>";
   }

   function usar($consumir){
    $this->bateria = $this->bateria - $consumir;
    if($this->bateria<0){
        $this->bateria=0;
    }
     echo "a bateria foi consumida em $consumir <br>";
     echo "sobrando um total de $this->bateria <br>";
   }

   function carregar($carga){
    $this->carga = $this->bateria + $carga;
    if($this-> carga> 100){
        $this-> bateria=100;
   }
   echo "a bateria foi carregada  em $carga <br>";
   echo "aumentando a bateria para $this->bateria <br>";
}

}

//objeto

$celular1 =  new Celular();

$celular1->marca="motorola";
$celular1->modelo="G9";
$celular1->cor="rosa";
$celular1->bateria=50;
$celular1->ligado=true;

echo "marca: $celular1->marca <br>";
echo "modelo: $celular1->modelo <br>";
echo "cor: $celular1->cor <br>";
echo "bateria: $celular1->bateria <br>";
echo "ligado: $celular1->ligado <br>";

$celular1 ->carregar(33);
$celular1 ->carregar(12);
$celular1 ->usar(25);
$celular1 ->desligar();

//celular 2

$celular2 =  new Celular();

$celular2->marca="motorola";
$celular2->modelo="G14";
$celular2->cor="azul";
$celular2->bateria=29;
$celular2->ligado=true;

echo "marca: $celular2->marca <br>";
echo "modelo: $celular2->modelo <br>";
echo "cor: $celular2->cor <br>";
echo "bateria: $celular2->bateria <br>";
echo "ligado: $celular2->ligado <br>";

$celular2 ->carregar(33);
$celular2 ->carregar(12);
$celular2 ->usar(25);
$celular2 ->desligar();


