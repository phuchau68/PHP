<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once '../includes/pdo_connect.php';
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
  header('Location: ../pages/login.php');
  exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];

  $stmt = $pdo->prepare("SELECT id FROM admin WHERE username = :username");
  $stmt->execute([':username' => $_SESSION['username']]);
  $admin = $stmt->fetch();
  if (!$admin) {
    die("Lỗi: Không tìm thấy tài khoản admin.");
  }
  $admin_id = $admin['id'];

  $stmt = $pdo->prepare("INSERT INTO blogs (author_id, author_type, title, content) VALUES (:author_id, 'admin', :title, :content)");
  $stmt->execute([
    ':author_id' => $admin_id,
    ':title' => $title,
    ':content' => $content
  ]);

  if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image'];
    $image_name = time() . '_' . $image['name'];
    $upload_dir = '../uploads/';
    if (!file_exists($upload_dir)) {
      mkdir($upload_dir, 0777, true);
    }
    $upload_path = $upload_dir . $image_name;
    if (move_uploaded_file($image['tmp_name'], $upload_path)) {
      $post_id = $pdo->lastInsertId();
      $stmt = $pdo->prepare("UPDATE blogs SET image = :image WHERE id = :id");
      $stmt->execute([':image' => $image_name, ':id' => $post_id]);
    } else {
      echo "Lỗi khi upload ảnh.";
    }
  }

  header('Location: index.php');
  exit();
}

$content = '<form action="index.php?action=add" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Ảnh</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
</form>';
