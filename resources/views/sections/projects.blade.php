<!-- ==================== SECTION 4: PROJECTS (3 IN-DEPTH FEATURED PROJECTS) ==================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 py-12" id="projects">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
<div>
<div class="inline-block bg-surface-container-high px-3 py-1 rounded-full text-xs font-bold text-primary mb-2" data-i18n="cert_badge">
          Featured Engineering Works ✦ 2025 - 2026
        </div>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg font-bold text-primary" data-i18n="proj_title">
          Production Projects
        </h2>
</div>
<p class="text-body-md font-body-md text-on-surface-variant max-w-md">
        In-depth architecture breakdown of hardware-integrated kiosks, distributed multi-tier platforms, and computer vision systems.
      </p>
</div>
<div class="space-y-12">
<!-- ⭐ FEATURED 1: CUITBOX PHOTOBOX PLATFORM -->
<article class="bg-surface-container-lowest rounded-3xl p-6 sm:p-10 border border-primary/20 shadow-md relative overflow-hidden">
<!-- Scrapbook Tape & Crown Winner Badge -->
<div class="absolute -top-3 right-12 w-32 h-8 washi-tape rotate-[2deg] rounded-sm pointer-events-none"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-8 space-y-6">
<!-- Meta & Award Ribbon -->
<div class="flex flex-wrap items-center gap-3">
<span class="bg-secondary text-on-secondary px-4 py-1.5 rounded-xl text-xs sm:text-[13px] font-bold inline-flex items-center gap-2 shadow-sm border border-secondary-container/50 whitespace-nowrap">
<span>🏆</span>
<span>1st Winner CCIT Venture Studio Batch #1 'Manggala'</span>
</span>
<span class="bg-surface-container px-3 py-1 rounded-full text-xs font-bold text-primary">
                Self-Service Photo Booth | Web &amp; Desktop Kiosk | 2026
              </span>
<span class="bg-surface-variant px-3 py-1 rounded-full text-xs font-semibold text-on-surface">
                Role: Co-Founder &amp; Lead Engineer (Core Backend Architect)
              </span>
</div>
<!-- Project Title -->
<div>
<h3 class="font-headline-lg text-2xl sm:text-3xl font-bold text-primary flex items-center gap-2">
<span>CuitBox (Photobox Platform)</span>
<span class="text-secondary">✦</span>
</h3>
<p class="font-title-editorial italic text-on-surface-variant text-base sm:text-lg mt-1">
                "A self-service photo booth system where customers book online and take photos at a kiosk, while owners manage everything from one dashboard."
              </p>
</div>
<!-- The Architecture / What I Built -->
<div class="bg-surface-container-low/70 rounded-2xl p-5 border border-primary/10 space-y-3">
<h4 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">hub</span>
<span>System Architecture &amp; Engineering Deliverables</span>
</h4>
<ul class="space-y-2 text-body-md text-on-surface">
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Relational Database &amp; APIs:</strong> Designed normalized relational database architecture &amp; RESTful endpoints bridging the online booking website and the standalone desktop kiosk.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Comprehensive Admin Dashboard:</strong> Slot reservation management, real-time slot scheduling, dynamic tiered pricing, booth machine telemetry, and automated financial report generation in Excel, CSV, and PDF formats.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Desktop Kiosk Application:</strong> Interactive touch-screen capture UI with countdown timers, template selection, and automatic session cleanup.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Security &amp; Authentication:</strong> Role-Based Access Control (RBAC), session tokens, and secure transaction validation.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>3rd Party Integrations:</strong> Midtrans QRIS payment gateway with real-time webhooks, Google Drive OAuth API for automated cloud photo archiving, and SMTP transactional emails with download links.</span>
</li>
</ul>
</div>
<!-- Hardest Challenge Box -->
<div class="bg-secondary-container/40 rounded-2xl p-5 border border-secondary/20 space-y-2">
<div class="flex items-center gap-2 text-secondary font-bold text-sm">
<span class="material-symbols-outlined text-[18px]">build</span>
<span>Hardest Engineering Challenge Solved</span>
</div>
<p class="text-body-md text-on-secondary-container">
<strong>Problem:</strong> Getting DSLR and webcam live-view streams to render stably on low-latency kiosk displays without frame jitter, while concurrently saving high-res RAW frames and recording behind-the-scenes video in the background.<br/>
<strong>Solution:</strong> Implemented hardware driver abstraction layers and dedicated multithreaded capture pipelines using Python OpenCV and native device bindings, guaranteeing zero UI freeze during disk I/O.
              </p>
