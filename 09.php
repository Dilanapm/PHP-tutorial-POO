<?php
include 'includes/header.php';
// TIPADO EN PHP

// Getters y Setters
class Empleado{
    // public puedes acceder desde la clase o desde la instancia y tambien puedes modificarla
    // protected, acceso en la clase
    
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
    // Constructor
    public function __construct( $nombre, $apellido,  $departamento,  $email, $codigo)
    {
         $this -> nombre = $nombre;
         $this -> apellido = $apellido;
         $this -> departamento = $departamento;
         $this -> email = $email;
         $this -> codigo = $codigo;

         // $this->nombreEmpleado();  forma de llamar al metodo  
        }
    /*
        Get - para obtener un valor
        Set - Para modificar un valor
    */
    
    // Metodo
    public function getnombre(){
        return $this->nombre;
    }
    public function setnombre($nombre){
         $this->nombre = $nombre;
    }

    public function getcodigo(){
        return $this->codigo;
    }
    public function setcodigo($codigo){
         $this->codigo = $codigo;
    }
    public function getdepartamento(){
        return $this->departamento;
    }
    public function setdepartamento($departamento){
         $this->departamento = $departamento;
    }
}
// $empleado es el objeto para la instancia
$juan = new Empleado('Juan','Torrez','TI','juan@empresa.com',006); // esta es la instancia de la clase
echo $juan->getnombre();
echo "<br>";
echo $juan->setnombre("nuevo nombre");
echo $juan->getnombre();
// $juan->nombreEmpleado(); forma de llamar al método

// se pone echo "<pre>"; entrega bien formateado los objetos que se crean a partir de esta clase 
echo "<pre>";
var_dump($juan); //var_dump es una funcion que existe en PHP
echo "</pre>";

echo $juan->getdepartamento();