<?php
include 'includes/header.php';
// TIPADO EN PHP
class Empleado{
    // Constructor usado desde php 8
    //Constructor property promotion
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
}
// $empleado es el objeto para la instancia
$juan = new Empleado('Juan','Torrez','TI','juan@empresa.com',006); // esta es la instancia de la clas e
$karen = new Empleado('karen','Lopez','Marketing','karen@empresa.com',007); // esta es la instancia de la clas e

// se pone echo "<pre>"; entrega bien formateado los objetos que se crean a partir de esta clase 
echo "<pre>";
var_dump($juan); //var_dump es una funcion que existe en PHP
echo "</pre>";

echo "<pre>";
var_dump($karen); //var_dump es una funcion que existe en PHP
echo "</pre>";