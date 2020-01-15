<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    // Atributos
    private $matr;
    private $curso;

    //Métodos
    public function cancelarMatr(){
        echo "<p>Matricula será cancelada</p>";
    }

    // Métodos Especiais
    public function getMatr(){
        return $this->matr;
    }

    public function setMatr($matr){
        $this->matr = $matr;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }
}