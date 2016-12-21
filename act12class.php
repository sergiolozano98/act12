<?php
/**
 *
 */
class JugarDado {

private $minNumDado=0;
private $maxNumDado=0;
private $tirardado= 0;
private $tiradas=[];

//getters
public function getminNumDado(){
  return $this->minNumDado;
}
public function getmaxNumDado(){
  return $this->maxNumDado;
}
//setters
public function setminNumDado($minNumDado){
  if ($minNumDado<0) {
    $this->minNumDado=0;
  }else {
    $this->minNumDado=$minNumDado;
  }
}
public function setmaxNumDado($maxNumDado){
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }else {
    $this->maxNumDado=$maxNumDado;
  }
}

public function tirardado()
{
 //Se pone en el orden siguiente , se realiza la tirada se guarda y por ultimo te devuelve  la tirada.
  $tirada = rand($this->minNumDado,$this->maxNumDado);
  $this->guardarTirada($tirada);
  return $tirada;
}

public function guardarTirada($tirada){
  //esto añade al array la tirada $this->tiradas[]=$tirada
  $this->tiradas[]=$tirada;
}
public function imprimirTiradas(){
  print_r($this->tiradas);
}
//array_sum Recorre el array y suma todos los valores.
public function imprimirmedias(){
  $media=array_sum($this->tiradas)/count($this->tiradas);

  echo "la media de todas las tiradas son:".round($media);

}


}







 ?>
