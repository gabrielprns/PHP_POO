<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author Usuario
 */
class Conta {
    public int $numconta;
    protected string $tipo;
    private string $dono;
    private float $saldo;
    private bool $status;
    
    function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
        echo '<p> Conta criada com sucesso! </p> ';
    }
    
    //Métodos especiais
    
    function getNumconta(): int {
        return $this->numconta;
    }

    function getTipo(): string {
        return $this->tipo;
    }

    function getDono(): string {
        return $this->dono;
    }

    function getSaldo(): float {
        return $this->saldo;
    }

    function getStatus(): bool {
        return $this->status;
    }

    function setNumconta(int $numconta): void {
        $this->numconta = $numconta;
    }

    function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    function setDono(string $dono): void {
        $this->dono = $dono;
    }

    function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    function setStatus(bool $status): void {
        $this->status = $status;
    }

    //Métodos
    
    public function abrirConta($t){
        $this->setStatus(true);
        $this->setTipo($t);
        
        if($t=='CC'){
           $this->setSaldo(50);
           
        }else if($t=='CP'){
            $this->setSaldo(150);
            
        }
        
        
    }
    
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo '<p> Não é possível realizar o fechamento da conta, pois o saldo é positivo </p>';
            
        }else if($this->getSaldo() < 0){
            echo '<p> Não é possível realizar o fechamento da conta, pois está em débito </p>';
        }else{
            $this->setStatus(false);
        }
        
        
    }
    
    public function depositar($v){
        if($this->getstatus()){
            $this->setsaldo($this->getSaldo()+$v);
            echo "<p> Depósito de $v R$ autorizado na conta de " . $this->getDono() . "</p>" ;
            
                
            
            
        }else{
            echo "<p> Conta Fechada. Não consigo depositar </p>";
            
        }}
    
    public function sacar($v){
        
        if($this->getstatus()){
            if($this->getSaldo()>$v){
                $this->setsaldo($this->getSaldo()-$v);
                echo "<p> Saque de $v R$ autorizado na conta de " . $this->getDono() . "</p>" ;
                
            }else{
                echo "<p> saldo insuficiente para saque </p>";
                
            }
            
        }else{
            echo "<p> Não é possível sacar de uma conta fechada </p>";
            
        }}
    
    public function pagarMensal(){
        if($this->getStatus()){
            if ($this->getTipo()=="CC"){
                $v=12;
                $this->setSaldo($this->getSaldo()-$v);
            
            }else if($this->getTipo()=="CP"){
                $v=20;
                $this->setSaldo($this->getSaldo()-$v);
            
            }
            echo "<p> Mensalidade de $v R$ debitada na conta de " . $this->getDono() . "</p>" ;
            
            }else{
                echo '<p> Problemas com a conta, não posso cobrar. </p>';
            }
        
        
        
    }
    
}
