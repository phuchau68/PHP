<?php
require_once '../includes/pdo_connect.php';
$stmt = $pdo->query("SELECT * FROM blogs ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
$content = '<h2>Danh sách bài viết</h2>';
$content .= '<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>';
foreach ($posts as $post) {
  $content .= '<tr>
        <td>' . $post['id'] . '</td>
        <td>' . htmlspecialchars($post['title']) . '</td>
        <td>';
  if ($post['image']) {
    $image_path = '../uploads/' . $post['image'];
    if (file_exists($image_path)) {
      $content .= '<img src="' . $image_path . '" alt="' . htmlspecialchars($post['title']) . '" style="max-width: 100px; max-height: 100px;">';
    } else {
      $content .= 'Ảnh không tồn tại';
    }
  } else {
    $content .= 'Không có ảnh';
  }
  $content .= '</td>
        <td>' . $post['created_at'] . '</td>
        <td>
            <a href="index.php?action=edit&id=' . $post['id'] . '" class="btn btn-sm btn-primary">Sửa</a>
            <a href="index.php?action=delete&id=' . $post['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bài viết này?\')">Xóa</a>
        </td>
    </tr>';
}
$content .= '</tbody></table>';
