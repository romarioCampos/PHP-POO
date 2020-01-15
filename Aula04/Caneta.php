<?php

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;

    public function __construct($m, $p, $c){
        $this->modelo = $m;
        $this->ponta = $p;
        $this->cor = $c;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
}