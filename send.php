<?php

$data['email'] = (isset($_POST['email']) && $_POST['email']) ? $_POST['email'] : 0;
$data['message'] = (isset($_POST['message']) && $_POST['message']) ? $_POST['message'] : 0;

if ($data['email'] && $data['message']) {

  $to      = 'anduwet2@gmail.com';
  $subject = 'the subject';
  $message = 'hello';
  $headers = 'From: webmaster@example.com' . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  echo json_encode($data);
}
