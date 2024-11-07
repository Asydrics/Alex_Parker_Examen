<?php
if (isset($_GET['posts'])):
    // ROUTE DU DETAIL D'UN POST

    // PATTERN: /posts/id/slug-du-post.html
    // URL: ???
    // CTRL: ???
    // ACTION: ???
    // TITLE: Alex Parker - Title du post
    include_once '../app/routers/posts.php';
else:
    // ROUTE PRINCIPALE

    // ROUTE PAR DEFAUT: liste des posts
    // PATTERN: /
    // CTRL: pagesController
    // ACTION: homeAction
    // TITLE: Alex Parker - Blog
    include_once "../app/controllers/postsController.php";
    \App\Controllers\PostsController\homeAction($connexion);
endif;
?>