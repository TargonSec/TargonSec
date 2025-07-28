<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $company = htmlspecialchars($_POST["company"]);
    $service = htmlspecialchars($_POST["service"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "targonsec@gmail.com";
    $subject = "Nuevo mensaje de contacto de $name";
    $body = "Nombre: $name\nCorreo: $email\nEmpresa: $company\nServicio: $service\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
            alert('Mensaje enviado con éxito. Gracias por contactarnos.');
            window.location.href = 'index.html'; // Cambia por tu página de agradecimiento si quieres
        </script>";
    } else {
        echo "<script>
            alert('Hubo un error al enviar el mensaje. Inténtalo más tarde.');
            window.history.back();
        </script>";
    }
}
?>
