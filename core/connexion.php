<?php 
// CONNEXION

try {
    // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    var_dump($e);
}
?>