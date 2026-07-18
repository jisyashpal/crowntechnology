<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $pageTitle; ?> | CROWN TECHNOLOGY</title>
  <meta name="theme-color" content="#020617"> <!-- Ensures a dark theme for browser UI on mobile -->

  <!-- Prevent Layout Shift (CLS) by pre-setting fonts and styles -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">

  <style>
    :root { 
      --header-height: 80px; 
      --sb-color-1: #06b6d4;
      --sb-color-2: #0ea5e9;
    }

    /* Enable smooth interpolation for scrollbar color variables */
    @property --sb-color-1 {
      syntax: '<color>';
      initial-value: #06b6d4;
      inherits: true;
    }
    @property --sb-color-2 {
      syntax: '<color>';
      initial-value: #0ea5e9;
      inherits: true;
    }

    html { 
      /* Fixes the "layout shift" when scrollbar disappears */
      scrollbar-gutter: stable; 
      /* Ensure a dark background for the root element to prevent white flashes */
      background-color: #020617; 

      /* Firefox Premium Scrollbar */
      scrollbar-width: thin;
      scrollbar-color: var(--sb-color-2) #020617;
    }

    /* Premium Custom Scrollbar (Chrome, Edge, Safari) */
    ::-webkit-scrollbar {
      width: 10px; /* Thin enough for luxury, thick enough for usability */
      height: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #020617; /* Matches your site background */
    }

    ::-webkit-scrollbar-thumb {
      /* Elegant Blue Gradient */
      background: linear-gradient(180deg, var(--sb-color-1) 0%, var(--sb-color-2) 100%);
      border-radius: 100px;
      
      /* The secret to the "Thin Luxury" look: 
         Use a border that matches the background + background-clip: content-box */
      border: 3px solid #020617;
      background-clip: content-box;
      
      /* GPU optimization */
      transform: translateZ(0);

      /* Smoothly transition the colors */
      transition: --sb-color-1 0.8s ease, --sb-color-2 0.8s ease;
    }

    ::-webkit-scrollbar-thumb:hover {
      /* Hover Expansion Effect */
      border: 2px solid #020617; 
      background: linear-gradient(180deg, #0ea5e9 0%, #2563eb 100%);
      
      /* Soft glow on hover */
      box-shadow: inset 0 0 10px rgba(34, 211, 238, 0.4);
    }

    /* Dark mode scrollbar track highlight */
    ::-webkit-scrollbar-corner {
      background: #020617;
    }

    body { 
      margin: 0;
      padding: 0;
      -webkit-font-smoothing: antialiased;
    }
    /* GPU Acceleration for smooth animations */
    .smooth-gpu { 
      transform: translateZ(0); 
      will-change: transform, opacity; 
      backface-visibility: hidden;
    }
  </style>
  
</head>
<body class="<?php echo $currentPage == 'home' ? 'bg-slate-950 text-white' : 'bg-white text-gray-800'; ?>">

<!-- Header -->
<header class="fixed top-0 left-0 right-0 w-full h-20 z-50 bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 backdrop-blur-xl border-b border-cyan-500/20 shadow-lg shadow-cyan-500/10 transition-none">
  <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between text-white">
    <div class="text-xl font-bold tracking-wide bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
      CROWN TECHNOLOGY
    </div>

    <?php
      $menuPrefix = isset($currentPage) && $currentPage !== 'home' ? '' : '../src/pages/';
      $homeLink = '/crowntechnology-backup/public/index.php';
    ?>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex gap-8 text-sm text-gray-300">
      <a href="<?php echo $homeLink; ?>" class="<?php echo $currentPage == 'home' ? 'text-cyan-400' : 'hover:text-cyan-400'; ?> transition-colors duration-300">Home</a>
      <a href="<?php echo $menuPrefix; ?>about.php" class="<?php echo $currentPage == 'about' ? 'text-yellow-400' : 'hover:text-yellow-400'; ?> transition-colors duration-300">About</a>
      <a href="<?php echo $menuPrefix; ?>services.php" class="<?php echo $currentPage == 'services' ? 'text-purple-400' : 'hover:text-purple-400'; ?> transition-colors duration-300">Services</a>
      <a href="<?php echo $menuPrefix; ?>portfolio.php" class="<?php echo $currentPage == 'portfolio' ? 'text-pink-400' : 'hover:text-pink-400'; ?> transition-colors duration-300">Portfolio</a>
      <a href="<?php echo $menuPrefix; ?>clients.php" class="<?php echo $currentPage == 'clients' ? 'text-emerald-400' : 'hover:text-emerald-400'; ?> transition-colors duration-300">Clients</a>
      <a href="<?php echo $menuPrefix; ?>team.php" class="<?php echo $currentPage == 'team' ? 'text-orange-400' : 'hover:text-orange-400'; ?> transition-colors duration-300">Team</a>
      <a href="<?php echo $menuPrefix; ?>contact.php" class="<?php echo $currentPage == 'contact' ? 'text-cyan-400' : 'hover:text-cyan-400'; ?> transition-colors duration-300">Contact</a>
      <a href="<?php echo $menuPrefix; ?>login.php" class="hover:text-cyan-400 transition-colors duration-300">Login</a>
    </nav>

    <!-- Phone & Hamburger Menu -->
    <div class="flex items-center gap-3">

      <div class="phone-circle transition-all duration-300 cursor-pointer
                  bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500
                  w-10 h-10 rounded-full flex items-center justify-center
                  hover:shadow-lg hover:shadow-cyan-500/50 hover:scale-110
                  animate-pulse-glow">

        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-5 h-5 text-white" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.684l1.518 4.553a1 1 0 01-.502 1.21l-2.257 1.129a11.042 11.042 0 005.516 5.516l1.129-2.257a1 1 0 011.21-.502l4.553 1.518a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z" />
        </svg>
      </div>

      <div class="text-sm font-medium text-cyan-400 hidden md:block">
        +91 7970509143
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobileMenuBtn" class="md:hidden flex flex-col justify-center items-center w-12 h-12 gap-1.5 cursor-pointer relative group">
        <span class="w-6 h-0.5 bg-white rounded-full transition-transform duration-300 group-hover:bg-cyan-400" id="line1"></span>
        <span class="w-6 h-0.5 bg-white rounded-full transition-opacity duration-300 group-hover:bg-cyan-400" id="line2"></span>
        <span class="w-6 h-0.5 bg-white rounded-full transition-transform duration-300 group-hover:bg-cyan-400" id="line3"></span>
      </button>

    </div>

  </div>

  <!-- Mobile Navigation Menu -->
  <nav id="mobileMenu" class="invisible opacity-0 md:hidden fixed inset-0 top-20 z-[60] pointer-events-none transition-opacity duration-300 smooth-gpu">
    <!-- Backdrop -->
    <div id="menuBackdrop" class="fixed inset-0 top-20 bg-black/60 backdrop-blur-md transition-opacity duration-300"></div>
    
    <?php

function menuClass($page, $currentPage) {

    if ($currentPage == $page) {

        return '
            bg-gradient-to-r
            from-yellow-500/20
            to-orange-500/20
            text-yellow-400
            border border-yellow-500/30
        ';

    } else {

        return '
            text-gray-200
            hover:bg-emerald-600/40
        ';
    }
}

?>

<!-- Menu Content -->
<div id="menuContent"
     class="relative bg-gradient-to-b <?php echo $currentPage == 'home' ? 'from-slate-900 to-slate-950' : 'from-emerald-800 to-emerald-950'; ?>
     px-6 py-8 h-[calc(100vh-80px)] overflow-y-auto translate-x-full transition-transform duration-300 ease-out">

    <div class="space-y-3">

        <!-- About -->
        <a href="<?php echo $menuPrefix; ?>about.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('about', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">About</span>

        </a>

        <!-- Services -->
        <a href="<?php echo $menuPrefix; ?>services.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('services', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">Services</span>

        </a>

        <!-- Portfolio -->
        <a href="<?php echo $menuPrefix; ?>portfolio.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('portfolio', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">Portfolio</span>

        </a>

        <!-- Clients -->
        <a href="<?php echo $menuPrefix; ?>clients.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('clients', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">Clients</span>

        </a>

        <!-- Team -->
        <a href="<?php echo $menuPrefix; ?>team.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('team', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">Team</span>

        </a>

        <!-- Contact -->
        <a href="<?php echo $menuPrefix; ?>contact.php"
           class="flex items-center gap-4 px-4 py-3 rounded-xl
           <?php echo menuClass('contact', $currentPage); ?>
           transition-all duration-300 hover:scale-105 active:scale-95">

            <span class="font-medium text-sm">Contact</span>

        </a>

    </div>

</div>+

        <!-- Login -->
        <a href="<?php echo $menuPrefix; ?>login.php" class="flex items-center gap-4 px-4 py-3 rounded-xl text-gray-200 hover:bg-emerald-600/40 transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
          <span class="font-medium text-sm">Login</span>
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

<!-- Premium Inertial Smooth Scroll (Lenis) Integration -->
<script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
<script>
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Premium exponential easing
    orientation: 'vertical',
    gestureOrientation: 'vertical',
    smoothWheel: true,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
</script>

<!-- Add Spacer to prevent content from jumping under fixed header -->
<div class="h-20 w-full"></div>

<style>
  @keyframes pulse-glow {
    0%, 100% {
      box-shadow: 0 0 20px rgba(34, 211, 238, 0.4);
    }
    50% {
      box-shadow: 0 0 40px rgba(34, 211, 238, 0.8), 0 0 60px rgba(59, 130, 246, 0.4);
    }
  }

  .animate-pulse-glow {
    animation: pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  }

  header {
    background-image: linear-gradient(to right, #020617 0%, #1e293b 25%, #0f172a 50%, #1e293b 75%, #020617 100%),
                      radial-gradient(circle at 20% 50%, rgba(34, 211, 238, 0.1) 0%, transparent 50%),
                      radial-gradient(circle at 80% 50%, rgba(168, 85, 247, 0.1) 0%, transparent 50%);
  }
</style>

<script>
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuContent = document.getElementById('menuContent');
  const menuBackdrop = document.getElementById('menuBackdrop');
  const line1 = document.getElementById('line1');
  const line2 = document.getElementById('line2');
  const line3 = document.getElementById('line3');

  function toggleMenu() {
    const isOpen = mobileMenu.classList.contains('opacity-100');
    
    if (!isOpen) {
      // Open menu
      mobileMenu.classList.remove('invisible', 'opacity-0', 'pointer-events-none');
      mobileMenu.classList.add('opacity-100');
      menuContent.classList.remove('translate-x-full');
      document.body.style.overflow = 'hidden';
      
      // Animate hamburger
      line1.style.transform = 'translateY(8px) rotate(45deg)';
      line2.style.opacity = '0';
      line3.style.transform = 'translateY(-8px) rotate(-45deg)';
    } else {
      // Close menu
      mobileMenu.classList.add('invisible', 'opacity-0', 'pointer-events-none');
      mobileMenu.classList.remove('opacity-100');
      menuContent.classList.add('translate-x-full');
      document.body.style.overflow = 'auto';
      
      // Reset hamburger
      line1.style.transform = 'translateY(0) rotate(0deg)';
      line2.style.opacity = '1';
      line3.style.transform = 'translateY(0) rotate(0deg)';
    }
  }

  mobileMenuBtn.addEventListener('click', toggleMenu);

  // Phone button hover animation
  const phoneCircle = document.querySelector('.phone-circle');
  if (phoneCircle) {
    phoneCircle.addEventListener('mouseenter', function() {
      this.style.animation = 'none';
      setTimeout(() => {
        this.style.animation = 'pulse-glow 1s cubic-bezier(0.4, 0, 0.6, 1) infinite';
      }, 10);
    });
  }
  
  // Close menu when clicking backdrop
  menuBackdrop.addEventListener('click', toggleMenu);

  // Close menu when clicking on a link
  const mobileLinks = mobileMenu.querySelectorAll('a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', toggleMenu);
  });

  // Dynamic Scrollbar Color Tracking
  const scrollbarObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const c1 = entry.target.getAttribute('data-sb-color-1');
        const c2 = entry.target.getAttribute('data-sb-color-2');
        if (c1 && c2) {
          document.documentElement.style.setProperty('--sb-color-1', c1);
          document.documentElement.style.setProperty('--sb-color-2', c2);
        }
      }
    });
  }, { threshold: 0.25 }); // Trigger when 25% of the section is visible

  document.querySelectorAll('[data-sb-color-1]').forEach(section => scrollbarObserver.observe(section));
</script>