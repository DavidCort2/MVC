<?php

class Producto{
    public $nombreProducto;
    public $Descripcion;

    function getnombreProducto(){
        return $this -> nombreProducto;
    }

        function getDescripcion(){
        return $this -> Descripcion;
    }

    function setnombreProducto($nombreProducto){
        $this -> nombreProducto = $nombreProducto;
    }

        function setDescripcion($Descripcion){
        $this -> Descripcion = $Descripcion;
    }

    public function conseguirTodos(){
        echo "IMPRIMIENDO TODOS LOS PRODUCTOS..";
    }

}
