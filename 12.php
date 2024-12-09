<?php
include 'includes/header.php';

// clases abstractas: es una clase que no se puede instanciar
// Metodos estaticos: son metodos que no requieren de una instancia para acceder a ellos
abstract class Persona{
    
    protected static $nombre; // ATRIBUTO ESTATICO
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre,$apellido,$email,$telefono){
        self::$nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> email = $email;
        $this -> telefono = $telefono;
    }
    public function mostrarinfo(){
        echo $this->nombre . " ". $this->apellido." " .$this->email; 
    }

    public function gettelefono(){
        return $this->telefono;
    }
    public function setapellido($apellido){
       return $this->apellido = $apellido;
   }
}
class Empleado extends Persona{

    protected $codigo;
    protected $departamento;

    public function __construct($nombre,$apellido,$email,$telefono,$codigo, $departamento){
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this -> codigo = $codigo;
        $this -> departamento = $departamento;
    }

    public static function setEmpleado(){
        echo "Desde metodo estatico";
    }
    public static function getnombre(){
        return self::$nombre;
    }
}   

// Empleado::setEmpleado();


$juan = new Empleado('Juan','Torrez','juan@empresa.com',784342,006,"ti"); // esta es la instancia de la clase
echo "<pre>";
var_dump($juan); //var_dump es una funcion que existe en PHP
echo "</pre><br>";

echo $juan::getnombre();

