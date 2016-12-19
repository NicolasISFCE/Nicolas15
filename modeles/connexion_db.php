<?php

define('USER', 'root');
define('PASSWORD', 'toor');
define('DSN', 'mysql:host=localhost;dbname=cinema;charset=UTF8');
try {
    global $dbh;
    $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $exception) {
    echo "Erreur ! : " . $exception->getMessage() . "<br/>";
    die();
}
?>

