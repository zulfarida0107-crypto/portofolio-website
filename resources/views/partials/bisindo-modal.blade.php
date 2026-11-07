<!-- BISINDO AI Interactive Preview Modal -->
<div id="bisindo-preview-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeBisindoModal()">
  <div class="relative w-full max-w-6xl max-h-[94vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-5 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div>
        <h3 class="font-headline-md text-xl sm:text-2xl font-bold text-primary flex items-center gap-2.5">
          <span class="material-symbols-outlined text-[24px] sm:text-[28px] text-secondary">sign_language</span>
          <span>BISINDO AI Computer Vision Interfaces</span>
        </h3>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeBisindoModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Tab Bar -->
    <div class="px-5 sm:px-8 py-3 bg-surface-container-lowest border-b border-primary/10 flex flex-wrap items-center gap-2 shrink-0">
      <button type="button" id="bi-tab-btn-tracking" onclick="switchBisindoTab('tracking')" class="bisindo-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-bold transition-all cursor-pointer bg-primary text-on-primary shadow-xs">
        <span class="material-symbols-outlined text-[18px]">videocam</span>
        <span>1. Real-Time Hand Tracking (MediaPipe & OpenCV)</span>
      </button>
      <button type="button" id="bi-tab-btn-gestures" onclick="switchBisindoTab('gestures')" class="bisindo-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">translate</span>
        <span>2. Sign Classification & Accuracy</span>
      </button>
      <button type="button" id="bi-tab-btn-pipeline" onclick="switchBisindoTab('pipeline')" class="bisindo-tab-btn inline-flex items-center gap-2 px-4 py-2 rounded-full font-label-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-surface-container text-primary hover:bg-surface-container-high">
        <span class="material-symbols-outlined text-[18px]">neurology</span>
        <span>3. AI Model Pipeline & Latency</span>
      </button>
    </div>

    <!-- Modal Scrollable Body -->
    <div class="px-4 sm:px-8 pt-2 sm:pt-3 pb-6 sm:pb-8 overflow-y-auto space-y-3">

      <!-- ================= TAB 1: REAL-TIME HAND TRACKING ================= -->
      <div id="bi-tab-content-tracking" class="bisindo-tab-pane space-y-4">
        <!-- LAPTOP / DESKTOP VISION STUDIO FRAME -->
        <div class="w-full max-w-4xl mx-auto">
          <!-- Laptop Lid / Top Shell -->
          <div class="bg-[#1b1d24] p-3 sm:p-4 rounded-t-2xl sm:rounded-t-3xl shadow-2xl border border-slate-700/60 relative">
            <div class="flex items-center justify-center gap-2 mb-2.5">
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
              <span class="w-3 h-3 rounded-full bg-[#0a0a0e] border border-slate-700 flex items-center justify-center">
                <span class="w-1.5 h-1.5 rounded-full bg-blue-500/80"></span>
              </span>
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            </div>

            <!-- Laptop Screen -->
            <div class="rounded-lg sm:rounded-xl overflow-hidden bg-slate-950 border border-slate-800 text-slate-100 shadow-inner flex flex-col font-sans">
              <!-- Window Bar -->
              <div class="px-4 py-2 bg-slate-900 border-b border-slate-800 flex items-center justify-between text-xs">
                <div class="flex items-center gap-2">
                  <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-green-500/80 inline-block"></span>
                  <span class="ml-2 font-mono text-[11px] text-slate-400">bisindo_vision_engine.py — OpenCV 4.9.0</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] font-mono">
                  <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                  <span class="text-emerald-400">FPS: 34.8</span>
                  <span class="text-slate-400">| Latency: 18.2ms</span>
                </div>
              </div>

              <!-- Computer Vision Viewport -->
              <div class="p-4 sm:p-5 grid grid-cols-1 md:grid-cols-12 gap-4 bg-slate-900/60 min-h-[380px] sm:min-h-[440px]">
                <!-- Camera Canvas (Col 8) with Real Testing Video -->
                <div class="md:col-span-8 rounded-2xl bg-black border border-slate-800 relative flex flex-col justify-between overflow-hidden group">
                  <!-- Overlay Top -->
                  <div class="absolute top-3 left-3 right-3 flex justify-between items-center z-10 text-[10px] font-mono pointer-events-none">
                    <span class="px-2 py-0.5 rounded bg-emerald-500/80 text-black font-bold backdrop-blur-md">
                      MediaPipe Hands • Real Video Test
                    </span>
                    <span class="px-2 py-0.5 rounded bg-black/60 text-slate-300 backdrop-blur-md">RES: 1280x720</span>
                  </div>

                  <!-- Real Video Player -->
                  <div class="w-full h-full flex items-center justify-center bg-black min-h-[320px] p-2">
                    <video id="bisindo-testing-video" controls class="w-full h-full max-h-[380px] object-contain rounded-xl" poster="/images/projects/BISINDO/WhatsApp_Image_2026-11-07_at_22.56.00.jpeg" playsinline>
                      <source src="/images/projects/BISINDO/BISINDO_Gesture_Recognition_Testing.mp4" type="video/mp4">
                      Browser Anda tidak mendukung pemutaran video.
                    </video>
                  </div>

                  <!-- Overlay Bottom -->
                  <div class="p-2.5 bg-slate-900/90 border-t border-slate-800 flex justify-between items-center z-10 text-[10px] text-slate-400 font-mono">
                    <span class="flex items-center gap-1.5 text-emerald-400">
                      <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                      <span>Dataset &amp; In-Field Gesture Testing</span>
                    </span>
                    <span class="text-slate-300">Model: TFLite Quantized INT8</span>
                  </div>
                </div>

                <!-- Telemetry & Predictions Sidebar (Col 4) -->
                <div class="md:col-span-4 p-3 rounded-2xl bg-slate-950/70 border border-slate-800 flex flex-col justify-between space-y-3">
                  <div class="space-y-3">
                    <div class="pb-2 border-b border-slate-800">
                      <span class="text-xs font-bold text-white">Live Prediction Output</span>
                      <div class="mt-2 p-2.5 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-center">
                        <span class="text-[10px] text-emerald-400 uppercase tracking-widest block font-bold">Kata Terdeteksi</span>
                        <span class="text-base font-bold text-white font-headline-md">"TERIMA KASIH"</span>
                        <span class="text-[10px] text-emerald-300 font-mono block mt-0.5">Confidence: 98.4%</span>
                      </div>
                    </div>

                    <!-- Top Class Candidates -->
                    <div class="space-y-1.5 text-[11px]">
                      <span class="text-[10px] text-slate-400 block font-bold uppercase tracking-wider">Top Probabilities:</span>
                      <div class="space-y-1">
                        <div class="flex justify-between text-slate-300">
                          <span>1. Terima Kasih</span>
                          <span class="font-mono text-emerald-400">98.4%</span>
                        </div>
                        <div class="w-full bg-slate-800 h-1 rounded-full overflow-hidden">
                          <div class="bg-emerald-400 h-full w-[98%]"></div>
                        </div>
                      </div>
                      <div class="space-y-1">
                        <div class="flex justify-between text-slate-400">
                          <span>2. Sama-Sama</span>
                          <span class="font-mono">1.2%</span>
                        </div>
                        <div class="w-full bg-slate-800 h-1 rounded-full overflow-hidden">
                          <div class="bg-slate-600 h-full w-[1.2%]"></div>
                        </div>
                      </div>
                      <div class="space-y-1">
                        <div class="flex justify-between text-slate-400">
                          <span>3. Halo / Sapa</span>
                          <span class="font-mono">0.4%</span>
                        </div>
                        <div class="w-full bg-slate-800 h-1 rounded-full overflow-hidden">
                          <div class="bg-slate-600 h-full w-[0.4%]"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pt-2 border-t border-slate-800 space-y-1 text-[10px] text-slate-400 font-mono">
                    <div class="flex justify-between">
                      <span>Preprocessing:</span>
                      <span>1.4ms</span>
                    </div>
                    <div class="flex justify-between">
                      <span>Landmark Extraction:</span>
                      <span>9.6ms</span>
                    </div>
                    <div class="flex justify-between font-bold text-emerald-400">
                      <span>Inference Time:</span>
                      <span>7.2ms</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Laptop Base -->
          <div class="bg-gradient-to-b from-[#2b2d35] to-[#1e2027] h-3 sm:h-4 rounded-b-xl sm:rounded-b-2xl shadow-xl border-t border-slate-600/40 relative">
            <div class="w-20 sm:w-28 h-1 bg-slate-500/40 mx-auto rounded-b"></div>
          </div>
        </div>
      </div>

      <!-- ================= TAB 2: SIGN CLASSIFICATION & TTS ================= -->
      <div id="bi-tab-content-gestures" class="bisindo-tab-pane hidden space-y-4">
        <div class="bg-surface-container-lowest rounded-3xl p-6 border border-primary/15 shadow-sm space-y-5">
          <div class="flex items-center gap-2.5 pb-3 border-b border-primary/10">
            <span class="material-symbols-outlined text-[24px] text-secondary">spellcheck</span>
            <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              BISINDO Alphabet & Vocabulary Benchmark
            </h4>
          </div>

          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl font-bold text-primary block">26 Alfabet</span>
              <span class="text-[11px] text-outline">Huruf A - Z Terlatih</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl font-bold text-emerald-700 block">96.8%</span>
              <span class="text-[11px] text-outline">Rata-rata Akurasi</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl font-bold text-secondary block">&lt; 18.2ms</span>
              <span class="text-[11px] text-outline">Inference Latency</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10">
              <span class="text-xl font-bold text-primary block">30+ FPS</span>
              <span class="text-[11px] text-outline">Webcam Capture Rate</span>
            </div>
          </div>
        </div>
      </div>

      <!-- ================= TAB 3: AI MODEL PIPELINE ================= -->
      <div id="bi-tab-content-pipeline" class="bisindo-tab-pane hidden space-y-4">
        <div class="bg-surface-container-lowest rounded-3xl p-6 border border-primary/15 shadow-sm space-y-6">
          <div class="flex items-center gap-2.5 pb-3 border-b border-primary/10">
            <span class="material-symbols-outlined text-[24px] text-secondary">psychology</span>
            <h4 class="font-headline-md text-base sm:text-lg font-bold text-primary">
              Deep Learning Architecture Pipeline
            </h4>
          </div>

          <!-- Highlight Cards with Logo Badges (matches attached design) -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center border border-primary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">fingerprint</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  21 3D Coordinate Landmarks
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Ekstraksi akurat 21 titik sendi tangan secara spasial (X, Y, Z) per frame menggunakan model MediaPipe Hands.
              </p>
            </div>

            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center border border-emerald-500/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">speed</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Low-Latency Edge Inference
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Inference cepat di perangkat lokal (&lt; 20ms) dengan pipeline kompresi model TensorFlow Lite terkuantisasi INT8.
              </p>
            </div>

            <div class="bg-surface-container-lowest hover:bg-surface-container rounded-3xl p-5 border border-primary/15 shadow-sm transition-all duration-300 hover:scale-[1.02] flex flex-col justify-between space-y-3">
              <div class="space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center border border-secondary/20 shadow-xs">
                  <span class="material-symbols-outlined text-[26px]">record_voice_over</span>
                </div>
                <h6 class="font-headline-md text-sm sm:text-base font-bold text-primary leading-snug">
                  Multi-Modal Speech Synthesis
                </h6>
              </div>
              <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                Konversi otomatis hasil prediksi isyarat menjadi untaian kalimat teks terstruktur dan audio ujaran vokal secara real-time.
              </p>
            </div>
          </div>

          <!-- Deep Learning Execution Stages Flow -->
          <div class="pt-4 border-t border-primary/10 space-y-3">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block">Tahapan Pemrosesan Model AI</span>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
              <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-1.5">
                <div class="flex items-center gap-2">
                  <span class="w-6 h-6 rounded-full bg-primary/20 text-primary flex items-center justify-center text-xs font-bold font-mono">1</span>
                  <span class="font-bold text-primary text-xs">Video Ingestion</span>
                </div>
                <p class="text-[11px] text-on-surface-variant leading-relaxed">
                  Stream frame dari webcam 720p diproses via OpenCV multithreaded capture, normalisasi orientasi, dan deteksi bounding box tangan.
                </p>
              </div>

              <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-1.5">
                <div class="flex items-center gap-2">
                  <span class="w-6 h-6 rounded-full bg-secondary/20 text-secondary flex items-center justify-center text-xs font-bold font-mono">2</span>
                  <span class="font-bold text-secondary text-xs">Landmark Normalization</span>
                </div>
                <p class="text-[11px] text-on-surface-variant leading-relaxed">
                  21 koordinat 3D dinormalisasi terhadap titik pergelangan tangan (wrist) untuk menjaga invariant terhadap jarak dan skala pengguna.
                </p>
              </div>

              <div class="p-4 rounded-2xl bg-surface-container border border-primary/10 space-y-1.5">
                <div class="flex items-center gap-2">
                  <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-700 flex items-center justify-center text-xs font-bold font-mono">3</span>
                  <span class="font-bold text-emerald-700 text-xs">Neural Classification</span>
                </div>
                <p class="text-[11px] text-on-surface-variant leading-relaxed">
                  Model dense neural network TensorFlow mengklasifikasikan pose isyarat menjadi probabilitas huruf / kata dengan confidence score.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Modal Footer -->
    <div class="px-6 py-3.5 bg-surface-container border-t border-primary/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-outline shrink-0">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>BISINDO AI Stack: <strong>Python 3.x + OpenCV + MediaPipe + TensorFlow / Keras + NumPy</strong></span>
      </div>
      <button type="button" onclick="closeBisindoModal()" class="px-5 py-1.5 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary font-bold transition-all cursor-pointer">
        Tutup Preview
      </button>
    </div>

  </div>
</div>

<!-- Modal Script -->
<script>
function openBisindoModal() {
  const modal = document.getElementById('bisindo-preview-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function closeBisindoModal() {
  const biVid = document.getElementById('bisindo-testing-video');
  if (biVid) biVid.pause();

  const modal = document.getElementById('bisindo-preview-modal');
  if (modal) {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

function switchBisindoTab(tabName) {
  const tabs = ['tracking', 'gestures', 'pipeline'];
  tabs.forEach(tab => {
    const btn = document.getElementById('bi-tab-btn-' + tab);
    const content = document.getElementById('bi-tab-content-' + tab);
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
    closeBisindoModal();
  }
});
</script>
