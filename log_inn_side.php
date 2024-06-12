<?php
session_start();

// Angi databasedetaljene her
$servername = "localhost";
$username = "hakon";
$password = "Tskjorte73";
$dbname = "blomsterbutikk";

try {
    //kobler til serveren og databasen
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// brukeren logger seg inn
if (isset($_POST['login'])) {
    if (isset($_POST['epost'], $_POST['passord'])) {
        $epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_EMAIL);
        $passord = filter_input(INPUT_POST, 'passord', FILTER_SANITIZE_STRING);

        // sjekker om at eposten finnes
        $sth = $pdo->prepare('SELECT * FROM brukere WHERE epost = ?');
        $sth->execute([$epost]);
        $user = $sth->fetch(PDO::FETCH_ASSOC);

        // sjekker om både epost og passord matcher det i databasen
        if ($user && password_verify($passord, $user['passord'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_epost'] = $user['epost'];
            header("Location: index.php");
            exit;
        } else {
            header("Location: log_inn_side.php?feil=true"); // Omdiriger med feilindikator
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-side</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="close-button" onclick="goToIndex()"></div>
    <div class="login-container">
        <form method="post" class="login-form">
            <h2>Login</h2>
            <label>E-post eller Mobil <input type="email" name="epost" required></label>
            <label>Passord <input type="password" name="passord" required></label>
            <input type="submit" name="login" value="Login">
            <p>har ikke bruker? <a href="registrering.php">registrering</a></p>
        </form>
    </div>

<script>
    function goToIndex() {
        window.location.href = "index.php";
    }
</script>
</body>
</html>
