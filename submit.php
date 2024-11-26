<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Указываем email, куда отправить письмо
    $to = "your-email@example.com";
    $subject = "Contact Form Submission";

    // Формируем тело письма
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Заголовки письма
    $headers = "From: $email";

    // Отправляем письмо
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, $name. Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
