<?php

class DB{
    protected $nombre;

    public function __construct($nombre){
        $this -> nombre = $nombre;
    }
    public function guardar(){
        echo "almacenando...." . $this->nombre;
    }
}
