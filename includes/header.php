

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Workshop PHP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
 
<body>
<header class="bg-white shadow">
  <div class="container mx-auto px-4 py-4 bg-gray-200 flex justify-between items-center">
    <div class="flex items-center">
      <img alt="Logo" class="h-10" height="50" src="./public/images/Logo FPT.png" width="150" />
    </div>
    <nav class="flex items-center space-x-6">
  <a class="text-gray-700 hover:text-purple-600" href="#">Home</a>
  <a class="text-gray-700 hover:text-purple-600" href="#">Category</a>
  <a class="text-gray-700 hover:text-purple-600" href="#">About Me</a>
  <a class="text-gray-700 hover:text-purple-600" href="#">Search</a>
  <?php if (isset($_SESSION['username'])): ?>
    <span class="text-gray-700">Xin chào, <?= $_SESSION['username'] ?></span>
    <a class="text-gray-700 hover:text-purple-600" href="pages/logout.php">Đăng xuất</a>
  <?php else: ?>
    <button class="bg-purple-600 text-white px-4 py-2 rounded" onclick="location.assign('pages/login.php')">Đăng nhập</button>
    <button class="bg-green-600 text-white px-4 py-2 rounded" onclick="location.assign('pages/register.php')">Đăng ký</button>
  <?php endif; ?>
</nav>


  </div>
</header>

<!-- Hero Section -->
<section class="bg-white py-1">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2">
      <h1 class="text-4xl font-bold text-gray-800">
        Hi, we are Team 2 <br> Workshop 
      </h1>
      <p class="mt-4 text-gray-600">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quia distinctio eaque amet nulla animi labore eum accusamus saepe. Velit odit molestias sapiente dolorem veniam nulla, ut asperiores aperiam accusantium.
      </p>
      <div class="mt-6 flex">
        <input class="border border-gray-300 px-4 py-2 rounded-l w-1/2" placeholder="Enter your email here" type="email"/>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-r">
          Subscribe
        </button>
      </div>
    </div>
    <div class="md:w-1/2 mt-8 md:mt-0">
      <img alt="Illustration of team working on PHP project" class="w-full" height="300" src="https://storage.googleapis.com/a1aa/image/Jtu1fMhRR21ISC0sbXiNuKry6UGVRfEfocNfXf5JTDfd7R74E.jpg" width="500"/>
    </div>
  </div>
</section>
</body>
</html>
