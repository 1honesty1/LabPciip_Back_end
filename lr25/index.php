<?php
$to = "recipient@example.com";
$subject = "Тестовое сообщение";
$message = "Привет!\nЭто тестовое письмо, отправленное через PHP.";
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Письмо успешно отправлено.";
} else {
    echo "Ошибка при отправке письма.";
}
?> 