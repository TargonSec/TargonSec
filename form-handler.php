<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $company = htmlspecialchars($_POST["company"]);
  $service = htmlspecialchars($_POST["service"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "tu_correo@gmail.com";
  $subject = "Nuevo mensaje de contacto de $name";
  $body = "Nombre: $name\nCorreo: $email\nEmpresa: $company\nServicio: $service\n\nMensaje:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
