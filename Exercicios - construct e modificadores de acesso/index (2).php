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
    function getRaca(){
        return $this->raça;
    }
    function getTipo(){
        return $this->tipo;
    }
    function getCor(){
        return $this->cor;
    }
    public function falar(){
        echo $this->tipo.' está falando!<br>';
    }
    public function pular(){
        echo $this->tipo.' está pulando!<br>';
    }
}

class Peixe extends Animal{
    function __construct($raça, $tipo, $cor){
        parent::__construct($raça, $tipo, $cor);
    }
    function nadar(){
        echo parent::getTipo().' nadando';
    }
    function parar(){
        echo parent::getTipo().' parando';
    }
}
$anim = new Peixe('peixe', 'baiacu', 'marrom');
$anim->nadar();