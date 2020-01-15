<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    // Atributos
    private $matricula;
    private $curso;
    
    //Metodos
    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    //Métodos Especiais
    public function getMatricula(){
        return $this->matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

}