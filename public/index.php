<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';



error_log('test');

render('index.php', [
    'name' => 'marcus',
    'age' => 22,
    'loginform' => $_POST,
]);
   
