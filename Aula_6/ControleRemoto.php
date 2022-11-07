<?php


require_once('Controlador.php');

class ControleRemoto implements Controlador{
    private int $volume;
    private bool $tocando;
    private bool $ligado;
    
    //Métodos especiais
    
    function __construct() {
        $this->volume = 50;
        $this->tocando = false;
        $this->ligado = false;
    }
    
    function getVolume(): int {
        return $this->volume;
    }

    function getTocando(): bool {
        return $this->tocando;
    }

    function getLigado(): bool {
        return $this->ligado;
    }

    function setVolume(int $volume): void {
        $this->volume = $volume;
    }

    function setTocando(bool $tocando): void {
        $this->tocando = $tocando;
    }

    function setLigado(bool $ligado): void {
        $this->ligado = $ligado;
    }
    
    //Métodos principais

    
     public function ligar() {
        $this->setLigado(true);
        
    }

    public function desligar() {
        $this->setLigado(false);
        
    }
    
     public function abrirMenu() {
         
         echo "<br>Está ligado?". ($this->getLigado()?"sim":"Não");
         echo "<br>Está tocando?". ($this->getTocando()?"sim":"Não");
         echo "<br>Volume:". $this->getVolume();
         
         for($i=0; $i<=$this->getVolume; $i+=10){
             echo"|";
             
             
         }
         echo "<br>";
        
    }

    public function fecharMenu() {
        echo "fechando menu...";
        
    }

    public function ligarMudo() {
          if($this->getLigado()&& $this->getVolume()>0){
            $this->setVolume(0);
        }
        
        
    }
    
    public function desligarMudo() {
        if($this->getLigado()&& $this->getVolume()==0){
            $this->setVolume(50);
        }
        
        
    }

    public function maisVolume() {
          if($this->getLigado()){
            $this->setLigado($this->getVolume()+5);
        }
        
    }

    public function menosVolume() {
          if($this->getLigado()){
            $this->setLigado($this->getVolume()-5);
        }
        
    }

    public function pause() {
        
        if($this->getLigado()&& ($this->getTocando())){
            $this->setTocando(false);
            
        }
        
    }

    public function play() {
         if($this->getLigado()&& !($this->getTocando())){
            $this->setTocando(true);
            
        }
        
    }

}
