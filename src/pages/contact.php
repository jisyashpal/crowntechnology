<?php 
$pageTitle = 'Contact Us';
$currentPage = 'contact';
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative overflow-hidden bg-blue-900 text-white py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(74,222,128,0.2),transparent_50%)]" ></div>
  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4" style="animation: fadeInDown 0.8s ease-out forwards;">
      Get In Touch
    </h1>
    <p class="mt-6 text-lg opacity-90" style="animation: fadeInUp 0.8s ease-out 0.2s forwards;">
      Ready to bring your vision to life? Let's discuss your next project together.
    </p>
  </div>
</section>

<!-- Contact Section -->
<section class="max-w-7xl mx-auto px-6 py-16">

  <div class="grid md:grid-cols-2 gap-8">

    <!-- Map LEFT -->
    <div class="rounded-2xl overflow-hidden shadow-sm">
      <iframe 
        src="https://www.google.com/maps?q=Morabadi,Ranchi&output=embed"
        width="100%" 
        height="100%" 
        class="min-h-[420px]"
        style="border:0;" 
        loading="lazy">
      </iframe>
    </div>

    <!-- Form RIGHT -->
    <div class="bg-gray-100 p-8 rounded-2xl shadow-sm">

      <h2 class="text-2xl font-bold mb-6">
        Send a Message
      </h2>

      <form class="space-y-4 text-sm">

        <input type="text" placeholder="Full Name"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-900"/>

        <input type="tel" placeholder="Mobile No"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-900"/>

        <input type="email" placeholder="Email"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-900"/>

        <input type="text" placeholder="Subject"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-900"/>

        <textarea rows="4" placeholder="Message"
                  class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-900"></textarea>

        <button class="w-full bg-emerald-900 text-white py-3 rounded-xl font-semibold hover:bg-emerald-800 transition">
          Submit
        </button>

      </form>

    </div>

  </div>

</section>

<!-- CTA -->
<section class="bg-purple-900 text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">
    Let’s Build Something Great
  </h2>
  <p class="text-sm opacity-80 mb-6">
    We’re always excited to work on new ideas.
  </p>
  <button class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-xl font-semibold">
    Call Now
  </button>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
