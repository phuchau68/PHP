<?php
session_start();
require_once '../includes/pdo_connect.php';
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
  header('Location: ../pages/login.php');
  exit();
}
if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'add':
      include 'add_post.php';
      break;
    case 'edit':
      include 'edit_post.php';
      break;
    case 'delete':
      include 'delete_post.php';
      break;
    default:
      include 'list_posts.php';
      break;
  }
} else {
  include 'list_posts.php';
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bài viết</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-4">
    <h1 class="mb-4">Quản lý bài viết</h1>
    <a href="index.php?action=add" class="btn btn-primary mb-3">Thêm bài viết mới</a>
    <?php
    if (isset($content)) {
      echo $content;
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>