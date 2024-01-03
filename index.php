<?php include_once("templates/header.php") ?>
<main>
  <div id="title-container">
    <h1>Blog Menezes</h1>
    <p>O seu blog de programação</p>
  </div>
  <div class="posts-container">
    <?php foreach ($posts as $post) : ?>
      <div class="post-box">
        <img src="<?= $BASE_URL . "/img/" . $post['img'] ?>" alt="<?= $post['title'] ?>">
        <h2 class="post-title">
          <a href="<?= $BASE_URL . "post.php?id=" . $post['id'] ?>">
            <?= $post['title'] ?>
          </a>
        </h2>
        <p class="description">
          <?= $post['description'] ?>
        </p>
        <div class="tags-box">
          <?php foreach ($post['tags'] as $tag) : ?>
            <div class="tag">#<?= $tag ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php include_once("templates/footer.php") ?>