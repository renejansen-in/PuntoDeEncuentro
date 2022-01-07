<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Naam mag niet blanco zijn.', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'E-mail mag niet blanco zijn.', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Formaat e-mail onjuist.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Onderwerp mag niet blanco zijn.', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Bericht mag niet blanco zijn.', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "info@puntodeencuentro.nl";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Bericht ontvangen!', 'code' => 1));
exit();
?>