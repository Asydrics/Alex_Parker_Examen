<?php 
namespace App\Controllers\PostsController;

use \PDO;

function homeAction(PDO $connexion) {
    // 1. Récupérer les posts
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion);
    // 2. Afficher la vue
    global $title, $content;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/home.php';
    $content = ob_get_clean();
}

?>
