<?php
class caneta{

  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;
   function rabiscar(){
    if($this->tampada==true){
      echo "Não posso rabiscar </br>";
    }else{
      echo "Posso rabiscar </br>";
    }
   }
   function tampar(){
    $this->tampada = true;

   }
   function destampar(){
    $this->tampada = false;
   }
}

?>