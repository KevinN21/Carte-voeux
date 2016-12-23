<?php
  $message = "Joyeuse fêtes de fin d'année : \n\n http://kevinn.student.codeur.online/carte-voeux \n\n Cordialement Kevin";
  $headers = 'From: Kevin <Kevin.n@codeur.online>' . "\r\n" .
 'Reply-To: Kevin.n@codeur.online' . "\r\n" .
 'X-Mailer: PHP/' . "\r\n" .
 "Content-type: text/plain; charset=UTF-8" . "\r\n"; phpversion();


mail($_REQUEST['email'], 'Joyeuses fêtes' , $message , $headers);

echo "L'email a été envoyé !";

header('Location: http://kevinn.student.codeur.online/carte-voeux');
exit;
?>
