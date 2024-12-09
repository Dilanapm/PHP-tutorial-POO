<?php
include 'includes/header.php';

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;


$empleado->nombre = "Juan";
$empleado->apellido = "Perez";


echo "<pre>";
var_dump($empleado);
echo "</pre>";


$empleado2 = new Empleado;


$empleado2->nombre = "Villa";
$empleado2->apellido = "Guanajuato";


echo "<pre>";
var_dump($empleado2);
echo "</pre>";
