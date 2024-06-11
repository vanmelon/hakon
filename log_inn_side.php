<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="close-button" onclick="goToIndex()"></div>
    <div class="login-container">
        <form method="post" class="login-form">
            <h2>Login</h2>
            <label>E-post eller Mobil <input type="email" name="epost" required></label>
            <label>Passord <input type="password" name="password" required></label>
            <input type="submit" name="login" value="Login">
            <p>har ikke bruker? <a href="registrering.php">login</a></p>
        </form>
    </div>

    <?php
    session_start();

    // Angi databasedetaljene her

    $user = "hakon";
    $password = "Tskjorte73";
    $database = "example_database";
    $table = "todo_list";

    // brukeren logger seg inn
    if (isset($_POST['login'])) {
        $epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_EMAIL);
        $passord = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        // sjekker om at eposten finnes
        $sth = $pdo->prepare('SELECT * FROM prosjektledere WHERE epost = ?');
        $sth->execute([$epost]);
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        // sjekker om både epost og passord matcher det i databasen
        if ($user && password_verify($passord, $user['passord'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_epost'] = $user['epost'];
            header("Location: dashboard.php");
            exit;
            // hvis brukeren skrev noe feil 
        } else {
            echo "Feil brukernavn eller passord.";
        }
    }
    ?>

<script>
        function goToIndex() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
