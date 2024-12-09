<?php
include 'includes/header.php';
include 'DB.php';
// Comunicar dos clases
class Empleado{
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;
    // Constructor
    public function __construct( $nombre, $apellido,  $departamento,  $email, $codigo)
    {
         $this -> nombre = $nombre;
         $this -> apellido = $apellido;
         $this -> departamento = $departamento;
         $this -> email = $email;
         $this -> codigo = $codigo;
        }

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

$juan = new Empleado('Juan','Torrez','TI','juan@empresa.com',006); 

$nombre = $juan->getnombre();

echo $nombre;

$db = new DB($nombre);
echo "<br>";
$db ->guardar();