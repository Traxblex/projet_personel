<?php
try {
    $user='root';
    $pass='';
    $host = 'localhost';
    $db='cours_sport';
    $host= "localhost";
    $dsn="mysql:host=$host;dbname=$db";
    $bdd = new PDO($dsn,$user, $pass);
} catch (PDOException $e) {
    echo"Erreur de connexion : " .$e -> getMessage() .
        '<br>';
    die();

}
