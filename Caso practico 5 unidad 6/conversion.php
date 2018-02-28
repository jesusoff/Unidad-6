<?php
class conversion
{
  private $numero;
  //set de la variable numero
  public function setNumero($numero){
    $this->numero=$numero;
  }
  //get de la variable numero
  public function getNumero(){
    return $this->numero;
  }
  //conversion de euros a libras
  public function eurosLibras(){
    return $this->numero*0.879133745;
  }
  //conversion de euros a dolares
  public function eurosDolares(){
    return $this->numero*1.22393;
  }
  //conversion de libras a euros
  public function librasEuros(){
    return $this->numero*1.13748335;
  }
  //conversion de libras a dolares
  public function librasDolares(){
    return $this->numero*1.3922;
  }
  //conversion de dolares a euros
  public function dolaresEuros(){
    return $this->numero*0.81704019;
  }
  //conversion de dolares a libras
  public function dolaresLibras(){
    return $this->numero*0.718287602;
  }
}
 ?>
