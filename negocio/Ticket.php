<?php

// Capa de negocio.
class Ticket
{
    public $titulo;
    public $descripcion;
    public $estado;

    public function __construct($titulo, $descripcion)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = 'pendiente';
    }
}
