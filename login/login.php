<?php
// Beispielhafte Benutzer- und E-Mail-Daten
$valid_users = [
    "test" => ["password" => "test", "email" => "info.awesomeai@gmail.com"],
    "test24" => ["password" => "test24", "email" => "info.awesomeai@gmail.com"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen, ob alle erwarteten POST-Daten gesetzt sind
    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // Überprüfen, ob der Benutzername existiert und die Anmeldedaten stimmen
        if (isset($valid_users[$username]) && $valid_users[$username]["password"] === $password && $valid_users[$username]["email"] === $email) {
            header("Location: free-domain.html");
            exit();
        } else {
            echo "Ungültige Anmeldedaten!";
        }
    } else {
        echo "Bitte füllen Sie alle Felder aus!";
    }
}
?>
