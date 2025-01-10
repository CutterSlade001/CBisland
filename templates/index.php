<html>
<head>
    <title>Login to CBisland</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<div class="defaultspan">
    <h2>Bitte einloggen, lieber <?= $name ?> oder Account erstellen.</h2>
    <form method="POST" action="<?= BASE_URL ?>/login.php">

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Passwort" required><br>
        <input type="submit" value="Anmelden">
        <input type="reset" value="reset form">
        
    </form>
</div>
</body>
</html>
