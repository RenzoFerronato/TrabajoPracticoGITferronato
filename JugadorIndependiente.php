<?php

class JugadorIndependiente{

    protected $nombre;
    protected $dorsal;
    protected $categoria;
    protected $posicion;

    public function __construct($nombre, $dorsal, $categoria, $posicion){

        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->dorsal = $dorsal;
        $this->posicion = $posicion;
    }

    public function __ToString()
    {
        return 'Nombre: '. $this->nombre . ',  Categoria: ' . $this->categoria . ', Dorsal: ' . $this->dorsal. ' Posición: '.$this->posicion  ; 
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
    
    public function getPosicion()
    {
        return $this->posicion;
    }
}