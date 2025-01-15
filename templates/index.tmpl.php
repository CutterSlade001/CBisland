<?php


?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to CBisland</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<div class="defaultspan">
    
    <h1><?= $welcomeMsg ?? 'Hallo' ?></h1>
    <h2>  Bitte einloggen oder Account erstellen.</h2>
    <form method="POST" action="">

        <input type="text" name="username" value="Username" required>
        <input type="password" name="password" value="Passwort" required><br>
        <input type="submit" value="Anmelden">
        <input type="reset" value="reset form">
        
    </form>
</div>
</body>
</html>
