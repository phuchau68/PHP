<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   PHP Blog
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-50">
  <!-- Header -->
  <header class="bg-white shadow">
   <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <div class="text-2xl font-bold text-gray-800">
     PHP
     <span class="text-blue-500">
      .Blog
     </span>
    </div>
    <nav class="space-x-4">
     <a class="text-gray-600 hover:text-gray-800" href="#">
      Home
     </a>
     <a class="text-gray-600 hover:text-gray-800" href="#">
      Category
     </a>
     <a class="text-gray-600 hover:text-gray-800" href="#">
      About Me
     </a>
     <a class="text-gray-600 hover:text-gray-800" href="#">
      Search
     </a>
     <a class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded" href="#">
      Login/Logout
     </a>
    </nav>
   </div>
  </header>
  <!-- Hero Section -->
  <section class="bg-gray-100 py-16">
   <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2">
     <h1 class="text-4xl font-bold text-gray-800">
      Hi, I'm Pos
      <br/>
      PHP Dev
     </h1>
     <p class="text-gray-600 mt-4">
      On this blog I share tips and tricks, frameworks, projects, tutorials, etc. Make sure you subscribe to get the latest updates.
     </p>
     <div class="mt-6 flex">
      <input class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none" placeholder="Enter your email here..." type="email"/>
      <button class="bg-blue-500 text-white px-4 py-2 rounded-r-md">
       Subscribe
      </button>
     </div>
    </div>
    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
     <img alt="Illustration of a developer working on code" class="w-3/4" height="300" src="https://storage.googleapis.com/a1aa/image/OdN64XIUTsLhFVQtDiyeTMmxWd8QEu7ff1dFxstgh7kCeSOOB.jpg" width="400"/>
    </div>
   </div>
  </section>
  <!-- Recent Blog Posts -->
  <section class="container mx-auto px-4 py-16">
   <h2 class="text-2xl font-bold text-gray-800 mb-6">
    Recent blog posts
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Office setup with multiple monitors" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/7rpGkhs9GSqeQafZUF9vZbfoYrn6B5ZP1za5dVVidm8LeSOOB.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Olivia Rhye • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       UX review presentations
      </h3>
      <p class="text-gray-600 mt-2">
       How do you create compelling presentations that wow your colleagues and impress your managers?
      </p>
      <div class="mt-4 flex space-x-2">
       <a class="text-blue-500" href="#">
        Read
       </a>
       <a class="text-blue-500" href="#">
        Research
       </a>
       <a class="text-blue-500" href="#">
        More
       </a>
      </div>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Team working on laptops" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/gdwn3dvsqsK0N5yTmB72KN99VwXe06oHxWL5lgM4qB3jXyxJA.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Phoenix Baker • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       Migrating to Linear 101
      </h3>
      <p class="text-gray-600 mt-2">
       Linear helps streamline software projects, sprints, tasks, and bug tracking. Here's how to get...
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read...
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Modern workspace with computer" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/hhJaeEzpomVrFqReWn0zCfeqGOWk9ScgT9bx3MrtNVFC9SOOB.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Lana Steiner • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       Building your API Stack
      </h3>
      <p class="text-gray-600 mt-2">
       The rise of RESTful APIs has been met by a rise in tools for creating, testing, and managing...
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read...
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- All Blog Posts -->
  <section class="container mx-auto px-4 py-16">
   <h2 class="text-2xl font-bold text-gray-800 mb-6">
    All blog posts
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Mountain landscape" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/lHmfN2ufLcvoFEQJMBiefufIesnPxIku31GhueUmGWsPmXyxJA.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Alec Whitten • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       Bill Walsh leadership lessons
      </h3>
      <p class="text-gray-600 mt-2">
       Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Team working in an office" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/a047r5Z2ffom4kH7uMcBq6cNOI5f5EV4ZXVpDtIwVeMo8SOOB.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Demi Wilkinson • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       PM mental models
      </h3>
      <p class="text-gray-600 mt-2">
       Mental models are simple expressions of complex processes or relationships.
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Computer setup with wireframe on screen" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/dROAXs3cA7ozBlfPmrYSHjhCRNhT1exooLLeAyfFUk578SOOB.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Candice Wu • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       What is Wireframing?
      </h3>
      <p class="text-gray-600 mt-2">
       Introduction to Wireframing and its principles. Learn from the best in the industry.
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Person giving a presentation" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/Lf6fZTyPMNrbvkVUkoEXWw6ySHkNL7j4hHt1581eY7jTeSOOB.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Natal Craig • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       How collaboration makes us better designers
      </h3>
      <p class="text-gray-600 mt-2">
       Collaboration can make our teams stronger, and our individual designs better.
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Person working on a laptop" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/PjCLefGIPMhxcEhwIGfXOWN3eJ55f0oyrqqH6rbBwwqZ4lccC.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Drew Cano • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       Our top 10 Javascript frameworks to use
      </h3>
      <p class="text-gray-600 mt-2">
       JavaScript frameworks make development easy with extensive features and functionalities.
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
    <div class="bg-white shadow rounded-lg overflow-hidden">
     <img alt="Person recording a podcast" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/6f7aJsnY1Z1SXSCmdUkaurbXKfzuV7jcPpz2tlVgn1hRvkjTA.jpg" width="400"/>
     <div class="p-4">
      <p class="text-gray-600 text-sm">
       Orlando Diggs • 1 Jan 2023
      </p>
      <h3 class="text-lg font-bold text-gray-800 mt-2">
       Podcast: Creating a better CX Community
      </h3>
      <p class="text-gray-600 mt-2">
       Starting a community doesn't need to be complicated, but how do you get started?
      </p>
      <a class="text-blue-500 mt-4 block" href="#">
       Read more
      </a>
     </div>
    </div>
   </div>
   <div class="mt-8 flex justify-between items-center">
    <a class="text-gray-600" href="#">
     Previous
    </a>
    <div class="space-x-2">
     <a class="text-blue-500" href="#">
      1
     </a>
     <a class="text-gray-600" href="#">
      2
     </a>
     <a class="text-gray-600" href="#">
      3
     </a>
     <a class="text-gray-600" href="#">
      ...
     </a>
     <a class="text-gray-600" href="#">
      10
     </a>
    </div>
    <a class="text-gray-600" href="#">
     Next
    </a>
   </div>
  </section>
  <!-- Subscribe Section -->
  <section class="bg-gray-100 py-16">
   <div class="container mx-auto px-4 text-center">
    <img alt="Mail icon" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/l5aIEhDlX9JiKVMEhePF1FtVwn8kgkjv0uT0Dcc0UcBjXyxJA.jpg" width="100"/>
    <h2 class="text-2xl font-bold text-gray-800">
     Subscribe For The Lastest Updates
    </h2>
    <p class="text-gray-600 mt-2">
     Subscribe to newsletter and never miss the new post every week.
    </p>
    <div class="mt-6 flex justify-center">
     <input class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none" placeholder="Enter your email here..." type="email"/>
     <button class="bg-blue-500 text-white px-4 py-2 rounded-r-md">
      Subscribe
     </button>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-200 py-8">
   <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
    <div>
     <div class="text-2xl font-bold text-gray-800">
      PHP
      <span class="text-blue-500">
       .Blog
      </span>
     </div>
     <p class="text-gray-600 mt-2">
      Hands-on Workshop
     </p>
     <div class="mt-4 flex space-x-4">
      <a class="text-gray-600" href="#">
       <i class="fab fa-medium">
       </i>
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-linkedin">
       </i>
      </a>
     </div>
    </div>
    <div>
     <h3 class="text-lg font-bold text-gray-800">
      CATEGORY
     </h3>
     <ul class="mt-4 space-y-2">
      <li>
       <a class="text-gray-600" href="#">
        News
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Game
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Dev
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        React JS
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        More Category
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h3 class="text-lg font-bold text-gray-800">
      ABOUT ME
     </h3>
     <ul class="mt-4 space-y-2">
      <li>
       <a class="text-gray-600" href="#">
        About Me
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Projects
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Achievement
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h3 class="text-lg font-bold text-gray-800">
      GET IN TOUCH
     </h3>
     <ul class="mt-4 space-y-2">
      <li>
       <a class="text-gray-600" href="#">
        +0123-5678
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        demo@gmail.com
       </a>
      </li>
     </ul>
     <h3 class="text-lg font-bold text-gray-800 mt-8">
      FOLLOW US
     </h3>
     <ul class="mt-4 space-y-2">
      <li>
       <a class="text-gray-600" href="#">
        Medium
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Instagram
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Twitter
       </a>
      </li>
      <li>
       <a class="text-gray-600" href="#">
        Facebook
       </a>
      </li>
     </ul>
    </div>
   </div>
   <div class="mt-8 text-center text-gray-600">
    © 2023 Hands-on Workshop
   </div>
  </footer>
 </body>
</html>
