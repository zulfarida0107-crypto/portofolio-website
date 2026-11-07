<!-- Organizations & Teams Documentation Popup Modal -->
<div id="org-detail-modal" class="fixed inset-0 z-50 hidden bg-[#0a200d]/75 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeOrgModal()">
  <div class="relative w-full max-w-5xl max-h-[92vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-4 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div class="flex items-center gap-3.5">
        <div id="org-modal-logo-wrapper" class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-surface-container-lowest p-1.5 border border-primary/15 flex items-center justify-center shadow-2xs shrink-0 overflow-hidden">
          <img id="org-modal-logo" src="" alt="Logo Organisasi" class="w-full h-full object-contain" />
        </div>
        <div>
          <span id="org-modal-tag" class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-secondary block font-mono">Organisasi &amp; Kepemimpinan</span>
          <h3 id="org-modal-title" class="font-headline-md text-base sm:text-xl font-bold text-primary leading-tight">
            Organization Title
          </h3>
        </div>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeOrgModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs shrink-0" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Modal Scrollable Content: 2 Columns (Media Kiri, Deskripsi Kanan) -->
    <div class="p-5 sm:p-8 overflow-y-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">
        
        <!-- ================= KOLOM KIRI: DOKUMENTASI FOTO / VIDEO (WARNA TEMPLATE) ================= -->
        <div class="lg:col-span-7 flex flex-col space-y-4">
          <!-- Main Media Showcase Card (Polaroid / Album Style, Mengikuti Palette Template) -->
          <div class="bg-surface-container-lowest rounded-3xl p-4 border border-primary/20 shadow-md space-y-3">
            
            <!-- Media Top Bar (Template Green & Secondary) -->
            <div class="flex items-center justify-between text-xs px-1">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-primary font-bold text-[11px] font-mono border border-primary/10">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span id="org-media-badge">Dokumentasi Kegiatan</span>
              </span>
              <span id="org-media-count" class="text-[11px] text-outline font-mono font-bold">Foto 1 dari 2</span>
            </div>

            <!-- Viewport Media (Warm Template Container) -->
            <div class="relative aspect-video sm:aspect-[16/10] bg-surface-container rounded-2xl overflow-hidden border border-primary/15 flex items-center justify-center p-2 group">
              <img id="org-media-image" src="" alt="Dokumentasi" onerror="if(!this.dataset.retried){this.dataset.retried='1';this.src='/images/activities/DFuturo/Greeter_Volunteer_DFuturo_2024.png';}" class="w-full h-full object-contain rounded-xl transition-transform duration-300 group-hover:scale-[1.02]" />
              <video id="org-media-video" controls class="w-full h-full object-contain rounded-xl hidden" playsinline></video>
            </div>

            <!-- Caption Block (Clean Template Typography) -->
            <div class="p-3.5 rounded-2xl bg-surface-container-low border border-primary/10 space-y-1">
              <h5 id="org-media-title" class="font-headline-md font-bold text-sm sm:text-base text-primary leading-snug">
                Judul Dokumentasi
              </h5>
              <p id="org-media-caption" class="text-xs text-on-surface-variant leading-relaxed">
                Keterangan kegiatan foto atau video dokumentasi.
              </p>
            </div>

            <!-- Bottom Media Verification Bar -->
            <div class="pt-2 border-t border-primary/10 flex items-center justify-between text-[11px] font-mono text-outline px-1">
              <div class="flex items-center gap-1.5 text-secondary font-bold">
                <span class="material-symbols-outlined text-[16px]">verified</span>
                <span>Dokumentasi Resmi Terverifikasi</span>
              </div>
              <span>Arsip Kemahasiswaan UI &amp; CCIT</span>
            </div>
          </div>

          <!-- Thumbnail Gallery / Media Switcher -->
          <div id="org-media-thumbnails" class="flex items-center gap-3 overflow-x-auto pb-1">
            <!-- Thumbnails injected dynamically via JavaScript -->
          </div>

          <!-- Callout info for upload / proof -->
          <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10 flex items-start gap-3">
            <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">info</span>
            <p class="text-xs text-on-surface-variant leading-relaxed">
              Dokumentasi foto kegiatan lapangan, sertifikat mandat, serta video rekam jejak MC &amp; kepanitiaan resmi tersimpan dalam arsip kegiatan kemahasiswaan UI &amp; CCIT FTUI.
            </p>
          </div>
        </div>

        <!-- ================= KOLOM KANAN: DESKRIPSI & DETAIL ================= -->
        <div class="lg:col-span-5 flex flex-col space-y-5">
          
          <!-- Role & Period Pill -->
          <div class="space-y-2">
            <div class="flex items-center gap-2 flex-wrap">
              <span id="org-modal-period" class="px-3 py-1 rounded-full bg-primary text-on-primary font-bold text-xs shadow-2xs font-mono">
                2024 - 2025
              </span>
              <span class="text-secondary text-xs">✦</span>
              <span id="org-modal-status" class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-[11px] font-bold">
                Kepengurusan Aktif
              </span>
            </div>
            <h4 id="org-modal-role" class="font-headline-md text-lg sm:text-xl font-bold text-primary leading-snug">
              Jabatan / Posisi Organisasi
            </h4>
          </div>

          <!-- Deskripsi Narasi Utama -->
          <div class="space-y-2">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Tentang Peran &amp; Organisasi:</span>
            <p id="org-modal-desc" class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
              Deskripsi lengkap tentang peran dan tanggung jawab di dalam organisasi ini.
            </p>
          </div>

          <!-- Poin Kontribusi & Prestasi Utama -->
          <div class="space-y-2.5 pt-2 border-t border-primary/10">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Tanggung Jawab &amp; Kontribusi Kunci:</span>
            <ul id="org-modal-highlights" class="space-y-2 text-xs sm:text-sm text-on-surface leading-snug">
              <!-- Dynamically populated -->
            </ul>
          </div>

          <!-- Kompetensi & Keahlian yang Diperoleh -->
          <div class="space-y-2 pt-2 border-t border-primary/10">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Kompetensi yang Terlatih:</span>
            <div id="org-modal-skills" class="flex flex-wrap gap-1.5">
              <!-- Dynamically populated -->
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

