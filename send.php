<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'maurizio.vogel@discoveri.de'; // Deine E-Mail-Adresse
    $subject = 'Neue Nachricht von deiner Webseite';
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    header("Location: index.html");
    exit();
}