</div>
</div>
<!-- Project Specs Sidebar -->
<div class="lg:col-span-4 space-y-6">
<div class="bg-surface-container rounded-2xl p-6 border border-primary/10 flex flex-col justify-between space-y-6">
<div class="space-y-4">
<h4 class="font-label-badge text-label-badge font-bold uppercase tracking-wider text-primary">
                Tech Stack &amp; Libraries
              </h4>
<div class="flex flex-wrap gap-2">
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">React.js</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">Vite</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">Electron</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">HTML5 Canvas API</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">Bootstrap 5</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">CodeIgniter 4</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">REST API</span>
<span class="px-2.5 py-1 bg-secondary-container text-secondary rounded-lg text-xs font-bold shadow-xs">Python (Camera Driver)</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">digiCamControl</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">Figma</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">UAT Matrix</span>
</div>
<!-- Metrics Mini List -->
<div class="pt-4 border-t border-primary/20 space-y-2 text-body-sm font-body-sm">
<div class="flex justify-between text-on-surface">
<span class="text-outline">Live Booking:</span>
<span class="font-bold">Real-time QRIS</span>
</div>
<div class="flex justify-between text-on-surface">
<span class="text-outline">Sync Architecture:</span>
<span class="font-bold">REST API + Polling</span>
</div>
<div class="flex justify-between text-on-surface">
<span class="text-outline">Report Generation:</span>
<span class="font-bold">Excel, CSV, PDF</span>
</div>
</div>
</div>
<!-- Project Action Links -->
<div class="space-y-2 pt-4 border-t border-primary/20">
<button type="button" onclick="openCuitboxModal()" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg font-bold shadow-sm hover:opacity-90 active:scale-[0.98] transition-all cursor-pointer">
<span class="material-symbols-outlined text-[18px]">photo_library</span>
<span>Preview</span>
</button>
<a class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-label-lg font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/khanzaen/Photobox_Website" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">code</span>
<span>Github (Photobox_Website)</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-label-lg font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/Aidan-Joe/Photobox" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">code</span>
<span>Github (photobox-dekstop)</span>
</a>
<div class="text-center pt-1">
<span class="text-[11px] font-bold text-secondary uppercase tracking-wider">✦ Live Demo Available on Request</span>
</div>
</div>
</div>

<!-- Real Event Deployment Card (Matched Layout to Tech Stack Specs) -->
<div class="bg-surface-container rounded-2xl p-6 border border-primary/10 space-y-4">
<h4 class="font-label-badge text-label-badge font-bold uppercase tracking-wider text-primary">
Real Event Deployment: CCIT CREATION (2-Day Live Booth Exhibition)
</h4>
<!-- Metrics List -->
<div class="space-y-2 text-body-sm font-body-sm">
<div class="flex justify-between text-on-surface">
<span class="text-outline">Live Exhibition:</span>
<span class="font-bold">2 Days</span>
</div>
<div class="flex justify-between text-on-surface">
<span class="text-outline">Real Users:</span>
<span class="font-bold">40+ (Lecturers &amp; Students)</span>
</div>
<div class="flex justify-between text-on-surface">
<span class="text-outline">UAT Survey Respondents:</span>
<span class="font-bold">23</span>
</div>
<div class="flex justify-between text-on-surface">
<span class="text-outline">Session Completion Rate:</span>
<span class="font-bold">100%</span>
</div>
</div>
<!-- Documentation Action Button (Same Color as Preview Button) -->
<div class="pt-4 border-t border-primary/20">
<button type="button" onclick="openCuitboxDocsModal()" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg font-bold shadow-sm hover:opacity-90 active:scale-[0.98] transition-all cursor-pointer">
<span class="material-symbols-outlined text-[18px]">description</span>
<span>Documentation</span>
</button>
</div>
</div>
</div>
</div>
</article>
<!-- PROJECT 2: COFFEE SHOP INTEGRATED INFORMATION SYSTEM -->
<article class="bg-surface-container-lowest rounded-3xl p-6 sm:p-10 border border-primary/10 shadow-sm relative overflow-hidden">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-8 space-y-6">
<div class="flex flex-wrap items-center gap-3">
<span class="bg-primary text-on-primary px-3 py-1 rounded-full text-xs font-bold">
                Capstone Project | 2025 - 2026
              </span>
