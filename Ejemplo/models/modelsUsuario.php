<?php

require_once 'config/database.php';

class Usuario{

    public $id_usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    private $db;

    public function __construct(){
        $this -> db = database::conectar();
    }

    //GETTER
    function getId_usuario(){
        return $this -> id_usuario;
    }

    function getNombre(){
        return $this -> nombre;
    }

        function getApellidos(){
        return $this -> apellido;
    }

        function getEmail(){
        return $this -> email;
    }

        function getPassword(){
        return $this -> password;
    }

    //SETTER
    function setId_usuario($id_usuario){
        $this -> id_usuario = $id_usuario;
    }

    function setNombre($nombre){
        $this -> nombre = $nombre;
    }

        function setApellidos($apellido){
        $this -> apellido = $apellido;
    }

        function setEmail($email){
        $this -> email = $email;
    }

        function setPassword($password){
        $this -> password = $password;
    }

    //metodo que consulte la bd
    public function conseguirTodos(){

        // var_dump($this -> db);
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;

        // echo "IMPRIMIENDO TODOS LOS USUARIOS ACTIVOS...";
    }

    public function crear(){
        $sql = "INSERT INTO t_usuario (id_usuario,nombre,apellido,email,password,id_rol) VALUES({$this->id_usuario},'{$this->nombre}','{$this->apellido}','{$this->email}','{$this->password}', 1);";

        $guardar = $this->db->query($sql);

        return $guardar;
    }
}