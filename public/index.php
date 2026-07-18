<?php 
$pageTitle = 'Home';
$currentPage = 'home';
include __DIR__ . '/../src/includes/header.php';
?>

  <!-- Hero -->
  <section class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-indigo-950 to-slate-900 min-h-[520px]">

    <img src="./assets/images/slider-1.png" alt="Hero Background"
         class="absolute inset-0 w-full h-full object-cover opacity-95"/>

    <div class="absolute inset-0 bg-slate-950/40 backdrop-blur-sm"></div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 md:py-32">

      <h1 id="heroHeading" class="text-3xl md:text-5xl text-white font-bold leading-tight hero-text active">Smart Technology Meets Creative Strategy</h1>

      <p class="text-lg md:text-2xl text-gray-300 mt-6">
        Technology, Creative Design & Video Production Solutions
      </p>

      <div class="flex flex-wrap gap-4 mt-10">
        <button class="bg-gradient-to-r from-cyan-500 to-blue-500 px-6 py-3 rounded-xl font-semibold hover:scale-105 transition shadow-lg shadow-cyan-500/20">
          DESIGN & DEVELOPMENT
        </button>
        <button class="bg-gradient-to-r from-pink-500 to-purple-500 px-6 py-3 rounded-xl font-semibold hover:scale-105 transition shadow-lg shadow-pink-500/20">
          CREATIVE BRANDING
        </button>
        <button class="bg-gradient-to-r from-purple-500 to-indigo-500 px-6 py-3 rounded-xl font-semibold hover:scale-105 transition shadow-lg shadow-purple-500/20">
          VIDEO PRODUCTION
        </button>
      </div>

    </div>
  </section>



<!-- Welcome / About Section -->
<section class="relative bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-50 py-20 md:py-20 overflow-hidden reveal">

  <!-- Glow Background -->
  <div class="absolute -top-20 -left-20 w-[500px] h-[500px] bg-cyan-200 blur-3xl rounded-full opacity-30"></div>
  <div class="absolute -bottom-20 -right-20 w-[500px] h-[500px] bg-blue-200 blur-3xl rounded-full opacity-30"></div>

  <div class="relative max-w-7xl mx-auto px-6 md:px-10">

    <!-- Small Heading -->
    <div class="flex items-center gap-4 mb-10" style="animation: fadeInLeft 0.8s ease-out forwards;">

      <span class="text-pink-500 uppercase tracking-[6px] text-sm md:text-base font-semibold">
        About Us
      </span>

      <div class="w-24 h-[2px] bg-pink-500 rounded-full"></div>

    </div>

    <!-- Two Column Layout -->
    <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Left Column - Text -->
      <div style="animation: fadeInLeft 0.8s ease-out 0.2s forwards;">

        <!-- Main Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-900">
          Welcome to
          <span class="text-cyan-500">
            CROWN TECHNOLOGY
          </span>
        </h2>

        <!-- Description -->
        <p class="mt-6 text-gray-600 text-base md:text-lg leading-relaxed">
          We are a leading technology and creative production company, specializing in
          website development, branding, digital marketing, visual communication, and
          professional video production solutions.
        </p>

        <!-- Key Points -->
        <div class="mt-8 space-y-3">
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 bg-cyan-500 rounded-full"></div>
            <span class="text-slate-700 font-medium">Innovation & Creativity</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
            <span class="text-slate-700 font-medium">Strategic Solutions</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
            <span class="text-slate-700 font-medium">Impactful Results</span>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="mt-8">
          <button class="bg-gradient-to-r from-cyan-500 to-blue-500 px-8 py-3 rounded-xl font-semibold text-white hover:scale-105 transition shadow-lg shadow-cyan-500/20">
            Learn More About Us
          </button>
        </div>

      </div>

      <!-- Right Column - Image -->
      <div class="relative">
        <div class="absolute -inset-4 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-3xl blur-lg opacity-20"></div>
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop&crop=center"
             alt="CROWN TECHNOLOGY Team"
             class="relative w-full h-auto rounded-2xl shadow-2xl object-cover"/>
        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-2 shadow-lg">
          <div class="flex items-center gap-2">
            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-sm font-semibold text-slate-800">Trusted by 500+ Clients</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Services Title -->
    <div class="mt-16">

      <h3 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight">
        We offer
        <span class="text-purple-500">
          end-to-end
        </span>
        solutions for:
      </h3>

    </div>

    <!-- Services Grid - Attractive Colorful Layout -->
    <div class="grid gap-6 mt-12 md:grid-cols-2 lg:grid-cols-3">

      <!-- Service Item -->
      <div class="group reveal stagger-1 bg-gradient-to-br from-cyan-50 to-blue-50 border border-cyan-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-cyan-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          🌐
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-cyan-600 transition-colors">
          Website Design & Development
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Modern, scalable, and responsive websites designed to elevate your digital presence.
        </p>

      </div>

      <!-- Service Item -->
      <div class="group reveal stagger-2 bg-gradient-to-br from-pink-50 to-rose-50 border border-pink-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-pink-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          🎨
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-pink-600 transition-colors">
          Creative Branding & Graphic Design
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Unique branding solutions crafted to create strong visual identity and recognition.
        </p>

      </div>

      <!-- Service Item -->
      <div class="group reveal stagger-3 bg-gradient-to-br from-purple-50 to-violet-50 border border-purple-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-purple-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          🎬
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition-colors">
          Professional Video Production
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          High-quality cinematic video production for brands, events, campaigns, and promotions.
        </p>

      </div>

      <!-- Service Item -->
      <div class="group reveal stagger-4 bg-gradient-to-br from-indigo-50 to-blue-50 border border-indigo-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-indigo-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-indigo-500 to-blue-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          📱
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">
          Social Media Promotion
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Strategic content and promotion designed to grow engagement and online visibility.
        </p>

      </div>

      <!-- Service Item -->
      <div class="group reveal stagger-1 bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-emerald-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          🚀
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-600 transition-colors">
          SEO & Digital Growth
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Growth-focused SEO and digital marketing strategies that boost visibility and conversions.
        </p>

      </div>

      <!-- Service Item -->
      <div class="group reveal stagger-2 bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 hover:border-amber-300">

        <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
          💡
        </div>

        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">
          Visual Communication Solutions
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Memorable brand experiences built with strong visuals, storytelling, and creative strategy.
        </p>

      </div>

    </div>
  </div>

