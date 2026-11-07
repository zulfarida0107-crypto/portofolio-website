<!-- Certifications & Education Documentation Popup Modal -->
<div id="cert-detail-modal" class="fixed inset-0 z-50 hidden bg-[#0a200d]/75 backdrop-blur-md p-2 sm:p-4 md:p-6 overflow-y-auto flex items-center justify-center transition-all duration-300" onclick="if(event.target === this) closeCertModal()">
  <div class="relative w-full max-w-5xl max-h-[92vh] bg-surface-container-low rounded-3xl border border-primary/20 shadow-2xl flex flex-col overflow-hidden text-on-surface my-auto">
    
    <!-- Modal Header -->
    <div class="px-5 sm:px-8 py-4 bg-surface-container border-b border-primary/10 flex items-center justify-between gap-4 shrink-0">
      <div class="flex items-center gap-3.5">
        <div id="cert-modal-icon-wrapper" class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-surface-container-lowest p-1.5 border border-primary/15 flex items-center justify-center shadow-2xs shrink-0 text-primary">
          <span id="cert-modal-icon" class="material-symbols-outlined text-[26px]">verified</span>
        </div>
        <div>
          <span id="cert-modal-tag" class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-secondary block font-mono">Lisensi &amp; Kredensial Resmi</span>
          <h3 id="cert-modal-title" class="font-headline-md text-base sm:text-xl font-bold text-primary leading-tight">
            Certification Title
          </h3>
        </div>
      </div>

      <!-- Close Button -->
      <button type="button" onclick="closeCertModal()" class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant text-primary flex items-center justify-center transition-colors cursor-pointer shadow-xs shrink-0" title="Tutup Modal (ESC)">
        <span class="material-symbols-outlined text-[22px]">close</span>
      </button>
    </div>

    <!-- Modal Scrollable Content: 2 Columns (Media Kiri, Deskripsi Kanan) -->
    <div class="p-5 sm:p-8 overflow-y-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">
        
        <!-- ================= KOLOM KIRI: DOKUMENTASI / SERTIFIKAT (WARNA TEMPLATE) ================= -->
        <div class="lg:col-span-7 flex flex-col space-y-4">
          <!-- Main Media Showcase Card (Polaroid / Album Style) -->
          <div class="bg-surface-container-lowest rounded-3xl p-4 border border-primary/20 shadow-md space-y-3">
            
            <!-- Top Bar -->
            <div class="flex items-center justify-between text-xs px-1">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-primary font-bold text-[11px] font-mono border border-primary/10">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span id="cert-media-badge">Dokumentasi Sertifikat</span>
              </span>
              <span id="cert-media-count" class="text-[11px] text-outline font-mono font-bold">Dokumen 1 dari 1</span>
            </div>

            <!-- Viewport Media -->
            <div class="relative aspect-video sm:aspect-[16/10] bg-surface-container rounded-2xl overflow-hidden border border-primary/15 flex items-center justify-center p-3 group">
              <img id="cert-media-image" src="" alt="Sertifikat / Bukti" class="w-full h-full object-contain rounded-xl transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>

            <!-- Bottom Verification Bar -->
            <div class="pt-2 border-t border-primary/10 flex items-center justify-between text-[11px] font-mono text-outline px-1">
              <div class="flex items-center gap-1.5 text-secondary font-bold">
                <span class="material-symbols-outlined text-[16px]">verified</span>
                <span id="cert-verify-status">Terverifikasi Resmi</span>
              </div>
              <span id="cert-verify-issuer">Institusi Penerbit</span>
            </div>
          </div>

          <!-- Thumbnail Gallery / Switcher -->
          <div id="cert-media-thumbnails" class="flex items-center gap-3 overflow-x-auto pb-1">
            <!-- Injected dynamically -->
          </div>

          <!-- Callout Info -->
          <div class="p-3.5 rounded-2xl bg-surface-container border border-primary/10 flex items-start gap-3">
            <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">verified_user</span>
            <p class="text-xs text-on-surface-variant leading-relaxed">
              Seluruh lisensi sertifikasi dan riwayat pendidikan vokasi terdaftar pada basis data resmi institusi penyelenggara.
            </p>
          </div>
        </div>

        <!-- ================= KOLOM KANAN: DESKRIPSI & DETAIL ================= -->
        <div class="lg:col-span-5 flex flex-col space-y-5">
          
          <!-- Role & Period Pill -->
          <div class="space-y-2">
            <div class="flex items-center gap-2 flex-wrap">
              <span id="cert-modal-period" class="px-3 py-1 rounded-full bg-primary text-on-primary font-bold text-xs shadow-2xs font-mono">
                Certified 2025
              </span>
              <span class="text-secondary text-xs">✦</span>
              <span id="cert-modal-issuer-badge" class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-[11px] font-bold">
                Penerbit Lisensi
              </span>
            </div>
            <h4 id="cert-modal-headline" class="font-headline-md text-lg sm:text-xl font-bold text-primary leading-snug">
              Nama Lisensi / Program
            </h4>
          </div>

          <!-- Deskripsi Narasi Utama -->
          <div class="space-y-2">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Deskripsi &amp; Cakupan Kurikulum:</span>
            <p id="cert-modal-desc" class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
              Deskripsi lengkap tentang kompetensi dan materi yang dikuasai.
            </p>
          </div>

          <!-- Poin Materi & Kompetensi Kunci -->
          <div class="space-y-2.5 pt-2 border-t border-primary/10">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Materi &amp; Keterampilan Teruji:</span>
            <ul id="cert-modal-highlights" class="space-y-2 text-xs sm:text-sm text-on-surface leading-snug">
              <!-- Dynamically populated -->
            </ul>
          </div>

          <!-- Kompetensi & Keahlian yang Diperoleh -->
          <div class="space-y-2 pt-2 border-t border-primary/10">
            <span class="text-xs font-bold text-outline uppercase tracking-wider block font-mono">Skill Tags:</span>
            <div id="cert-modal-skills" class="flex flex-wrap gap-1.5">
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
const certData = {
  ccna: {
    title: "CCNA: Introduction to Networks",
    tag: "Sertifikasi Jaringan Komputer Global",
    period: "Certified 2025",
    issuer: "Cisco Networking Academy",
    icon: "router",
    iconWrapper: "bg-surface-container text-primary",
    desc: "Sertifikasi kredensial internasional dari Cisco Networking Academy yang memvalidasi kompetensi fundamental jaringan komputer enterprise, arsitektur model OSI & TCP/IP, konfigurasi perangkat switch & router Cisco, pengalamatan subnetting IPv4/IPv6, serta prinsip switching security.",
    highlights: [
      "Konfigurasi dasar perangkat jaringan Cisco IOS (Switch Catalyst & Router Enterprise).",
      "Perancangan skema subnetting IP terstruktur (IPv4 VLSM, CIDR, dan IPv6 SLAAC/DHCPv6).",
      "Analisis aliran paket data dan protokol jaringan menggunakan Wireshark & Packet Tracer.",
      "Troubleshooting konektivitas jaringan LAN, protokol ARP, ICMP, dan keamanan port switch."
    ],
    skills: ["Cisco IOS", "IPv4/IPv6 Subnetting", "Routing & Switching", "Wireshark", "Packet Tracer", "Network Security"],
    media: [
      {
        image: "/images/certifications/CISCO.png",
        badge: "Sertifikat Cisco CCNA"
      }
    ]
  },
  copywriting_ai: {
    title: "Copywriting AI for Digital Ads",
    tag: "Program Digital Talent Scholarship (DTS)",
    period: "Certified 2025",
    issuer: "Komdigi RI (Kementerian Komunikasi & Digital)",
    icon: "psychology",
    iconWrapper: "bg-secondary-container text-secondary",
    desc: "Program pelatihan dan sertifikasi talenta digital resmi dari Kementerian Komunikasi dan Digital RI (Komdigi) yang berfokus pada pemanfaatan Generative AI dalam merancang pesan pemasaran, konversi digital ads, brand storytelling, serta optimasi kampanye periklanan digital berbasis data.",
    highlights: [
      "Penerapan formula copywriting (AIDA, PAS, FAB) berbantuan generative prompt AI.",
      "Analisis segmentasi audiens target pada platform Meta Ads & Google Ads.",
      "Penyusunan varian copy kreatif untuk peningkatan Click-Through Rate (CTR) dan konversi iklan.",
      "A/B testing penulisan headline iklan digital dan evaluasi metrik performa kampanye."
    ],
    skills: ["Generative AI Prompting", "Digital Advertising", "Ad Copywriting", "Conversion Rate Optimization", "Brand Voice"],
    media: [
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_Copywriting_AI_Untuk_Iklan_Digital_p1.png",
        badge: "Sertifikat Komdigi RI"
      },
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_Copywriting_AI_Untuk_Iklan_Digital_p2.png",
        badge: "Transkrip Materi & JP"
      }
    ]
  },
  social_media: {
    title: "Social Media Management",
    tag: "Program Digital Talent Scholarship (DTS)",
    period: "Certified 2025",
    issuer: "Komdigi RI (Kementerian Komunikasi & Digital)",
    icon: "campaign",
    iconWrapper: "bg-surface-container text-primary",
    desc: "Sertifikasi intensif Digital Talent Scholarship dari Komdigi RI dalam strategi pengelolaan media sosial profesional, editorial content planning, analitik engagement, serta strategi community outreach untuk membangun reputasi merek dan pertumbuhan audiens digital.",
    highlights: [
      "Penyusunan editorial calendar dan strategi pilar konten lintas platform media sosial.",
      "Pemantauan dan interpretasi analitik metrik performa (Reach, Impressions, Engagement Rate).",
      "Manajemen komunikasi komunitas dan respons interaksi audiens secara profesional.",
      "Riset tren industri dan kurasi visual brand persona yang konsisten."
    ],
    skills: ["Content Strategy", "Social Media Analytics", "Community Engagement", "Editorial Planning", "Brand Identity"],
    media: [
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_Social_Media_Management_untuk_Brand_Digital_p1.png",
        badge: "Sertifikat Komdigi RI"
      },
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_Social_Media_Management_untuk_Brand_Digital_p2.png",
        badge: "Transkrip Materi & JP"
      }
    ]
  },
  diploma: {
    title: "Diploma in Informatics Engineering",
    tag: "Pendidikan Vokasi Tinggi Terapan",
    period: "2024 - Sekarang (Ongoing)",
    issuer: "Politeknik Negeri Jakarta (PNJ) x CCIT FTUI",
    icon: "school",
    iconWrapper: "bg-surface-container-high text-primary",
    desc: "Program diploma kolaborasi resmi antara Politeknik Negeri Jakarta (PNJ) dengan Center for Computing and Information Technology Fakultas Teknik Universitas Indonesia (CCIT FTUI). Mengambil konsentrasi keahlian Full Stack Developer dengan fokus rekayasa perangkat lunak modern, arsitektur database, dan pengembangan produk digital siap kerja.",
    highlights: [
      "Track Full Stack Developer: penguasaan end-to-end dari perancangan ERD database, REST API, hingga antarmuka pengguna.",
      "Pemenang Juara 1 CCIT Venture Studio Batch #1 'Manggala' lewat perancangan platform CuitBox.",
      "Pengembangan aplikasi enterprise berbasis Java, PHP (Laravel/CI4), Python AI, dan Flutter.",
      "Praktikum intensif di laboratorium komputer FTUI dan kampus terpadu PNJ."
    ],
    skills: ["Full Stack Development", "Database Architecture", "Software Engineering", "Agile & Product Delivery", "System Analysis"],
    media: [
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_From_Campus_To_Industry.png",
        badge: "Seminar CCIT FTUI"
      },
      {
        image: "/images/certifications/Sertifikat_-_Zulfarida_-_Smart_Digital_Finance.png",
        badge: "Webinar Digital Finance"
      },
      {
        image: "/images/certifications/Rise_In_Blockchain.png",
        badge: "Rise In Blockchain"
      }
    ]
  }
};

