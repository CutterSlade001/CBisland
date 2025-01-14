<?php declare(strict_types=1);

/**
 * 
 * hier beginnt dis spiel
 * 
 * 
 */

require dirname(__DIR__) . '/bootstrap.php';



if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: );
}
