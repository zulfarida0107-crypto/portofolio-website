<!-- ==================== SHARED COMPONENT 1: TopNavBar ==================== -->
<nav class="sticky top-0 z-50 w-full bg-surface/90 dark:bg-inverse-surface/90 backdrop-blur-md shadow-sm border-b border-primary/10 dark:border-inverse-primary/10">
<div class="flex justify-between items-center max-w-7xl mx-auto px-6 py-4">
<!-- Brand Logo -->
<a class="font-headline-md text-headline-md font-bold tracking-tight text-primary dark:text-inverse-primary flex items-center gap-1.5 hover:scale-[1.02] transition-transform duration-200" href="#hero">
<span>Zulfarida ✦</span>
</a>
<!-- Desktop Nav Links -->
<div class="hidden lg:flex items-center space-x-6" id="nav-links">
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#about" data-i18n="nav_about">About</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#what-i-do" data-i18n="nav_vibes">Vibes</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#projects" data-i18n="nav_projects">Projects</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#tech-stack" data-i18n="nav_stack">Stack</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#experience" data-i18n="nav_experience">Experience</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#why-me" data-i18n="nav_whyme">Why Me</a>
<a class="nav-link text-on-surface-variant dark:text-inverse-on-surface hover:text-primary dark:hover:text-inverse-primary transition-all pb-1 text-label-lg font-label-lg border-b-2 border-transparent hover:border-primary/30" href="#contact" data-i18n="nav_contact">Contact</a>
</div>
<!-- Trailing Action Buttons -->
<div class="flex items-center space-x-3">
<a class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 rounded-full border border-primary text-primary hover:bg-surface-variant text-label-lg font-label-lg hover:scale-[1.02] active:scale-[0.98] transition-all" href="#contact">
<span data-i18n="nav_talk">Let's Talk</span>
</a>
<a class="inline-flex items-center gap-1.5 px-5 py-2 rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary shadow-sm hover:scale-[1.02] active:scale-[0.98] transition-all cursor-pointer" href="/images/docs/Zulfarida_CV_ATS_English_Fix.pdf" download="Zulfarida_CV_ATS_English_Fix.pdf" target="_blank">
<span class="material-symbols-outlined text-[16px]">download</span>
<span data-i18n="nav_cv">Download CV</span>
</a>
</div>
</div>
</nav>
<!-- ==================== SECTION 1: COVER / HERO SECTION ==================== -->
<header class="relative max-w-7xl mx-auto px-4 sm:px-6 pt-6 pb-12" id="hero">
<!-- Main Green Editorial Poster Card -->
<div class="relative bg-primary-container rounded-[2rem] p-6 sm:p-10 md:p-14 overflow-hidden text-on-primary shadow-xl border border-primary/20">
<!-- Decorative Collage Stickers & Starbursts -->
<div class="absolute -top-3 left-10 w-24 h-7 washi-tape rotate-[-3deg] rounded-sm pointer-events-none opacity-80"></div>
<div class="absolute top-6 right-8 text-secondary-fixed text-3xl select-none animate-pulse">✦</div>
<div class="absolute top-1/2 left-4 text-surface-container-high/40 text-4xl select-none rotate-12">★</div>
<div class="absolute bottom-6 right-1/3 text-secondary-container/40 text-3xl select-none rotate-[-8deg]">✧</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
<!-- Left Column: Content & Badges -->
<div class="lg:col-span-7 flex flex-col items-start space-y-6">
<!-- Giant Aesthetic Title -->
<div class="space-y-2">
<div class="flex items-center gap-3">
<span class="text-secondary-fixed text-2xl font-serif">✦</span>
<span class="font-label-lg text-label-lg tracking-widest text-on-primary-container uppercase font-bold" data-i18n="hero_showcase">Portfolio &amp; Systems Showcase</span>
</div>
<h1 class="font-display-xl text-display-xl-mobile md:text-display-xl font-extrabold tracking-tight text-surface-container-lowest leading-none">
              ZULFARIDA
            </h1>
<!-- Tape Label Sticker -->
<div class="inline-block mt-2 bg-surface-container-lowest text-primary px-4 py-1 rounded-sm shadow-md rotate-[1.5deg] border border-primary/10">
<span class="font-headline-md text-base sm:text-lg font-bold flex items-center gap-2" data-i18n="hero_role">
                Full Stack Developer <span class="text-secondary">✦</span> Co-Founder of CuitBox
              </span>