</section>

  <!-- Services -->
  <section class="relative py-20 bg-slate-950 reveal overflow-hidden">
    <!-- Background Texture -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557683316-973673baf926?w=1920&h=1080&fit=crop')] bg-cover bg-center opacity-6"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-900/70 to-slate-950/90"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(14,165,233,0.18),transparent_22%),radial-gradient(circle_at_bottom_right,rgba(168,85,247,0.16),transparent_20%)]"></div>
    <div class="absolute top-12 left-8 w-72 h-72 rounded-full bg-cyan-500/10 blur-3xl"></div>
    <div class="absolute bottom-14 right-8 w-64 h-64 rounded-full bg-purple-500/10 blur-3xl"></div>
    <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(255,255,255,0.02)_0%,rgba(255,255,255,0)_100%)]"></div>

    <div class="relative max-w-7xl mx-auto px-6">

      <div class="text-left mb-16">
        <h2 class="text-4xl md:text-6xl font-bold text-white tracking-tight mb-10 leading-snug">
          We offer Creative Design & Technology Services for Every Need:
        </h2>
      </div>

      <!-- Services List -->
      <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">

        <!-- Column 1 - IT Related Services -->
        <div class="space-y-4">
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">Website Design & Development</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">UI/UX Design Solutions</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">Digital Marketing & Promotion</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">SEO & Google Ads Services</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">Facebook & YouTube Ads</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-cyan-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-cyan-300 transition-colors">Graphic Design & Branding</span>
          </div>
        </div>

        <!-- Column 2 - Creative Services -->
        <div class="space-y-4">
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Professional Photography & Videography</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Wedding & Pre-Wedding Shoots</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Cinematic Video Production</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Social Media Content Creation</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Motion Graphics & Video Editing</span>
          </div>
          <div class="flex items-start gap-4 group">
            <span class="text-pink-400 text-xl mt-1 group-hover:translate-x-1 transition-transform">➜</span>
            <span class="text-white text-lg font-medium group-hover:text-pink-300 transition-colors">Print & Multimedia Solutions</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Testimonials
  <section class="py-16 bg-slate-950 reveal">
    <div class="max-w-6xl mx-auto px-6 text-center">

      <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-pink-400 tracking-tight">
        Client Experiences
      </h2>

      <div class="grid md:grid-cols-3 gap-6 text-sm">

        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl glow-hover transition">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full mx-auto mb-4"/>
          "Outstanding creativity and technical expertise."
        </div>

        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl glow-hover transition">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-14 h-14 rounded-full mx-auto mb-4"/>
          "Professional workflow and stunning designs."
        </div>

        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl glow-hover transition">
          <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-14 h-14 rounded-full mx-auto mb-4"/>
          "Reliable digital and visual partner."
        </div>

      </div>
    </div>
  </section>
 -->

  <!-- Highlights -->
  <section class="relative w-full py-20 md:py-28 reveal bg-gradient-to-br from-slate-50 via-purple-50 to-pink-50 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-200 rounded-full blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-pink-200 rounded-full blur-3xl opacity-20 translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="relative max-w-7xl mx-auto px-6">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-cyan-400 tracking-tight">
      Visual Highlights
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

      <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-1"/>
      <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-2"/>
      <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-3"/>
      <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-4"/>

      <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-1"/>
      <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-2"/>
      <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-3"/>
      <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600" class="rounded-2xl h-48 w-full object-cover image-hover transition reveal stagger-4"/>

    </div>

      <div class="text-center mt-8">
        <button class="bg-gradient-to-r from-cyan-500 to-pink-500 px-6 py-3 rounded-xl font-semibold text-white hover:scale-105 transition shadow-lg shadow-cyan-500/20">
          View More
        </button>
      </div>
    </div>
  </section>

  <!-- Latest Blogs Section -->
  <section class="relative bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-950 py-20 md:py-28 reveal overflow-hidden">
    
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-purple-600 rounded-full blur-3xl opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-600 rounded-full blur-3xl opacity-20 translate-x-1/2 translate-y-1/2"></div>

    <div class="relative max-w-7xl mx-auto px-6">

      <!-- Section Header -->
      <div class="flex items-center justify-between mb-16">
        <div>
          <h2 class="text-4xl md:text-6xl font-bold text-white tracking-tight">
            CROWN Latest <span class="text-cyan-400">Blogs</span>
          </h2>
        </div>
        <button class="hidden md:flex bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-3 rounded-lg font-semibold transition-all shadow-lg shadow-cyan-500/30 hover:shadow-xl items-center gap-2">
          Read All Blogs <span class="text-lg">→</span>
        </button>
      </div>

      <!-- Blog Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Blog Card 1 -->
        <div class="group reveal stagger-1 bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white/20">
          <div class="relative h-56 overflow-hidden bg-gradient-to-br from-cyan-400 to-blue-500">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&h=400&fit=crop" 
                 alt="Web Design Blog" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-cyan-600 transition-colors">
              Latest Trends in Web Design 2026
            </h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
              Discover the hottest web design trends that are reshaping the digital landscape.
            </p>
            <div class="flex justify-center">
              <button class="w-12 h-12 rounded-full bg-cyan-100 text-cyan-600 hover:bg-cyan-600 hover:text-white transition-all flex items-center justify-center">
                →
              </button>
            </div>
          </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="group reveal stagger-2 bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white/20">
          <div class="relative h-56 overflow-hidden bg-gradient-to-br from-pink-400 to-rose-500">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=400&fit=crop" 
                 alt="Branding Blog" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-pink-600 transition-colors">
              Building Strong Brand Identity
            </h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
              Learn how to create a memorable brand that resonates with your audience.
            </p>
            <div class="flex justify-center">
              <button class="w-12 h-12 rounded-full bg-pink-100 text-pink-600 hover:bg-pink-600 hover:text-white transition-all flex items-center justify-center">
                →
              </button>
            </div>
          </div>
        </div>

        <!-- Blog Card 3 -->
        <div class="group reveal stagger-3 bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white/20">
          <div class="relative h-56 overflow-hidden bg-gradient-to-br from-purple-400 to-violet-500">
            <img src="https://images.unsplash.com/photo-1533928298208-27ff66555d0d?w=500&h=400&fit=crop" 
                 alt="Video Production Blog" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">
              Professional Video Production Tips
            </h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
              Master the art of cinematic storytelling and video production techniques.
            </p>
            <div class="flex justify-center">
              <button class="w-12 h-12 rounded-full bg-purple-100 text-purple-600 hover:bg-purple-600 hover:text-white transition-all flex items-center justify-center">
                →
              </button>
            </div>
          </div>
        </div>

        <!-- Blog Card 4 -->
        <div class="group reveal stagger-4 bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-white/20">
          <div class="relative h-56 overflow-hidden bg-gradient-to-br from-emerald-400 to-teal-500">
            <img src="https://images.unsplash.com/photo-1460925895917-adf4e50cfb97?w=500&h=400&fit=crop" 
                 alt="SEO Marketing Blog" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">
              SEO Strategies for Growth
            </h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
              Boost your online visibility with proven SEO strategies and best practices.
            </p>
            <div class="flex justify-center">
              <button class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 hover:bg-emerald-600 hover:text-white transition-all flex items-center justify-center">
                →
              </button>
            </div>
          </div>
        </div>

      </div>

      <!-- Mobile Read All Button -->
      <div class="text-center mt-12 md:hidden">
        <button class="bg-cyan-500 hover:bg-cyan-600 text-white px-8 py-3 rounded-lg font-semibold transition-all shadow-lg shadow-cyan-500/30 hover:shadow-xl inline-flex items-center gap-2">
          Read All Blogs <span class="text-lg">→</span>
        </button>
      </div>

    </div>

  </section>

  <!-- Animations & Scripts -->
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-40px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(40px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes scaleIn {
      from {
        opacity: 0;
        transform: scale(0.85);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes pulse-glow {
      0%, 100% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
      }
      50% {
        box-shadow: 0 0 40px rgba(59, 130, 246, 0.6);
      }
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-15px);
      }
    }

    @keyframes shimmer {
      0% {
        background-position: -1000px 0;
      }
      100% {
        background-position: 1000px 0;
      }
    }

    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }

    .hero-text {
      animation: fadeInDown 1s ease-out forwards;
    }

    .hero-text.active {
      animation: fadeInDown 0.6s ease-out;
    }

    /* Card Animations */
    .group {
      transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .group:hover {
      transform: translateY(-8px);
    }

    /* Button Animations */
    button {
      position: relative;
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    button:hover::before {
      width: 400px;
      height: 400px;
    }

    /* Image Animations */
    .image-hover {
      transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .image-hover:hover {
      transform: scale(1.05) rotate(1deg);
    }

    /* Stagger Animation */
    .stagger-1 { animation-delay: 0.1s; }
    .stagger-2 { animation-delay: 0.2s; }
    .stagger-3 { animation-delay: 0.3s; }
    .stagger-4 { animation-delay: 0.4s; }

    /* Float Animation */
    .float-animation {
      animation: float 3s ease-in-out infinite;
    }

    /* Text Effects */
    h1, h2, h3 {
      animation: fadeInDown 0.8s ease-out forwards;
    }

    p {
      animation: fadeInUp 0.8s ease-out forwards;
    }
  </style>

  <script>
    // Smooth Scroll Animation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });

    // Reveal Elements on Scroll with Intersection Observer
    const reveals = document.querySelectorAll(".reveal");

    if ('IntersectionObserver' in window) {
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
            revealObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.15
      });

      reveals.forEach((el) => revealObserver.observe(el));
    } else {
      function reveal() {
        reveals.forEach((el) => {
          const windowHeight = window.innerHeight;
          const elementTop = el.getBoundingClientRect().top;
          const elementVisible = 150;

          if (elementTop < windowHeight - elementVisible) {
            el.classList.add('active');
          }
        });
      }

      window.addEventListener("scroll", reveal);
      reveal();
    }

    // Hero Text Rotation with Animation
    const heroTexts = [
      "Innovative IT & Website Solutions",
      "Creative Branding & Visual Design",
      "Creative Photo & Video Production",
      "Digital Marketing & Brand Growth"
    ];

    let heroIndex = 0;
    const heroHeading = document.getElementById("heroHeading");
    
    if (heroHeading) {
      heroHeading.innerText = heroTexts[heroIndex];

      setInterval(() => {
        heroHeading.style.opacity = "0";
        heroHeading.style.transform = "translateY(20px)";

        setTimeout(() => {
          heroIndex = (heroIndex + 1) % heroTexts.length;
          heroHeading.innerText = heroTexts[heroIndex];
          heroHeading.style.opacity = "1";
          heroHeading.style.transform = "translateY(0)";
        }, 400);

      }, 4000);

      heroHeading.style.transition = "all 0.4s ease-in-out";
    }

    // Animated Counter for Stats
    function animateCounter(element, target, duration = 2000) {
      let current = 0;
      const increment = target / (duration / 16);
      const counter = setInterval(() => {
        current += increment;
        if (current >= target) {
          element.innerText = target;
          clearInterval(counter);
        } else {
          element.innerText = Math.floor(current);
        }
      }, 16);
    }

    // Parallax Effect on Scroll
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallaxElements = document.querySelectorAll('[data-parallax]');
      
      parallaxElements.forEach(el => {
        const speed = el.getAttribute('data-parallax') || 0.5;
        el.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });

    // Card Stagger Animation
    const cards = document.querySelectorAll('.group');
    cards.forEach((card, index) => {
      card.style.animation = `scaleIn 0.6s ease-out ${index * 0.1}s forwards`;
      card.style.opacity = '0';
    });

    // Add Click Animation
    document.addEventListener('click', function(e) {
      if (e.target.tagName === 'BUTTON') {
        const ripple = document.createElement('span');
        ripple.style.position = 'absolute';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(255,255,255,0.6)';
        ripple.style.width = '20px';
        ripple.style.height = '20px';
        ripple.style.animation = 'scaleIn 0.6s ease-out';
        
        const rect = e.target.getBoundingClientRect();
        ripple.style.left = (e.clientX - rect.left) + 'px';
        ripple.style.top = (e.clientY - rect.top) + 'px';
        
        e.target.appendChild(ripple);
        setTimeout(() => ripple.remove(), 600);
      }
    });
  </script>


<?php include __DIR__ . '/../src/includes/footer.php'; ?>