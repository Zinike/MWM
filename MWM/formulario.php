<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Crea el cuerpo del mensaje
    $body = "Nombre: $nombre\nEmail: $email";

    // Establece las cabeceras del mensaje
    $headers = "From: Tu Nombre <tuemail@example.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el mensaje
    $to = 'marcoszinga94@gmail.com';
    $subject = 'Nuevo formulario enviado';
    if (mail($to, $subject, $body, $headers)) {
        echo "El formulario ha sido enviado. Gracias por contactarnos.";
    } else {
        echo "Hubo un error al enviar el formulario. Por favor, intenta nuevamente más tarde.";
    }
}
?>
