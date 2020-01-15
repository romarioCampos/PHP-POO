<?php
require_once 'Aluno.php';

class Bolsista extends Aluno{
    // Atributos
    private $bolsa;

    //Métodos
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }

    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }

    //Método Especiais
    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}