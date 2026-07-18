<footer class="bg-gradient-to-br from-slate-900 to-slate-950 border-t border-purple-500/30 pt-16 pb-10">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 text-sm text-gray-400">

    <div>
      <h3 class="font-semibold mb-4 text-white">CROWN TECHNOLOGY</h3>
      <p>Technology, Creativity & Digital Growth Solutions.</p>
    </div>

    <div>
      <h3 class="font-semibold mb-4 text-white">Useful Links</h3>
      <ul class="space-y-2">
        <li><a href="<?php echo isset($menuPrefix) && $currentPage !== 'home' ? '' : '../src/pages/'; ?>about.php" class="hover:text-cyan-400 transition">About Us</a></li>
        <li><a href="<?php echo isset($menuPrefix) && $currentPage !== 'home' ? '' : '../src/pages/'; ?>services.php" class="hover:text-cyan-400 transition">Services</a></li>
        <li><a href="<?php echo isset($menuPrefix) && $currentPage !== 'home' ? '' : '../src/pages/'; ?>portfolio.php" class="hover:text-cyan-400 transition">Portfolio</a></li>
        <li><a href="<?php echo isset($menuPrefix) && $currentPage !== 'home' ? '' : '../src/pages/'; ?>contact.php" class="hover:text-cyan-400 transition">Contact</a></li>
      </ul>
    </div>

    <div>
      <h3 class="font-semibold mb-4 text-white">Services</h3>
      <ul class="space-y-2">
        <li>Web Development</li>
        <li>Graphic Design</li>
        <li>Digital Marketing</li>
        <li>Video Production</li>
      </ul>
    </div>

    <div>
      <h3 class="font-semibold mb-4 text-white">Contact</h3>
      <ul class="space-y-2">
        <li>Email: info@crowntechnology.in</li>
        <li>Phone: +91 7970509143</li>
        <li>Location: Morabadi, Ranchi</li>
      </ul>
    </div>

  </div>

  <div class="bg-black text-center text-xs text-gray-500 py-4 mt-10">
    © 2026 CROWN TECHNOLOGY. All rights reserved.
  </div>
</footer>

<!-- ===== CHATBOT INTEGRATION ===== -->
<?php include __DIR__ . '/../config/chatbot.php'; ?>

</body>
</html>