<!-- Modal Logic Script -->
<script>
const orgData = {
  trui: {
    title: "Universitas Indonesia Robotics Team (TRUI)",
    role: "HR Development (PSDM) Member & Benchmarking MC",
    period: "2024 - 2025",
    logo: "/images/logos/logo-trui.jpg",
    logoBg: "bg-surface-container-lowest",
    tag: "Divisi Robotika Universitas Indonesia",
    status: "Riset Robotika & Event MC",
    desc: "Tim Robotika Universitas Indonesia (TRUI) merupakan organisasi riset robotika bergengsi di lingkungan Universitas Indonesia yang aktif berlaga di Kontes Robot Indonesia (KRI) dan ajang teknologi internasional. Bertugas di divisi Pengembangan Sumber Daya Manusia (PSDM), merancang strategi retensi talenta rekayasa, dan dipercaya memandu sebagai Master of Ceremonies (MC) pada ajang benchmarking akbar bersama delegasi Universitas Siliwangi (UNSIL).",
    highlights: [
      "Mengelola strategi pengembangan anggota internal dan orientasi talenta riset robotika baru.",
      "Bertindak sebagai Master of Ceremonies (MC) resmi pada agenda Benchmarking TRUI UI x UNSIL.",
      "Memfasilitasi diskusi teknis divisi robot KRSBI (Sepak Bola), KRSTI (Seni Tari), dan KRAI antar kampus.",
      "Mengoordinasikan evaluasi kinerja berkala divisi dan kelancaran program keanggotaan."
    ],
    skills: ["Master of Ceremonies (MC)", "Human Resource Development", "Cross-Campus Networking", "Event Directing", "Public Speaking"],
    media: [
      {
        title: "Dokumentasi Benchmarking TRUI UI x Universitas Siliwangi",
        caption: "Benchmarking akbar robotika nasional bersama tim robotika Universitas Siliwangi (UNSIL).",
        image: "/images/activities/TRUI/WhatsApp_Image_2026-11-07_at_22.56.25.jpeg",
        badge: "Dokumentasi Benchmarking"
      },
      {
        title: "Dokumentasi Divisi PSDM TRUI",
        caption: "Aktivitas internal tim robotika UI dalam pengembangan sumber daya manusia.",
        image: "/images/activities/TRUI/WhatsApp_Image_2026-11-07_at_22.55.55.jpeg",
        badge: "Dokumentasi Tim TRUI"
      }
    ]
  },
  komandro: {
    title: "Android Community CCIT FTUI (KOMANDRO)",
    role: "Public Relations Officer & Event MC",
    period: "2024 - 2026",
    logo: "/images/logos/logo-komandro.png",
    logoBg: "bg-primary-container",
    tag: "Komunitas Pengembang Mobile & AI",
    status: "Public Relations & MC",
    desc: "KOMANDRO (Komunitas Android) CCIT FTUI adalah komunitas teknologi mahasiswa yang berfokus pada ekosistem mobile development, software engineering, dan kolaborasi open-source. Menjabat sebagai Public Relations Officer yang bertanggung jawab atas citra eksternal komunitas, kemitraan antarkampus, serta menjadi MC utama pada Suksesi Pemilihan Ketua Umum.",
    highlights: [
      "Memimpin saluran komunikasi eksternal, kampanye media sosial, dan hubungan alumni komunitas.",
      "Master of Ceremonies (MC) pada Sidang Suksesi Pemilihan Ketua Umum KOMANDRO.",
      "Ketua pelaksana seksi PR untuk seminar teknologi, alumni panel, dan workshop mobile coding.",
      "Menjalin kemitraan komunitas developer eksternal dan kolaborasi lintas angkatan CCIT FTUI."
    ],
    skills: ["Public Relations", "Community Outreach", "MC & Public Speaking", "Developer Relations", "Campaign Strategy"],
    media: [
      {
        title: "Dokumentasi Kegiatan KOMANDRO CCIT FTUI",
        caption: "Aktivitas pengurus KOMANDRO dalam program pengembangan developer Android & mobile.",
        image: "/images/activities/komandro/WhatsApp_Image_2026-11-07_at_22.55.56.jpeg",
        badge: "Dokumentasi Komandro"
      },
      {
        title: "Dokumentasi Forum & Pertemuan Komunitas",
        caption: "Pertemuan koordinasi dan diskusi teknis anggota komunitas Android CCIT FTUI.",
        image: "/images/activities/komandro/WhatsApp_Image_2026-11-07_at_22.55.57.jpeg",
        badge: "Dokumentasi Komunitas"
      },
      {
        title: "Dokumentasi Kegiatan Lapangan & Event",
        caption: "Kepanitiaan acara dan pengawalan interaksi komunitas mahasiswa.",
        image: "/images/activities/komandro/WhatsApp_Image_2026-11-07_at_22.55.37.jpeg",
        badge: "Dokumentasi Event"
      },
      {
        title: "Dokumentasi Tim & Pengurus KOMANDRO",
        caption: "Sinergi divisi Public Relations bersama seluruh jajaran pengurus.",
        image: "/images/activities/komandro/WhatsApp_Image_2026-11-07_at_22.55.38.jpeg",
        badge: "Dokumentasi Pengurus"
      },
      {
        title: "Video Rekam Jejak Kegiatan KOMANDRO",
        caption: "Cuplikan video dokumentasi dinamika kegiatan dan kebersamaan komunitas KOMANDRO CCIT FTUI.",
        image: "/images/activities/komandro/WhatsApp_Video_2026-11-07_at_22.55.46.mp4",
        badge: "Video Dokumentasi"
      }
    ]
  },
  mabim: {
    title: "MABIM Freshman Orientation & CIFEST",
    role: "Freshman Mentor & Head of Event Division",
    period: "2025",
    logo: "/images/logos/logo-ccit-ftui.png",
    logoBg: "bg-surface-container-lowest",
    tag: "Orientasi Mahasiswa & Festival IT",
    status: "Head of Event & Mentorship",
    desc: "Masa Bimbingan (MABIM) dan CCIT Information Festival (CIFEST) merupakan perhelatan terbesar orientasi mahasiswa baru serta festival teknologi di CCIT FTUI. Bertindak sebagai Mentor Akademik Mahasiswa Baru dan dipercaya menjabat sebagai Ketua Divisi Acara (Head of Event Division).",
    highlights: [
      "Membimbing mahasiswa baru dalam beradaptasi dengan kurikulum coding dan budaya kampus.",
      "Memimpin perancangan run-down, konsep acara, dan koordinasi pengisi acara pada CIFEST.",
      "Mengarahkan puluhan panitia divisi acara untuk memastikan eksekusi tepat waktu.",
      "Mengadakan sesi ice-breaking, awarding, dan pameran proyek software karya mahasiswa."
    ],
    skills: ["Event Blueprint & Rundown", "Mentorship", "Team Leadership", "Crisis Management", "Public Engagement"],
    media: [
      {
        title: "Sertifikat Mentor Masa Bimbingan (MABIM) 2025",
        caption: "Sertifikat resmi tanda penghargaan sebagai Mentor Mahasiswa Baru CCIT FTUI.",
        image: "/images/activities/mabim/Mentor_Mabim_25_CCIT.png",
        badge: "Sertifikat Mentor MABIM"
      },
      {
        title: "Dokumentasi Pendampingan Mahasiswa Baru",
        caption: "Sesi bimbingan dan pendampingan adaptasi akademik mahasiswa baru CCIT FTUI.",
        image: "/images/activities/mabim/WhatsApp_Image_2026-11-07_at_22.55.39.jpeg",
        badge: "Dokumentasi Mentoring"
      },
      {
        title: "Dokumentasi CIFEST & Kepanitiaan MABIM",
        caption: "Koordinasi divisi acara dalam memandu jalannya CIFEST dan orientasi.",
        image: "/images/activities/mabim/WhatsApp_Image_2026-11-07_at_22.55.46.jpeg",
        badge: "Dokumentasi Divisi Acara"
      },
      {
        title: "Dokumentasi Kebersamaan Panitia & Mentor",
        caption: "Evaluasi dan penutupan rangkaian Masa Bimbingan CCIT FTUI 2025.",
        image: "/images/activities/mabim/WhatsApp_Image_2026-11-07_at_22.55.47.jpeg",
        badge: "Dokumentasi Tim Panitia"
      },
      {
        title: "Video Dokumentasi MABIM CCIT FTUI",
        caption: "Dokumentasi video atmosfer kebersamaan dan kemeriahan orientasi MABIM 2025.",
        image: "/images/activities/mabim/WhatsApp_Video_2026-11-07_at_22.55.45.mp4",
        badge: "Video Dokumentasi"
      }
    ]
  },
  summits: {
    title: "Summit & Festival Committees",
    role: "D'Futuro Futurist Summit & CSFEST Volunteer",
    period: "2024",
    logo: "/images/logos/logo-pnj.png",
    logoBg: "bg-surface-container-lowest",
    tag: "Konferensi Teknologi & Acara Skala Besar",
    status: "VIP Greeter & Logistics",
    desc: "Pengalaman kepanitiaan pada perhelatan akbar tingkat regional dan nasional, termasuk D'Futuro Futurist Summit 2024 yang menghadirkan para inovator dan praktisi masa depan, serta CSFEST 2024 yang dihadiri ratusan partisipan.",
    highlights: [
      "Bertugas sebagai Greeter & Volunteer di D'Futuro Futurist Summit 2024 menyambut tamu VIP & pembicara nasional.",
      "Petugas divisi Logistik & Medis di CSFEST 2024 menjamin kelancaran sarana prasarana dan keselamatan audiens.",
      "Koordinasi respons cepat pada manajemen kerumunan (crowd control) dan alur pergerakan pengunjung.",
      "Kolaborasi erat dengan tim vendor, operasional venue, dan pemangku kepentingan acara."
    ],
    skills: ["Crowd Management", "VIP Hospitality", "Logistics Operations", "Cross-Team Coordination"],
    media: [
      {
        title: "Sertifikat Greeter & Volunteer D'Futuro Futurist Summit 2024",
        caption: "Sertifikat resmi penghargaan sebagai Greeter & Volunteer D'Futuro Futurist Summit.",
        image: "/images/activities/DFuturo/Greeter_Volunteer_DFuturo_2024.png",
        badge: "Sertifikat Greeter Volunteer"
      },
      {
        title: "Dokumentasi Volunteer D'Futuro Futurist Summit 2024",
        caption: "Dokumentasi foto saat bertugas menyambut delegasi di D'Futuro Futurist Summit 2024.",
        image: "/images/activities/DFuturo/WhatsApp_Image_2026-11-07_at_22.55.58.jpeg",
        badge: "Dokumentasi Volunteer"
      },
      {
        title: "Video Suasana D'Futuro Futurist Summit 2024",
        caption: "Cuplikan video atmosfer acara akbar konferensi inovator D'Futuro Futurist Summit.",
        image: "/images/activities/DFuturo/WhatsApp_Video_2026-11-07_at_22.55.55.mp4",
        badge: "Video Dokumentasi"
      },
      {
        title: "Sertifikat Medical Staff CSFEST 2024",
        caption: "Sertifikat penghargaan kepanitiaan divisi Medical Staff HIMA Event CSFEST 2024.",
        image: "/images/activities/CSFEST/Medical_Staff_CSFEST_2024.png",
        badge: "Sertifikat Tim Medis CSFEST"
      }
    ]
  }
};

