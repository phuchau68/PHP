<?php
session_start();
require_once 'includes/pdo_connect.php';
require_once 'includes/header.php';
$stmt = $pdo->query("SELECT b.*, COALESCE(a.username, u.username) as author_name 
                     FROM blogs b 
                     LEFT JOIN admin a ON b.admin_id = a.id 
                     LEFT JOIN users u ON b.user_id = u.id 
                     ORDER BY b.created_at DESC");
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog cá nhân</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Blog cá nhân</h1>
    <div class="row">
      <?php foreach ($posts as $post): ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <?php if ($post['image']): ?>
              <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>"
                class="card-img-top"
                alt="<?php echo htmlspecialchars($post['title']); ?>"
                style="height: 200px; object-fit: cover;">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
              <p class="card-text"><?php echo substr(htmlspecialchars($post['content']), 0, 100) . '...'; ?></p>
              <p class="card-text"><small class="text-muted">Tác giả: <?php echo htmlspecialchars($post['author_name']); ?></small></p>
              <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Đọc thêm</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php require_once 'includes/footer.php'; ?>