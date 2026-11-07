<!-- CuitBox Event Documentation & Artifacts Modal -->
<div id="cuitbox-docs-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCuitboxDocsModal()">
  <div class="relative w-full max-w-5xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-4 sm:py-5 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div>
        <div class="flex items-center gap-2">
          <span class="material-symbols-outlined text-[24px] sm:text-[28px] text-secondary">description</span>
          <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary">
            CuitBox Documentation & Artifacts
          </h3>
        </div>
      </div>

      <div class="flex items-center gap-2 shrink-0">
        <!-- Close Button -->
        <button type="button" onclick="closeCuitboxDocsModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs" title="Tutup Modal (ESC)">
          <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
      </div>
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

          <!-- Video Player Frame -->
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-black border border-primary/20 shadow-inner flex items-center justify-center">
            <video id="cuitbox-demo-video" controls playsinline preload="metadata" class="w-full h-full object-contain">
              <source src="/images/activities/CuitBox/VID-20260821-WA0094(1) - Devita Hepinaria.mp4" type="video/mp4">
              Browser Anda tidak mendukung pemutar video HTML5.
            </video>
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

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Photo Slot 1: capture_10.jpg -->
            <div class="rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs group hover:border-primary/30 transition-all flex flex-col">
              <div class="aspect-[4/3] w-full overflow-hidden bg-black flex items-center justify-center">
                <img src="/images/activities/CuitBox/capture_10.jpg" alt="DSLR Live Capture Test" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
              </div>
              <div class="p-2.5 bg-surface-container-low text-[11px] font-bold text-primary truncate">
                DSLR Live Capture
              </div>
            </div>

            <!-- Photo Slot 2: final.png -->
            <div class="rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs group hover:border-primary/30 transition-all flex flex-col">
              <div class="aspect-[4/3] w-full overflow-hidden bg-white flex items-center justify-center p-2">
                <img src="/images/activities/CuitBox/final.png" alt="Stitched Photostrip 300 DPI" class="w-full h-full object-contain group-hover:scale-105 transition-transform" />
              </div>
              <div class="p-2.5 bg-surface-container-low text-[11px] font-bold text-primary truncate">
                Stitched Photostrip (300 DPI)
              </div>
            </div>

            <!-- Photo Slot 3: Live Booth Session -->
            <div class="rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs group hover:border-primary/30 transition-all flex flex-col">
              <div class="aspect-[4/3] w-full overflow-hidden bg-black flex items-center justify-center">
                <img src="/images/activities/CuitBox/WhatsApp_Image_2026-11-07_at_22.41.48.jpeg" alt="Photobox Booth Session" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
              </div>
              <div class="p-2.5 bg-surface-container-low text-[11px] font-bold text-primary truncate">
                Sesi UAT Pengguna Booth
              </div>
            </div>

            <!-- Photo Slot 4: Exhibition Showcase -->
            <div class="rounded-2xl overflow-hidden border border-primary/15 bg-surface-container shadow-xs group hover:border-primary/30 transition-all flex flex-col">
              <div class="aspect-[4/3] w-full overflow-hidden bg-black flex items-center justify-center">
                <img src="/images/activities/CuitBox/WhatsApp_Image_2026-11-07_at_22.56.01.jpeg" alt="CuitBox Showcase & Pitching" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
              </div>
              <div class="p-2.5 bg-surface-container-low text-[11px] font-bold text-primary truncate">
                Exhibition &amp; Showcase
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

          <!-- Download Soft File Section -->
          <div class="p-5 rounded-2xl bg-surface-container border border-primary/15 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xs">
            <div class="space-y-1 text-center sm:text-left">
              <div class="flex items-center justify-center sm:justify-start gap-2 text-primary font-bold text-sm">
                <span class="material-symbols-outlined text-[20px] text-secondary">download</span>
                <span>Unduh Soft File Dokumen UAT</span>
              </div>
              <p class="text-xs text-on-surface-variant">
                Tersedia berkas soft file dokumen laporan pengujian & matriks UAT dalam format PDF dan Word (.docx).
              </p>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-2.5 shrink-0">
              <!-- Download PDF Button -->
              <a href="/images/docs/CuitBox/Venture Studio CCIT-FTUI.pdf" download="Venture Studio CCIT-FTUI.pdf" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-secondary text-on-secondary font-label-lg text-xs font-bold shadow-sm hover:opacity-90 active:scale-95 transition-all cursor-pointer">
                <span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                <span>Unduh PDF</span>
              </a>

              <!-- Download Word Button -->
              <a href="/images/docs/CuitBox/Venture Studio CCIT-FTUI.docx" download="Venture Studio CCIT-FTUI.docx" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container-lowest text-primary border border-primary/20 font-label-lg text-xs font-bold shadow-xs hover:bg-surface-variant active:scale-95 transition-all cursor-pointer">
                <span class="material-symbols-outlined text-[18px] text-blue-600">description</span>
                <span>Unduh Word (.docx)</span>
              </a>
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
    const demoVideo = document.getElementById('cuitbox-demo-video');
    if (demoVideo) {
      demoVideo.pause();
    }
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
