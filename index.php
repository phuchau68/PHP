<?php
session_start(); // Khởi động phiên

require_once 'includes/pdo_connect.php'; // Kết nối tới cơ sở dữ liệu
require_once 'includes/header.php'; // Bao gồm header


include 'views/content.php'; // Bao gồm nội dung chính của trang
require_once 'includes/footer.php'; // Bao gồm footer
?>
