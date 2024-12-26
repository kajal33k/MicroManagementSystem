<!-- Header -->
<div class="fixed w-full flex items-center justify-between h-14 text-white bg-gray-900 dark:bg-gray-800 z-10">
  <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14">
    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
    <span class="hidden md:block">ADMIN</span>
  </div>
  <div class="flex justify-between items-center h-14 w-full bg-gray-900 dark:bg-gray-800">
    <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
      <button class="outline-none focus:outline-none">
        <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
          <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </button>
      <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
    </div>
    <ul class="flex items-center space-x-4">
      <li>
        <button aria-label="Toggle Dark Mode" @click="toggleTheme" class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
          <svg width="24" height="24" class="fill-current text-gray-700 dark:text-gray-700 group-hover:text-gray-500">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
          </svg>
        </button>
      </li>
      <li>
        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
      </li>
      <li>
        <a href="#" class="flex items-center hover:text-blue-100">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
          </svg>
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- ./Header -->

<!-- Sidebar -->
<div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gray-900 dark:bg-gray-900 h-full text-white transition-all duration-300 sidebar">
  <div class="overflow-y-auto flex flex-col justify-between flex-grow">
    <ul class="flex flex-col py-4 space-y-1">
      <li class="px-5 hidden md:block">
        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
      </li>
      <li>
        <a href="{{route('das')}}" class="relative flex flex-row items-center h-11 hover:bg-blue-800 dark:hover:bg-gray-600 text-white hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          {{-- <img class="w-5 h-5 ml-4" src="https://example.com/path/to/dashboard-icon.png" alt="Dashboard" /> --}}
          <span>📊</span>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- New Sidebar Links -->
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>🏠</span>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="{{route('projects.index')}}" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>📄</span>
          <span>Assign Project</span>
        </a>
      </li>
      <li>
        <a href="{{route('todos.index')}}" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>📄</span>
          <span>Project Details</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>⚡</span>
          <span>Urgent Alerts</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>💬</span>
          <span>Client Communications</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>📝</span>
          <span>Requests to Client</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>🎫</span>
          <span>Client Tickets</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
          <span>📊</span>
          <span>Project Progress</span>
        </a>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 hover:bg-blue-800 dark:hover:bg-gray-600 text-white hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          {{-- <img class="w-5 h-5 ml-4" src="https://example.com/path/to/settings-icon.png" alt="Settings" /> --}}
          <span>📊</span>
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- ./Sidebar -->
