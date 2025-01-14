<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';

if (!session_id()) {
    session_start();
}

/**
 * Jemand ist eingelogged und ruft diese Seite versehentlich auf => redirect auf Startseite.
 */
if (isLoggedIn()) {
    redirect(BASE_URL);
}


/**
 * Jemand ist nicht eingelogged.....
 * 
 * 
 * 
 * $sql = "INSERT INTO users(username,password_hash,regtimedate)" . "VALUES('username','password',NOW())";
 * mysqli_query($con, $sql);
 */


/** 
 *
 * Formular wurde abgeschickt 
 */


$rules = [
    'username' => ['min' => 5, 'max' => 20],
    'password' => ['min' => 5, 'max' => 20],
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    
    $user = trim($user);
    $pass = trim($pass);
    
    if (mb_strlen($user) <= 5 || mb_strlen($pass) <= 6) {
        render('login.php', [
            'title'   => 'Login to CBisland', 
            'message' => 'Nutzername oder Passwort falsch',
        ]);
        
        exit;
    }
    
    
    $con  = connect();
    $sql  = "SELECT * FROM users WHERE username = ? and password = ?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$user, $pass]); // TODO: Hashing
    
    $row = $stmt->fetch();
    
    if (! $row) {
        render('login.php', [
            'title'   => 'Login to CBisland',
            'message' => 'Nutzername oder Passwort falsch',
        ]);

        exit;
    }

    $_SESSION['username'] = $row['username'];
    $_SESSION['login']    = true;

    redirect(BASE_URL);
}


/**
 * Formular anzeigen...
 */

render('login.php', [
    'title'   => 'Login to CBisland',
    'message' => 'Bitte einloggen, oder Account erstellen'
]);
