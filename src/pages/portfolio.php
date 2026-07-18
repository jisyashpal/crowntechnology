<?php 
$pageTitle = 'Portfolio';
$currentPage = 'portfolio';
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative overflow-hidden bg-blue-900 text-white py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(74,222,128,0.2),transparent_50%)]" ></div>
  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4" style="animation: fadeInDown 0.8s ease-out forwards;">
      Our Portfolio
    </h1>
    <p class="mt-6 text-lg opacity-90" style="animation: fadeInUp 0.8s ease-out 0.2s forwards;">
      Showcasing innovative projects that transform ideas into digital excellence.
    </p>
  </div>
</section>

<!-- Filters -->
<section class="max-w-7xl mx-auto px-6 py-10">
  <div class="flex flex-wrap justify-center gap-4 text-sm">
    <button class="bg-emerald-900 text-white px-5 py-2 rounded-full">All</button>
    <button class="bg-gray-100 px-5 py-2 rounded-full">Films</button>
    <button class="bg-gray-100 px-5 py-2 rounded-full">Branding</button>
    <button class="bg-gray-100 px-5 py-2 rounded-full">Web Design</button>
    <button class="bg-gray-100 px-5 py-2 rounded-full">Graphics</button>
  </div>
</section>

<!-- Featured Project -->
<section class="max-w-7xl mx-auto px-6 pb-16">
  <div class="grid md:grid-cols-2 gap-10 items-center">

    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=900" 
         class="rounded-2xl shadow-lg"/>

    <div>
      <h2 class="text-3xl font-bold mb-4">
        Featured Project
      </h2>
      <h3 class="text-xl font-semibold text-rose-600 mb-3">
        Corporate Brand Film
      </h3>
      <p class="text-gray-600 text-sm leading-relaxed mb-6">
        A visually compelling corporate film crafted to communicate brand values, inspire trust, and create a strong emotional connection with the audience. From scripting to final edit, every detail was carefully designed for impact.
      </p>

      <button class="bg-emerald-900 text-white px-6 py-3 rounded-xl text-sm">
        View Case Study
      </button>
    </div>

  </div>
</section>

<!-- Gallery -->
<section class="bg-gray-100 py-16">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center mb-12">
      Selected Works
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

      <!-- ORIGINAL ITEMS -->
      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Brand Campaign</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Website Design</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Documentary</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Motion Graphics</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Training Video</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Brand Identity</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">UI / UX Design</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Corporate Film</p>
        </div>
      </div>

      <!-- NEW ITEMS ADDED -->
      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Landing Page</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Dashboard UI</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1609921141835-710b7fa6e438?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Poster Design</p>
        </div>
      </div>

      <div class="relative group overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?w=600"
             class="w-full h-48 object-cover group-hover:scale-110 transition duration-500"/>
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <p class="text-white text-sm">Digital Artwork</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-purple-900 text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Have a Project in Mind?
  </h2>
  <p class="text-sm opacity-80 mb-6">
    Let’s create something impactful together.
  </p>
  <button class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-xl font-semibold">
    Start a Conversation
  </button>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
