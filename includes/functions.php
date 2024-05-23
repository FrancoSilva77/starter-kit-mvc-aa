<?php
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function debuguear($variable)
{
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}

// Escapa / Sanitizar el HTML
function s($html): string
{
  $s = htmlspecialchars($html);
  return $s;
}

// Valida tipo de petición
function validateContentType($type)
{
  $types = ['vendedor', 'propiedad'];
  return in_array($type, $types);
}

// Muestra los mensajes
function mostrarNotificacion($code)
{
  $message = '';

  switch ($code) {
    case 1:
      $message = 'Creada Correctamente';
      break;
    case 2:
      $message = 'Actualizada Correctamente';
      break;
    case 3:
      $message = 'Eliminada Correctamente';
      break;
    default:
      $message = false;
      break;
  }
  return $message;
}

function validateORedirect(string $url)
{
  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if (!$id) {
    header("Location: ${url} ");
  }

  return $id;
}

function isAuth(): void
{
  if (!isset($_SESSION['usuario'])) {
    header('Location: /');
  }
}
