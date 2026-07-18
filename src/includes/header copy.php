<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $pageTitle; ?> | CROWN TECHNOLOGY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
</head>
<body class="<?php echo $currentPage == 'home' ? 'bg-slate-950 text-white' : 'bg-white text-gray-800'; ?>">

<!-- Header -->
<header class="sticky top-0 w-full z-50 bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between text-gray-800">
    <div class="text-xl font-bold tracking-wide bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
      CROWN TECHNOLOGY
    </div>

    <?php
      $menuPrefix = isset($currentPage) && $currentPage !== 'home' ? '' : '../src/pages/';
      $homeLink = '/crowntechnology-backup/public/index.php';
    ?>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex gap-8 text-sm text-gray-700">
      <a href="<?php echo $homeLink; ?>" class="<?php echo $currentPage == 'home' ? 'text-cyan-400' : ($currentPage == 'home' ? 'text-yellow-400' : 'hover:text-cyan-400'); ?> transition">Home</a>
      <a href="<?php echo $menuPrefix; ?>about.php" class="<?php echo $currentPage == 'home' ? 'hover:text-pink-400' : ($currentPage == 'about' ? 'text-yellow-400' : 'hover:text-yellow-400'); ?> transition">About</a>
      <a href="<?php echo $menuPrefix; ?>services.php" class="<?php echo $currentPage == 'home' ? 'hover:text-purple-400' : ($currentPage == 'services' ? 'text-yellow-400' : 'hover:text-yellow-400'); ?> transition">Services</a>
      <a href="<?php echo $menuPrefix; ?>portfolio.php" class="<?php echo $currentPage == 'home' ? 'hover:text-cyan-400' : ($currentPage == 'portfolio' ? 'text-yellow-400' : 'hover:text-yellow-400'); ?> transition">Portfolio</a>
      <a href="<?php echo $menuPrefix; ?>clients.php" class="<?php echo $currentPage == 'home' ? 'hover:text-pink-400' : ($currentPage == 'clients' ? 'text-yellow-400' : 'hover:text-yellow-400'); ?> transition">Clients</a>
      <a href="<?php echo $menuPrefix; ?>team.php" class="<?php echo $currentPage == 'home' ? 'hover:text-purple-400' : ($currentPage == 'team' ? 'text-yellow-400' : 'hover:text-yellow-400'); ?> transition">Team</a>
            <a href="<?php echo $menuPrefix; ?>gallery.php" class="<?php echo $currentPage == 'home' ? 'hover:text-cyan-400' : ($currentPage == 'gallery' ? 'text-yellow-400' : 'hover:text-cyan-400'); ?> transition">Gallery</a>
      <a href="<?php echo $menuPrefix; ?>contact.php" class="<?php echo $currentPage == 'home' ? 'hover:text-cyan-400' : ($currentPage == 'contact' ? 'text-yellow-400' : 'hover:text-cyan-400'); ?> transition">Contact</a>
    </nav>

    <!-- Phone & Hamburger Menu -->
    <div class="flex items-center gap-3">

      <div class="phone-circle transition-all duration-300 cursor-pointer
                  bg-gradient-to-r from-cyan-500 to-blue-500 
                  w-11 h-11 rounded-full flex items-center justify-center">

        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-5 h-5 text-white" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.684l1.518 4.553a1 1 0 01-.502 1.21l-2.257 1.129a11.042 11.042 0 005.516 5.516l1.129-2.257a1 1 0 011.21-.502l4.553 1.518a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z" />
        </svg>
      </div>

      <div class="text-sm font-medium text-gray-700 hidden md:block">
        +91 7970509143
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobileMenuBtn" class="md:hidden flex flex-col justify-center items-center w-12 h-12 gap-1.5 cursor-pointer relative group">
        <span class="w-6 h-0.5 bg-gray-800 rounded-full transition-all duration-300 group-hover:bg-cyan-400" id="line1"></span>
        <span class="w-6 h-0.5 bg-gray-800 rounded-full transition-all duration-300 group-hover:bg-cyan-400" id="line2"></span>
        <span class="w-6 h-0.5 bg-gray-800 rounded-full transition-all duration-300 group-hover:bg-cyan-400" id="line3"></span>
      </button>

    </div>

  </div>

  <!-- Mobile Navigation Menu -->
  <nav id="mobileMenu" class="hidden md:hidden fixed inset-0 top-16 z-40 overflow-y-auto transition-all duration-300">
    <!-- Backdrop -->
    <div id="menuBackdrop" class="fixed inset-0 top-16 <?php echo $currentPage == 'home' ? 'bg-black/40' : 'bg-black/40'; ?> backdrop-blur-sm hidden"></div>
    
    <!-- Menu Content -->
    <div class="relative bg-gradient-to-b <?php echo $currentPage == 'home' ? 'from-slate-800 to-slate-900' : 'from-emerald-700 to-emerald-900'; ?> px-6 py-8 min-h-screen">
      <div class="space-y-2">
        <!-- Home -->
        <a href="<?php echo $homeLink; ?>" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'home' ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/20 text-cyan-400 border border-cyan-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 11l4-4m0 0l4 4m-4-4v4"></path></svg>
          <span class="font-medium text-sm">Home</span>
        </a>

        <!-- About -->
        <a href="<?php echo $menuPrefix; ?>about.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'about' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          <span class="font-medium text-sm">About</span>
        </a>

        <!-- Services -->
        <a href="<?php echo $menuPrefix; ?>services.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'services' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4"></path></svg>
          <span class="font-medium text-sm">Services</span>
        </a>

        <!-- Portfolio -->
        <a href="<?php echo $menuPrefix; ?>portfolio.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'portfolio' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <span class="font-medium text-sm">Portfolio</span>
        </a>

        <!-- Clients -->
        <a href="<?php echo $menuPrefix; ?>clients.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'clients' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-2a6 6 0 0112 0v2zm0 0h6v-2a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
          <span class="font-medium text-sm">Clients</span>
        </a>

        <!-- Team -->
        <a href="<?php echo $menuPrefix; ?>team.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'team' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM15 20h-5v-2a3 3 0 015.856-1.487"></path></svg>
          <span class="font-medium text-sm">Team</span>
        </a>

                <!-- Team -->
        <a href="<?php echo $menuPrefix; ?>team.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'team' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM15 20h-5v-2a3 3 0 015.856-1.487"></path></svg>
          <span class="font-medium text-sm">Gallery</span>
        </a>

        <!-- Contact -->
        <a href="<?php echo $menuPrefix; ?>contact.php" class="flex items-center gap-4 px-4 py-3 rounded-xl <?php echo $currentPage == 'contact' ? 'bg-gradient-to-r from-yellow-500/20 to-orange-500/20 text-yellow-400 border border-yellow-500/30' : 'text-gray-200 hover:bg-emerald-600/40'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          <span class="font-medium text-sm">Contact</span>
        </a>
      </div>

      <!-- Divider -->
      <div class="my-6 h-px bg-gradient-to-r <?php echo $currentPage == 'home' ? 'from-transparent via-cyan-500/30 to-transparent' : 'from-transparent via-white/20 to-transparent'; ?>"></div>

      <!-- Phone Contact -->
      <a href="tel:+917970509143" class="block px-4 py-4 rounded-xl <?php echo $currentPage == 'home' ? 'bg-gradient-to-r from-cyan-500/10 to-purple-500/10 border border-cyan-500/20 hover:from-cyan-500/20 hover:to-purple-500/20' : 'bg-white/5 border border-white/10 hover:bg-white/10'; ?> transition-all duration-300 hover:scale-105 active:scale-95">
        <p class="text-xs text-gray-400 mb-2 font-semibold">CALL US</p>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.684l1.518 4.553a1 1 0 01-.502 1.21l-2.257 1.129a11.042 11.042 0 005.516 5.516l1.129-2.257a1 1 0 011.21-.502l4.553 1.518a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z"></path></svg>
          </div>
          <div>
            <p class="text-cyan-400 font-bold text-sm">+91 7970509143</p>
            <p class="text-gray-400 text-xs">Available 24/7</p>
          </div>
        </div>
      </a>
    </div>
  </nav>

