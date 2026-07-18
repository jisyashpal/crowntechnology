﻿<?php
require_once 'db.php';

// Fetch Page Content
$stmt = $pdo->prepare("SELECT * FROM pages WHERE slug = 'services' AND status = 'published' LIMIT 1");
$stmt->execute();
$pageData = $stmt->fetch();

// Fetch Services
$servicesStmt = $pdo->prepare("SELECT * FROM services WHERE status = 'active' ORDER BY sort_order ASC");
$servicesStmt->execute();
$activeServices = $servicesStmt->fetchAll();

$pageTitle = 'Services';
$currentPage = 'services';
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="relative overflow-hidden bg-blue-900 text-white py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(74,222,128,0.2),transparent_50%)]"></div>
  
  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4" style="animation: fadeInDown 0.8s ease-out forwards;">
      <?= htmlspecialchars($pageData['title'] ?? 'Our Services') ?>
    </h1>
    <p class="mt-6 text-lg opacity-90" style="animation: fadeInUp 0.8s ease-out 0.2s forwards;">
      <?= htmlspecialchars($pageData['subtitle'] ?? '') ?>
    </p>
  </div>
</section>

<!-- Intro -->
<section class="max-w-5xl mx-auto px-6 py-16 text-center">
  <h2 class="text-3xl font-bold mb-6 text-slate-900">
    What We Do Best
  </h2>
  <div class="text-gray-600 leading-relaxed">
    <?= $pageData['content'] ?? 'At <span class="text-emerald-600 font-semibold">CROWN TECHNOLOGY</span>, we combine creativity, technology, and strategy.' ?>
  </div>
</section>

<!-- Core Services -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-slate-500">Core Services</span>
      <h2 class="mt-4 text-4xl font-bold text-slate-950">What we specialize in.</h2>
    </div>
    <div class="grid gap-6 md:grid-cols-3">
      <?php foreach ($activeServices as $index => $service): ?>
      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 transition hover:-translate-y-2 hover:shadow-2xl group">
      <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-500 text-white text-2xl mb-4">🎯</div>
      <h3 class="text-xl font-semibold mb-4 text-slate-900 group-hover:text-cyan-600 transition-colors"><?= htmlspecialchars($service['title']) ?></h3>
      <p class="text-slate-600 text-sm leading-relaxed">
        <?= htmlspecialchars($service['description']) ?>
      </p>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Extended Services -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-slate-500">Additional Services</span>
      <h2 class="mt-4 text-4xl font-bold text-slate-950">Extended expertise & capabilities.</h2>
    </div>
    <div class="grid gap-6 md:grid-cols-4">
      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all">
        <div class="text-2xl mb-4">✨</div>
        <h4 class="font-semibold mb-3 text-slate-900 text-base">Animation</h4>
        <p class="text-slate-600 text-sm leading-relaxed">
          Engaging motion visuals for marketing, explainer videos, and brand storytelling.
        </p>
      </div>

      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all">
        <div class="text-2xl mb-4">🎥</div>
        <h4 class="font-semibold mb-3 text-slate-900 text-base">Post Production</h4>
        <p class="text-slate-600 text-sm leading-relaxed">
          Professional editing, color grading, sound design, and finishing services.
        </p>
      </div>

      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all">
        <div class="text-2xl mb-4">🎙️</div>
        <h4 class="font-semibold mb-3 text-slate-900 text-base">Podcast Setup</h4>
        <p class="text-slate-600 text-sm leading-relaxed">
          Complete podcast recording solutions with studio-grade audio quality.
        </p>
      </div>

      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all">
        <div class="text-2xl mb-4">🎤</div>
        <h4 class="font-semibold mb-3 text-slate-900 text-base">Voiceover Recording</h4>
        <p class="text-slate-600 text-sm leading-relaxed">
          Clear, professional voice solutions for films, ads, and corporate content.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Industries -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-slate-500">Industries</span>
      <h2 class="mt-4 text-4xl font-bold text-slate-950">Industries we serve.</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🏢</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Corporate & Business</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">📚</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Education & Training</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🎬</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Media & Production</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🚀</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Startups & Brands</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🏠</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Real Estate</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">⚕️</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Healthcare</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🏛️</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Government Projects</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🛍️</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Retail & E-commerce</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🏨</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Hospitality & Hotels</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🎉</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Events & Entertainment</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🤝</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">NGOs & Organizations</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">👤</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Personal Branding</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">👗</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Fashion & Lifestyle</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">🍽️</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Food & Restaurants</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">💻</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Technology & IT</span>
    </div>

    <div class="rounded-[2rem] border border-slate-200 p-6 text-center shadow-lg shadow-slate-200/40 hover:shadow-2xl hover:-translate-y-1 transition-all group">
      <div class="text-3xl mb-3">📢</div>
      <span class="font-semibold text-slate-900 text-sm group-hover:text-cyan-600 transition-colors">Advertising & Marketing</span>
    </div>


<!-- Value Proposition -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="text-3xl font-bold text-center mb-10 text-slate-900">
    Why Clients Choose Us
  </h2>

  <div class="grid md:grid-cols-3 gap-6 text-sm">

    <div class="bg-gradient-to-br from-lime-500 to-lime-600 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all group">
      <h4 class="font-semibold mb-2 group-hover:text-yellow-100 transition-colors">🎨 Creative + Strategic</h4>
      <p>
        We balance aesthetics with business goals to deliver meaningful results.
      </p>
    </div>

    <div class="bg-gradient-to-br from-rose-600 to-rose-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all group">
      <h4 class="font-semibold mb-2 group-hover:text-yellow-100 transition-colors">🎯 End-to-End Solutions</h4>
      <p>
        From concept to execution, everything is handled under one roof.
      </p>
    </div>

    <div class="bg-gradient-to-br from-purple-900 to-purple-950 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all group">
      <h4 class="font-semibold mb-2 group-hover:text-yellow-200 transition-colors">✨ Quality Focused</h4>
      <p>
        Precision, polish, and performance define every project we deliver.
      </p>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="relative overflow-hidden bg-gradient-to-r from-slate-950 to-slate-900 text-white py-24 text-center">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(6,182,212,0.1),transparent_50%)]"></div>
  <div class="relative">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
      Ready to Transform Your Vision?
    </h2>
    <p class="text-lg opacity-90 mb-10 max-w-3xl mx-auto">
      Let's create premium digital experiences that deliver real business impact.
    </p>
    <a href="contact.php" class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-10 py-4 text-base font-semibold text-slate-950 transition duration-300 hover:bg-cyan-400 hover:scale-105 shadow-lg shadow-cyan-500/30">
      Get in Touch
    </a>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

