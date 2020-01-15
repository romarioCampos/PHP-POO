<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    //Atributos
    private $login;
    private $totAssistido;

    //Construtor
    function __construct( $nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    //Métodos
    public function assistirMaisUm(){
        $this->totAssistido ++;
    }

    //Métodos Especiais
    function getLogin(){
        return $this->login;
    }

    function getTotAssistido(){
        return $this->totAssistido;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }
}