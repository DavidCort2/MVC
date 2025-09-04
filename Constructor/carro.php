<?php
//programacion orientada a objetos = POO
//Clases = un molde para crear mas objetos del mismo tipo

class Carro{
    //atributos o propiedades (variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $puestos;


public function __construct()
{
    $this -> color ="Rojo";
    $this -> marca ="Ferrari";
    $this -> modelo ="Aventador";
    $this -> velocidad =500;
    $this -> caballaje = 300;
    $this -> puestos = 2;
}
}