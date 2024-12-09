<?php
include 'includes/header.php';
// TIPADO EN PHP
class Empleado{
    
    public $nombre;
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

    // Metodo
    public function nombreEmpleado(){
        echo $this -> nombre . " " .$this->apellido;
    }
    public function departamentoEmpleado(){
        echo $this -> nombre ." esta en el departamento ". $this->departamento; 
    }
}
// $empleado es el objeto para la instancia
$juan = new Empleado('Juan','Torrez','TI','juan@empresa.com',006); // esta es la instancia de la clase

// $juan->nombreEmpleado(); forma de llamar al método
$karen = new Empleado('karen','Lopez','Marketing','karen@empresa.com',007); // esta es la instancia de la clas e

// se pone echo "<pre>"; entrega bien formateado los objetos que se crean a partir de esta clase 
echo "<pre>";
var_dump($juan); //var_dump es una funcion que existe en PHP
echo "</pre>";

echo "<pre>";
var_dump($karen); //var_dump es una funcion que existe en PHP
echo "</pre>";

// echo $juan->nombreEmpleado(); Forma de llamar al metodo
// echo $karen->nombreEmpleado(); Forma de llamar al metodo

echo $juan->departamentoEmpleado();
