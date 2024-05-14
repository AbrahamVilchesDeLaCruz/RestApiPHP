<?php 

$url = $_SERVER['REQUEST_URI'];

match ($url) {
    '/api/tasks' => require_once 'controller/tasks.php',
    default      => print_r($url . "   Comprueba tu url!!!!")
}

?>