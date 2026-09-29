<?php

// Capa de presentación.
require_once __DIR__ . '/../../datos/Conexion.php';
require_once __DIR__ . '/../../negocio/Ticket.php';
require_once __DIR__ . '/../../datos/TicketRepository.php';

$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $ticket = new Ticket($_POST['titulo'], $_POST['descripcion']);
        $conexion = Conexion::obtener();
        $repositorio = new TicketRepository($conexion);
        $repositorio->guardar($ticket);

        $mensaje = 'Ticket creado correctamente.';
    } catch (Exception $e) {
        $mensaje = 'No se pudo crear el ticket.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Ticket</title>
</head>
<body>
    <h1>Alta de Ticket</h1>

    <?php if ($mensaje != '') { ?>
        <p><?php echo $mensaje; ?></p>
    <?php } ?>

    <form method="post">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

        <button type="submit">Crear ticket</button>
    </form>
</body>
</html>
