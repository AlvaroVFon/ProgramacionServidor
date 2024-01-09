<?php
declare(strict_types=1);

class Carta{

  //propiedades

private String $tipo;
private int $puntos;

public function __construct(String $tipo, int $puntos){
  $this->tipo = $tipo ;
  $this->puntos = $puntos;
}

//getters/setters

function obternerTipo(){
  return $this->tipo;
}

function obtenerPuntos(){
  return $this->puntos;
}

function setTipo(String $tipo){
  $this->tipo = $tipo;
}

function setPuntos(int $puntos){
  $this->puntos = $puntos;
}
}