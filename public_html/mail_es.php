<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'El nombre no puede estar en blanco.', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'El correo electrónico no puede estar en blanco.', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Formato de correo electrónico incorrecto.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'El asunto no puede estar en blanco.', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'El mensaje no puede estar en blanco.', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "info@puntodeencuentro.nl";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Mensaje recibido!', 'code' => 1));
exit();
?>