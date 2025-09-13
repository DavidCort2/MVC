<?php

//MOSTRAR LAS ACCIONES QUE PUEDE HACER EL CONTROLADOR

class ProductoController{
    public function mostrarTodos(){
        require_once 'models/productoModel.php';
        $Producto = new Producto();
        $todos_los_productos = $Producto -> conseguirTodos();

        require_once 'views/producto/mostrar-todos.php';

    }

    public function crear(){
        require_once 'views/producto/crear.php';
    }
}