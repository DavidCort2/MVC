<?php
//programacion orientada a objetos = POO
//Clases = un molde para crear mas objetos del mismo tipo

 class Carro{
//     //atributos o propiedades (variables)
//     public $color;
//     public $marca;
//     public $modelo;
//     public $velocidad;
//     public $caballaje;
//     public $puestos;

public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$puestos)
{
    $this -> color = $color;
    $this -> marca = $marca;
    $this -> modelo = $modelo;
    $this -> velocidad = $velocidad;
    $this -> caballaje = $caballaje;
    $this -> puestos = $puestos;
}
}