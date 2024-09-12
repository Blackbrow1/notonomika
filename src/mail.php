<?php

$mail_to = 'info@notonomika.ru';
$email_from = 'info@notonomika.ru';
$name_from = 'Онлайн менеджер';
$subject = 'Заявка с сайта';

$message = "<strong>Вам пришла новая заявка с сайта</strong>: <br><br>\n" .
          "<strong>Имя: </strong>" . strip_tags(trim($_POST['name'])) . "<br>\n" .
          "<strong>Номер телефона: </strong>" . strip_tags(trim($_POST['tel']));

$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    "From: " . "=?utf-8?B?" . base64_encode($name_from) . "?=" . "<" . $email_from . ">" .  PHP_EOL .
    "Reply-To: " . $email_from . PHP_EOL;

$mailResult = mail($mail_to, $subject, $message, $headers);

if ($mailResult) {
  header('location: thanks');
}
