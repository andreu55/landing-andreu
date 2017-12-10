<?php

$data['email'] = (isset($_POST['email']) && $_POST['email']) ? $_POST['email'] : 0;
$data['message'] = (isset($_POST['message']) && $_POST['message']) ? $_POST['message'] : 0;

if ($data['email'] && $data['message']) {

  $to      = 'anduwet2@gmail.com';
  $subject = 'Contacto desde andreugarcia.com';
  $message = $data['message'] . " desde " . $data['email'];
  $headers = 'From: info@andreugarcia.com' . "\r\n" .
             'Reply-To: info@andreugarcia.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  echo json_encode($data);
}
