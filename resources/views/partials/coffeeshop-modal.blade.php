<!-- Coffee Shop Interactive Preview Modal -->
<div id="coffeeshop-preview-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCoffeeShopModal()">
  <div class="relative w-full max-w-5xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-4 sm:py-5 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary flex items-center gap-2.5">
          <span class="material-symbols-outlined text-[24px] sm:text-[28px] text-secondary">local_cafe</span>
          <span>Coffee Shop Integrated System</span>
        </h3>
        <p class="text-xs text-on-surface-variant hidden sm:block mt-0.5">CodeIgniter 4 Web + Flutter Mobile + Spring Boot API + MySQL</p>
      </div>

      <div class="flex items-center gap-2 shrink-0">
        <a href="https://youtu.be/i2iFWwCDxsc?si=mCFVfke9jY4ZNgNp" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-red-600/15 hover:bg-red-600/25 text-red-700 border border-red-600/30 font-bold text-xs transition-all cursor-pointer">
          <svg class="w-3.5 h-3.5 fill-current text-red-600" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          <span>Tonton di YouTube</span>
        </a>

        <!-- Close Button -->
        <button type="button" onclick="closeCoffeeShopModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs" title="Tutup Modal (ESC)">
          <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
      </div>
    </div>

    <!-- Tab Bar -->
    <div class="px-5 sm:px-8 py-3 bg-surface-container-lowest border-b border-primary/10 flex flex-wrap items-center gap-2 shrink-0">
      <button type="button" id="cs-tab-btn-video" onclick="switchCoffeeShopTab('video')" class="coffeeshop-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-bold transition-all cursor-pointer bg-primary text-on-primary shadow-xs">
        <span class="material-symbols-outlined text-[18px]">play_circle</span>
        <span>1. Video Demo Sistem (YouTube)</span>
      </button>
      <button type="button" id="cs-tab-btn-api" onclick="switchCoffeeShopTab('api')" class="coffeeshop-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">dns</span>
        <span>2. Arsitektur & REST API Service</span>
      </button>
    </div>

    <!-- Modal Scrollable Body -->
    <div class="px-4 sm:px-8 pt-4 pb-6 sm:pb-8 overflow-y-auto space-y-4">
      
      <!-- ================= TAB 1: YOUTUBE DEMO VIDEO ================= -->
      <div id="cs-tab-content-video" class="coffeeshop-tab-pane space-y-4">
        <div class="bg-surface-container-lowest rounded-3xl p-5 sm:p-6 border border-primary/15 shadow-sm space-y-4">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-primary/10">
            <div class="flex items-center gap-2.5">
              <span class="material-symbols-outlined text-[24px] text-red-600">play_circle</span>
              <div>
                <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
                  Integrated Coffee Shop Management System Demo
                </h4>
                <p class="text-xs text-on-surface-variant">CodeIgniter 4 Web + Flutter Mobile + Spring Boot API</p>
              </div>
            </div>
            <a href="https://youtu.be/i2iFWwCDxsc?si=mCFVfke9jY4ZNgNp" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-xs shadow-xs self-start sm:self-auto transition-all">
              <span>Buka di YouTube</span>
              <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
          </div>

          <!-- YouTube Embed Container -->
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-black border border-primary/20 shadow-md">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/i2iFWwCDxsc" title="Integrated Coffee Shop Management System Demo (CodeIgniter 4 Web, Flutter Mobile, & Spring Boot API)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

          <div class="p-3.5 rounded-xl bg-surface-container border border-primary/10 text-xs text-on-surface-variant flex items-start gap-2.5">
            <span class="material-symbols-outlined text-[18px] text-primary shrink-0 mt-0.5">info</span>
            <span>
              <strong>Ringkasan Video:</strong> Demo operasional menyeluruh sistem pemesanan Coffee Shop: input pesanan pelanggan melalui web CodeIgniter 4, sinkronisasi status pesanan dan antrean barista di aplikasi mobile Flutter melalui endpoint REST API Spring Boot, serta pengelolaan stok dan database MySQL.
            </span>
          </div>
        </div>
      </div>

      <!-- ================= TAB 2: BACKEND API ARCHITECTURE ================= -->
      <div id="cs-tab-content-api" class="coffeeshop-tab-pane hidden space-y-4">
        <!-- Architecture Diagram Card -->
        <div class="bg-surface-container-lowest rounded-3xl p-6 border border-primary/15 shadow-sm space-y-5">
          <div class="flex items-center gap-2.5 pb-3 border-b border-primary/10">
            <span class="material-symbols-outlined text-[24px] text-secondary">lan</span>
            <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              Distributed Multi-Tier System Architecture
            </h4>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-2">
              <div class="flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-wider">
                <span class="material-symbols-outlined text-[18px]">laptop</span>
                <span>Web Client (CI4)</span>
              </div>
              <p class="text-xs text-on-surface-variant leading-relaxed">
                Portal kasir POS & pemesanan pelanggan dengan Bootstrap 5, validasi form, dan rendering responsif.
              </p>
            </div>

            <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-2">
              <div class="flex items-center gap-2 text-secondary font-bold text-xs uppercase tracking-wider">
                <span class="material-symbols-outlined text-[18px]">dns</span>
                <span>API Gateway (Spring Boot)</span>
              </div>
              <p class="text-xs text-on-surface-variant leading-relaxed">
                Layanan microservice Java untuk otorisasi token, routing endpoint RESTful, dan pencegahan race condition transaksi.
              </p>
            </div>

            <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-2">
              <div class="flex items-center gap-2 text-emerald-700 font-bold text-xs uppercase tracking-wider">
                <span class="material-symbols-outlined text-[18px]">smartphone</span>
                <span>Mobile Client (Flutter)</span>
              </div>
              <p class="text-xs text-on-surface-variant leading-relaxed">
                Aplikasi mobile Flutter untuk barista memantau tiket antrean dapur secara real-time dengan update state instan.
              </p>
            </div>
          </div>
        </div>

        <!-- Endpoints & Database Details Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Endpoints List -->
          <div class="bg-surface-container-lowest rounded-3xl p-5 border border-primary/15 shadow-sm space-y-3">
            <div class="flex items-center gap-2 text-primary font-bold text-sm border-b border-primary/10 pb-2.5">
              <span class="material-symbols-outlined text-[20px] text-secondary">api</span>
              <span>REST API Endpoints (Spring Boot)</span>
            </div>
            <ul class="space-y-2 text-xs font-mono">
              <li class="p-2.5 rounded-xl bg-surface-container border border-primary/10 flex items-center justify-between">
                <span><strong class="text-emerald-700">POST</strong> /api/v1/orders/create</span>
                <span class="text-[10px] bg-emerald-500/15 text-emerald-800 px-2 py-0.5 rounded-full font-bold">POS Web</span>
              </li>
              <li class="p-2.5 rounded-xl bg-surface-container border border-primary/10 flex items-center justify-between">
                <span><strong class="text-blue-700">GET</strong> /api/v1/kitchen/queue</span>
                <span class="text-[10px] bg-blue-500/15 text-blue-800 px-2 py-0.5 rounded-full font-bold">Barista App</span>
              </li>
              <li class="p-2.5 rounded-xl bg-surface-container border border-primary/10 flex items-center justify-between">
                <span><strong class="text-amber-700">PUT</strong> /api/v1/orders/{id}/status</span>
                <span class="text-[10px] bg-amber-500/15 text-amber-800 px-2 py-0.5 rounded-full font-bold">State Sync</span>
              </li>
              <li class="p-2.5 rounded-xl bg-surface-container border border-primary/10 flex items-center justify-between">
                <span><strong class="text-purple-700">GET</strong> /api/v1/inventory/stocks</span>
                <span class="text-[10px] bg-purple-500/15 text-purple-800 px-2 py-0.5 rounded-full font-bold">Inventory</span>
              </li>
            </ul>
          </div>

          <!-- Architecture Highlights -->
          <div class="bg-surface-container-lowest rounded-3xl p-5 border border-primary/15 shadow-sm space-y-3">
            <div class="flex items-center gap-2 text-primary font-bold text-sm border-b border-primary/10 pb-2.5">
              <span class="material-symbols-outlined text-[20px] text-secondary">database</span>
              <span>Database & Security Specifications</span>
            </div>
            <ul class="space-y-2 text-xs text-on-surface">
              <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 mt-0.5">check_circle</span>
                <span><strong>Relational Schema (MySQL):</strong> ACID-compliant transaction locking untuk mencegah over-ordering saat stok menipis.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 mt-0.5">check_circle</span>
                <span><strong>Authentication & Token:</strong> Stateless JWT token validasi untuk setiap pemanggilan API dari Flutter mobile client.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-[16px] text-emerald-600 shrink-0 mt-0.5">check_circle</span>
                <span><strong>Black-Box QA Testing:</strong> Pengujian menyeluruh skenario pemesanan simultan kasir & verifikasi antrean barista dapur.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- Modal Footer -->
    <div class="px-6 py-3.5 bg-surface-container border-t border-primary/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-outline shrink-0">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>Coffee Shop Stack: <strong>CodeIgniter 4 + Flutter + Spring Boot Java + MySQL + Black-Box QA</strong></span>
      </div>
      <button type="button" onclick="closeCoffeeShopModal()" class="px-5 py-1.5 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary font-bold transition-all cursor-pointer">
        Tutup Preview
      </button>
    </div>

  </div>
</div>

<!-- Modal Script -->
<script>
function openCoffeeShopModal() {
  const modal = document.getElementById('coffeeshop-preview-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function closeCoffeeShopModal() {
  const modal = document.getElementById('coffeeshop-preview-modal');
  if (modal) {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

function switchCoffeeShopTab(tabName) {
  const tabs = ['video', 'api'];
  tabs.forEach(tab => {
    const btn = document.getElementById('cs-tab-btn-' + tab);
    const content = document.getElementById('cs-tab-content-' + tab);
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

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeCoffeeShopModal();
  }
});
</script>