let currentActiveCert = null;
let currentActiveCertMediaIndex = 0;

function openCertModal(certKey) {
  const data = certData[certKey];
  if (!data) return;

  currentActiveCert = certKey;
  currentActiveCertMediaIndex = 0;

  // Header & Identity
  document.getElementById('cert-modal-title').textContent = data.title;
  document.getElementById('cert-modal-headline').textContent = data.title;
  document.getElementById('cert-modal-tag').textContent = data.tag;
  document.getElementById('cert-modal-period').textContent = data.period;
  document.getElementById('cert-modal-issuer-badge').textContent = data.issuer;
  document.getElementById('cert-verify-issuer').textContent = data.issuer;
  document.getElementById('cert-modal-desc').textContent = data.desc;

  // Icon
  document.getElementById('cert-modal-icon').textContent = data.icon || 'verified';
  document.getElementById('cert-modal-icon-wrapper').className = `w-11 h-11 sm:w-12 sm:h-12 rounded-2xl p-1.5 border border-primary/15 flex items-center justify-center shadow-2xs shrink-0 ${data.iconWrapper}`;

  // Highlights list
  const highlightsList = document.getElementById('cert-modal-highlights');
  highlightsList.innerHTML = '';
  data.highlights.forEach(h => {
    const li = document.createElement('li');
    li.className = 'flex items-start gap-2 text-on-surface-variant';
    li.innerHTML = `<span class="material-symbols-outlined text-[18px] text-primary shrink-0 mt-0.5">check_circle</span><span>${h}</span>`;
    highlightsList.appendChild(li);
  });

  // Skills pills
  const skillsContainer = document.getElementById('cert-modal-skills');
  skillsContainer.innerHTML = '';
  data.skills.forEach(s => {
    const pill = document.createElement('span');
    pill.className = 'px-2.5 py-1 rounded-full bg-surface-container text-primary font-bold text-[11px] shadow-2xs border border-primary/10';
    pill.textContent = s;
    skillsContainer.appendChild(pill);
  });

  // Render Media
  renderCertMedia(0);

  // Show Modal
  const modal = document.getElementById('cert-detail-modal');
  if (modal) {
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
}

function renderCertMedia(index) {
  if (!currentActiveCert) return;
  const data = certData[currentActiveCert];
  if (!data || !data.media || !data.media[index]) return;

  currentActiveCertMediaIndex = index;
  const currentMedia = data.media[index];

  // Update Main Viewport
  document.getElementById('cert-media-image').src = currentMedia.image;
  const titleEl = document.getElementById('cert-media-title');
  if (titleEl) titleEl.textContent = currentMedia.title || '';
  const captionEl = document.getElementById('cert-media-caption');
  if (captionEl) captionEl.textContent = currentMedia.caption || '';
  document.getElementById('cert-media-badge').textContent = currentMedia.badge || 'Dokumentasi Sertifikat';
  document.getElementById('cert-media-count').textContent = `Dokumen ${index + 1} dari ${data.media.length}`;

  // Update Thumbnails
  const thumbContainer = document.getElementById('cert-media-thumbnails');
  thumbContainer.innerHTML = '';
  if (data.media.length > 1) {
    data.media.forEach((m, i) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.onclick = () => renderCertMedia(i);
      const isActive = i === index;
      btn.className = `flex items-center gap-2 px-3 py-1.5 rounded-xl border text-xs font-bold transition-all cursor-pointer ${
        isActive 
          ? 'bg-primary text-on-primary border-primary shadow-xs' 
          : 'bg-surface-container text-on-surface-variant border-primary/10 hover:bg-surface-container-high'
      }`;
      btn.innerHTML = `<span class="material-symbols-outlined text-[16px]">${isActive ? 'image' : 'photo'}</span><span>Dokumen ${i + 1}</span>`;
      thumbContainer.appendChild(btn);
    });
  }
}

function closeCertModal() {
  const modal = document.getElementById('cert-detail-modal');
  if (modal) {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeCertModal();
  }
});
</script>