<span class="bg-surface-container px-3 py-1 rounded-full text-xs font-semibold text-primary">
                Multi-Platform Architecture (Web, Mobile, REST API)
              </span>
</div>
<div>
<h3 class="font-headline-lg text-2xl sm:text-3xl font-bold text-primary">
                Coffee Shop Integrated Information System
              </h3>
<p class="font-title-editorial italic text-on-surface-variant text-base sm:text-lg mt-1">
                "Complete ecosystem connecting patron web-ordering, barista order fulfillment, and managerial mobile dashboards in real-time."
              </p>
</div>
<div class="bg-surface-container-low/70 rounded-2xl p-5 border border-primary/10 space-y-3">
<h4 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-primary">
                Key Deliverables &amp; Responsibilities
              </h4>
<ul class="space-y-2 text-body-md text-on-surface">
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Full Ownership:</strong> Spearheaded requirements analysis, relational database design, interactive UI/UX wireframes, and cross-platform coding.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Customer Web Portal:</strong> Built with CodeIgniter 4 featuring real-time menu catalogues, cart calculation, and order tracking.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Admin Mobile App:</strong> Native-feel Flutter application for coffee shop owners and baristas to manage live kitchen queues and stock inventory.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>REST API Server:</strong> Spring Boot microservice handling transaction locking, token authorization, and MySQL synchronization.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Testing &amp; Validation:</strong> Documented full Black-Box Testing matrix to verify boundary values and fault tolerance.</span>
</li>
</ul>
</div>
</div>
<div class="lg:col-span-4 bg-surface-container-low rounded-2xl p-6 border border-primary/10 flex flex-col justify-between space-y-6">
<div class="space-y-4">
<h4 class="font-label-badge text-label-badge font-bold uppercase tracking-wider text-primary">
                Technologies
              </h4>
<div class="flex flex-wrap gap-2">
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">CodeIgniter 4</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">Flutter (Dart)</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">Spring Boot (Java)</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">MySQL Relational</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">Figma Prototyping</span>
</div>
</div>
<!-- Repositories & Action Links -->
<div class="space-y-2 pt-4 border-t border-outline-variant/30">
<button type="button" onclick="openCoffeeShopModal()" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg font-bold shadow-sm hover:opacity-90 active:scale-[0.98] transition-all cursor-pointer">
  <span class="material-symbols-outlined text-[18px]">photo_library</span>
  <span>Preview Interaktif</span>
</button>
<a class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-label-lg text-xs sm:text-sm font-bold shadow-sm active:scale-[0.98] transition-all cursor-pointer" href="https://youtu.be/i2iFWwCDxsc?si=mCFVfke9jY4ZNgNp" target="_blank" rel="noopener noreferrer">
  <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
  <span>Tonton Demo YouTube</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 px-3 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-xs sm:text-sm font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/zulfarida0107-crypto/ta-ci4-web-coffeeshop" rel="noopener noreferrer" target="_blank">
  <span class="material-symbols-outlined text-[18px]">code</span>
  <span>Github (ta-ci4-web-coffeeshop)</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 px-3 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-xs sm:text-sm font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/zulfarida0107-crypto/ta-flutter-aplikasi-coffeeshop" rel="noopener noreferrer" target="_blank">
  <span class="material-symbols-outlined text-[18px]">code</span>
  <span>Github (ta-flutter-aplikasi-coffeeshop)</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 px-3 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-xs sm:text-sm font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/zulfarida0107-crypto/ta-server-coffeeshop" rel="noopener noreferrer" target="_blank">
  <span class="material-symbols-outlined text-[18px]">code</span>
  <span>Github (ta-server-coffeeshop)</span>
