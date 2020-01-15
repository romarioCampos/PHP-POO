<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    // Atributo
    protected $corPelo;

    //Métodos
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }

    //Métodos Especiais
    public function getCorPelo(){
        return $this->corPelo;
    }

    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}