<div class="col-md-12 blog-post row">
    <?php foreach ($posts as $post): ?>
        <div class="post-title">
            <a href="#">
                <h1>
                    <?php echo ucfirst($post['title']); ?>
                </h1>
            </a>
        </div>
        <div class="post-info">
            <span><?php echo \Core\Helpers\datetime($post['created_at']); ?>
                <span>|</span>
            </span><a href="#"><span><?php echo $post['category_name']; ?></span></a>
        </div>
        <p>
            <?php echo substr($post['text'], 0, 150) ?> ...
        </p>
        <a href="#" class="button button-style button-animfafa-long-arrow-right"><span>Read More</span></a>
    <?php endforeach; ?>
</div>