</div>
</div>
<!-- Taglines with tactile aesthetic badge styling -->
<div class="space-y-2 bg-primary/40 p-4 rounded-2xl border border-surface-container/20 w-full max-w-xl">
<p class="font-title-editorial text-title-editorial italic text-surface-bright text-lg sm:text-xl font-medium" data-i18n="hero_quote">
              "From database to dashboard, from idea to launch."
            </p>
<p class="font-body-md text-body-md text-surface-variant font-normal" data-i18n="hero_desc">
              I build systems that work, and teams that ship. Focused on resilient backends, tactile dashboards, and real-world execution.
            </p>
</div>
<!-- CTAs -->
<div class="flex flex-wrap items-center gap-4 pt-2">
<a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-surface-container-lowest text-primary font-label-lg text-label-lg font-bold shadow-md hover:bg-surface-variant hover:scale-[1.02] active:scale-[0.98] transition-all" href="#projects">
<span data-i18n="hero_btn_projects">View Projects</span>
<span class="material-symbols-outlined text-[18px]">arrow_downward</span>
</a>
<a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-lg text-label-lg font-bold shadow-md hover:bg-secondary-fixed hover:scale-[1.02] active:scale-[0.98] transition-all cursor-pointer" href="/images/docs/Zulfarida_CV_ATS_English_Fix.pdf" download="Zulfarida_CV_ATS_English_Fix.pdf" target="_blank">
<span class="material-symbols-outlined text-[18px]">article</span>
<span data-i18n="hero_btn_cv">Download CV (PDF)</span>
</a>
</div>
<!-- Mini Pills Row -->
<div class="flex flex-wrap items-center gap-2 pt-2 text-surface-container text-body-sm font-body-sm">
<span class="px-3 py-1 bg-surface-container-high/20 rounded-full border border-surface-container/20">Depok &amp; Jakarta, ID</span>
</div>
</div>
<!-- Right Column: Tactile Photo Card with Paperclip & Stickers -->
<div class="lg:col-span-5 flex justify-center lg:justify-end">
<div class="relative w-full max-w-sm">
<!-- Golden Paperclip Hanging Anchor -->
<div class="paper-clip-gold"></div>
<!-- Ripped Tape Top Right -->
<div class="absolute -top-3 -right-4 w-28 h-7 washi-tape rotate-[6deg] rounded-sm pointer-events-none z-20"></div>
<!-- Frame Card (Scrapbook Polaroid Style) -->
<div class="bg-surface-container-lowest p-3 sm:p-4 rounded-3xl shadow-2xl border border-primary/20 transform rotate-[1.5deg] hover:rotate-0 transition-transform duration-300">
<div class="relative overflow-hidden rounded-2xl aspect-square bg-surface-container-low border border-outline-variant/30">
<img alt="Zulfarida - Full Stack Developer &amp; Systems Analyst" class="w-full h-full object-cover object-top" src="/images/zull.jpeg"/>
<!-- Verified Badge Sticker Overlay -->
<div class="absolute bottom-3 left-3 bg-primary-container text-on-primary text-body-sm font-label-badge font-bold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1.5 border border-surface-container/30">
<span class="material-symbols-outlined text-[16px] text-surface-container-high" style="font-variation-settings: 'FILL' 1;">verified</span>
<span data-i18n="hero_verified">Verified Full-Stack</span>
</div>
</div>
<!-- Polaroid Caption Bottom -->
<div class="pt-3 px-1 pb-1 flex justify-between items-center text-primary">
<div>
<h4 class="font-headline-md text-base font-bold leading-tight">Zulfarida</h4>
<p class="text-body-sm font-body-sm text-outline">CCIT FTUI x Politeknik Negeri Jakarta</p>
</div>
<div class="flex items-center gap-1 bg-secondary-container/60 text-secondary px-2.5 py-1 rounded-full text-xs font-bold">
<span data-i18n="hero_batch">✦ Angkatan 2024 (Semester 5 Sekarang)</span>
</div>
</div>
</div>
<!-- Sticker Pin Badges Overlapping Photo Frame -->
<div class="absolute -bottom-3 right-6 bg-surface-container-lowest text-primary px-3 py-1 rounded-full text-xs font-bold shadow-md rotate-[4deg] border border-outline-variant/40 flex items-center gap-1">
<span data-i18n="hero_strategy_pin">Code + Strategy</span>
<span class="text-secondary">✦</span>
</div>
</div>
</div>
</div>
</div>
</header>
