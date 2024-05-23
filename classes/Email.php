<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email
{

  public function contact($data)
  {
    // create a new object
    $mail = new PHPMailer();
    // configure an SMTP
    $mail->isSMTP();
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USER'];
    $mail->Password = $_ENV['MAIL_PASS'];
    $mail->SMTPSecure = 'tls';
    $mail->Port = $_ENV['MAIL_PORT'];

    $mail->setFrom('admin@bienesraices.com', $data);
    $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
    $mail->Subject = 'Tienes un Nuevo Email';
    // Set HTML 
    $mail->isHTML(TRUE);
    $mail->CharSet = 'UTF-8';

    $contenido = '<html>';
    $contenido .= "<p><strong>Has Recibido un email:</strong></p>";
    $contenido .= "<p>Nombre: " . $data . "</p>";
    $contenido .= "<p>Mensaje: " . $data . "</p>";
    $contenido .= "<p>Vende o Compra: " . $data . "</p>";
    $contenido .= "<p>Presupuesto o Precio: $" . $data . "</p>";

    if ($data === 'telefono') {
      $contenido .= "<p>Eligió ser Contactado por Teléfono:</p>";
      $contenido .= "<p>Su teléfono es: " .  $data . " </p>";
      $contenido .= "<p>En la Fecha y hora: " . $data . " - " . $data  . " Horas</p>";
    } else {
      $contenido .= "<p>Eligio ser Contactado por Email:</p>";
      $contenido .= "<p>Su Email  es: " .  $data . " </p>";
    }

    $contenido .= '</html>';
    $mail->Body = $contenido;
    $mail->AltBody = 'Esto es texto alternativo';

    $mail->send();
  }
}
