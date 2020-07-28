<?php



class Pelicula


{

    private $titulo;
    public $descripcion;


    public function __contruct(string $titulo, string $descripcion)


    {

        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }
}
