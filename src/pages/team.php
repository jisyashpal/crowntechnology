<?php 
$pageTitle = 'Our Team';
$currentPage = 'team';
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative overflow-hidden bg-blue-900 text-white py-24">
  
  <div class="absolute w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl -top-20 -left-20"></div>
  <div class="absolute w-96 h-96 bg-purple-900/30 rounded-full blur-3xl -bottom-20 -right-20"></div>

  <div class="max-w-7xl mx-auto px-6 text-center relative">
    <h1 class="text-4xl md:text-6xl font-bold">
      Meet The Minds Behind
    </h1>
    <p class="mt-6 text-sm opacity-90 max-w-2xl mx-auto">
      A team of creators, strategists, and innovators turning ideas into impactful digital and visual experiences.
    </p>
  </div>
</section>

<!-- Team Section -->
<section class="max-w-7xl mx-auto px-6 py-20">

  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

    <!-- Founder Highlight -->
    <div class="col-span-2 row-span-2 bg-gradient-to-br from-purple-900 to-purple-700 text-white p-6 rounded-3xl shadow-lg relative overflow-hidden group">
      
      <div class="absolute w-72 h-72 bg-yellow-400/10 rounded-full blur-3xl -top-10 -right-10"></div>

      <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600"
           class="w-full h-56 object-cover rounded-2xl mb-4"/>

      <h3 class="text-xl font-bold">Ajay Munda</h3>
      <p class="text-yellow-400 text-sm">Founder & Creative Director</p>

      <p class="text-xs opacity-80 mt-3 leading-relaxed">
        Driving creative vision, innovation, and strategic storytelling across branding, design, and digital solutions.
      </p>

      <div class="flex gap-3 mt-4 text-xs opacity-70">
        <span class="bg-white/10 px-3 py-1 rounded-full">Leadership</span>
        <span class="bg-white/10 px-3 py-1 rounded-full">Strategy</span>
        <span class="bg-white/10 px-3 py-1 rounded-full">Creativity</span>
      </div>
    </div>

    <!-- Premium Glass Cards -->
    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Sneha Roy</h3>
      <p class="text-gray-500 text-xs">UI / UX Designer</p>
      <div class="w-10 h-1 bg-rose-500 rounded-full mt-2"></div>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Karan Singh</h3>
      <p class="text-gray-500 text-xs">Video Editor</p>
      <div class="w-10 h-1 bg-purple-700 rounded-full mt-2"></div>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Neha Das</h3>
      <p class="text-gray-500 text-xs">Content Specialist</p>
      <div class="w-10 h-1 bg-emerald-700 rounded-full mt-2"></div>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Amit Verma</h3>
      <p class="text-gray-500 text-xs">Brand Strategist</p>
      <div class="w-10 h-1 bg-yellow-500 rounded-full mt-2"></div>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Priya Sharma</h3>
      <p class="text-gray-500 text-xs">Graphic Designer</p>
      <div class="w-10 h-1 bg-rose-600 rounded-full mt-2"></div>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-gray-200 p-4 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
      <div class="relative overflow-hidden rounded-xl">
        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?w=400"
             class="w-full h-36 object-cover group-hover:scale-110 transition duration-500"/>
      </div>
      <h3 class="font-semibold text-sm mt-3">Rohit Gupta</h3>
      <p class="text-gray-500 text-xs">Marketing Manager</p>
      <div class="w-10 h-1 bg-lime-500 rounded-full mt-2"></div>
    </div>

  </div>

</section>

<!-- CTA -->
<section class="bg-gradient-to-r from-emerald-900 to-purple-900 text-white py-20 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Collaborate With Our Experts
  </h2>
  <p class="text-sm opacity-80 mb-6">
    Let’s transform ideas into powerful experiences.
  </p>
  <button class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-xl font-semibold">
    Start a Conversation
  </button>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
