<?php

class JugadorIndependiente{

    protected $nombre;
    protected $dorsal;
    protected $categoria;

    public function __construct($nombre, $dorsal, $categoria){

        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->dorsal = $dorsal;
    }

    public function __ToString()
    {
        return 'Nombre: '. $this->nombre . ',  Categoria: ' . $this->categoria . ', Dorsal: ' . $this->dorsal;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

     public function getDorsal()
    {
        return $this->dorsal;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    
}