<?php

$mail_to_1 = 'info@notonomika.ru';
$mail_to_2 = 'a.blackbrow@yandex.ru';
$mail_to_3 = 'elena.tomazi@yandex.ru';
$email_from = 'info@notonomika.ru';
$name_from = 'Онлайн менеджер';
$subject = 'Заявка с сайта';

$message = "Вам пришла новая заявка с сайта</strong>: \n" .
          "Имя: " . strip_tags(trim($_POST['name'])) . "\n" .
          "Номер телефона: " . strip_tags(trim($_POST['tel']));

$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    "From: " . "=?utf-8?B?" . base64_encode($name_from) . "?=" . "<" . $email_from . ">" .  PHP_EOL .
    "Reply-To: " . $email_from . PHP_EOL;

$mailResult1 = mail($mail_to_1, $subject, $message, $headers);
$mailResult2 = mail($mail_to_2, $subject, $message, $headers);
$mailResult3 = mail($mail_to_3, $subject, $message, $headers);

if ($mailResult1 && $mailResult2 && $mailResult3) {
  header('location: thanks');
}