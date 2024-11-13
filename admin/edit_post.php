<?php
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit();
}
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];

  $stmt = $pdo->prepare("UPDATE blogs SET title = :title, content = :content WHERE id = :id");
  $stmt->execute([':title' => $title, ':content' => $content, ':id' => $id]);
  if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image'];
    $image_name = time() . '_' . $image['name'];
    move_uploaded_file($image['tmp_name'], '../uploads/' . $image_name);
    $stmt = $pdo->prepare("UPDATE blogs SET image = :image WHERE id = :id");
    $stmt->execute([':image' => $image_name, ':id' => $id]);
  }
  header('Location: index.php');
  exit();
}
$stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = :id");
$stmt->execute([':id' => $id]);
$post = $stmt->fetch();
if (!$post) {
  header('Location: index.php');
  exit();
}
$content = '<form action="index.php?action=edit&id=' . $id . '" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" id="title" name="title" value="' . htmlspecialchars($post['title']) . '" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea class="form-control" id="content" name="content" rows="5" required>' . htmlspecialchars($post['content']) . '</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Ảnh mới (để trống nếu không muốn thay đổi)</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
</form>';
