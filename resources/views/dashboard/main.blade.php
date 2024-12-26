<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Dashboard</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Tailwind Forms Plugin -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.js"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md h-full">
      @include('dashboard.sidebar')
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 overflow-auto">
   
          <div class="flex min-h-screen">
            
      
              <!-- Main Content -->
              <main class="flex-1 p-8">
                @yield('content')
              </main>
          </div>
      
          <!-- Footer -->
          <footer class="bg-white py-4 text-center text-gray-600 border-t">
              <p>© 2024 Cow NGO. All rights reserved.</p>
              <div class="flex justify-center space-x-4 mt-2">
                  <a href="#" class="hover:text-gray-900">Facebook</a>
                  <a href="#" class="hover:text-gray-900">Twitter</a>
                  <a href="#" class="hover:text-gray-900">Instagram</a>
                  <a href="#" class="hover:text-gray-900">LinkedIn</a>
              </div>
          </footer>
      
    </div>
    
  </div>

</body>

</html>
