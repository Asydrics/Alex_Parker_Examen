<?php 
// Dispatcher
// 1. charger l'initialisation
    require_once '../core/init.php';
    var_dump($connexion);
// 2. charger le routeur 
    require_once '../app/routers/index.php';
// 3. charger le template 
    require_once '../app/views/templates/index.php';
?>