<?php 
$pageTitle = 'About Us';
$currentPage = 'about';
include __DIR__ . '/../includes/header.php';
?>

<!-- ============================= -->
<!-- ABOUT HERO SECTION -->
<!-- ============================= -->

<section class="relative overflow-hidden bg-blue-900 text-white py-24">
  <!-- Radial gradient overlay for visual interest -->
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(74,222,128,0.2),transparent_50%)]"></div>
  
  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4" style="animation: fadeInDown 0.8s ease-out forwards;">
      About us
    </h1>
    <p class="mt-6 text-lg opacity-90" style="animation: fadeInUp 0.8s ease-out 0.2s forwards;">
      Creative solutions designed to elevate brands, engage audiences, and drive growth.
    </p>
  </div>
</section>

<!-- ============================= -->
<!-- MAIN ABOUT US CONTENT SECTION -->
<!-- ============================= -->
<!--
  Purpose: Two-column layout with text content on left, image on right
  Layout: Grid with lg:grid-cols-2 for responsive design
  Background: White with decorative blur elements (glassmorphism effect)
  Padding: py-20 for vertical spacing
-->
<section class="relative overflow-hidden bg-white py-20">
  
  <!-- Decorative blur elements for visual enhancement -->
  <div class="absolute top-0 left-0 w-[450px] h-[450px] bg-white/10 blur-3xl rounded-full"></div>
  <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-white/10 blur-3xl rounded-full"></div>

  <div class="relative max-w-7xl mx-auto px-6">
    
    <!-- Two Column Layout: Content (Left) + Image (Right) -->
    <div class="grid lg:grid-cols-2 gap-16 items-center">

      <!-- LEFT COLUMN: TEXT CONTENT -->
      <div>
        
        <!-- Main Heading with accent color -->
        <h2 class="text-4xl md:text-5xl font-bold leading-tight text-black mb-8">
          Transforming Ideas Into
          <span class="text-cyan-400">Powerful Digital Experiences</span>
        </h2>

        <!-- Content paragraphs with black text for better readability -->
        <div class="space-y-6 text-black">

          <!-- Paragraph 1: Company experience and services -->
          <p class="text-black text-lg leading-relaxed">
            With over <span class="text-cyan font-semibold">3 years of experience</span>,
            Crown Technology helps businesses grow through Website Development,
            Digital Marketing, Graphic Design, AI Solutions, and Automation Services.
          </p>

          <!-- Paragraph 2: Core focus areas -->
          <p class="text-black text-lg leading-relaxed">
            We create modern digital experiences focused on clean design,
            business growth, performance, and strong brand identity.
          </p>

          <!-- Paragraph 3: Mission statement -->
          <p class="text-black text-lg leading-relaxed">
            Our mission is to combine creativity with technology and deliver
            smart solutions that help businesses stand out online.
          </p>

        </div>

        <!-- Call-to-Action Buttons -->
        <div class="flex flex-wrap gap-4 mt-10">

          <!-- Primary CTA: Contact page -->
          <a href="contact.php"
             class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-8 py-3 text-sm font-semibold text-slate-950 transition duration-300 hover:bg-cyan-400 hover:scale-105 shadow-lg shadow-cyan-500/20">
            Start Your Project
          </a>

          <!-- Secondary CTA: Portfolio page -->
          <a href="portfolio.php"
             class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 backdrop-blur-sm px-8 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-white/10 hover:border-white/30">
            Explore Portfolio
          </a>

        </div>

      </div>

      <!-- RIGHT COLUMN: IMAGE SECTION -->
      <div class="relative">

        <!-- Glow effect behind image for depth -->
        <div class="absolute inset-0 rounded-[2rem] bg-cyan-500/10 blur-3xl"></div>

        <!-- Image Card with border and backdrop blur -->
        <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl shadow-black/40">

          <!-- Team collaboration image with hover scale effect -->
          <img 
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1200&q=80"
            alt="Creative Team"
            class="h-full w-full object-cover object-center transition duration-700 hover:scale-105"
          />

          <!-- Gradient overlay: darker at bottom, transparent at top -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>

        </div>

      </div>

    </div>

  </div>
