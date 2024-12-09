<?php
include 'includes/header.php';

// Herencia aplicada

class Persona{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre,$apellido,$email,$telefono){
        $this -> nombre = $nombre;
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

    
}   

class Proveedor extends Persona{
    protected $empresa;

    public function __construct($nombre,$apellido,$email,$telefono,$empresa){
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this -> empresa = $empresa;
        
    }
    
}

$empleado = new Empleado("juan","caras","caras@gmail.com",1234455,1,"TI");
echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo $empleado->mostrarinfo(); 
echo "<br>";

$proveedor = new Proveedor("Romero","Carvajal","carvajal@gmail.com",78634323,"TIkTOK");
echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";
echo $proveedor->mostrarinfo(); 
echo "<br>";
echo $proveedor->gettelefono(); 

echo "<br>";
echo $proveedor->setapellido("palabradep"); 