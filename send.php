<?php
session_start();
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$message    = $_POST['message'];
$to = "antonchigur@gmail.com";
$subject = "Нове повідомлення з Food Book";
$body = "
Ім'я: $first_name
Прізвище: $last_name
Email: $email
Телефон: $phone
Повідомлення:
$message
";
$headers = "Content-type:text/plain:charset=utf-8;";

if (mail($to, $subject, $body, $headers)) {
    $_SESSION['success'] = "Повідомлення успішно відправлено";
} else {
    $_SESSION['error'] = "Помилка відправки. Спробуйте ще раз";
}
header("Location: contacts.php");
exit();
?>