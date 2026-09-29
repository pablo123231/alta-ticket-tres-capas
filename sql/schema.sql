-- Persistencia: base y tabla.
CREATE DATABASE IF NOT EXISTS tickets_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE tickets_db;

CREATE TABLE IF NOT EXISTS ticket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    estado VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO ticket (titulo, descripcion, estado) VALUES
    ('Revisar acceso', 'No es posible ingresar al panel de usuarios.', 'pendiente'),
    ('Actualizar manual', 'Se está preparando una versión actualizada del manual.', 'en proceso'),
    ('Corregir enlace', 'El enlace de contacto ya fue corregido.', 'resuelto');