</a>
</div>
</div>
</div>
</article>
<!-- PROJECT 3: BISINDO GESTURE RECOGNITION & AI EXPLORATION -->
<article class="bg-surface-container-lowest rounded-3xl p-6 sm:p-10 border border-primary/10 shadow-sm relative overflow-hidden">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-8 space-y-6">
<div class="flex flex-wrap items-center gap-3">
<span class="bg-secondary-container text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-bold">
                Machine Learning &amp; CV Exploration | 2025 - Present
              </span>
<span class="bg-surface-container-high text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                In Progress ✦ Active Research
              </span>
</div>
<div>
<h3 class="font-headline-lg text-2xl sm:text-3xl font-bold text-primary">
                BISINDO Gesture Recognition &amp; AI Exploration
              </h3>
<p class="font-title-editorial italic text-on-surface-variant text-base sm:text-lg mt-1">
                "Computer vision system recognizing Indonesian Sign Language (BISINDO) to improve digital accessibility."
              </p>
</div>
<div class="bg-surface-container-low/70 rounded-2xl p-5 border border-primary/10 space-y-3">
<h4 class="font-label-lg text-label-lg font-bold uppercase tracking-wider text-primary">
                Research Focus &amp; Pipelines
              </h4>
<ul class="space-y-2 text-body-md text-on-surface">
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Computer Vision Engine:</strong> Python &amp; OpenCV real-time video stream ingestion pipeline.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Landmark Feature Extraction:</strong> Leveraging Google MediaPipe hands and pose models to extract 21 precise 3D coordinate hand landmarks per frame.</span>
</li>
<li class="flex items-start gap-2">
<span class="text-primary font-bold">›</span>
<span><strong>Classification Models:</strong> Training lightweight deep learning models for accurate translation of BISINDO alphabets and conversational words.</span>
</li>
</ul>
</div>
</div>
<div class="lg:col-span-4 bg-surface-container-low rounded-2xl p-6 border border-primary/10 flex flex-col justify-between space-y-6">
<div class="space-y-4">
<h4 class="font-label-badge text-label-badge font-bold uppercase tracking-wider text-primary">
                Research Toolkit
              </h4>
<div class="flex flex-wrap gap-2">
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold">Python 3.x</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">OpenCV</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">MediaPipe</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">NumPy / Pandas</span>
<span class="px-2.5 py-1 bg-surface-container-lowest text-primary rounded-lg text-xs font-bold shadow-xs">TensorFlow / Keras</span>
</div>
</div>
<div class="pt-4 border-t border-outline-variant/30 space-y-3">
<div class="p-3 bg-surface-container-lowest rounded-xl border border-primary/10 text-body-sm text-outline">
<span class="font-bold text-primary block mb-0.5">Status: Active Model Tuning</span>
                Benchmarking latency on edge device webcams for real-time human-computer interaction.
              </div>
<button type="button" onclick="openBisindoModal()" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg font-bold shadow-sm hover:opacity-90 active:scale-[0.98] transition-all cursor-pointer">
  <span class="material-symbols-outlined text-[18px]">photo_library</span>
  <span>Preview</span>
</button>
<a class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-label-lg font-semibold hover:bg-surface-variant transition-all shadow-xs" href="https://github.com/zulfarida0107-crypto/bisindo-gesture" rel="noopener noreferrer" target="_blank">
  <span class="material-symbols-outlined text-[18px]">code</span>
  <span>Github</span>
</a>
</div>
</div>
</div>
</article>
</div>
</section>
