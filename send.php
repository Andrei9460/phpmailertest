<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];

// Настройки
$mail = new PHPMailer;

$mail->isSMTP();
//$mail -> SMTPOptions  =  array (' ssl ' => array ( ' verify_peer ' => false , ' verify_peer_name ' => false , ' allow_self_signed ' => true     ) );
//$mail->Host = 'smtp.yandex.ru';
//$mail->SMTPAuth = true;
//$mail->Username = 'Andrei9460@yandex.ru'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
//$mail->Password = '***'; // Ваш пароль
//$mail->SMTPSecure = 'ssl';
//$mail->Port = 465;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'andrei9460@gmail.com'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = '****'; // Ваш пароль
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('andrei9460@gmail.com'); // Ваш Email
$mail->addAddress('Andrei9460@mail.ru'); // Email получателя
$mail->addAddress('prog4@zavodd.ru'); // Еще один email, если нужно.


                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "Заголовок"; // Заголовок письма
$mail->Body    = "Имя $name . Телефон $number . Почта $email"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>