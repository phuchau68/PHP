<div class="container mt-4">
  <h2 class="mb-4">New posts</h2>
  <?php foreach ($posts as $post): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
        <p class="card-text"><?php echo substr(htmlspecialchars($post['content']), 0, 200) . '...'; ?></p>
        <p class="card-text"><small class="text-muted">Posted on: <?php echo $post['created_at']; ?></small></p>
        <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read more</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>