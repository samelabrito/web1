<?php

class Animal{
    private $raça;
    private $tipo;
    private $cor;

    function __construct($raça, $tipo, $cor) {
        $this->raça = $raça;
        $this->tipo = $tipo;
        $this->cor = $cor;
    }
    public function falar(){
        echo $this->tipo.' está falando!<br>';
    }
    public function pular(){
        echo $this->tipo.' está pulando!<br>';
    }
}

$anim = new Animal('pinche', 'cachorro', 'branco');
$anim->falar();

class Veiculo{
    private $marca;
    private $modelo;
    private $qtdPortas;
    private $cor;
    private $ligado = false;
    private $andando = false;
    private $combustivel = 100;

    function __construct($marca, $modelo, $cor, $qtdPortas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->qtdPortas = $qtdPortas;
    }
    public function getModelo(){
        echo $this->modelo;
    }
    public function getMarca(){
        echo $this->marca;
    }
    public function getCor(){
        echo $this->cor;
    }

    public function ligar(){
        if ($this->combustivel <= 0) {
            echo $this->modelo.' está sem combustivel!<br>';
            return;
        }
        if ($this->ligado) {
            echo $this->modelo.' já está ligado!<br>';
            return;
        }
        $this->ligado = true;
        $this->combustivel = $this->combustivel - 10;
        echo $this->modelo.' ligou!<br>';
    }
    public function desligar(){
        if (!$this->ligado) {
            echo $this->modelo.' já está desligado!<br>';
            return;
        }
        $this->ligado = false;
        echo $this->modelo.' desligou!<br>';
    }
    public function andar(){
        if ($this->combustivel <= 0) {
            echo $this->modelo.' está sem combustivel e desligou!<br>';
            $this->ligado = false;
            return;
        }
        if (!$this->ligado) {
            echo $this->modelo.' não está ligado!<br>';
            return;
        }
        if ($this->andando) {
            echo $this->modelo.' já está andando...!<br>';
            return;
        }
        $this->andando = true;
        $this->combustivel = $this->combustivel - 20;
        echo $this->modelo.' está andando...!<br>';
    }
    public function parar(){
        if (!$this->andando) {
            echo $this->modelo.' já está parado...!<br>';
            return;
        }
        $this->andando = false;
        echo $this->modelo.' está parando...!<br>';
    }
    public function abastecer(){
        if ($this->combustivel === 100) {
            echo $this->modelo.' já está cheio...!<br>';
            return;
        }
        $this->combustivel = 100;
        echo $this->modelo.' está cheio!<br>';
    }
}
$carro = new Veiculo('FORD', 'FIESTA', 'branco', 4);
$carro->ligar();
$carro->andar();
$carro->parar();
$carro->desligar();
$carro->abastecer();