<?php

// Capa de persistencia: conexión a la base.
class Conexion
{
    public static function obtener()
    {
        $config = require __DIR__ . '/../config/config.php';

        $dsn = 'mysql:host=' . $config['host'] .
            ';port=' . $config['puerto'] .
            ';dbname=' . $config['base_datos'] .
            ';charset=' . $config['charset'];

        return new PDO($dsn, $config['usuario'], $config['contrasena'], array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
    }
}
