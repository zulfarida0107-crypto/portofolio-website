<!-- CuitBox Event Documentation & Artifacts Modal -->
<div id="cuitbox-docs-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCuitboxDocsModal()">
  <div class="relative w-full max-w-5xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-4 sm:py-5 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div class="space-y-1">
        <div class="flex items-center gap-2">
          <span class="material-symbols-outlined text-[24px] sm:text-[28px] text-secondary">description</span>
          <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary">
            CuitBox Documentation & Artifacts
          </h3>
        </div>
        <p class="text-xs sm:text-sm text-on-surface-variant">
          Dokumentasi pameran booth fisik di CCIT CREATION, laporan pengujian UAT, dan sertifikat Juara 1 Venture Studio.
        </p>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeCuitboxDocsModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs shrink-0" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Navigation Tabs -->
    <div class="px-5 sm:px-8 py-3 bg-surface-container-lowest border-b border-primary/10 flex flex-wrap items-center gap-2 shrink-0">
      <button type="button" id="docs-tab-btn-media" onclick="switchCuitboxDocsTab('media')" class="cuitbox-docs-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-bold transition-all cursor-pointer bg-primary text-on-primary shadow-xs">
        <span class="material-symbols-outlined text-[18px]">photo_camera</span>
        <span>1. Foto & Video Booth</span>
      </button>
      <button type="button" id="docs-tab-btn-reports" onclick="switchCuitboxDocsTab('reports')" class="cuitbox-docs-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">assignment</span>
        <span>2. Dokumen & Matriks UAT</span>
      </button>
    </div>

    <!-- Scrollable Modal Body -->
    <div class="px-4 sm:px-8 py-5 overflow-y-auto space-y-6">

      <!-- ================= TAB 1: FOTO & VIDEO DOKUMENTASI ================= -->
      <div id="docs-tab-content-media" class="cuitbox-docs-pane space-y-6">
        
        <!-- Video Showcase Card -->
        <div class="bg-surface-container-lowest rounded-3xl p-5 sm:p-6 border border-primary/15 shadow-sm space-y-4">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-primary/10">
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-[24px] text-secondary">smart_display</span>
              <div>
                <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
                  Video Demo Interaksi Photobox Kiosk
                </h4>
              </div>
            </div>
            <span class="px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-700 text-xs font-bold self-start sm:self-auto border border-emerald-500/20">
              Live Testing
            </span>
          </div>

          <!-- Video Player Mockup Frame -->
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-slate-950 border border-slate-800 shadow-inner flex flex-col justify-between p-4 sm:p-6">
            <!-- Top Video Bar -->
            <div class="flex justify-between items-center z-10">
              <span class="px-2.5 py-1 rounded-lg bg-black/60 backdrop-blur-md text-[11px] text-white font-mono flex items-center gap-1.5 border border-white/10">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                <span>REC • CCIT CREATION BOOTH #01</span>
              </span>
              <span class="px-2.5 py-1 rounded-lg bg-black/60 backdrop-blur-md text-[11px] text-slate-300 font-mono border border-white/10">
                Full HD 1080p
              </span>
            </div>

            <!-- Center Play Button & Graphic -->
            <div class="my-auto text-center space-y-3 z-10">
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" rel="noopener noreferrer" class="inline-flex w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-secondary hover:bg-[#8c5e63] text-white items-center justify-center shadow-lg transition-transform hover:scale-110 active:scale-95 group cursor-pointer">
                <span class="material-symbols-outlined text-[36px] sm:text-[44px] ml-1 group-hover:scale-105 transition-transform">play_arrow</span>
              </a>
              <div>
                <p class="text-sm font-bold text-white">Tonton Demo Video Booth</p>
                <p class="text-xs text-slate-400">Klik untuk memutar rekaman interaksi kiosk, touch screen, dan printer</p>
              </div>
            </div>

            <!-- Bottom Video Timeline Simulation -->
            <div class="space-y-1.5 z-10">
              <div class="w-full h-1.5 bg-slate-800 rounded-full overflow-hidden">
                <div class="w-2/5 h-full bg-secondary rounded-full"></div>
              </div>
              <div class="flex justify-between text-[10px] text-slate-400 font-mono">
                <span>00:42</span>
                <span>01:45</span>
              </div>
            </div>

            <!-- Background Atmosphere Grid -->
            <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(#6ee7b7 1px, transparent 1px); background-size: 24px 24px;"></div>
          </div>

          <div class="p-3.5 rounded-xl bg-surface-container border border-primary/10 text-xs text-on-surface-variant flex items-start gap-2.5">
            <span class="material-symbols-outlined text-[18px] text-primary shrink-0 mt-0.5">info</span>
            <span>
              <strong>Alur Demo:</strong> Menampilkan alur lengkap pengunjung mulai dari pemilihan paket frame, pembayaran instan QRIS Midtrans, hitung mundur potret dengan live-view DSLR Canon, stitching canvas 300 DPI, hingga pencetakan fisik dan pengiriman softfile otomatis ke Google Drive.
            </span>
          </div>
        </div>

        <!-- Photo Gallery Grid -->
        <div class="space-y-3">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[22px] text-secondary">photo_library</span>
            <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              Galeri Dokumentasi Booth & Pameran
            </h4>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Photo Slot 1 -->
            <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs flex items-center justify-center group hover:border-primary/30 transition-all">
              <div class="w-full h-full bg-slate-900/60 flex items-center justify-center">
                <span class="material-symbols-outlined text-[44px] text-primary/40 group-hover:scale-105 transition-transform">add_photo_alternate</span>
              </div>
            </div>

            <!-- Photo Slot 2 -->
            <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs flex items-center justify-center group hover:border-primary/30 transition-all">
              <div class="w-full h-full bg-slate-900/60 flex items-center justify-center">
                <span class="material-symbols-outlined text-[44px] text-primary/40 group-hover:scale-105 transition-transform">add_photo_alternate</span>
              </div>
            </div>

            <!-- Photo Slot 3 -->
            <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs flex items-center justify-center group hover:border-primary/30 transition-all">
              <div class="w-full h-full bg-slate-900/60 flex items-center justify-center">
                <span class="material-symbols-outlined text-[44px] text-primary/40 group-hover:scale-105 transition-transform">add_photo_alternate</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- ================= TAB 2: DOKUMEN & LAPORAN UAT ================= -->
      <div id="docs-tab-content-reports" class="cuitbox-docs-pane hidden space-y-6">

        <!-- Top UAT Summary Card -->
        <div class="bg-surface-container-lowest rounded-3xl p-5 sm:p-6 border border-primary/15 shadow-sm space-y-5">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-primary/10">
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-[24px] text-secondary">fact_check</span>
              <div>
                <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
                  III. Feedback & Brutal Insights (UAT Report)
                </h4>
                <p class="text-xs text-on-surface-variant">
                  Wawancara singkat dan observasi mendalam saat responden mencoba produk CuitBox secara langsung
                </p>
              </div>
            </div>
            <span class="px-3 py-1 rounded-full bg-amber-500/15 text-amber-800 text-xs font-bold self-start sm:self-auto border border-amber-500/30 flex items-center gap-1.5">
              <span class="w-2 h-2 rounded-full bg-amber-600 animate-pulse"></span>
              Status: Iteration Needed
            </span>
          </div>

          <!-- Key Metrics Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-center">
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl sm:text-2xl font-bold text-primary block">23 Orang</span>
              <span class="text-[11px] text-outline">Total Responden Wawancara UAT</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl sm:text-2xl font-bold text-amber-700 block">Iteration Needed</span>
              <span class="text-[11px] text-outline">Status Kelayakan Rilis Produk</span>
            </div>
          </div>

          <!-- Two Columns: Disukai vs Dibenci/Membingungkan -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
            
            <!-- Hal yang Paling Disukai -->
            <div class="p-5 rounded-2xl bg-emerald-500/5 border border-emerald-500/20 space-y-3">
              <div class="flex items-center gap-2 text-emerald-800 font-bold text-sm">
                <span class="material-symbols-outlined text-[20px] text-emerald-600">thumb_up</span>
                <span>3 Hal yang Paling Disukai Pengguna:</span>
              </div>
              <ul class="space-y-2.5 text-xs text-on-surface">
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">1</span>
                  <span><strong>Halaman pemilihan frame:</strong> Tempat pengguna memilih frame yang tersedia</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">2</span>
                  <span><strong>Halaman kamera:</strong> Tempat pengguna mengambil atau menangkap foto</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">3</span>
                  <span><strong>Halaman review gambar:</strong> Tempat pengguna meninjau kembali hasil foto yang telah diambil</span>
                </li>
              </ul>
            </div>

            <!-- Hal yang Paling Dibenci / Membingungkan -->
            <div class="p-5 rounded-2xl bg-rose-500/5 border border-rose-500/20 space-y-3">
              <div class="flex items-center gap-2 text-rose-800 font-bold text-sm">
                <span class="material-symbols-outlined text-[20px] text-rose-600">feedback</span>
                <span>3 Hal yang Paling Dibenci / Membingungkan:</span>
              </div>
              <ul class="space-y-2.5 text-xs text-on-surface">
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-rose-500/20 text-rose-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">1</span>
                  <span><strong>Halaman memasukkan Kode Pemesanan (Booking Code)</strong></span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-rose-500/20 text-rose-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">2</span>
                  <span><strong>Halaman memasukkan alamat email</strong> sebagai tujuan pengiriman hasil tangkapan gambar</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="w-5 h-5 rounded-full bg-rose-500/20 text-rose-700 flex items-center justify-center font-bold text-[10px] shrink-0 mt-0.5">3</span>
                  <span><strong>Halaman kamera,</strong> tempat pengguna mengambil atau menangkap foto (kendala performa / lag)</span>
                </li>
              </ul>
            </div>

          </div>

          <!-- Section IV: Kesimpulan Status Kelayakan Produk -->
          <div class="p-5 rounded-2xl bg-surface-container border border-primary/15 space-y-3.5">
            <h5 class="text-xs sm:text-sm font-bold text-primary flex items-center gap-2">
              <span class="material-symbols-outlined text-[18px] text-secondary">verified</span>
              <span>IV. Kesimpulan Kelayakan Produk</span>
            </h5>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 text-xs">
              <!-- Option 1 -->
              <div class="p-3 rounded-xl bg-surface-container-lowest border border-primary/10 opacity-50 flex items-center gap-2.5">
                <span class="w-4 h-4 rounded border border-outline flex items-center justify-center text-[10px]"></span>
                <span><strong>GO-LIVE:</strong> Siap digunakan massal</span>
              </div>

              <!-- Option 2 (Selected) -->
              <div class="p-3 rounded-xl bg-amber-500/10 border-2 border-amber-500/50 text-amber-900 font-bold flex items-center gap-2.5 shadow-xs">
                <span class="w-4 h-4 rounded bg-amber-600 text-white flex items-center justify-center text-[10px]">✓</span>
                <span>ITERATION NEEDED: Perlu perbaikan bug/UX</span>
              </div>

              <!-- Option 3 -->
              <div class="p-3 rounded-xl bg-surface-container-lowest border border-primary/10 opacity-50 flex items-center gap-2.5">
                <span class="w-4 h-4 rounded border border-outline flex items-center justify-center text-[10px]"></span>
                <span><strong>PIVOT / BLOCK:</strong> Rombak total fitur utama</span>
              </div>
            </div>

            <!-- Alasan Box -->
            <div class="p-3.5 rounded-xl bg-surface-container-lowest border border-primary/10 text-xs space-y-1">
              <span class="font-bold text-secondary block">Alasan / Temuan Pengujian:</span>
              <p class="text-on-surface leading-relaxed">
                Beberapa responden mengeluhkan adanya kendala performa (lag/patah-patah) saat melakukan pengambilan gambar (<strong>User 9, 11, 12, 13</strong>) serta perlunya optimasi alur navigasi cropping foto (<strong>User 18</strong>).
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Modal Footer -->
    <div class="px-6 py-3.5 bg-surface-container border-t border-primary/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-outline shrink-0">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
        <span>Dokumentasi Resmi Pameran CCIT CREATION & Venture Studio CuitBox</span>
      </div>
      <button type="button" onclick="closeCuitboxDocsModal()" class="px-5 py-1.5 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary font-bold transition-all cursor-pointer">
        Tutup Dokumentasi
      </button>
    </div>

  </div>
</div>

<!-- Modal Script -->
<script>
function openCuitboxDocsModal() {
  const modal = document.getElementById('cuitbox-docs-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function closeCuitboxDocsModal() {
  const modal = document.getElementById('cuitbox-docs-modal');
  if (modal) {
    modal.classList.add('hidden');
    // If the other modal isn't open, restore scroll
    const previewModal = document.getElementById('cuitbox-preview-modal');
    if (!previewModal || previewModal.classList.contains('hidden')) {
      document.body.classList.remove('overflow-hidden');
    }
  }
}

function switchCuitboxDocsTab(tabName) {
  // Tabs: media, reports
  const tabs = ['media', 'reports'];
  tabs.forEach(tab => {
    const btn = document.getElementById('docs-tab-btn-' + tab);
    const content = document.getElementById('docs-tab-content-' + tab);
    if (tab === tabName) {
      if (btn) {
        btn.classList.remove('bg-surface-container', 'text-primary', 'hover:bg-surface-container-high', 'font-semibold');
        btn.classList.add('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
      }
      if (content) content.classList.remove('hidden');
    } else {
      if (btn) {
        btn.classList.remove('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
        btn.classList.add('bg-surface-container', 'text-primary', 'hover:bg-surface-container-high', 'font-semibold');
      }
      if (content) content.classList.add('hidden');
    }
  });
}

// Global escape key handler to close active modal
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeCuitboxDocsModal();
  }
});
</script>
