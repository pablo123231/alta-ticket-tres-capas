<?php

// Capa de persistencia: guarda tickets.
require_once __DIR__ . '/../negocio/Ticket.php';

class TicketRepository
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardar($ticket)
    {
        $consulta = $this->conexion->prepare('INSERT INTO ticket (titulo, descripcion, estado) VALUES (?, ?, ?)');
        $consulta->execute(array(
            $ticket->titulo,
            $ticket->descripcion,
            $ticket->estado
        ));
    }
}
