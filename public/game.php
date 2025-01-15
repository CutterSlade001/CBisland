<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';



error_log('Aufruf pubplic game.php');

render('game.php', [
    'name' => 'marcus',
    'age' => 22,
    'bkgimg' => 'SQL?', 
    
]); 
 
 