</section>

<!-- ============================= -->
<!-- BRAND PROMISE SECTION -->
<!-- ============================= -->
<!--
  Purpose: Highlight three key brand values
  Layout: 3-column grid (responsive to 1 column on mobile)
  Background: Dark slate with white text
  Cards: Semi-transparent white background with colored shadow
-->
<section class="bg-slate-950 text-white py-20">
  <div class="max-w-7xl mx-auto px-6 grid gap-8 lg:grid-cols-3">
    
    <!-- Card 1: Vision -->
    <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-cyan-500/5">
      <span class="inline-flex items-center justify-center rounded-3xl bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-200">
        Vision First
      </span>
      <h2 class="mt-6 text-3xl font-bold">Design with purpose</h2>
      <p class="mt-4 text-slate-300 leading-relaxed">
        Every experience we craft is grounded in clarity, emotion and measurable business outcomes.
      </p>
    </div>

    <!-- Card 2: Strategy -->
    <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-purple-500/5">
      <span class="inline-flex items-center justify-center rounded-3xl bg-purple-500/10 px-4 py-2 text-sm font-semibold text-purple-200">
        Strategy Driven
      </span>
      <h2 class="mt-6 text-3xl font-bold">Built for growth</h2>
      <p class="mt-4 text-slate-300 leading-relaxed">
        We combine brand strategy, user experience and conversion optimization to create digital assets that grow your business.
      </p>
    </div>

    <!-- Card 3: Execution -->
    <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-fuchsia-500/5">
      <span class="inline-flex items-center justify-center rounded-3xl bg-fuchsia-500/10 px-4 py-2 text-sm font-semibold text-fuchsia-200">
        Expert Execution
      </span>
      <h2 class="mt-6 text-3xl font-bold">High-quality delivery</h2>
      <p class="mt-4 text-slate-300 leading-relaxed">
        From concept to launch, our work is polished, precise and built for premium brands.
      </p>
    </div>

  </div>
</section>

<!-- ============================= -->
<!-- STORY & EXPERIENCE SECTION -->
<!-- ============================= -->
<!--
  Purpose: Tell company story and highlight key metrics
  Layout: Two columns - text on left, stats on right
  Background: Light slate (slate-100)
  Content: Narrative + supporting statistics cards
-->
<section class="bg-slate-100 py-20">
  <div class="max-w-7xl mx-auto px-6 grid gap-16 lg:grid-cols-2 items-center">
    <div class="space-y-8">
      <span class="text-sm uppercase tracking-[0.35em] text-cyan-600">Our Story</span>
      <h2 class="text-4xl font-bold text-slate-950">A creative technology studio for ambitious brands.</h2>
      <p class="text-slate-600 leading-relaxed text-lg">
        We’re a team of designers, developers, filmmakers and strategists who create premium digital experiences, marketing campaigns and visual content. With every project, we aim to deliver work that feels luxurious, performs reliably and tells your story with confidence.
      </p>
      <div class="grid gap-4 sm:grid-cols-2">
        <div class="rounded-3xl bg-white p-6 shadow-lg shadow-slate-200/50 border border-slate-200">
          <h3 class="font-semibold text-slate-900">10+ years experience</h3>
          <p class="mt-3 text-slate-600 text-sm">Delivering design, development and production work for businesses across industries.</p>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-lg shadow-slate-200/50 border border-slate-200">
          <h3 class="font-semibold text-slate-900">End-to-end service</h3>
          <p class="mt-3 text-slate-600 text-sm">From brand identity to digital launches and campaign delivery, we manage the full creative lifecycle.</p>
        </div>
      </div>
    </div>
    <div class="grid gap-6">
      <div class="rounded-[2rem] overflow-hidden bg-gradient-to-br from-cyan-500 to-slate-900 p-6 shadow-2xl shadow-cyan-500/10">
        <div class="text-white">
          <p class="text-sm uppercase tracking-[0.35em] opacity-80">Featured growth</p>
          <h3 class="mt-4 text-3xl font-bold">40% average conversion lift</h3>
          <p class="mt-4 text-sm leading-relaxed text-cyan-100/90">More engagement, more leads and a premium online experience for every brand we partner with.</p>
        </div>
      </div>
      <div class="rounded-[2rem] overflow-hidden bg-white p-6 shadow-2xl shadow-slate-200">
        <div class="flex flex-col gap-3">
          <div class="text-slate-900 text-lg font-semibold">Core disciplines</div>
          <ul class="space-y-3 text-slate-600 text-sm">
            <li>• Brand identity & positioning</li>
            <li>• Website design & development</li>
            <li>• Video production & storytelling</li>
            <li>• Digital marketing & campaign strategy</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================= -->
