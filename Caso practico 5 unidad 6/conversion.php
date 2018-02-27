<?php

class conversion
{
  private $numero;

  public function setNumero($numero){
    $this->numero=$numero;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function eurosLibras(){
    return $this->numero*0.879133745;
  }

  public function eurosDolares(){
    return $this->numero*1.22393;
  }

  public function librasEuros(){
    return $this->numero*1.13748335;
  }

  public function librasDolares(){
    return $this->numero*1.3922;
  }

  public function dolaresEuros(){
    return $this->numero*0.81704019;
  }

  public function dolaresLibras(){
    return $this->numero*0.718287602;
  }

}

 ?>
