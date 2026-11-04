<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profName ?? 'Zulfarida' }} | {{ $profHeadline ?? 'QA & Systems Analyst' }}</title>
    <meta name="description" content="{{ $profSummary ?? '' }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN with Custom Plugins -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb', // Primary Royal Blue
                            700: '#1d4ed8',
                            800: '#1e40af', // Deep Navy Tech Blue
                            900: '#1e3a8a',
                            950: '#0f172a',
                        },
                        accent: {
                            cyan: '#0ea5e9',
                            sky: '#38bdf8',
                            emerald: '#10b981',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Glowing & Background Grid */
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(37, 99, 235, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(37, 99, 235, 0.05) 1px, transparent 1px);
        }
        .glow-effect {
            box-shadow: 0 0 50px -10px rgba(37, 99, 235, 0.25);
        }
        .glow-cyan {
            box-shadow: 0 0 35px -5px rgba(14, 165, 233, 0.3);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-brand-600 selection:text-white">

    @php
        $profName = $profile->name ?? config('portfolio.profile.name');
        $profStatus = $profile->badge_status ?? config('portfolio.profile.badge_status');
        $profHeadline = $profile->headline ?? config('portfolio.profile.headline');
        $profSubheadline = $profile->subheadline ?? config('portfolio.profile.subheadline');
        $profLocation = $profile->location ?? config('portfolio.profile.location');
        $profSummary = $profile->bio_summary ?? config('portfolio.profile.summary');
        $profExtSummary = $profile->extended_summary ?? config('portfolio.profile.extended_summary');
        $profEmail = $profile->email ?? config('portfolio.profile.email');
        $profWhatsapp = $profile->whatsapp_url ?? config('portfolio.profile.whatsapp');
        $profLinkedin = $profile->linkedin_url ?? config('portfolio.profile.linkedin');
        $profGithub = $profile->github_url ?? config('portfolio.profile.github');
        $profPhoto = $profile->photo_path ?? config('portfolio.profile.photo');
        $profCv = $profile->cv_path ?? config('portfolio.profile.cv_file');

        $metricList = isset($metrics) && $metrics->count() > 0 ? $metrics->toArray() : config('portfolio.metrics');
        $compList = isset($competencies) && $competencies->count() > 0 ? $competencies->toArray() : config('portfolio.competencies');
        $projList = isset($projects) && $projects->count() > 0 ? $projects->toArray() : config('portfolio.projects');
        $expList = isset($experiences) && $experiences->count() > 0 ? $experiences->toArray() : config('portfolio.experience');
        $certList = isset($certifications) && $certifications->count() > 0 ? $certifications->toArray() : config('portfolio.certifications');
    @endphp

    <!-- Subtle Background Glow Elements -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0"></div>
    <div class="fixed top-0 left-1/4 w-96 h-96 bg-brand-600/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed top-1/3 right-10 w-96 h-96 bg-accent-cyan/10 rounded-full blur-3xl pointer-events-none"></div>

    <!-- 1. NAVIGATION BAR -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand / Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-700 to-accent-cyan flex items-center justify-center font-bold text-white text-lg shadow-lg shadow-brand-600/30 group-hover:scale-105 transition-transform">
                    ZR
                </div>
                <div>
                    <span class="font-bold text-lg text-white tracking-tight flex items-center gap-2">
                        {{ config('portfolio.profile.name') }}
                        <span class="text-xs px-2 py-0.5 rounded-full bg-brand-900/60 text-brand-300 border border-brand-700/50 font-mono">QA</span>
                    </span>
                    <span class="block text-xs text-slate-400">Systems Analyst & QA Engineer</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-slate-300">
                <a href="#about" class="hover:text-brand-400 transition-colors">Tentang</a>
                <a href="#competencies" class="hover:text-brand-400 transition-colors">Kompetensi QA</a>
                <a href="#projects" class="hover:text-brand-400 transition-colors">Proyek & Skenario Uji</a>
                <a href="#experience" class="hover:text-brand-400 transition-colors">Pengalaman</a>
                <a href="#certifications" class="hover:text-brand-400 transition-colors">Sertifikasi</a>
                <a href="#contact" class="hover:text-brand-400 transition-colors">Kontak</a>
            </nav>

            <!-- Quick Action Links & CV Download -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- GitHub Icon -->
                <a href="{{ config('portfolio.profile.github') }}" target="_blank" rel="noopener noreferrer" title="Kunjungi Profil GitHub" class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-white hover:border-brand-500 hover:bg-brand-950 transition-all">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                </a>
                <!-- LinkedIn Icon -->
                <a href="{{ config('portfolio.profile.linkedin') }}" target="_blank" rel="noopener noreferrer" title="Kunjungi Profil LinkedIn" class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-white hover:border-brand-500 hover:bg-brand-950 transition-all">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <!-- Download CV Button -->
                <a href="{{ config('portfolio.profile.cv_file') }}" download class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-brand-600 to-accent-cyan text-white text-xs font-semibold shadow-md shadow-brand-600/20 hover:opacity-95 hover:scale-[1.02] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Download CV (PDF)
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10">

        <!-- 2. HERO SECTION -->
        <section id="about" class="pt-12 pb-20 lg:pt-20 lg:pb-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left Column: Headline, Bio & Action Buttons -->
                    <div class="lg:col-span-7 space-y-6">
                        <!-- Status Badge Pill -->
                        <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-slate-900 border border-brand-500/40 text-brand-300 text-xs font-medium shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span class="w-2 h-2 rounded-full bg-emerald-500 -ml-4"></span>
                            {{ config('portfolio.profile.badge_status') }}
                        </div>

                        <!-- Main Big Title -->
                        <div class="space-y-2">
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                                Halo, saya <span class="bg-gradient-to-r from-brand-400 via-accent-sky to-white bg-clip-text text-transparent">{{ config('portfolio.profile.name') }}</span>
                            </h1>
                            <p class="text-xl sm:text-2xl font-semibold text-brand-400">
                                {{ config('portfolio.profile.headline') }}
                            </p>
                        </div>

                        <!-- Award Announcement Banner -->
                        <div class="p-4 rounded-2xl bg-gradient-to-r from-brand-950/90 via-slate-900 to-slate-900 border border-brand-500/30 flex items-start sm:items-center gap-3.5">
                            <div class="p-2.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <div class="text-sm">
                                <span class="font-bold text-white block">1st Winner — CCIT Venture Studio Batch #1</span>
                                <span class="text-slate-400">Proyek CuitBox: Systems analysis, technical documentation & end-to-end QA.</span>
                            </div>
                        </div>

                        <!-- Narrative Pitch -->
                        <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                            {{ config('portfolio.profile.summary') }}
                        </p>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed border-l-2 border-brand-500/60 pl-4 py-1">
                            {{ config('portfolio.profile.extended_summary') }}
                        </p>

                        <!-- Action Buttons Group (Social Media & CV) -->
                        <div class="pt-2 flex flex-wrap items-center gap-3">
                            <a href="#projects" class="px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-semibold text-sm shadow-lg shadow-brand-600/30 hover:shadow-brand-600/50 hover:scale-[1.02] transition-all flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Eksplorasi Proyek & Skenario QA
                            </a>
                            <a href="{{ config('portfolio.profile.whatsapp') }}" target="_blank" rel="noopener noreferrer" class="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-700 text-slate-200 font-semibold text-sm hover:border-brand-500 hover:text-white transition-all flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                WhatsApp
                            </a>
                            <a href="{{ config('portfolio.profile.linkedin') }}" target="_blank" rel="noopener noreferrer" class="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-700 text-slate-200 font-semibold text-sm hover:border-brand-500 hover:text-white transition-all flex items-center gap-2">
                                <svg class="w-4 h-4 text-brand-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                LinkedIn
                            </a>
                            <a href="{{ config('portfolio.profile.github') }}" target="_blank" rel="noopener noreferrer" class="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-700 text-slate-200 font-semibold text-sm hover:border-brand-500 hover:text-white transition-all flex items-center gap-2">
                                <svg class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                GitHub
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Profile Photo with Tech Glowing Frame -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative group">
                            <!-- Background Glowing Accent -->
                            <div class="absolute -inset-1.5 bg-gradient-to-tr from-brand-600 via-accent-cyan to-indigo-600 rounded-3xl blur-xl opacity-60 group-hover:opacity-80 transition duration-500"></div>
                            
                            <!-- Card Frame -->
                            <div class="relative w-72 sm:w-80 rounded-2xl bg-slate-900 border border-slate-700/80 p-3 shadow-2xl overflow-hidden">
                                <!-- Photo Container with Fallback Graphic -->
                                <div class="w-full aspect-square rounded-xl bg-gradient-to-b from-slate-800 to-slate-950 flex flex-col items-center justify-center overflow-hidden border border-slate-800 relative">
                                    <img src="{{ config('portfolio.profile.photo') }}" 
                                         alt="{{ config('portfolio.profile.name') }}" 
                                         class="w-full h-full object-cover rounded-xl"
                                         onerror="this.style.display='none'; document.getElementById('photo-fallback').style.display='flex';">
                                    
                                    <!-- Fallback Avatar if profile.jpg is not yet uploaded -->
                                    <div id="photo-fallback" class="hidden flex-col items-center justify-center p-6 text-center">
                                        <div class="w-24 h-24 rounded-full bg-brand-900/60 border-2 border-brand-500/60 flex items-center justify-center text-brand-300 font-bold text-3xl mb-3 shadow-inner">
                                            ZR
                                        </div>
                                        <p class="text-xs text-slate-300 font-medium">Foto Profil Anda</p>
                                        <p class="text-[11px] text-slate-400 mt-1">Simpan foto di: <br><code class="text-brand-400 font-mono">public/images/profile.jpg</code></p>
                                    </div>
                                </div>

                                <!-- Card Footer Detail -->
                                <div class="pt-3.5 pb-1 px-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-bold text-sm text-white">{{ config('portfolio.profile.name') }}</p>
                                            <p class="text-xs text-slate-400">{{ config('portfolio.profile.location') }}</p>
                                        </div>
                                        <span class="px-2 py-0.5 rounded-md bg-brand-950 border border-brand-700 text-brand-300 text-[11px] font-mono">
                                            Verified QA
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 4 METRICS COUNTER BAR -->
                <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                    @foreach($metricList as $metric)
                        <div class="p-5 rounded-2xl bg-slate-900/90 border border-slate-800/80 hover:border-brand-500/50 transition-all group">
                            <p class="text-3xl sm:text-4xl font-extrabold text-brand-400 font-mono group-hover:scale-105 transition-transform inline-block">
                                {{ $metric['value'] }}
                            </p>
                            <p class="font-bold text-sm text-slate-200 mt-1">{{ $metric['label'] }}</p>
                            <p class="text-xs text-slate-400 mt-0.5">{{ $metric['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- 3. CORE COMPETENCIES (4 PILARS OF QA & SYSTEMS ANALYSIS) -->
        <section id="competencies" class="py-20 bg-slate-900/40 border-y border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-accent-cyan px-3 py-1 rounded-full bg-accent-cyan/10 border border-accent-cyan/20">
                        Technical Skillset
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                        4 Pilar Kompetensi & Kapabilitas QA
                    </h2>
                    <p class="text-slate-400 text-sm sm:text-base">
                        Kombinasi unik antara pengujian kualitas menyeluruh (*end-to-end testing*), analisis arsitektur sistem, dan pemahaman logika kode.
                    </p>
                </div>

                <!-- 4 Pillars Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @foreach($compList as $pillar)
                        <div class="p-7 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-brand-500/50 hover:bg-slate-900 transition-all flex flex-col justify-between group">
                            <div>
                                <div class="flex items-center gap-3.5 mb-4">
                                    <div class="w-10 h-10 rounded-xl bg-brand-950 border border-brand-500/40 flex items-center justify-center text-brand-400 group-hover:bg-brand-600 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <h3 class="font-bold text-lg text-white">{{ $pillar['category'] }}</h3>
                                </div>
                                <p class="text-slate-400 text-sm mb-6 leading-relaxed">
                                    {{ $pillar['description'] }}
                                </p>
                            </div>
                            <!-- Skills Badges -->
                            <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-800/80">
                                @foreach($pillar['skills'] as $skill)
                                    <span class="px-3 py-1 rounded-lg bg-slate-950 text-slate-300 border border-slate-800 text-xs font-medium hover:border-brand-400/50 transition-colors">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- 4. FEATURED PROJECTS & QA CASE STUDIES -->
        <section id="projects" class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                    <div>
                        <span class="text-xs font-mono uppercase tracking-wider text-brand-400 px-3 py-1 rounded-full bg-brand-950 border border-brand-800">
                            Hands-On Evidence
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3">
                            Proyek & Skenario Pengujian (QA Case Studies)
                        </h2>
                        <p class="text-slate-400 text-sm sm:text-base mt-2 max-w-2xl">
                            Setiap proyek dilengkapi sudut pandang pengujian kualitas, verifikasi integrasi sistem, dan artefak dokumentasi teknis.
                        </p>
                    </div>

                    <!-- Category Filter Tabs -->
                    <div class="flex flex-wrap gap-2 p-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs font-medium" id="filter-container">
                        <button onclick="filterProjects('all')" class="filter-btn active px-3.5 py-1.5 rounded-lg bg-brand-600 text-white transition-all" data-category="all">Semua ({{ count($projList) }})</button>
                        <button onclick="filterProjects('flagship')" class="filter-btn px-3.5 py-1.5 rounded-lg text-slate-400 hover:text-white transition-all" data-category="flagship">Flagship / Award</button>
                        <button onclick="filterProjects('final-project')" class="filter-btn px-3.5 py-1.5 rounded-lg text-slate-400 hover:text-white transition-all" data-category="final-project">Tugas Akhir</button>
                        <button onclick="filterProjects('qa-testing')" class="filter-btn px-3.5 py-1.5 rounded-lg text-slate-400 hover:text-white transition-all" data-category="qa-testing">QA Testing</button>
                    </div>
                </div>

                <!-- Projects Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($projList as $proj)
                        <div class="project-card p-7 rounded-2xl bg-slate-900/90 border border-slate-800 hover:border-brand-500/60 transition-all flex flex-col justify-between group" data-category="{{ $proj['category'] }}">
                            <div>
                                <!-- Top Badge & Year -->
                                <div class="flex items-center justify-between gap-3 mb-4">
                                    <span class="px-3 py-1 rounded-full bg-brand-950 border border-brand-700/60 text-brand-300 text-xs font-semibold">
                                        {{ $proj['badge'] }}
                                    </span>
                                    <span class="text-xs text-slate-400 font-mono">{{ $proj['year'] }}</span>
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl sm:text-2xl font-bold text-white group-hover:text-brand-300 transition-colors">
                                    {{ $proj['title'] }}
                                </h3>

                                <!-- Summary -->
                                <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                                    {{ $proj['summary'] }}
                                </p>

                                <!-- QA Focus Highlight Box -->
                                <div class="mt-4 p-3.5 rounded-xl bg-slate-950/80 border border-slate-800 text-xs">
                                    <span class="font-bold text-accent-cyan flex items-center gap-1.5 mb-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                                        Fokus Skenario Uji & Analisis:
                                    </span>
                                    <p class="text-slate-400 leading-normal">{{ $proj['qa_focus'] }}</p>
                                </div>

                                <!-- Tech Stack Badges -->
                                <div class="flex flex-wrap gap-1.5 mt-5">
                                    @foreach($proj['tech_stack'] as $tech)
                                        <span class="px-2.5 py-0.5 rounded-md bg-slate-950 text-slate-400 border border-slate-800/80 text-[11px] font-mono">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Interactive Buttons Footer (Video Demo, GitHub, Attachment Preview) -->
                            <div class="mt-8 pt-5 border-t border-slate-800 flex flex-wrap items-center justify-between gap-3">
                                <div class="flex flex-wrap items-center gap-2">
                                    <!-- Video Demo Button (Triggers Modal) -->
                                    @if(!empty($proj['demo_video']))
                                        <button onclick="openVideoModal('{{ $proj['demo_video'] }}', '{{ addslashes($proj['title']) }}')" class="px-3.5 py-2 rounded-xl bg-brand-600/20 hover:bg-brand-600 text-brand-300 hover:text-white border border-brand-500/40 text-xs font-semibold flex items-center gap-2 transition-all">
                                            <svg class="w-4 h-4 text-accent-sky" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/></svg>
                                            Tonton Demo Video
                                        </button>
                                    @endif

                                    <!-- Attachment / Documentation Preview Button -->
                                    @if(!empty($proj['attachment_type']))
                                        <button onclick="openImageModal('{{ $proj['attachment_image'] ?? '' }}', '{{ addslashes($proj['attachment_type']) }}', '{{ addslashes($proj['title']) }}')" class="px-3 py-2 rounded-xl bg-slate-950 hover:bg-slate-800 text-slate-300 border border-slate-800 text-xs font-medium flex items-center gap-1.5 transition-all">
                                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            {{ $proj['attachment_type'] }}
                                        </button>
                                    @endif
                                </div>

                                <!-- GitHub Code Link -->
                                @if(!empty($proj['github']))
                                    <a href="{{ $proj['github'] }}" target="_blank" rel="noopener noreferrer" class="text-xs text-brand-400 hover:text-brand-300 font-semibold flex items-center gap-1 group/link">
                                        Lihat Kode di GitHub
                                        <span class="group-hover/link:translate-x-1 transition-transform">→</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- 5. INTERACTIVE QA TEST SCENARIO SAMPLE (ARTEFAK QA NYATA) -->
        <section class="py-16 bg-slate-900/30 border-y border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="p-8 rounded-3xl bg-slate-900 border border-slate-800 shadow-2xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <span class="text-xs font-mono uppercase tracking-wider text-emerald-400">Sample QA Matrix Artifact</span>
                            <h3 class="text-xl sm:text-2xl font-bold text-white mt-1">Cuplikan Format Skenario Pengujian (Test Case Matrix)</h3>
                            <p class="text-xs sm:text-sm text-slate-400 mt-1">Standar dokumentasi uji yang digunakan untuk memverifikasi alur API dan transaksi multi-platform.</p>
                        </div>
                        <span class="px-3 py-1 rounded-md bg-emerald-950 border border-emerald-700/60 text-emerald-400 text-xs font-mono self-start sm:self-auto">
                            STLC Standard
                        </span>
                    </div>

                    <!-- Test Matrix Table -->
                    <div class="overflow-x-auto rounded-xl border border-slate-800">
                        <table class="w-full text-left text-xs sm:text-sm font-sans">
                            <thead class="bg-slate-950 text-slate-300 font-mono text-xs uppercase border-b border-slate-800">
                                <tr>
                                    <th class="px-4 py-3">Test Case ID</th>
                                    <th class="px-4 py-3">Modul & Skenario</th>
                                    <th class="px-4 py-3 hidden md:table-cell">Kategori Uji</th>
                                    <th class="px-4 py-3 hidden lg:table-cell">Expected Output</th>
                                    <th class="px-4 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/80 text-slate-300">
                                <tr class="hover:bg-slate-800/30">
                                    <td class="px-4 py-3.5 font-mono text-brand-400">TC-PAY-001</td>
                                    <td class="px-4 py-3.5 font-medium">Validasi Response Webhook Midtrans saat status <code>settlement</code></td>
                                    <td class="px-4 py-3.5 hidden md:table-cell text-slate-400">Integration / API</td>
                                    <td class="px-4 py-3.5 hidden lg:table-cell text-slate-400">Order ID otomatis <code>paid</code> di MySQL dan notifikasi terkirim</td>
                                    <td class="px-4 py-3.5"><span class="px-2.5 py-0.5 rounded-full bg-emerald-950 text-emerald-400 border border-emerald-800 text-xs font-bold">PASSED</span></td>
                                </tr>
                                <tr class="hover:bg-slate-800/30">
                                    <td class="px-4 py-3.5 font-mono text-brand-400">TC-SYNC-004</td>
                                    <td class="px-4 py-3.5 font-medium">Sinkronisasi stok menu real-time antar Mobile Kasir (Flutter) & Web (CI4)</td>
                                    <td class="px-4 py-3.5 hidden md:table-cell text-slate-400">Cross-Platform E2E</td>
                                    <td class="px-4 py-3.5 hidden lg:table-cell text-slate-400">Stok berkurang di database, UI web auto-disable item habis</td>
                                    <td class="px-4 py-3.5"><span class="px-2.5 py-0.5 rounded-full bg-emerald-950 text-emerald-400 border border-emerald-800 text-xs font-bold">PASSED</span></td>
                                </tr>
                                <tr class="hover:bg-slate-800/30">
                                    <td class="px-4 py-3.5 font-mono text-brand-400">TC-AUTH-008</td>
                                    <td class="px-4 py-3.5 font-medium">Boundary Value Analysis pada input kuantitas order (nilai 0, minus, & max integer)</td>
                                    <td class="px-4 py-3.5 hidden md:table-cell text-slate-400">Boundary Value (BVA)</td>
                                    <td class="px-4 py-3.5 hidden lg:table-cell text-slate-400">Muncul HTTP 422 Unprocessable Entity & alert user yang valid</td>
                                    <td class="px-4 py-3.5"><span class="px-2.5 py-0.5 rounded-full bg-emerald-950 text-emerald-400 border border-emerald-800 text-xs font-bold">PASSED</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


        <!-- 6. EXPERIENCE & LEADERSHIP TIMELINE -->
        <section id="experience" class="py-24">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-brand-400 px-3 py-1 rounded-full bg-brand-950 border border-brand-800">
                        Leadership & Coordination
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                        Pengalaman Organisasi & Kepemimpinan
                    </h2>
                    <p class="text-slate-400 text-sm sm:text-base">
                        Pengalaman 2+ tahun memimpin komunikasi publik, koordinasi tim lintas fungsi, dan manajemen acara teknologi.
                    </p>
                </div>

                <!-- Timeline List -->
                <div class="relative border-l-2 border-brand-800/60 ml-4 sm:ml-8 space-y-12">
                    @foreach($expList as $exp)
                        <div class="relative pl-6 sm:pl-10 group">
                            <!-- Timeline Dot Icon -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-slate-950 border-2 border-brand-500 group-hover:bg-brand-400 group-hover:scale-125 transition-all"></div>

                            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-2">
                                    <h3 class="text-xl font-bold text-white">{{ $exp['organization'] }}</h3>
                                    <span class="text-xs font-mono text-brand-400 px-2.5 py-1 rounded-md bg-brand-950 border border-brand-800 self-start sm:self-auto">
                                        {{ $exp['period'] }}
                                    </span>
                                </div>
                                <p class="text-sm font-semibold text-accent-sky mb-4">{{ $exp['role'] }}</p>

                                <ul class="space-y-2 text-slate-300 text-sm list-disc list-inside">
                                    @foreach($exp['highlights'] as $highlight)
                                        <li class="leading-relaxed">{{ $highlight }}</li>
                                    @endforeach
                                </ul>

                                <!-- Activity Photos (If any) -->
                                @if(!empty($exp['activity_photos']))
                                    <div class="mt-5 pt-4 border-t border-slate-800 flex items-center gap-3">
                                        <span class="text-xs text-slate-400">Lampiran Dokumentasi:</span>
                                        @foreach($exp['activity_photos'] as $photo)
                                            <button onclick="openImageModal('{{ $photo['image'] }}', '{{ addslashes($photo['title']) }}', '{{ addslashes($exp['organization']) }}')" class="px-3 py-1.5 rounded-lg bg-slate-950 hover:bg-slate-800 text-brand-300 border border-brand-800/80 text-xs flex items-center gap-1.5 transition-colors">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                                {{ $photo['title'] }}
                                            </button>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- 7. CERTIFICATIONS & ACHIEVEMENTS -->
        <section id="certifications" class="py-20 bg-slate-900/40 border-t border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-accent-cyan px-3 py-1 rounded-full bg-accent-cyan/10 border border-accent-cyan/20">
                        Credentials
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                        Sertifikasi & Penghargaan
                    </h2>
                    <p class="text-slate-400 text-sm sm:text-base">
                        Bukti kompetensi formal dalam bidang jaringan, AI, dan prestasi kompetisi.
                    </p>
                </div>

                <!-- Certifications Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($certList as $cert)
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-brand-500/50 transition-all flex flex-col justify-between group">
                            <div>
                                <span class="text-[11px] font-mono text-brand-400 block mb-2">{{ $cert['type'] }}</span>
                                <h3 class="font-bold text-white text-base group-hover:text-brand-300 transition-colors">
                                    {{ $cert['title'] }}
                                </h3>
                                <p class="text-xs text-slate-400 mt-2">{{ $cert['issuer'] }}</p>
                                <p class="text-[11px] text-slate-500 mt-1 font-mono">{{ $cert['year'] }}</p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-slate-800">
                                <button onclick="openImageModal('{{ $cert['credential_url'] }}', '{{ addslashes($cert['title']) }}', '{{ addslashes($cert['issuer']) }}')" class="w-full py-2 rounded-xl bg-slate-950 hover:bg-brand-600 hover:text-white border border-slate-800 text-xs font-medium text-slate-300 flex items-center justify-center gap-1.5 transition-all">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    Lihat Sertifikat / Lampiran
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- 8. CONTACT & FOOTER -->
        <section id="contact" class="py-24 bg-gradient-to-b from-slate-950 to-slate-900 border-t border-slate-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
                <!-- Status Tag -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-950 border border-brand-800 text-brand-300 text-xs font-mono">
                    Open for Opportunities
                </div>

                <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                    Mari Terhubung & Berdiskusi
                </h2>
                
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                    Tertarik membahas peran <span class="text-white font-semibold">Software Quality Assurance (QA)</span> atau <span class="text-white font-semibold">Systems Analysis</span> untuk mendukung sistem berskala enterprise di organisasi Anda?
                </p>

                <!-- Big Contact Action Buttons -->
                <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                    <!-- WhatsApp Direct -->
                    <a href="{{ config('portfolio.profile.whatsapp') }}" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-sm shadow-xl shadow-emerald-600/20 hover:scale-105 transition-all flex items-center gap-2.5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        Hubungi via WhatsApp
                    </a>

                    <!-- Direct Email -->
                    <a href="mailto:{{ config('portfolio.profile.email') }}" class="px-7 py-3.5 rounded-2xl bg-brand-600 hover:bg-brand-500 text-white font-semibold text-sm shadow-xl shadow-brand-600/20 hover:scale-105 transition-all flex items-center gap-2.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Kirim Email ({{ config('portfolio.profile.email') }})
                    </a>

                    <!-- LinkedIn -->
                    <a href="{{ config('portfolio.profile.linkedin') }}" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 rounded-2xl bg-slate-900 border border-slate-700 hover:border-brand-500 text-slate-200 hover:text-white font-semibold text-sm hover:scale-105 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        Profil LinkedIn
                    </a>
                </div>

                <!-- Footer Copyright & Tech Specs -->
                <div class="pt-16 mt-16 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                    <p>© {{ date('Y') }} {{ config('portfolio.profile.name') }}. All rights reserved.</p>
                    <p class="font-mono">Built with <span class="text-brand-400 font-bold">Laravel 13</span> & <span class="text-accent-cyan font-bold">Tailwind CSS</span></p>
                </div>
            </div>
        </section>

    </main>

    <!-- ========================================== -->
    <!-- INTERACTIVE MODALS (VIDEO DEMO & ATTACHMENT) -->
    <!-- ========================================== -->

    <!-- 1. Video Demo Modal -->
    <div id="videoModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-900 border border-slate-700 w-full max-w-4xl rounded-2xl overflow-hidden shadow-2xl relative">
            <!-- Modal Header -->
            <div class="p-4 border-b border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                    <span id="videoModalTitle" class="font-bold text-white text-sm sm:text-base">Demo Video</span>
                </div>
                <button onclick="closeVideoModal()" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <!-- Video Player Frame -->
            <div class="aspect-video w-full bg-black flex items-center justify-center" id="videoContainer">
                <!-- Video player injected by JS -->
            </div>
            <div class="p-3 bg-slate-950 text-slate-400 text-xs flex items-center justify-between">
                <span>Tekan <kbd class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300">ESC</kbd> untuk menutup</span>
                <span class="text-brand-400">Video Player Portofolio</span>
            </div>
        </div>
    </div>

    <!-- 2. Attachment / Certificate / Photo Preview Modal -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/85 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-900 border border-slate-700 w-full max-w-3xl rounded-2xl overflow-hidden shadow-2xl relative">
            <!-- Modal Header -->
            <div class="p-4 border-b border-slate-800 flex items-center justify-between">
                <div>
                    <span id="imageModalSubtitle" class="text-xs text-brand-400 font-mono block">Dokumentasi</span>
                    <h4 id="imageModalTitle" class="font-bold text-white text-base">Preview Lampiran</h4>
                </div>
                <button onclick="closeImageModal()" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <!-- Image Container with Fallback Message -->
            <div class="p-4 bg-slate-950 flex flex-col items-center justify-center min-h-[300px] max-h-[70vh] overflow-auto">
                <img id="modalPreviewImg" src="" alt="Lampiran" class="max-h-[60vh] max-w-full rounded-xl object-contain border border-slate-800" onerror="handleImageModalError()">
                <div id="imageModalPlaceholder" class="hidden text-center p-8">
                    <div class="w-16 h-16 rounded-full bg-brand-950 border border-brand-700 text-brand-400 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <p class="text-sm font-semibold text-white">File Lampiran Belum Diunggah</p>
                    <p class="text-xs text-slate-400 mt-1 max-w-md">Anda dapat meletakkan file gambar sertifikat atau foto kegiatan ini ke folder yang sesuai di dalam direktori <code class="text-brand-300 font-mono">public/images/...</code></p>
                </div>
            </div>
            <div class="p-3 bg-slate-900 border-t border-slate-800 text-right">
                <button onclick="closeImageModal()" class="px-4 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold">Tutup Preview</button>
            </div>
        </div>
    </div>

    <!-- Client-side Interactions Script -->
    <script>
        // 1. Projects Category Filter
        function filterProjects(category) {
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                if (btn.getAttribute('data-category') === category) {
                    btn.classList.add('bg-brand-600', 'text-white');
                    btn.classList.remove('text-slate-400');
                } else {
                    btn.classList.remove('bg-brand-600', 'text-white');
                    btn.classList.add('text-slate-400');
                }
            });

            const cards = document.querySelectorAll('.project-card');
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // 2. Video Modal Logic
        function openVideoModal(url, title) {
            const modal = document.getElementById('videoModal');
            const container = document.getElementById('videoContainer');
            document.getElementById('videoModalTitle').innerText = title;

            // Handle YouTube Embed or Direct MP4
            let embedHtml = '';
            if (url.includes('youtube.com') || url.includes('youtu.be')) {
                let videoId = '';
                if (url.includes('watch?v=')) {
                    videoId = url.split('watch?v=')[1].split('&')[0];
                } else if (url.includes('youtu.be/')) {
                    videoId = url.split('youtu.be/')[1].split('?')[0];
                }
                embedHtml = `<iframe class="w-full h-full" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            } else {
                embedHtml = `<video class="w-full h-full" controls autoplay><source src="${url}" type="video/mp4">Browser Anda tidak mendukung tag video.</video>`;
            }

            container.innerHTML = embedHtml;
            modal.classList.remove('hidden');
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const container = document.getElementById('videoContainer');
            modal.classList.add('hidden');
            container.innerHTML = '';
        }

        // 3. Image / Certificate / Attachment Modal Logic
        function openImageModal(imgUrl, title, subtitle) {
            const modal = document.getElementById('imageModal');
            const previewImg = document.getElementById('modalPreviewImg');
            const placeholder = document.getElementById('imageModalPlaceholder');

            document.getElementById('imageModalTitle').innerText = title;
            document.getElementById('imageModalSubtitle').innerText = subtitle;

            if (imgUrl && imgUrl.trim() !== '') {
                previewImg.style.display = 'block';
                placeholder.classList.add('hidden');
                previewImg.src = imgUrl;
            } else {
                previewImg.style.display = 'none';
                placeholder.classList.remove('hidden');
            }

            modal.classList.remove('hidden');
        }

        function handleImageModalError() {
            document.getElementById('modalPreviewImg').style.display = 'none';
            document.getElementById('imageModalPlaceholder').classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Close on ESC key
        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeVideoModal();
                closeImageModal();
            }
        });
    </script>
</body>
</html>
