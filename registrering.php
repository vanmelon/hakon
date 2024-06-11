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
    <div class="login-container">
        <form method="post" class="login-form">
            <h2>Registrer deg</h2>
            <label>E-post <input type="email" name="email" required></label>
            <label>Passord <input type="password" name="password" required></label>
            <input type="submit" name="register" value="Registrer">
        </form>
    </div>

    <?php
    session_start();

    // Angi databasedetaljene her
    $servername = "172.20.128.29";
    $username = "root";
    $password = "root";
    $dbname = "prosjekt";

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
        $password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
        
        try {
            if(empty($epost) || empty($password)){
                echo 'Fyll inn alle felter';
            } else {
                // sjekker om epost finnes
                $sth = $pdo->prepare('SELECT * FROM prosjektledere WHERE epost = ?');
                $sth->execute([$epost]);
                $user = $sth->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    echo "Eposten er allerede i bruk.";
                } else {
                    // Oppretter ny bruker
                    $sth = $pdo->prepare('INSERT INTO prosjektledere (epost, passord) VALUES (?, ?)');
                    if ($sth->execute([$epost, $password])) {
                        // Brukeren ble registrert, omdiriger til en annen side for å unngå form re-submission
                        header("Location: etterRegistrering.php");
                        exit;
                    }
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>
</body>
</html>
