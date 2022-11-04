<?php


class Caneta {
    private string $modelo;
    private float $ponta;
    private string $cor;
    protected bool $tampada;
    
    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->tampada=true;
        
    }
    
    function tampar(){
        $this->tampada = true;
        return 'está tampada';
    }
    
    function destampar(){
        $this->tampada = false;
        return 'está destampada';
        
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    function setCor($cor): void {
        $this->cor = $cor;
    }

    function setTampada($tampada): void {
        $this->tampada = $tampada;
    }



}
