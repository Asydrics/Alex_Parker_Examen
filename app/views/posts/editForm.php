<?php include "../app/views/templates/partials/_head.php"; ?>

<body>
  <!-- Preloader Start -->
  <div class="preloader">
    <div class="rounder"></div>
  </div>
  <!-- Preloader End -->

  <!-- Blog Post (Right Sidebar) Start -->
  <div class="row">
    <div class="sub-title">
      <a href="index.html" title="Go to Home Page">
        <h2>Back Home</h2>
      </a>
      <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
    </div>

    <div class="col-md-12 content-page">
      <div class="col-md-12 blog-post">
        <!-- Post Headline Start -->
        <div class="post-title">
          <h1>Edit Post</h1>
        </div>
        <!-- Post Headline End -->

        <!-- Form Start -->
        <form action="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/edit/update.html" method="POST">
          <div class="form-group">
            <label for="title">Title</label>
            <input
              type="text"
              name="title"
              id="title"
              class="form-control"
              placeholder="Enter your title here"
              value="<?php echo $post['title']; ?>" />
          </div>
          <div class="form-group">
            <label for="text">Text</label>
            <textarea
              id="text"
              name="text"
              class="form-control"
              rows="5"
              placeholder="Enter your text here"><?php echo $post['text']; ?></textarea> <!-- Préremplissage -->
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1"> Image</label>
            <input
              name="image"
              type="file"
              class="form-control-file btn btn-primary"
              id="exampleFormControlFile1" />
          </div>
          <div class="form-group">
            <label for="quote">Quote</label>
            <textarea
              id="quote"
              name="quote"
              class="form-control"
              rows="5"
              placeholder="Enter your quote here"><?php echo $post['quote']; ?></textarea> <!-- Préremplissage -->
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category_id" class="form-control">
              <option disabled>Select your category</option>
              <?php
              include_once "../app/models/categoriesModel.php";
              $categories = \App\Models\CategoriesModel\findAll($connexion);
              foreach ($categories as $category) : ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $post['category_id']) ? 'selected' : ''; ?>>
                  <?php echo $category['name']; ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="Submit" />
            <input class="btn btn-secondary" type="reset" value="Reset" />
          </div>
        </form>
        <!-- Form End -->
      </div>
    </div>
  </div>
  <!-- Blog Post (Right Sidebar) End -->
</body>