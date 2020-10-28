<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'turismo_real');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8mb4", USER, PASSWORD);
} catch (PDOException $e) {
    echo '<p class="error">Error!</p>';
}
?>