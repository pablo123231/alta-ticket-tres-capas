# Alta de Ticket

Ejercicio PHP para guardar tickets en MySQL o MariaDB.

Capas: presentación en `public/tickets/crear.php`, negocio en `negocio/Ticket.php` y persistencia en `datos/Conexion.php` y `datos/TicketRepository.php`.

Importar `sql/schema.sql`, copiar `config/config.example.php` como `config/config.php`, ajustar los datos y ejecutar:

```bash
php -S localhost:8000 -t public
```

Abrir `http://localhost:8000/tickets/crear.php`.

El INSERT está en `TicketRepository` porque esa clase guarda en la base. El estado `pendiente` está en `Ticket` porque es una regla de negocio, no un campo del formulario.
