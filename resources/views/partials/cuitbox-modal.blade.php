<!-- CuitBox Interactive Preview Modal -->
<div id="cuitbox-preview-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCuitboxModal()">
  <div class="relative w-full max-w-6xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-5 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary flex items-center gap-2.5">
          <span class="material-symbols-outlined text-[24px] sm:text-[28px] text-secondary">photo_camera</span>
          <span>CuitBox Multi-Platform Interfaces</span>
        </h3>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeCuitboxModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Tab Bar -->
    <div class="px-5 sm:px-8 py-3 bg-surface-container-lowest border-b border-primary/10 flex flex-wrap items-center gap-2 shrink-0">
      <button type="button" id="tab-btn-kiosk" onclick="switchCuitboxTab('kiosk')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-bold transition-all cursor-pointer bg-primary text-on-primary shadow-xs">
        <span class="material-symbols-outlined text-[18px]">terminal</span>
        <span>1. Desktop Kiosk Program</span>
      </button>
      <button type="button" id="tab-btn-admin" onclick="switchCuitboxTab('admin')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
        <span>2. Desktop & Mobile: Admin Panel</span>
      </button>
      <button type="button" id="tab-btn-cust" onclick="switchCuitboxTab('cust')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
        <span>3. Desktop & Mobile: Customer Web</span>
      </button>
    </div>

    <!-- Modal Scrollable Body -->
    <div class="px-4 sm:px-8 pt-2 sm:pt-3 pb-6 sm:pb-8 overflow-y-auto space-y-3">

      <!-- ================= TAB 1: DESKTOP KIOSK PROGRAM ================= -->
      <div id="tab-content-kiosk" class="cuitbox-tab-pane space-y-4">
        <!-- Real Screenshot -->
        <div class="bg-surface-container-lowest rounded-3xl p-4 sm:p-5 border border-primary/15 shadow-sm space-y-3">
          <div class="flex items-center gap-2 text-xs font-bold text-secondary uppercase tracking-wider">
            <span class="material-symbols-outlined text-[18px]">screenshot_monitor</span>
            <span>Screenshot Asli — Desktop Kiosk Electron App</span>
          </div>
          <div class="rounded-2xl overflow-hidden border border-primary/20 shadow-md">
            <img src="/images/projects/CuitBox_Desktop_Kiosk.jpg" alt="CuitBox Desktop Kiosk — Cuitbox Studio Touchscreen" class="w-full h-auto object-contain" loading="lazy" />
          </div>
        </div>
        <!-- 3 Separate Technical Explanation Cards with Big Logos and Larger Text -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 pt-2">
          <!-- Card 1: Python -->
          <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-6 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-4">
            <div class="space-y-3">
              <div class="w-14 h-14 rounded-2xl bg-[#3776AB]/10 flex items-center justify-center p-2.5 border border-[#3776AB]/20 shadow-xs">
                <svg class="w-full h-full" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M63.666 4c-16.173 0-26.666 7.039-26.666 20.485v15.228h27.172v3.807H24.382C10.936 43.52 4 53.794 4 67.24c0 13.447 11.233 22.01 24.679 22.01h8.381v-12.19c0-13.447 11.455-24.679 24.9-24.679h26.471V24.485C88.431 11.039 79.839 4 63.666 4zm-11.42 8.381a4.57 4.57 0 1 1 0 9.143 4.57 4.57 0 0 1 0-9.143z" fill="url(#python-blue)"/>
                  <path d="M64.334 124c16.173 0 26.666-7.039 26.666-20.485V88.287H63.828v-3.807h39.79C117.064 84.48 124 74.206 124 60.76c0-13.447-11.233-22.01-24.679-22.01h-8.381v12.19c0 13.447-11.455 24.679-24.9 24.679H39.569v27.896c0 13.446 8.592 20.485 24.765 20.485zm11.42-8.381a4.57 4.57 0 1 1 0-9.143 4.57 4.57 0 0 1 0 9.143z" fill="url(#python-yellow)"/>
                  <defs>
                    <linearGradient id="python-blue" x1="4" y1="4" x2="88.431" y2="88.431" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#387EB8"/>
                      <stop offset="1" stop-color="#366994"/>
                    </linearGradient>
                    <linearGradient id="python-yellow" x1="124" y1="124" x2="39.569" y2="39.569" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#FFE873"/>
                      <stop offset="1" stop-color="#FFD43B"/>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <h5 class="font-headline-md text-base sm:text-lg font-bold text-primary leading-snug">
                Multithreaded Buffer (Python)
              </h5>
            </div>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
              Mencegah UI freeze saat menyimpan file RAW resolusi tinggi sambil tetap menjaga kelancaran preview 60 FPS di layar touch.
            </p>
          </div>

          <!-- Card 2: Electron -->
          <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-6 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-4">
            <div class="space-y-3">
              <div class="w-14 h-14 rounded-2xl bg-[#47c6e0]/15 flex items-center justify-center p-2.5 border border-[#47c6e0]/30 shadow-xs">
                <svg class="w-full h-full text-[#2ba8c2]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <ellipse cx="12" cy="12" rx="10" ry="4.5" transform="rotate(0 12 12)" />
                  <ellipse cx="12" cy="12" rx="10" ry="4.5" transform="rotate(60 12 12)" />
                  <ellipse cx="12" cy="12" rx="10" ry="4.5" transform="rotate(120 12 12)" />
                  <circle cx="12" cy="12" r="1.8" fill="currentColor" />
                </svg>
              </div>
              <h5 class="font-headline-md text-base sm:text-lg font-bold text-primary leading-snug">
                Electron Touch Wrapper
              </h5>
            </div>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
              Mengunci aplikasi dalam mode fullscreen kiosk, menangani gesture sentuh, hitung mundur otomatis, dan reset sesi otomatis.
            </p>
          </div>

          <!-- Card 3: HTML5 -->
          <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-6 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-4">
            <div class="space-y-3">
              <div class="w-14 h-14 rounded-2xl bg-[#E34F26]/10 flex items-center justify-center p-2.5 border border-[#E34F26]/20 shadow-xs">
                <svg class="w-full h-full" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M71.5 460L32 0h448l-39.5 460L256 512 71.5 460z" fill="#E34F26"/>
                  <path d="M256 472l149-41.5 33.5-390.5H256v432z" fill="#EF652A"/>
                  <path d="M256 208h-85.5l-6-68H256V76H100l18 200h138v-68zm0 152.5l-71-19-4.5-51.5h-68l9 101.5 134.5 37.5v-68.5z" fill="#EBEBEB"/>
                  <path d="M256 360.5l71-19 9.5-107.5H256V170h149.5l-14 157.5L256 428.5V360.5zm0-220.5V76h156l-6 64H256z" fill="#FFFFFF"/>
                </svg>
              </div>
              <h5 class="font-headline-md text-base sm:text-lg font-bold text-primary leading-snug">
                HTML5 Canvas Photo Stitching
              </h5>
            </div>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
              Menyatukan 4 foto dengan layout frame, QR code akses Google Drive, dan filter visual menjadi file siap cetak 300 DPI.
            </p>
          </div>
        </div>
      </div>

      <!-- ================= TAB 2: DESKTOP & MOBILE ADMIN PANEL ================= -->
      <div id="tab-content-admin" class="cuitbox-tab-pane hidden space-y-3">
        <!-- Real Screenshot -->
        <div class="bg-surface-container-lowest rounded-3xl p-4 sm:p-5 border border-primary/15 shadow-sm space-y-3">
          <div class="flex items-center gap-2 text-xs font-bold text-secondary uppercase tracking-wider">
            <span class="material-symbols-outlined text-[18px]">screenshot_monitor</span>
            <span>Screenshot Asli — Admin Panel Login (CI4 Backend)</span>
          </div>
          <div class="rounded-2xl overflow-hidden border border-primary/20 shadow-md">
            <img src="/images/projects/CuitBox_Admin_Panel.jpg" alt="CuitBox Admin Panel — Login Page" class="w-full h-auto object-contain" loading="lazy" />
          </div>
        </div>
        <!-- Backend Admin Capabilities (Grid Format) -->
        <div class="space-y-3 pt-2">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[24px] text-secondary">admin_panel_settings</span>
            <h5 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              Backend Admin Capabilities
            </h5>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1: RBAC -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center border border-primary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">security</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Role-Based Access Control (RBAC)
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Manajemen hak akses terisolasi untuk Owner dan Operator Booth guna menjaga kerahasiaan dan integritas data.
              </p>
            </div>

            <!-- Card 2: Webhook QRIS -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center border border-emerald-500/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">qr_code_scanner</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Webhook Otomatis QRIS Midtrans
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Verifikasi pembayaran instan otomatis tanpa cek mutasi manual, langsung mengaktifkan sesi photobox secara real-time.
              </p>
            </div>

            <!-- Card 3: Dynamic Scheduling -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center border border-secondary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">calendar_clock</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Dynamic Slot Scheduling
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Alokasi waktu dinamis dan penanganan antrean real-time agar tidak terjadi bentrok jadwal atau pemesanan ganda.
              </p>
            </div>

            <!-- Card 4: Reports -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-600 flex items-center justify-center border border-blue-500/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">description</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Export Laporan Excel & PDF
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Ekspor otomatis rekapitulasi finansial, durasi pemakaian, dan log telemetri ke dalam format Excel dan PDF.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- ================= TAB 3: DESKTOP & MOBILE CUSTOMER WEB ================= -->
      <div id="tab-content-cust" class="cuitbox-tab-pane hidden space-y-3">
        <!-- Real Screenshot -->
        <div class="bg-surface-container-lowest rounded-3xl p-4 sm:p-5 border border-primary/15 shadow-sm space-y-3">
          <div class="flex items-center gap-2 text-xs font-bold text-secondary uppercase tracking-wider">
            <span class="material-symbols-outlined text-[18px]">screenshot_monitor</span>
            <span>Screenshot Asli — Customer Booking Web (React + Vite)</span>
          </div>
          <div class="rounded-2xl overflow-hidden border border-primary/20 shadow-md">
            <img src="/images/projects/CuitBox_Customer_Web.jpg" alt="CuitBox Customer Web — Premium Photobox Booking" class="w-full h-auto object-contain" loading="lazy" />
          </div>
        </div>
        <!-- Customer Flow Highlights (Grid Format) -->
        <div class="space-y-3 pt-2">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[24px] text-secondary">auto_awesome</span>
            <h5 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              Customer Flow Highlights
            </h5>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Card 1: Slot Reservation -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center border border-primary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">event_available</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Real-Time Slot Reservation
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Sistem slot reservation real-time mencegah pemesanan ganda (<span class="italic font-mono text-[11px] text-primary">race condition</span>) pada jam sesi yang sama.
              </p>
            </div>

            <!-- Card 2: QRIS Midtrans Webhook -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center border border-emerald-500/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">qr_code_2</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Instant QRIS & Webhook Midtrans
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Proses checkout QRIS otomatis terhubung ke Webhook Midtrans untuk verifikasi transaksi instan tanpa jeda atau konfirmasi manual.
              </p>
            </div>

            <!-- Card 3: Cloud & Email Notification -->
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] hover:shadow-md flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center border border-secondary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">cloud_upload</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Google Drive & Email Delivery
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Foto digital otomatis diunggah ke Google Drive dengan email notifikasi dan link akses instan dikirim langsung ke pelanggan.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Modal Footer -->
    <div class="px-6 py-3.5 bg-surface-container border-t border-primary/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-outline shrink-0">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>CuitBox Production Stack: <strong>React/Vite + Electron + CI4 + Python OpenCV + Midtrans QRIS</strong></span>
      </div>
      <button type="button" onclick="closeCuitboxModal()" class="px-5 py-1.5 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary font-bold transition-all cursor-pointer">
        Tutup Preview
      </button>
    </div>

  </div>
</div>

<!-- Modal Control Script -->
<script>
function openCuitboxModal() {
  const modal = document.getElementById('cuitbox-preview-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function closeCuitboxModal() {
  const modal = document.getElementById('cuitbox-preview-modal');
  if (modal) {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

// Tab Switching (Kiosk, Admin, Customer)
function switchCuitboxTab(tabKey) {
  const tabs = ['kiosk', 'admin', 'cust'];
  tabs.forEach(key => {
    const btn = document.getElementById('tab-btn-' + key);
    const content = document.getElementById('tab-content-' + key);
    if (key === tabKey) {
      if (btn) {
        btn.classList.add('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
        btn.classList.remove('bg-surface-container', 'text-primary', 'font-semibold', 'hover:bg-surface-container-high');
      }
      if (content) content.classList.remove('hidden');
    } else {
      if (btn) {
        btn.classList.remove('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
        btn.classList.add('bg-surface-container', 'text-primary', 'font-semibold', 'hover:bg-surface-container-high');
      }
      if (content) content.classList.add('hidden');
    }
  });
}

// ESC key listener to close modal
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeCuitboxModal();
  }
});
</script>