let currentActiveOrg = null;
let currentActiveMediaIndex = 0;

function openOrgModal(orgKey) {
  const data = orgData[orgKey];
  if (!data) return;

  currentActiveOrg = orgKey;
  currentActiveMediaIndex = 0;

  // Header & Identity
  document.getElementById('org-modal-title').textContent = data.title;
  document.getElementById('org-modal-tag').textContent = data.tag;
  document.getElementById('org-modal-role').textContent = data.role;
  document.getElementById('org-modal-period').textContent = data.period;
  document.getElementById('org-modal-status').textContent = data.status;
  document.getElementById('org-modal-desc').textContent = data.desc;

  // Logo
  const logoEl = document.getElementById('org-modal-logo');
  const logoWrapper = document.getElementById('org-modal-logo-wrapper');
  logoEl.src = data.logo;
  logoWrapper.className = `w-11 h-11 sm:w-12 sm:h-12 rounded-2xl p-1.5 border border-primary/15 flex items-center justify-center shadow-2xs shrink-0 overflow-hidden ${data.logoBg}`;

  // Highlights list
  const highlightsList = document.getElementById('org-modal-highlights');
  highlightsList.innerHTML = '';
  data.highlights.forEach(h => {
    const li = document.createElement('li');
    li.className = 'flex items-start gap-2 text-on-surface-variant';
    li.innerHTML = `<span class="material-symbols-outlined text-[18px] text-primary shrink-0 mt-0.5">check_circle</span><span>${h}</span>`;
    highlightsList.appendChild(li);
  });

  // Skills pills
  const skillsContainer = document.getElementById('org-modal-skills');
  skillsContainer.innerHTML = '';
  data.skills.forEach(s => {
    const pill = document.createElement('span');
    pill.className = 'px-2.5 py-1 rounded-full bg-surface-container text-primary font-bold text-[11px] shadow-2xs border border-primary/10';
    pill.textContent = s;
    skillsContainer.appendChild(pill);
  });

  // Render Media
  renderOrgMedia(0);

  // Show Modal
  const modal = document.getElementById('org-detail-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function renderOrgMedia(index) {
  if (!currentActiveOrg) return;
  const data = orgData[currentActiveOrg];
  if (!data || !data.media || !data.media[index]) return;

  currentActiveMediaIndex = index;
  const currentMedia = data.media[index];
  const isVideo = currentMedia.image.endsWith('.mp4');

  const imgEl = document.getElementById('org-media-image');
  const videoEl = document.getElementById('org-media-video');

  if (isVideo) {
    imgEl.classList.add('hidden');
    videoEl.classList.remove('hidden');
    videoEl.src = currentMedia.image;
  } else {
    if (videoEl) {
      videoEl.pause();
      videoEl.classList.add('hidden');
    }
    imgEl.classList.remove('hidden');
    imgEl.src = currentMedia.image;
  }

  document.getElementById('org-media-title').textContent = currentMedia.title;
  document.getElementById('org-media-caption').textContent = currentMedia.caption;
  document.getElementById('org-media-badge').textContent = currentMedia.badge || (isVideo ? 'Video Dokumentasi' : 'Dokumentasi Kegiatan');
  document.getElementById('org-media-count').textContent = `${isVideo ? 'Video' : 'Dokumen'} ${index + 1} dari ${data.media.length}`;

  // Update Thumbnails
  const thumbContainer = document.getElementById('org-media-thumbnails');
  thumbContainer.innerHTML = '';
  data.media.forEach((m, i) => {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.onclick = () => renderOrgMedia(i);
    const isActive = i === index;
    const itemIsVideo = m.image.endsWith('.mp4');
    btn.className = `flex items-center gap-2 px-3 py-1.5 rounded-xl border text-xs font-bold transition-all cursor-pointer ${
      isActive 
        ? 'bg-primary text-on-primary border-primary shadow-xs' 
        : 'bg-surface-container text-on-surface-variant border-primary/10 hover:bg-surface-container-high'
    }`;
    btn.innerHTML = `<span class="material-symbols-outlined text-[16px]">${itemIsVideo ? 'videocam' : (isActive ? 'image' : 'photo')}</span><span>${itemIsVideo ? 'Video' : 'Foto'} ${i + 1}</span>`;
    thumbContainer.appendChild(btn);
  });
}

function closeOrgModal() {
  const videoEl = document.getElementById('org-media-video');
  if (videoEl) videoEl.pause();

  const modal = document.getElementById('org-detail-modal');
  if (modal) {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeOrgModal();
  }
});
</script>
