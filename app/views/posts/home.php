<div class="col-md-12 blog-post row">
    <?php foreach ($posts as $post): ?>
        <div class="post-title">
            <a href="single.h">
                <h1>
                    <?php echo ucfirst($post['title']); ?>
                </h1>
            </a>
        </div>
        <div class="post-info">
            <span>2016-03-03</span> | <span><?php echo $post['category_name'] ?></span>
        </div>
        <p>
            <?php echo substr($post['text'], 0, 150) ?> ...
        </p>
        <a href="single.html" class="button button-style button-animfa fa-long-arrow-right"><span>Read More</span></a>
    <?php endforeach; ?>
</div>