</header>

<script>
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuBackdrop = document.getElementById('menuBackdrop');
  const line1 = document.getElementById('line1');
  const line2 = document.getElementById('line2');
  const line3 = document.getElementById('line3');

  function toggleMenu() {
    const isHidden = mobileMenu.classList.contains('hidden');
    
    if (isHidden) {
      // Open menu
      mobileMenu.classList.remove('hidden');
      menuBackdrop.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
      
      // Animate hamburger
      line1.style.transform = 'rotate(45deg) translateY(10px)';
      line2.style.opacity = '0';
      line3.style.transform = 'rotate(-45deg) translateY(-10px)';
    } else {
      // Close menu
      mobileMenu.classList.add('hidden');
      menuBackdrop.classList.add('hidden');
      document.body.style.overflow = 'auto';
      
      // Reset hamburger
      line1.style.transform = 'rotate(0deg) translateY(0)';
      line2.style.opacity = '1';
      line3.style.transform = 'rotate(0deg) translateY(0)';
    }
  }

  mobileMenuBtn.addEventListener('click', toggleMenu);
  
  // Close menu when clicking backdrop
  menuBackdrop.addEventListener('click', toggleMenu);

  // Close menu when clicking on a link
  const mobileLinks = mobileMenu.querySelectorAll('a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', function() {
      mobileMenu.classList.add('hidden');
      menuBackdrop.classList.add('hidden');
      document.body.style.overflow = 'auto';
      line1.style.transform = 'rotate(0deg) translateY(0)';
      line2.style.opacity = '1';
      line3.style.transform = 'rotate(0deg) translateY(0)';
    });
  });
</script>