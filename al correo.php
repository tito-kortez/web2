<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $comentarios = $_POST['comentarios'];

    $to = "tu_correo@example.com"; // Cambia esto a tu correo
    $subject = "Nuevo formulario enviado";
    $body = "Nombre: $nombre\nEmail: $email\nFecha: $fecha\nCantidad: $cantidad\nComentarios: $comentarios";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
