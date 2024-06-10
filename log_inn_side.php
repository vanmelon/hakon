<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Anta at brukeren har logget inn riktig etter en POST-forespørsel
    $email = $_POST['email'];
    $_SESSION['user_email'] = $email;

    // Omled til hovedsiden
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logg Inn</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="email">E-post:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Logg inn</button>
    </form>
</body>
</html>
