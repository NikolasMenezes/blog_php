<?php
include_once("templates/header.php");

if (!isset($_GET['id'])) {
  header("Location: $BASE_URL");
  exit;
}

$postId = $_GET['id'];
$currentPost;

foreach ($posts as $post) {
  if ($post['id'] == $postId) {
    $currentPost = $post;
  }
}

?>

<main id="post-container">
  <div id="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p id="main-description">
      <?= $currentPost['description'] ?>
    </p>
    <div id="img-container">
      <img src="<?= $BASE_URL . "/img/" . $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>

    <p class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et metus venenatis, maximus justo at, tristique felis. Nulla vitae libero purus. Proin finibus turpis nec pulvinar posuere. Ut non odio pharetra nibh pretium viverra at sed leo. Cras gravida lectus eget mauris iaculis elementum. Maecenas hendrerit neque volutpat luctus maximus. Aenean sit amet ornare tortor, ut commodo augue. Nullam sit amet lobortis ipsum. Cras et leo a ex semper bibendum. Curabitur sit amet porttitor erat. Integer placerat aliquet tortor. Sed fringilla felis sit amet odio varius convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin congue diam sagittis ultrices convallis. Nam malesuada est massa, porttitor commodo erat ullamcorper ac.
      <br>
      Duis vel tincidunt eros. Etiam maximus nisl sit amet eros mollis, nec vulputate velit fermentum. Vivamus non nisi ex. Proin tempus ante velit, in feugiat ante egestas a. Sed ut eros porta, malesuada mauris eget, tincidunt sem. Quisque bibendum lacinia sem vitae imperdiet. Mauris commodo ante vitae sapien eleifend cursus. Aliquam erat volutpat. Vestibulum vel sodales nibh. Sed congue sem lacinia aliquam vulputate. Sed interdum mi et nunc elementum, nec imperdiet felis aliquet. Sed vel ligula ac tortor molestie lacinia vitae ut lorem. In id placerat tellus. Ut ultricies nibh non dignissim tristique.
      <br>
      Nulla eleifend lacinia nunc eu eleifend. Praesent sit amet metus ac metus tempor eleifend at nec nunc. Curabitur dictum sem nec massa rutrum, non tincidunt metus porta. Vestibulum ut metus tempus, tempus est non, efficitur leo. Mauris purus quam, dictum in velit non, facilisis viverra magna. Integer ultricies, ante at sollicitudin luctus, sapien libero maximus nunc, id vehicula quam dui a arcu. Praesent odio lectus, blandit id imperdiet in, condimentum at ante. Praesent porttitor suscipit ante sit amet commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum tortor quis nisi auctor ornare. Integer maximus rhoncus mi nec egestas. Mauris rhoncus pellentesque tristique.
    </p>
  </div>

  <aside>

    <div id="tags-container">
      <p class="title">
        Tags
      </p>
      <ul id="tags-list">
        <?php foreach ($currentPost['tags'] as $tag) : ?>
          <li><a class="tag">#<?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div id="categories-container">
      <p class="title">
        Categorias
      </p>
      <ul id="categories-list">
        <?php foreach ($categories as $categories) : ?>
          <li><a class="tag">#<?= $categories ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

  </aside>
</main>



<?php include_once("templates/footer.php") ?>