<?php
session_start();

// Aktiverer feilrapportering
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

// registrering av ny bruker
if (isset($_POST['register'])) {
    $epost = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = password_hash(filter_input(INPUT_POST, 'passord', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
    
    try {
        if(empty($epost) || empty($password)){
            echo 'Fyll inn alle felter';
        } else {
            // sjekker om epost finnes
            $sth = $pdo->prepare('SELECT * FROM brukere WHERE epost = ?');
            $sth->execute([$epost]);
            $user = $sth->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                echo "Eposten er allerede i bruk.";
            } else {
                // Oppretter ny bruker
                $sth = $pdo->prepare('INSERT INTO brukere (epost, passord) VALUES (?, ?)');
                if ($sth->execute([$epost, $password])) {
                    // Brukeren ble registrert, omdiriger til en annen side for å unngå form re-submission
                    header("Location: index.php");
                    exit;
                }
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrering</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="close-button" onclick="goToIndex()"></div>
    <div class="login-container">
        <form method="post" class="login-form">
            <h2>Registrer deg</h2>
            <label>E-post <input type="email" name="email" required></label>
            <label>Passord <input type="password" name="passord" required></label>
            <input type="submit" name="register" value="Registrer">
        </form>
    </div>

    <script>
        function goToIndex() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
