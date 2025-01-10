<?php
declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';



$con = mysqli_connect(DB['host'], DB['user'], DB['pass'], DB['name']);
$sql = "INSERT INTO users(username,password_hash)" . "VALUES('username','password')";
mysqli_query($con, $sql);

/*const DB = [
    'name'    => 'cbisland', // Database name
    'pass'    => '',
    'user'    => 'root',
    'host'    => '127.0.0.1',
    'port'    => 3306,
    'options' => [],
];*/
?>
Hier soll das Form in die DB übergeben werden.
