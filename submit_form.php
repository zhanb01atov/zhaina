<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "aaaulet03@gmail.com";  // Замените на ваш email
    $subject = "Новое сообщение с вашего сайта";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>
