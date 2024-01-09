<?php


class Cartel extends Carta {

  private Carta $borde;

  private Carta $color;
  private Carta $efecto;
  private Carta $mensaje;

  public function __construct(String $tipo, int $puntos, Carta $borde, Carta $color, Carta $efecto, Carta $mensaje){
    parent::__construct($tipo,$puntos);
    $this->borde = $borde;
    $this->color = $color;
    $this->efecto=$efecto;
    $this->mensaje=$mensaje;
  }

  function obtenerPuntos(){
    return parent::obtenerPuntos();
  }


}