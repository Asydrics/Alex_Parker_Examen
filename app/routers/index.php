<?php 
    // ROUTE PRINCIPALE
    
    // ROUTE PAR DEFAUT: liste des posts
	// 	PATTERN: /
	// 	CTRL: pagesController
	// 	ACTION: homeAction
	// 	TITLE: Alex Parker - Blog
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\homeAction($connexion);
?>