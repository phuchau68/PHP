<?php
session_start();
require_once 'includes/pdo_connect.php';
require_once 'includes/header.php';
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit();
}
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT b.*, COALESCE(a.username, u.username) as author_name 
                       FROM blogs b 
                       LEFT JOIN admin a ON b.admin_id = a.id 
                       LEFT JOIN users u ON b.user_id = u.id 
                       WHERE b.id = :id");
$stmt->execute([':id' => $id]);
$post = $stmt->fetch();

if (!$post) {
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($post['title']); ?> - Blog cá nhân</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f4f4f4;
    }

    .post-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 30px;
    }

    .post-title {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .post-meta {
      font-size: 0.9em;
      color: #7f8c8d;
      margin-bottom: 20px;
    }

    .post-image {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .post-content {
      font-size: 1.1em;
      line-height: 1.8;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      color: #3498db;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="post-container">
      <h1 class="post-title"><?php echo htmlspecialchars($post['title']); ?></h1>
      <div class="post-meta">
        Đăng bởi <?php echo htmlspecialchars($post['author_name']); ?> vào
        <?php echo date('d/m/Y H:i', strtotime($post['created_at'])); ?>
      </div>
      <?php if ($post['image']): ?>
        <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>"
          alt="<?php echo htmlspecialchars($post['title']); ?>"
          class="post-image">
      <?php endif; ?>
      <div class="post-content">
        <?php echo nl2br(htmlspecialchars($post['content'])); ?>
      </div>
      <a href="index.php" class="back-link">&larr; Quay lại trang chủ</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php require_once 'includes/footer.php'; ?>