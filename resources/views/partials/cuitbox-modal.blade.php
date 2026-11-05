<!-- CuitBox Interactive Preview Modal -->
<div id="cuitbox-preview-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCuitboxModal()">
  <div class="relative w-full max-w-6xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-5 bg-surface-container border-b border-primary/10 flex flex-col md:flex-row md:items-center justify-between gap-4 shrink-0">
      <div>
        <div class="flex items-center gap-2 mb-1">
          <span class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-secondary-container text-secondary text-xs font-bold uppercase tracking-wide">
            <span class="material-symbols-outlined text-[15px]">photo_camera</span>
            <span>CuitBox Architecture Showcase</span>
          </span>
          <span class="text-xs text-outline font-semibold">Interactive Previews</span>
        </div>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary">
          CuitBox Multi-Platform Interfaces
        </h3>
        <p class="text-xs sm:text-sm text-outline mt-0.5">
          Tampilan sistem di perangkat nyata: Kiosk Program (Laptop), Admin Panel (Laptop & HP), dan Customer Web (Laptop & HP).
        </p>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeCuitboxModal()" class="self-end md:self-center w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Tab Bar -->
    <div class="px-5 sm:px-8 py-3 bg-surface-container-lowest border-b border-primary/10 flex flex-wrap items-center gap-2 shrink-0">
      <button type="button" id="tab-btn-kiosk" onclick="switchCuitboxTab('kiosk')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-bold transition-all cursor-pointer bg-primary text-on-primary shadow-xs">
        <span class="material-symbols-outlined text-[18px]">terminal</span>
        <span>1. Laptop Kiosk Program</span>
      </button>
      <button type="button" id="tab-btn-admin" onclick="switchCuitboxTab('admin')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
        <span>2. Laptop & HP: Admin Panel</span>
      </button>
      <button type="button" id="tab-btn-cust" onclick="switchCuitboxTab('cust')" class="cuitbox-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
        <span>3. Laptop & HP: Customer Web</span>
      </button>
    </div>

    <!-- Modal Scrollable Body -->
    <div class="p-4 sm:p-8 overflow-y-auto space-y-6">

      <!-- ================= TAB 1: LAPTOP KIOSK PROGRAM ================= -->
      <div id="tab-content-kiosk" class="cuitbox-tab-pane space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
          <div>
            <h4 class="font-headline-md text-lg font-bold text-primary flex items-center gap-2">
              <span class="material-symbols-outlined text-secondary">computer</span>
              <span>Desktop Kiosk Application (Touchscreen Kiosk Program)</span>
            </h4>
            <p class="text-xs sm:text-sm text-outline">
              Program mandiri berbasis Electron & Python OpenCV yang berjalan pada booth photobox fisik untuk pengunjung mengambil foto langsung.
            </p>
          </div>
          <span class="px-3 py-1 bg-surface-container-high text-primary rounded-full text-xs font-bold uppercase tracking-wider self-start sm:self-auto">
            Resolusi Layar: 16:10 Touch Kiosk
          </span>
        </div>

        <!-- LAPTOP FRAME -->
        <div class="w-full max-w-4xl mx-auto">
          <!-- Laptop Lid / Top Shell -->
          <div class="bg-[#1b1d24] p-3 sm:p-4 rounded-t-2xl sm:rounded-t-3xl shadow-2xl border border-slate-700/60 relative">
            <!-- Camera & Sensor Notch -->
            <div class="flex items-center justify-center gap-2 mb-2.5">
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
              <span class="w-3 h-3 rounded-full bg-[#0a0a0e] border border-slate-700 flex items-center justify-center">
                <span class="w-1.5 h-1.5 rounded-full bg-blue-500/80"></span>
              </span>
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse" title="Camera Streaming"></span>
            </div>

            <!-- Laptop Screen (Kiosk Program UI) -->
            <div class="rounded-lg sm:rounded-xl overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 shadow-inner flex flex-col font-sans">
              <!-- Window Top Bar -->
              <div class="px-4 py-2 bg-slate-900 border-b border-slate-800 flex items-center justify-between text-xs">
                <div class="flex items-center gap-2">
                  <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-green-500/80 inline-block"></span>
                  <span class="ml-2 font-mono text-[11px] text-slate-400">CuitBox Kiosk Terminal — v2.4 (Standalone Kiosk Mode)</span>
                </div>
                <div class="flex items-center gap-3 text-[11px]">
                  <span class="flex items-center gap-1 text-emerald-400 font-bold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                    DSLR LIVE STREAM (60 FPS)
                  </span>
                  <span class="text-slate-400 font-mono">Booth #01</span>
                </div>
              </div>

              <!-- Main Kiosk Touch Interface -->
              <div class="grid grid-cols-1 md:grid-cols-12 min-h-[380px] sm:min-h-[440px] bg-gradient-to-b from-slate-950 to-slate-900">
                <!-- Left: Viewfinder Camera Feed (Col 8) -->
                <div class="md:col-span-8 p-4 flex flex-col justify-between relative border-b md:border-b-0 md:border-r border-slate-800 bg-[#0e1017]">
                  <!-- Camera Overlays -->
                  <div class="flex items-center justify-between text-xs">
                    <span class="px-2.5 py-1 rounded bg-black/60 border border-white/10 text-white font-mono flex items-center gap-1.5 backdrop-blur-xs">
                      <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                      REC ● 1080p RAW BUFFER
                    </span>
                    <span class="px-2.5 py-1 rounded bg-black/60 border border-white/10 text-emerald-400 font-mono text-[11px]">
                      ISO 400 • 1/125s • f/4.0
                    </span>
                  </div>

                  <!-- Center Camera Focus Viewport -->
                  <div class="relative aspect-video my-auto rounded-lg border-2 border-dashed border-white/20 bg-slate-900/60 flex items-center justify-center overflow-hidden">
                    <!-- Corner guide brackets -->
                    <div class="absolute top-3 left-3 w-6 h-6 border-t-2 border-l-2 border-white/60"></div>
                    <div class="absolute top-3 right-3 w-6 h-6 border-t-2 border-r-2 border-white/60"></div>
                    <div class="absolute bottom-3 left-3 w-6 h-6 border-b-2 border-l-2 border-white/60"></div>
                    <div class="absolute bottom-3 right-3 w-6 h-6 border-b-2 border-r-2 border-white/60"></div>

                    <!-- Face Guide Box -->
                    <div class="w-40 h-48 border border-emerald-400/50 rounded-2xl flex flex-col items-center justify-between p-2 bg-emerald-500/5">
                      <span class="text-[10px] text-emerald-400 font-mono uppercase tracking-wider bg-black/60 px-2 py-0.5 rounded">Face Target (OpenCV Tracking)</span>
                      <span class="text-[10px] text-white/50 font-mono">Posisi Kepala di Sini</span>
                    </div>

                    <!-- Big Countdown Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center bg-black/30 backdrop-blur-xs">
                      <div class="w-24 h-24 rounded-full bg-secondary/90 text-white font-headline-lg text-5xl font-extrabold flex items-center justify-center shadow-2xl border-4 border-white/80 animate-bounce">
                        03
                      </div>
                    </div>

                    <!-- Audio-visual hint -->
                    <div class="absolute bottom-3 left-0 right-0 text-center">
                      <span class="bg-black/70 text-slate-200 text-xs px-3 py-1 rounded-full border border-white/10 font-medium">
                        ✨ Bersiap! Foto ke-3 akan diambil dalam 3 detik
                      </span>
                    </div>
                  </div>

                  <!-- Bottom Telemetry Ticker -->
                  <div class="pt-2 flex flex-wrap items-center justify-between text-[11px] text-slate-400 border-t border-slate-800/80">
                    <span class="flex items-center gap-1">
                      <span class="material-symbols-outlined text-[14px] text-emerald-400">check_circle</span>
                      Canon EOS 1500D (USB Direct Binding)
                    </span>
                    <span class="font-mono text-slate-400">0 Frame Drops • 16.4ms Latency</span>
                  </div>
                </div>

                <!-- Right: Touch Controls & Strip Reel (Col 4) -->
                <div class="md:col-span-4 p-4 bg-slate-900/90 flex flex-col justify-between space-y-4">
                  <!-- Session Header -->
                  <div>
                    <div class="flex items-center justify-between pb-2 border-b border-slate-800">
                      <span class="text-xs font-bold text-slate-300 uppercase tracking-wider">Sesi Pengunjung</span>
                      <span class="px-2 py-0.5 rounded bg-primary/20 text-primary-container text-xs font-bold font-mono">#CB-0482</span>
                    </div>

                    <!-- Photo Progress Dots -->
                    <div class="mt-3">
                      <div class="flex justify-between text-[11px] text-slate-400 mb-1.5">
                        <span>Progress Jepretan</span>
                        <span class="font-bold text-white">Foto 3 dari 4</span>
                      </div>
                      <div class="grid grid-cols-4 gap-1.5">
                        <div class="h-2 rounded-full bg-emerald-500" title="Foto 1 OK"></div>
                        <div class="h-2 rounded-full bg-emerald-500" title="Foto 2 OK"></div>
                        <div class="h-2 rounded-full bg-secondary animate-pulse" title="Foto 3 Berlangsung"></div>
                        <div class="h-2 rounded-full bg-slate-700" title="Foto 4 Belum"></div>
                      </div>
                    </div>

                    <!-- Template Preset Selector -->
                    <div class="mt-4 space-y-1.5">
                      <label class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Pilihan Template Frame</label>
                      <div class="space-y-1">
                        <div class="p-2 rounded-lg bg-slate-800/80 border border-emerald-500/50 flex items-center justify-between text-xs cursor-pointer">
                          <span class="font-bold text-white flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-emerald-400">view_column</span>
                            Classic 4-Cut Strip
                          </span>
                          <span class="text-[10px] text-emerald-400 font-bold">AKTIF</span>
                        </div>
                        <div class="p-2 rounded-lg bg-slate-800/40 border border-slate-700/50 flex items-center justify-between text-xs text-slate-400">
                          <span class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">crop_portrait</span>
                            Polaroid Duo Frame
                          </span>
                          <span class="text-[10px]">2x Strip</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Big Tactile Touch Shutter Button -->
                  <div class="space-y-2 pt-2">
                    <button type="button" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-secondary to-[#8c5e63] text-white font-bold text-sm shadow-lg flex items-center justify-center gap-2 active:scale-95 transition-transform border border-white/20">
                      <span class="material-symbols-outlined text-[22px]">photo_camera</span>
                      <span>AMBIL FOTO SEKARANG</span>
                    </button>
                    <div class="text-center text-[10px] text-slate-500">
                      Sentuh layar atau tekan tombol Spasi pada keyboard booth
                    </div>
                  </div>

                  <!-- Hardware Telemetry Bottom -->
                  <div class="p-2.5 rounded-lg bg-slate-950 border border-slate-800 text-[10px] space-y-1">
                    <div class="flex justify-between text-slate-400">
                      <span>Printer Sisa Kertas:</span>
                      <span class="text-white font-bold">84 / 100 Lembar</span>
                    </div>
                    <div class="flex justify-between text-slate-400">
                      <span>Suhu Sensor DSLR:</span>
                      <span class="text-emerald-400 font-bold">38.2°C (Aman)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Laptop Base / Hinge & Keyboard Body -->
          <div class="relative bg-gradient-to-b from-[#2d3038] to-[#1a1c22] h-4 sm:h-5 rounded-b-xl sm:rounded-b-2xl shadow-2xl max-w-[106%] -mx-[3%] flex items-center justify-center border-t border-slate-600/40">
            <div class="w-20 sm:w-28 h-1.5 bg-[#101115] rounded-full shadow-inner"></div>
          </div>
          <!-- Laptop Shadow on desk -->
          <div class="h-3 bg-black/25 blur-md rounded-full max-w-[94%] mx-auto mt-1"></div>
        </div>

        <!-- Technical Explanation Card -->
        <div class="p-5 bg-surface-container rounded-2xl border border-primary/10 grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
          <div>
            <span class="font-bold text-primary block mb-1">⚡ Multithreaded Buffer (Python)</span>
            <p class="text-outline">Mencegah UI freeze saat menyimpan file RAW resolusi tinggi sambil tetap menjaga kelancaran preview 60 FPS di layar touch.</p>
          </div>
          <div>
            <span class="font-bold text-primary block mb-1">🖥️ Electron Touch Wrapper</span>
            <p class="text-outline">Mengunci aplikasi dalam mode fullscreen kiosk, menangani gesture sentuh, hitung mundur otomatis, dan reset sesi otomatis.</p>
          </div>
          <div>
            <span class="font-bold text-primary block mb-1">🎨 HTML5 Canvas Photo Stitching</span>
            <p class="text-outline">Menyatukan 4 foto dengan layout frame, QR code akses Google Drive, dan filter visual menjadi file siap cetak 300 DPI.</p>
          </div>
        </div>
      </div>

      <!-- ================= TAB 2: LAPTOP & HP ADMIN PANEL ================= -->
      <div id="tab-content-admin" class="cuitbox-tab-pane hidden space-y-6">
        <!-- Sub-header & Device view toggler -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-2 border-b border-primary/10">
          <div>
            <h4 class="font-headline-md text-lg font-bold text-primary flex items-center gap-2">
              <span class="material-symbols-outlined text-primary">admin_panel_settings</span>
              <span>Admin Management Dashboard (Laptop & Smartphone View)</span>
            </h4>
            <p class="text-xs sm:text-sm text-outline">
              Panel manajemen booth untuk owner mengontrol jadwal slot, memantau telemetri mesin, dan melihat rekapan omset penjualan secara real-time.
            </p>
          </div>

          <!-- Device View Switcher -->
          <div class="inline-flex p-1 rounded-full bg-surface-container border border-primary/10 self-start sm:self-auto text-xs font-semibold">
            <button type="button" onclick="switchCuitboxDevice('admin', 'both')" id="admin-dev-both" class="cuitbox-dev-btn px-3 py-1 rounded-full bg-primary text-on-primary font-bold shadow-xs transition-all">
              Berdampingan
            </button>
            <button type="button" onclick="switchCuitboxDevice('admin', 'laptop')" id="admin-dev-laptop" class="cuitbox-dev-btn px-3 py-1 rounded-full text-primary hover:text-on-surface transition-all">
              💻 Laptop
            </button>
            <button type="button" onclick="switchCuitboxDevice('admin', 'phone')" id="admin-dev-phone" class="cuitbox-dev-btn px-3 py-1 rounded-full text-primary hover:text-on-surface transition-all">
              📱 HP
            </button>
          </div>
        </div>

        <!-- MOCKUP CONTAINER (FLEX / GRID FOR LAPTOP & HP) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

          <!-- LAPTOP ADMIN FRAME (COL 8) -->
          <div id="admin-laptop-wrapper" class="lg:col-span-8 w-full transition-all">
            <div class="text-xs font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1.5">
              <span class="material-symbols-outlined text-[16px] text-primary">laptop_mac</span>
              <span>Tampilan Laptop (Full Web Owner Dashboard)</span>
            </div>

            <!-- Laptop Frame Outer -->
            <div class="bg-[#1b1d24] p-3 sm:p-4 rounded-t-2xl sm:rounded-t-3xl shadow-xl border border-slate-700/60 relative">
              <div class="flex items-center justify-center gap-2 mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-[#0a0a0e] border border-slate-700"></span>
              </div>

              <!-- Screen Inner -->
              <div class="rounded-lg sm:rounded-xl overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 shadow-inner flex flex-col font-sans">
                <!-- Browser Bar -->
                <div class="px-4 py-2 bg-slate-900 border-b border-slate-800 flex items-center justify-between text-xs">
                  <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500/80 inline-block"></span>
                    <span class="ml-2 font-mono text-[11px] text-slate-400">admin.cuitbox.id/dashboard</span>
                  </div>
                  <span class="text-emerald-400 text-[11px] font-mono">🟢 Sync Webhook Active</span>
                </div>

                <!-- Admin Dashboard Content -->
                <div class="p-4 space-y-4 bg-slate-900/60 min-h-[380px]">
                  <!-- KPI Cards Row -->
                  <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 text-xs">
                    <div class="p-3 rounded-xl bg-slate-800/80 border border-slate-700/60">
                      <span class="text-[10px] text-slate-400 block">Omset Hari Ini</span>
                      <span class="text-sm sm:text-base font-bold text-emerald-400">Rp 1.850.000</span>
                      <span class="text-[10px] text-emerald-400 block mt-0.5">↑ 28% dari target</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-800/80 border border-slate-700/60">
                      <span class="text-[10px] text-slate-400 block">Sesi Selesai</span>
                      <span class="text-sm sm:text-base font-bold text-white">37 Sesi</span>
                      <span class="text-[10px] text-slate-400 block mt-0.5">100% Sukses Print</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-800/80 border border-slate-700/60">
                      <span class="text-[10px] text-slate-400 block">Kertas Tersisa</span>
                      <span class="text-sm sm:text-base font-bold text-white">84 / 100</span>
                      <span class="text-[10px] text-yellow-400 block mt-0.5">Cukup s/d malam</span>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-800/80 border border-slate-700/60">
                      <span class="text-[10px] text-slate-400 block">Status Mesin</span>
                      <span class="text-sm sm:text-base font-bold text-emerald-400">Normal (38°C)</span>
                      <span class="text-[10px] text-slate-400 block mt-0.5">DSLR Connected</span>
                    </div>
                  </div>

                  <!-- Slot Schedule Live Table -->
                  <div class="rounded-xl border border-slate-800 overflow-hidden bg-slate-950/70">
                    <div class="px-3.5 py-2.5 bg-slate-900 border-b border-slate-800 flex justify-between items-center text-xs">
                      <span class="font-bold text-slate-300">Antrean Slot Booth Hari Ini</span>
                      <div class="flex gap-2">
                        <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-[10px] font-bold">Export Excel</span>
                        <span class="px-2 py-0.5 rounded bg-rose-500/20 text-rose-400 text-[10px] font-bold">PDF Report</span>
                      </div>
                    </div>
                    <div class="p-2 space-y-1.5 text-[11px] font-mono">
                      <div class="flex items-center justify-between p-2 rounded bg-slate-900/60 border border-slate-800">
                        <span class="text-slate-400">14:00 - 14:15</span>
                        <span class="text-white font-bold">Sesi #35 (Adit & Maya)</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-bold">SELESAI (QRIS LUNAS)</span>
                      </div>
                      <div class="flex items-center justify-between p-2 rounded bg-emerald-950/30 border border-emerald-500/40">
                        <span class="text-emerald-400 font-bold">14:30 - 14:45</span>
                        <span class="text-white font-bold">Sesi #36 (Kelompok B)</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-500 text-black font-bold animate-pulse">SEDANG BERJALAN</span>
                      </div>
                      <div class="flex items-center justify-between p-2 rounded bg-slate-900/40 border border-slate-800">
                        <span class="text-slate-400">15:00 - 15:15</span>
                        <span class="text-white">Sesi #37 (Sarah T.)</span>
                        <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-400 font-bold">BOOKED (MENUNGGU)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Laptop Base -->
            <div class="bg-gradient-to-b from-[#2d3038] to-[#1a1c22] h-3.5 sm:h-4 rounded-b-xl shadow-xl max-w-[106%] -mx-[3%] flex items-center justify-center border-t border-slate-600/40">
              <div class="w-20 h-1 bg-[#101115] rounded-full"></div>
            </div>
          </div>

          <!-- PHONE ADMIN FRAME (COL 4) -->
          <div id="admin-phone-wrapper" class="lg:col-span-4 w-full flex flex-col items-center transition-all">
            <div class="text-xs font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1.5 self-center">
              <span class="material-symbols-outlined text-[16px] text-secondary">smartphone</span>
              <span>Tampilan HP (Mobile Companion)</span>
            </div>

            <!-- Phone Frame Outer -->
            <div class="w-[270px] sm:w-[290px] bg-[#18191d] p-3 rounded-[40px] shadow-2xl border-[3px] border-[#383a42] relative">
              <!-- Phone Screen -->
              <div class="rounded-[30px] overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 flex flex-col aspect-[9/18.5] font-sans">
                <!-- Status Bar + Dynamic Island -->
                <div class="pt-2 px-4 pb-1 flex justify-between items-center text-[10px] text-slate-300 bg-slate-900 border-b border-slate-800">
                  <span class="font-bold">14:32</span>
                  <div class="w-16 h-3.5 bg-black rounded-full flex items-center justify-between px-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-800"></span>
                  </div>
                  <div class="flex items-center gap-1 text-[10px]">
                    <span>5G</span>
                    <span class="material-symbols-outlined text-[12px]">battery_full</span>
                  </div>
                </div>

                <!-- Phone Content (Admin Mobile) -->
                <div class="p-3 flex-1 overflow-y-auto space-y-3 text-xs bg-slate-900/50">
                  <div class="flex items-center justify-between">
                    <div>
                      <span class="text-[10px] text-slate-400 block">Owner Monitor</span>
                      <h5 class="font-bold text-white">Booth #1 Live</h5>
                    </div>
                    <span class="px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 text-[10px] font-bold">ONLINE</span>
                  </div>

                  <!-- Quick Stats -->
                  <div class="p-3 rounded-xl bg-gradient-to-r from-emerald-950/60 to-slate-900 border border-emerald-500/30">
                    <span class="text-[10px] text-slate-400 block">Pendapatan Hari Ini</span>
                    <div class="text-base font-bold text-emerald-400">Rp 1.850.000</div>
                    <span class="text-[10px] text-slate-400">37 Sesi Selesai</span>
                  </div>

                  <!-- Live Hardware Status -->
                  <div class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 space-y-1.5 text-[11px]">
                    <span class="font-bold text-slate-300 block text-[10px] uppercase">Telemetri Booth</span>
                    <div class="flex justify-between text-slate-400">
                      <span>Kertas:</span>
                      <span class="text-white font-bold">84% Sisa</span>
                    </div>
                    <div class="flex justify-between text-slate-400">
                      <span>Kamera DSLR:</span>
                      <span class="text-emerald-400 font-bold">38°C Ready</span>
                    </div>
                  </div>

                  <!-- Real-time Webhook Ticker -->
                  <div class="p-2 rounded-xl bg-slate-950 border border-slate-800/80 text-[10px]">
                    <span class="text-emerald-400 font-bold block mb-1">⚡ Webhook Midtrans:</span>
                    <p class="text-slate-300 font-mono">14:28 - QRIS Sesi #36 Rp 35.000 Sukses terverifikasi.</p>
                  </div>

                  <!-- Quick Actions -->
                  <div class="grid grid-cols-2 gap-1.5 pt-1">
                    <button type="button" class="py-2 px-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 font-bold text-[10px] flex items-center justify-center gap-1 border border-slate-700">
                      <span class="material-symbols-outlined text-[14px]">refresh</span>
                      Restart Driver
                    </button>
                    <button type="button" class="py-2 px-2 rounded-lg bg-secondary/80 hover:bg-secondary text-white font-bold text-[10px] flex items-center justify-center gap-1">
                      <span class="material-symbols-outlined text-[14px]">lock_open</span>
                      Buka Kunci
                    </button>
                  </div>
                </div>

                <!-- Bottom Home Bar -->
                <div class="py-1.5 bg-slate-950 flex justify-center border-t border-slate-800">
                  <div class="w-24 h-1 bg-slate-600 rounded-full"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tech Notes for Admin -->
        <div class="p-4 bg-surface-container rounded-2xl border border-primary/10 text-xs text-outline space-y-1">
          <span class="font-bold text-primary block">🛠️ Backend Admin Capabilities:</span>
          <p>Mendukung Role-Based Access Control (RBAC), webhook otomatis QRIS Midtrans, dynamic slot scheduling agar tidak terjadi bentrok antrean, dan export otomatis laporan keuangan berformat Excel/PDF.</p>
        </div>
      </div>

      <!-- ================= TAB 3: LAPTOP & HP CUSTOMER WEB ================= -->
      <div id="tab-content-cust" class="cuitbox-tab-pane hidden space-y-6">
        <!-- Sub-header & Device view toggler -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-2 border-b border-primary/10">
          <div>
            <h4 class="font-headline-md text-lg font-bold text-primary flex items-center gap-2">
              <span class="material-symbols-outlined text-secondary">shopping_bag</span>
              <span>Customer Web Portal (Booking Slot & Pemilihan Frame)</span>
            </h4>
            <p class="text-xs sm:text-sm text-outline">
              Web reservasi interaktif tempat pelanggan memilih jadwal foto, memilih template cetak, dan membayar langsung lewat QRIS secara instan.
            </p>
          </div>

          <!-- Device View Switcher -->
          <div class="inline-flex p-1 rounded-full bg-surface-container border border-primary/10 self-start sm:self-auto text-xs font-semibold">
            <button type="button" onclick="switchCuitboxDevice('cust', 'both')" id="cust-dev-both" class="cuitbox-dev-btn px-3 py-1 rounded-full bg-primary text-on-primary font-bold shadow-xs transition-all">
              Berdampingan
            </button>
            <button type="button" onclick="switchCuitboxDevice('cust', 'laptop')" id="cust-dev-laptop" class="cuitbox-dev-btn px-3 py-1 rounded-full text-primary hover:text-on-surface transition-all">
              💻 Laptop
            </button>
            <button type="button" onclick="switchCuitboxDevice('cust', 'phone')" id="cust-dev-phone" class="cuitbox-dev-btn px-3 py-1 rounded-full text-primary hover:text-on-surface transition-all">
              📱 HP
            </button>
          </div>
        </div>

        <!-- MOCKUP CONTAINER (FLEX / GRID FOR LAPTOP & HP) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

          <!-- LAPTOP CUSTOMER FRAME (COL 8) -->
          <div id="cust-laptop-wrapper" class="lg:col-span-8 w-full transition-all">
            <div class="text-xs font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1.5">
              <span class="material-symbols-outlined text-[16px] text-primary">laptop_mac</span>
              <span>Tampilan Laptop (Desktop Customer Web Portal)</span>
            </div>

            <!-- Laptop Frame Outer -->
            <div class="bg-[#1b1d24] p-3 sm:p-4 rounded-t-2xl sm:rounded-t-3xl shadow-xl border border-slate-700/60 relative">
              <div class="flex items-center justify-center gap-2 mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-[#0a0a0e] border border-slate-700"></span>
              </div>

              <!-- Screen Inner -->
              <div class="rounded-lg sm:rounded-xl overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 shadow-inner flex flex-col font-sans">
                <!-- Browser Bar -->
                <div class="px-4 py-2 bg-slate-900 border-b border-slate-800 flex items-center justify-between text-xs">
                  <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500/80 inline-block"></span>
                    <span class="ml-2 font-mono text-[11px] text-slate-400">cuitbox.id/booking-session</span>
                  </div>
                  <span class="text-slate-400 text-[11px]">✦ CCIT Creation Event</span>
                </div>

                <!-- Customer Web Portal Content -->
                <div class="p-4 sm:p-5 space-y-4 bg-slate-900/60 min-h-[380px]">
                  <!-- Mini Web Navbar -->
                  <div class="flex justify-between items-center pb-3 border-b border-slate-800">
                    <span class="font-headline-md font-bold text-white text-sm sm:text-base flex items-center gap-1.5">
                      <span class="w-2 h-2 rounded-full bg-secondary"></span>
                      CuitBox Studio
                    </span>
                    <div class="hidden sm:flex gap-4 text-xs text-slate-300">
                      <span class="text-emerald-400 font-bold border-b border-emerald-400">Pilih Jadwal</span>
                      <span>Katalog Frame</span>
                      <span>Cek Tiket</span>
                    </div>
                  </div>

                  <!-- Booking Stepper Layout -->
                  <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                    <!-- Left: Slot Selector (7 cols) -->
                    <div class="sm:col-span-7 space-y-3">
                      <div>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wide block mb-1">1. Pilih Waktu Sesi (Hari Ini)</span>
                        <div class="grid grid-cols-3 gap-1.5 text-xs">
                          <div class="p-2 rounded bg-slate-800 text-slate-500 line-through text-center text-[10px]">13:00 (Penuh)</div>
                          <div class="p-2 rounded bg-slate-800 text-slate-500 line-through text-center text-[10px]">13:30 (Penuh)</div>
                          <div class="p-2 rounded bg-emerald-500/20 border border-emerald-400 text-emerald-300 font-bold text-center text-[10px] cursor-pointer">14:00 (Pilih)</div>
                          <div class="p-2 rounded bg-slate-800/80 hover:bg-slate-800 text-slate-200 text-center text-[10px] cursor-pointer">14:30</div>
                          <div class="p-2 rounded bg-slate-800/80 hover:bg-slate-800 text-slate-200 text-center text-[10px] cursor-pointer">15:00</div>
                          <div class="p-2 rounded bg-slate-800/80 hover:bg-slate-800 text-slate-200 text-center text-[10px] cursor-pointer">15:30</div>
                        </div>
                      </div>

                      <div>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wide block mb-1">2. Pilih Template Frame</span>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                          <div class="p-2.5 rounded-lg bg-slate-800/80 border border-emerald-400 flex items-center gap-2">
                            <span class="w-6 h-10 rounded bg-slate-700 border border-white/20 shrink-0"></span>
                            <div>
                              <span class="font-bold text-white text-[11px] block">4-Cut Classic</span>
                              <span class="text-[10px] text-slate-400">2 Print Fisik</span>
                            </div>
                          </div>
                          <div class="p-2.5 rounded-lg bg-slate-800/40 border border-slate-700/60 flex items-center gap-2 opacity-70">
                            <span class="w-6 h-10 rounded bg-slate-700 border border-white/20 shrink-0"></span>
                            <div>
                              <span class="font-bold text-slate-300 text-[11px] block">Duo Polaroid</span>
                              <span class="text-[10px] text-slate-400">1 Print Lebar</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Right: Checkout & QRIS Preview (5 cols) -->
                    <div class="sm:col-span-5 p-3 rounded-xl bg-slate-950 border border-slate-800 flex flex-col justify-between text-xs space-y-2">
                      <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Ringkasan Pesanan</span>
                        <div class="mt-2 text-[11px] space-y-1 text-slate-300">
                          <div class="flex justify-between">
                            <span>Sesi 15 Menit:</span>
                            <span class="text-white font-bold">Rp 35.000</span>
                          </div>
                          <div class="flex justify-between">
                            <span>Cetakan (2 Lembar):</span>
                            <span class="text-emerald-400 font-bold">Gratis</span>
                          </div>
                          <div class="flex justify-between">
                            <span>Digital Softfile:</span>
                            <span class="text-emerald-400 font-bold">Termasuk</span>
                          </div>
                        </div>
                      </div>

                      <!-- QRIS Modal Preview -->
                      <div class="p-2.5 rounded-lg bg-white text-slate-900 text-center space-y-1 shadow-sm">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-600 block">Bayar Instan QRIS</span>
                        <div class="w-20 h-20 bg-slate-900 mx-auto rounded flex items-center justify-center p-1">
                          <!-- Simulated QR pattern -->
                          <div class="w-full h-full bg-white grid grid-cols-4 gap-0.5 p-1">
                            <div class="bg-black"></div><div class="bg-black"></div><div class="bg-white"></div><div class="bg-black"></div>
                            <div class="bg-black"></div><div class="bg-white"></div><div class="bg-black"></div><div class="bg-white"></div>
                            <div class="bg-white"></div><div class="bg-black"></div><div class="bg-black"></div><div class="bg-black"></div>
                            <div class="bg-black"></div><div class="bg-white"></div><div class="bg-white"></div><div class="bg-black"></div>
                          </div>
                        </div>
                        <span class="text-[9px] text-slate-500 font-mono block">Scan via GoPay / BCA / OVO</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Laptop Base -->
            <div class="bg-gradient-to-b from-[#2d3038] to-[#1a1c22] h-3.5 sm:h-4 rounded-b-xl shadow-xl max-w-[106%] -mx-[3%] flex items-center justify-center border-t border-slate-600/40">
              <div class="w-20 h-1 bg-[#101115] rounded-full"></div>
            </div>
          </div>

          <!-- PHONE CUSTOMER FRAME (COL 4) -->
          <div id="cust-phone-wrapper" class="lg:col-span-4 w-full flex flex-col items-center transition-all">
            <div class="text-xs font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1.5 self-center">
              <span class="material-symbols-outlined text-[16px] text-secondary">smartphone</span>
              <span>Tampilan HP (Mobile Web Booking)</span>
            </div>

            <!-- Phone Frame Outer -->
            <div class="w-[270px] sm:w-[290px] bg-[#18191d] p-3 rounded-[40px] shadow-2xl border-[3px] border-[#383a42] relative">
              <!-- Phone Screen -->
              <div class="rounded-[30px] overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 flex flex-col aspect-[9/18.5] font-sans">
                <!-- Status Bar + Dynamic Island -->
                <div class="pt-2 px-4 pb-1 flex justify-between items-center text-[10px] text-slate-300 bg-slate-900 border-b border-slate-800">
                  <span class="font-bold">14:05</span>
                  <div class="w-16 h-3.5 bg-black rounded-full flex items-center justify-between px-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span>
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-800"></span>
                  </div>
                  <div class="flex items-center gap-1 text-[10px]">
                    <span>5G</span>
                    <span class="material-symbols-outlined text-[12px]">battery_full</span>
                  </div>
                </div>

                <!-- Phone Content (Customer Mobile Web) -->
                <div class="p-3 flex-1 overflow-y-auto space-y-3 text-xs bg-slate-900/50">
                  <div>
                    <span class="text-[10px] text-slate-400">Self-Photo Booth</span>
                    <h5 class="font-bold text-white text-sm">Pesan Sesi Foto</h5>
                  </div>

                  <!-- Date chips -->
                  <div class="flex gap-1.5 overflow-x-auto pb-1 text-[10px]">
                    <span class="px-2.5 py-1 rounded-full bg-secondary text-white font-bold shrink-0">Hari Ini</span>
                    <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-300 shrink-0">Besok</span>
                    <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-300 shrink-0">Sabtu</span>
                  </div>

                  <!-- Time slots -->
                  <div>
                    <span class="text-[10px] text-slate-400 block mb-1">Pilih Jam Sesi:</span>
                    <div class="grid grid-cols-2 gap-1.5 text-[10px]">
                      <div class="p-2 rounded bg-emerald-500/20 border border-emerald-400 text-emerald-300 font-bold text-center">14:00 (Pilihan)</div>
                      <div class="p-2 rounded bg-slate-800 text-slate-300 text-center">14:30</div>
                      <div class="p-2 rounded bg-slate-800 text-slate-300 text-center">15:00</div>
                      <div class="p-2 rounded bg-slate-800 text-slate-300 text-center">15:30</div>
                    </div>
                  </div>

                  <!-- Frame Choice -->
                  <div class="p-2 rounded-xl bg-slate-900 border border-slate-800 flex items-center gap-2">
                    <div class="w-6 h-10 rounded bg-white text-black text-[6px] font-bold flex flex-col justify-between p-0.5 shrink-0">
                      <div class="bg-slate-300 h-2 rounded-xs"></div>
                      <div class="bg-slate-300 h-2 rounded-xs"></div>
                      <div class="text-[4px] text-center">CUITBOX</div>
                    </div>
                    <div>
                      <span class="font-bold text-white text-[11px] block">Template 4-Cut Strip</span>
                      <span class="text-[10px] text-emerald-400">Termasuk 2x Print Fisik</span>
                    </div>
                  </div>

                  <!-- Sticky Checkout Bar -->
                  <div class="pt-2 border-t border-slate-800 space-y-2">
                    <div class="flex justify-between items-center">
                      <span class="text-[10px] text-slate-400">Total Biaya:</span>
                      <span class="text-sm font-bold text-white">Rp 35.000</span>
                    </div>
                    <button type="button" class="w-full py-2.5 rounded-xl bg-gradient-to-r from-secondary to-[#8c5e63] text-white font-bold text-xs flex items-center justify-center gap-1 shadow-md">
                      <span>Lanjut Bayar QRIS</span>
                      <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                    </button>
                  </div>
                </div>

                <!-- Bottom Home Bar -->
                <div class="py-1.5 bg-slate-950 flex justify-center border-t border-slate-800">
                  <div class="w-24 h-1 bg-slate-600 rounded-full"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tech Notes for Customer Web -->
        <div class="p-4 bg-surface-container rounded-2xl border border-primary/10 text-xs text-outline space-y-1">
          <span class="font-bold text-primary block">✨ Customer Flow Highlights:</span>
          <p>Sistem slot reservation real-time mencegah pemesanan ganda (*race condition*), proses checkout QRIS otomatis terhubung ke Webhook Midtrans, dan foto digital otomatis diunggah ke Google Drive dengan email notifikasi langsung ke pelanggan.</p>
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

// Device View Switching (Both, Laptop only, Phone only)
function switchCuitboxDevice(tabPrefix, mode) {
  const laptop = document.getElementById(tabPrefix + '-laptop-wrapper');
  const phone = document.getElementById(tabPrefix + '-phone-wrapper');
  const btnBoth = document.getElementById(tabPrefix + '-dev-both');
  const btnLaptop = document.getElementById(tabPrefix + '-dev-laptop');
  const btnPhone = document.getElementById(tabPrefix + '-dev-phone');

  // Reset button styles
  [btnBoth, btnLaptop, btnPhone].forEach(btn => {
    if (btn) {
      btn.classList.remove('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
      btn.classList.add('text-primary');
    }
  });

  if (mode === 'both') {
    if (btnBoth) btnBoth.classList.add('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
    if (laptop) {
      laptop.classList.remove('hidden', 'lg:col-span-12');
      laptop.classList.add('lg:col-span-8');
    }
    if (phone) {
      phone.classList.remove('hidden', 'lg:col-span-12');
      phone.classList.add('lg:col-span-4');
    }
  } else if (mode === 'laptop') {
    if (btnLaptop) btnLaptop.classList.add('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
    if (laptop) {
      laptop.classList.remove('hidden', 'lg:col-span-8');
      laptop.classList.add('lg:col-span-12');
    }
    if (phone) phone.classList.add('hidden');
  } else if (mode === 'phone') {
    if (btnPhone) btnPhone.classList.add('bg-primary', 'text-on-primary', 'font-bold', 'shadow-xs');
    if (laptop) laptop.classList.add('hidden');
    if (phone) {
      phone.classList.remove('hidden', 'lg:col-span-4');
      phone.classList.add('lg:col-span-12');
    }
  }
}

// ESC key listener to close modal
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeCuitboxModal();
  }
});
</script>
