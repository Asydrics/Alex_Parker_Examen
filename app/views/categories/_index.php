<?php
include_once "../app/models/categoriesModel.php";
$categories = \App\Models\CategoriesModel\findAll($connexion);
foreach ($categories as $category) : ?>
    <li>
        <a href="#"><?php echo $category['name']; ?> - [<?php echo $category['post_count']; ?>]</a>
    </li>
<?php endforeach ?>