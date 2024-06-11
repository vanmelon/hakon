<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body id= "login_body">
    <div class="login-container">
        <form method="post" class="login-form">
            <h2>login</h2>
            <label>Login <input type="email" name="epost" required></label>
            <label>Password <input type="password" name="password" required></label>
            <input type="submit" name="login" value="login">
        </form>
    </div>

    <?php
    session_start();

    // Angi databasedetaljene her

    $user = "hakon";
    $password = "Tskjorte73";
    $database = "example_database";
    $table = "todo_list";

    // brukeren loger seg inn
    if (isset($_POST['login'])) {
        $epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_EMAIL);
        $passord = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        //sjeker om at eposten fines
        $sth = $pdo->prepare('SELECT * FROM prosjektledere WHERE epost = ?');
        $sth->execute([$epost]);
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        //sjeker om både epost og passord matsjer det i databasen
        if ($user && password_verify($passord, $user['passord'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_epost'] = $user['epost'];
            header("Location: dashboard.php");
            exit;
            //hvis brukeren skrev noe feil 
        } else {
            echo "Feil brukernavn eller passord.";
        }
    }
    ?>

</body>
</html>