<!-- SERVICES OVERVIEW SECTION -->
<!-- ============================= -->
<!--
  Purpose: Showcase three main service categories
  Layout: 3-column grid (responsive)
  Background: White
  Interaction: Hover effect with elevation (translate-y-2)
-->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-slate-500">What We Do</span>
      <h2 class="mt-4 text-4xl font-bold text-slate-950">Premium creative and digital services.</h2>
    </div>
    <!-- Service Cards Grid -->
    <div class="grid gap-6 md:grid-cols-3">
      
      <!-- Service 1: Brand & Design -->
      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 transition hover:-translate-y-2 hover:shadow-2xl">
        <!-- Icon container with cyan background -->
        <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-500 text-white text-2xl">01</div>
        <h3 class="mt-6 text-xl font-semibold text-slate-900">Brand & Design</h3>
        <p class="mt-4 text-slate-600 leading-relaxed text-sm">Logo, identity systems, packaging and digital brand guidelines that feel elevated and consistent.</p>
      </div>

      <!-- Service 2: Web & Product -->
      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 transition hover:-translate-y-2 hover:shadow-2xl">
        <!-- Icon container with purple background -->
        <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-500 text-white text-2xl">02</div>
        <h3 class="mt-6 text-xl font-semibold text-slate-900">Web & Product</h3>
        <p class="mt-4 text-slate-600 leading-relaxed text-sm">High-performing websites, landing pages and apps with premium motion, layout and interactions.</p>
      </div>

      <!-- Service 3: Video & Content -->
      <div class="rounded-[2rem] border border-slate-200 p-8 shadow-lg shadow-slate-200/40 transition hover:-translate-y-2 hover:shadow-2xl">
        <!-- Icon container with fuchsia background -->
        <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-fuchsia-500 text-white text-2xl">03</div>
        <h3 class="mt-6 text-xl font-semibold text-slate-900">Video & Content</h3>
        <p class="mt-4 text-slate-600 leading-relaxed text-sm">Cinematic storytelling, motion graphics and content production that elevate brand perception.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================= -->
<!-- PROCESS SECTION -->
<!-- ============================= -->
<!--
  Purpose: Explain the three-step workflow/process
  Layout: 3-column grid showing discovery → craft → launch
  Background: Dark slate (slate-950)
  Color scheme: Cyan, Purple, Fuchsia for each step
-->
<section class="bg-slate-950 text-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-cyan-300">Our Process</span>
      <h2 class="mt-4 text-4xl font-bold">A premium process for better results.</h2>
    </div>
    <!-- Process Steps Grid -->
    <div class="grid gap-6 lg:grid-cols-3">
      
      <!-- Step 1: Discovery (Cyan) -->
      <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
        <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-cyan-500 text-white font-semibold">01</span>
        <h3 class="mt-6 text-xl font-semibold">Discovery</h3>
        <p class="mt-4 text-slate-300 text-sm leading-relaxed">We learn your brand, audience and goals to design a strategy that feels bespoke.</p>
      </div>

      <!-- Step 2: Craft (Purple) -->
      <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
        <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-purple-500 text-white font-semibold">02</span>
        <h3 class="mt-6 text-xl font-semibold">Craft</h3>
        <p class="mt-4 text-slate-300 text-sm leading-relaxed">We create concepts, visuals and experiences that capture attention and deliver clarity.</p>
      </div>

      <!-- Step 3: Launch (Fuchsia) -->
      <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
        <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-fuchsia-500 text-white font-semibold">03</span>
        <h3 class="mt-6 text-xl font-semibold">Launch</h3>
        <p class="mt-4 text-slate-300 text-sm leading-relaxed">We launch your project with precision, monitor performance and support your next phase.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================= -->
