<?php
if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit();
}
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM blogs WHERE id = :id");
$stmt->execute([':id' => $id]);
header('Location: index.php');
exit();
