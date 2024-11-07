<?php 
namespace App\Controllers\PostsController;

use \PDO;

// Fonction pour afficher la page d'accueil avec la liste des posts
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

// Fonction pour afficher le détail d'un post spécifique
function showAction(PDO $connexion, int $id)
{
    // 1. Récupérer le post par son ID
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);

    // 2. Afficher la vue
    global $content, $title;

    // Je m'assure que $post['title'] est bien défini et est une chaîne de caractères
    if (isset($post['title']) && is_string($post['title'])) {
        $title = "Alex Parker - " . $post['title'];
    } else {
        $title = "Alex Parker - Blog";
    }

    // Charger la vue du post
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

// Fonction pour afficher le formulaire d'ajout d'un nouveau post
function addFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "Alex Parker -" . ROUTE_POST_ADD_FORM;

    // Charger la vue du formulaire d'ajout
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

// Fonction pour ajouter un nouveau post
function addAction(PDO $connexion, array $data)
{
    include_once "../app/models/postsModel.php";
    $id = \App\Models\PostsModel\createOne($connexion, $data);
    // Rediriger vers la liste des posts après l'ajout
    header('Location: ' . BASE_PUBLIC_URL . 'posts.html');
}

// Fonction pour mettre à jour un post existant
function updateAction(PDO $connexion, int $id, array $data)
{
    include_once '../app/models/postsModel.php';
    $response = \App\Models\PostsModel\updateOneById($connexion, $id, $data);
    // Rediriger vers la liste des posts après la mise à jour
    header('Location: ' . BASE_PUBLIC_URL . 'posts.html');
}

// Fonction pour afficher le formulaire de modification d'un post existant
function editFormAction(PDO $connexion, int $id)
{
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);
    global $content, $title;
    $title = "Alex Parker - " . $post['title'] . ROUTE_POST_EDIT_FORM;
    // Charger la vue du formulaire de modification
    ob_start();
    include '../app/views/posts/editForm.php';
    $content = ob_get_clean();
}

// Fonction pour supprimer un post existant
function deleteAction(PDO $connexion, int $id)
{
    include_once "../app/models/postsModel.php";
    $response = \App\Models\PostsModel\deleteOneById($connexion, $id);
    // Rediriger vers la liste des posts après la suppression
    header('Location: ' . BASE_PUBLIC_URL . 'posts.html');
    exit();
}
?>