<?php

class ContaBanco{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }else if($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Conta ainda tem dinheiro, não posso fechá-la!";
        }else if($this->getSaldo() < 0){
            echo "Conta está em débito. Impossível ecerrar!";
        }else{
            $this->setStatus(false);
            echo "Conta de " . $this->getDono() . "fechada com sucesso";
        }
    }

    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
        }else{
            echo "Impossível depositar";
        }
    }

    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo()) - $v;
                echo "<p>Saque de R$ $v autorizado na conta de" .$this->getDono()."</p>";
            }else{
                echo "Saldo insuficiente";
            }
        }else{
            echo "Impossivel sacar";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        }else if ($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
        }else{
            echo "<p>Não posso cobrar.</p>";
        }
    }

    // Metodos Especiais
    public function __constructor(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    // Metodos Getters e Setters

    //numConta
    function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    function getNumConta(){
        return $this->numConta;
    }

    //Tipo
    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function getTipo(){
        return $this->tipo;
    }

    //Dono
    function setDono($dono){
        $this->$dono = $dono;
    }

    function getDono(){
        return $this->dono;
    }

    // Saldo
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    function getSaldo(){
        return $this->saldo;
    }

    // Status
    function setStatus($status){
        $this->status = $status;
    }

    function getStatus(){
        return $this->status;
    }
}

?>