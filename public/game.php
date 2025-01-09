<?php declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';



error_log('test');

render('game.php', [
    'name' => 'marcus',
    'age' => 22,
    'bkgimg' => 'SQL?', 
    
]); 
 
    
  
 
