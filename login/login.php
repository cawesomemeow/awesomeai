<?php
// Beispielhafte Benutzer- und E-Mail-Daten
$valid_users = [
    "test" => ["password" => "test", "email" => "info.awesomeai@gmail.com"],
    "test24" => ["password" => "test24", "email" => "info.awesomeai@gmail.com"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($valid_users[$username])) {
        if ($valid_users[$username]["password"] === $password && $valid_users[$username]["email"] === $email) {
            header("Location: free-domain.html");
            exit();
        } else {
            echo "Ungültige Anmeldedaten!";
        }
    } else {
        echo "Ungültige Anmeldedaten!";
    }
}
?>
