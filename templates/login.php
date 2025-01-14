<?php 
declare(strict_types=1);

/**
 * @var string $title
 * @var string $message
 * @var string $action   (default is LOGIN_URL)
 */

?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title  ?></title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<div class="defaultspan">
    <h2><?= $message ?></h2>
    <form method="POST" action="<?= $action ?? LOGIN_URL ?>">
        <input type="text" name="username" value="Username" required>
        <input type="password" name="password" value="Passwort" required><br>
        <input type="submit" value="Anmelden">
        <input type="reset" value="reset form">
    </form>
</div>
</body>
</html>
