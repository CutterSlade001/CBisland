<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';

//if (! session_id()) {
//    session_start();
//}


//if (! isLoggedIn()) {
//    redirect(LOGIN_URL);
//}


if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    
    //exit(var_dump($_POST));
    
    $username= $_POST["username"] ?? 'standard';
    $password_hash= $_POST["password"] ?? 'standard';

    $con  = connect();
    $sql = "INSERT INTO users (username, password_hash, lastlogin) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$username, $password_hash, date(DT_FORMATS['mysql'])]);

    if ($con->affected_rows > 0) {
        print 'Eintrag erfolgreich';
    } else {
        print 'Eintrag nicht erfolgreich';
    }
}


render('index.tmpl.php', [
    'welcomeMsg' => 'Willkommen zum Spiel !',
]);
