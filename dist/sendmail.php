<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "cxlxrized.business@gmail.com"; // <-- Hier deine Mail eintragen

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)) {
        echo "<span style='color:#00ff99;'>Danke! Deine Nachricht wurde gesendet.</span>";
    } else {
        echo "<span style='color:#ff5555;'>Fehler: Nachricht konnte nicht gesendet werden.</span>";
    }
}
?>
