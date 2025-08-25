<!-- Navbar -->
<nav class="bg-red-600 shadow-lg fixed w-full z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <img src="https://cdn-icons-png.flaticon.com/512/743/743007.png" alt="Logo" class="w-10 h-10">
        <span class="text-white text-xl font-bold">Only Cars</span>
      </div>

      <!-- Menu Desktop -->
      <div class="hidden md:flex space-x-8">
        <a href="home" class="text-white hover:text-yellow-300 transition">Home</a>
        <a href="about" class="text-white hover:text-yellow-300 transition">About</a>
        <a href="mobil" class="text-white hover:text-yellow-300 transition">Merchandise</a>
        <a href="galeri" class="text-white hover:text-yellow-300 transition">Galeri</a>
        <a href="contact" class="text-white hover:text-yellow-300 transition">Contact</a>
      </div>

      <!-- Tombol Desktop -->
      <div class="hidden md:block">
        <a href="event" class="bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">
          Event
        </a>
      </div>

      <!-- Tombol Hamburger Mobile -->
      <div class="md:hidden">
        <button id="menu-btn" class="text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
               stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Menu Mobile -->
  <div id="mobile-menu" class="hidden md:hidden bg-red-700">
    <a href="home" class="block px-4 py-2 text-white hover:bg-red-500">Home</a>
    <a href="about" class="block px-4 py-2 text-white hover:bg-red-500">About</a>
    <a href="mobil" class="block px-4 py-2 text-white hover:bg-red-500">Merchandise</a>
    <a href="galeri" class="block px-4 py-2 text-white hover:bg-red-500">Galeri</a>
    <a href="contact" class="block px-4 py-2 text-white hover:bg-red-500">Contact</a>
  </div>
</nav>

<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>

</body>
</html>