<!-- TRUST & CLIENTS SECTION -->
<!-- ============================= -->
<!--
  Purpose: Build credibility with statistics and social proof
  Layout: 4-column grid (responsive to 2 columns on tablet, 1 on mobile)
  Background: Light slate (slate-100)
  Content: Four key statistics/metrics
-->
<section class="bg-slate-100 py-20">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12 text-center">
      <span class="text-sm uppercase tracking-[0.35em] text-slate-500">Trusted by</span>
      <h2 class="mt-4 text-4xl font-bold text-slate-950">Leading brands choose us for premium digital work.</h2>
    </div>
    <!-- Statistics Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      
      <!-- Stat 1: Projects delivered -->
      <div class="rounded-3xl bg-white p-8 text-center shadow-lg shadow-slate-200/50">
        <p class="text-3xl font-bold text-cyan-600">250+</p>
        <p class="mt-3 text-sm text-slate-600">Successful digital experiences delivered.</p>
      </div>

      <!-- Stat 2: Satisfaction rate -->
      <div class="rounded-3xl bg-white p-8 text-center shadow-lg shadow-slate-200/50">
        <p class="text-3xl font-bold text-purple-600">98%</p>
        <p class="mt-3 text-sm text-slate-600">Client satisfaction rate.</p>
      </div>

      <!-- Stat 3: Support availability -->
      <div class="rounded-3xl bg-white p-8 text-center shadow-lg shadow-slate-200/50">
        <p class="text-3xl font-bold text-fuchsia-600">24/7</p>
        <p class="mt-3 text-sm text-slate-600">Ongoing support and rapid delivery.</p>
      </div>

      <!-- Stat 4: Customization -->
      <div class="rounded-3xl bg-white p-8 text-center shadow-lg shadow-slate-200/50">
        <p class="text-3xl font-bold text-slate-900">100%</p>
        <p class="mt-3 text-sm text-slate-600">Custom solutions, no templates.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================= -->
<!-- PREMIUM CTA SECTION -->
<!-- ============================= -->
<!--
  Purpose: Final call-to-action section before footer
  Background: Cyan gradient (bg-cyan-700)
  Text: White
  Action: Two primary CTAs for consultation and portfolio
-->
<section class="bg-cyan-700 text-white py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <div class="inline-flex rounded-full bg-white/10 px-5 py-2 text-sm uppercase tracking-[0.35em] text-cyan-100 mb-6">Ready for premium results?</div>
    <h2 class="text-4xl font-bold">Let’s create a digital experience that sets your brand apart.</h2>
    <p class="mx-auto mt-6 max-w-2xl text-slate-200 leading-relaxed">If you want design, technology and storytelling that feels premium, we are ready to partner with you.</p>
    <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row sm:justify-center">
      <a href="contact.php" class="inline-flex items-center justify-center rounded-full bg-white px-8 py-4 text-sm font-semibold text-slate-950 transition hover:bg-slate-100">Book a Consultation</a>
      <a href="portfolio.php" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-8 py-4 text-sm font-semibold text-white transition hover:bg-white/20">View Work</a>
    </div>
  </div>
</section>

<!-- ============================= -->
<!-- FOOTER INCLUDE -->
<!-- ============================= -->
<?php include __DIR__ . '/../includes/footer.php'; ?>
