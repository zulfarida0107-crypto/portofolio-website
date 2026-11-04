<?php

namespace Database\Seeders;

use App\Models\Certification;
use App\Models\Competency;
use App\Models\Experience;
use App\Models\Metric;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectGallery;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Jalankan seeder: Mengisi seluruh data awal portofolio dalam Bahasa Indonesia.
     */
    public function run(): void
    {
        // 1. Data Profil Utama
        Profile::updateOrCreate(
            ['email' => 'afafaridaz91@gmail.com'],
            [
                'name' => 'Zulfarida',
                'badge_status' => 'Tersedia untuk Posisi QA & Systems Analyst',
                'headline' => 'Full Stack Developer ✦ Co-Founder of CuitBox',
                'subheadline' => 'Software Quality Assurance (QA) & Systems Analyst',
                'tagline' => '"From database to dashboard, from idea to launch."',
                'education' => 'Teknik Informatika (Jalur Full Stack Developer, CEP-CCIT FTUI × Politeknik Negeri Jakarta)',
                'location' => 'Depok & Jakarta, Indonesia',
                'whatsapp_number' => '+62 857-5874-1217',
                'whatsapp_url' => 'https://wa.me/6285758741217',
                'linkedin_url' => 'https://linkedin.com/in/zulfa-rida-685714322',
                'github_url' => 'https://github.com/zulfarida0107-crypto',
                'photo_path' => '/images/profile.jpg',
                'cv_path' => '/files/CV_Zulfarida_QA.pdf',
                'bio_summary' => 'Mahasiswa Teknik Informatika (jalur Full Stack Developer) di Politeknik Negeri Jakarta berkolaborasi dengan CEP-CCIT FTUI, Universitas Indonesia. Berpengalaman nyata dalam analisis sistem, koordinasi proyek multi-platform, penjaminan kualitas end-to-end (QA), dan penyusunan dokumentasi teknis.',
                'extended_summary' => 'Co-Founder CuitBox (platform photo booth mandiri pemenang Juara 1 CCIT Venture Studio Batch #1) dan pengembang Sistem Informasi Coffee Shop Lintas Platform (Tugas Akhir). Memiliki pemahaman arsitektur sistem, aliran REST API, struktur database, dan lifecycle software sehingga mampu merancang skenario uji presisi, mendeteksi risiko lebih awal, dan berkomunikasi efektif dengan tim pengembang.',
            ]
        );

        // 2. Metrik Traksi & Kinerja
        $metrics = [
            [
                'value' => 'Juara 1',
                'label' => 'CCIT Venture Studio Batch #1',
                'subtext' => 'Proyek CuitBox (Manggala)',
                'badge_tag' => 'VS #1',
                'icon' => 'emoji_events',
                'order_index' => 1,
            ],
            [
                'value' => '15',
                'label' => 'Repositori Publik GitHub',
                'subtext' => 'Proyek Web, Mobile & Kiosk',
                'badge_tag' => 'Open Source',
                'icon' => 'terminal',
                'order_index' => 2,
            ],
            [
                'value' => '200+',
                'label' => 'Kontribusi GitHub (Tahunan)',
                'subtext' => 'Aktivitas Commit Konsisten',
                'badge_tag' => 'Annual',
                'icon' => 'commit',
                'order_index' => 3,
            ],
            [
                'value' => '3 Platform',
                'label' => 'Satu Ekosistem Terpadu',
                'subtext' => 'Web, Mobile Flutter, & REST API',
                'badge_tag' => 'Multi-Tier',
                'icon' => 'devices',
                'order_index' => 4,
            ],
        ];
        foreach ($metrics as $metric) {
            Metric::updateOrCreate(['label' => $metric['label']], $metric);
        }

        // 3. Pilar Kompetensi Teknis
        $competencies = [
            [
                'category' => 'Quality Assurance (QA) & Testing',
                'description' => 'Merancang skenario uji fungsional dan non-fungsional, validasi boundary values, serta eksekusi STLC yang komprehensif.',
                'icon' => 'shield-check',
                'skills' => ['Desain Skenario & Test Case', 'Black-Box & Boundary Value Analysis', 'API Testing (Postman)', 'Bug Triage & Root Cause Analysis', 'Regression Testing', 'Software Testing Life Cycle (STLC)'],
                'order_index' => 1,
            ],
            [
                'category' => 'Systems Analysis & Design',
                'description' => 'Menganalisis kebutuhan bisnis, perancangan arsitektur sistem, pemodelan data relasional, dan penyusunan spesifikasi teknis.',
                'icon' => 'cpu-chip',
                'skills' => ['Pemodelan Arsitektur Sistem', 'REST API Contract & Swagger', 'ERD & Desain Skema Database (MySQL)', 'Dokumentasi SRS & BRD', 'UI/UX Wireframing (Figma)', 'User Acceptance Testing (UAT) Matrix'],
                'order_index' => 2,
            ],
            [
                'category' => 'Full-Stack Development',
                'description' => 'Pengembangan aplikasi multi-platform mulai dari backend microservices, web dashboard, hingga aplikasi mobile kasir.',
                'icon' => 'code-bracket',
                'skills' => ['Spring Boot (Java)', 'CodeIgniter 4 & Laravel (PHP)', 'Flutter (Dart)', 'Integrasi Hardware Kamera (Python)', 'HTML5 Canvas API', 'Git & Version Control'],
                'order_index' => 3,
            ],
            [
                'category' => 'Koordinasi Proyek & Alur Kerja AI',
                'description' => 'Kepemimpinan tim lintas fungsi, komunikasi publik, serta akselerasi dokumentasi dan skenario uji menggunakan AI.',
                'icon' => 'sparkles',
                'skills' => ['Penyusunan Rencana Uji Berbantuan AI', 'Manajemen Alur Kerja Jira & Trello', 'Public Speaking & MC Acara Teknis', 'Manajemen Krisis Insiden Produksi', 'Dokumentasi Spesifikasi Markdown'],
                'order_index' => 4,
            ],
        ];
        foreach ($competencies as $comp) {
            Competency::updateOrCreate(['category' => $comp['category']], $comp);
        }

        // 4. Proyek & Studi Kasus
        $cuitbox = Project::updateOrCreate(
            ['slug' => 'cuitbox'],
            [
                'title' => 'CuitBox (Platform Photo Booth Mandiri)',
                'badge' => '🏆 Juara 1 CCIT Venture Studio Batch #1',
                'category' => 'flagship',
                'category_label' => 'Proyek Unggulan & Inkubasi',
                'role_title' => 'Co-Founder, Full-Stack Developer & Desainer UI/UX',
                'summary' => 'Sistem photo booth mandiri terintegrasi di mana pelanggan melakukan reservasi slot online dan mengambil foto di kiosk layar sentuh, sementara pemilik mengelola operasional dari satu dashboard.',
                'qa_focus' => 'Validasi alur pembayaran QRIS Midtrans bebas race condition, mitigasi hardware buffer throttling pada live preview DSLR, dan pengujian penerimaan pengguna (UAT) dengan 23 responden valid.',
                'tech_stack' => ['React.js', 'Vite', 'Electron', 'HTML5 Canvas', 'CodeIgniter 4', 'REST API', 'Python (Driver Kamera)', 'digicamControl', 'Midtrans QRIS', 'MySQL', 'Figma'],
                'demo_video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'github_web_url' => 'https://github.com/zulfarida0107-crypto',
                'github_desktop_url' => 'https://github.com/zulfarida0107-crypto',
                'attachment_type' => 'Laporan Teknis & Matriks UAT',
                'attachment_image' => '/images/certifications/cuitbox-award.jpg',
                'year' => '2025 - 2026',
                'is_featured' => true,
                'order_index' => 1,
            ]
        );

        // Galeri CuitBox
        $galleries = [
            [
                'tab_title' => 'UI Kiosk Desktop & Pipeline Kamera',
                'tag_badge' => 'Buffer Hardware Latensi Rendah',
                'challengeSolved' => 'Pemisahan thread live-view ke proses terisolasi Python OpenCV dengan ring-buffer frame dropping untuk mencegah pembekuan UI.',
                'image_path' => '/images/projects/cuitbox-kiosk.png',
                'order_index' => 1,
            ],
            [
                'tab_title' => 'Dashboard Manajemen Admin & Pendapatan',
                'tag_badge' => 'Telemetri Real-Time & Laporan Otomatis',
                'challengeSolved' => 'Sintesis laporan keuangan otomatis (Excel, CSV, PDF Ledger) dan pemantauan stok kertas & ribbon tinta secara langsung.',
                'image_path' => '/images/projects/cuitbox-admin.png',
                'order_index' => 2,
            ],
            [
                'tab_title' => 'Booking Online & Alur Pembayaran QRIS',
                'tag_badge' => 'Webhook Midtrans & Auto Sync Cloud',
                'challengeSolved' => 'Penguncian transaksi atomik untuk mencegah reservasi ganda dan pengunggahan otomatis hasil foto ke Google Drive.',
                'image_path' => '/images/projects/cuitbox-booking.png',
                'order_index' => 3,
            ],
            [
                'tab_title' => 'Template Cetak & Frame Kustom 4-Cut',
                'tag_badge' => 'Kompositor Canvas & Profil DNP CMYK',
                'challengeSolved' => 'Penggabungan layer stiker, watermark, dan konversi profil warna CMYK 300 DPI untuk pencetakan thermal dye.',
                'image_path' => '/images/projects/cuitbox-frames.png',
                'order_index' => 4,
            ],
        ];
        foreach ($galleries as $gal) {
            ProjectGallery::updateOrCreate(
                ['project_id' => $cuitbox->id, 'tab_title' => $gal['tab_title']],
                $gal
            );
        }

        // Proyek 2: Coffee Shop System
        Project::updateOrCreate(
            ['slug' => 'coffeeshop-system'],
            [
                'title' => 'Sistem Informasi Terintegrasi Coffee Shop (Tugas Akhir)',
                'badge' => '🎓 Tugas Akhir / Skripsi',
                'category' => 'capstone',
                'category_label' => 'Tugas Akhir / Skripsi',
                'role_title' => 'Full-Stack Developer, Desainer Sistem & QA',
                'summary' => 'Ekosistem lengkap yang menghubungkan pemesanan web pelanggan (CI4), antrean barista aplikasi mobile (Flutter), dan server backend REST API (Spring Boot & MySQL) secara real-time.',
                'qa_focus' => 'Pengujian integrasi multi-platform (Web-Mobile-API), verifikasi integritas data transaksi kasir, dan penyusunan matriks pengujian Black-Box komprehensif.',
                'tech_stack' => ['CodeIgniter 4', 'Flutter (Dart)', 'Spring Boot (Java)', 'MySQL Relasional', 'Postman API', 'Figma'],
                'demo_video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'github_web_url' => 'https://github.com/zulfarida0107-crypto/ta-ci4-web-coffeeshop',
                'github_desktop_url' => 'https://github.com/zulfarida0107-crypto/ta-flutter-aplikasi-coffeeshop',
                'attachment_type' => 'Diagram Arsitektur & Skenario Uji',
                'attachment_image' => '/images/projects/coffeeshop-arch.png',
                'year' => '2025 - 2026',
                'is_featured' => true,
                'order_index' => 2,
            ]
        );

        // Proyek 3: BISINDO Computer Vision
        Project::updateOrCreate(
            ['slug' => 'bisindo-cv'],
            [
                'title' => 'Pengenalan Gestur BISINDO & Eksplorasi AI',
                'badge' => '🤖 Riset Aktif Computer Vision',
                'category' => 'research',
                'category_label' => 'Riset Independen',
                'role_title' => 'Pengembang & Peneliti AI',
                'summary' => 'Sistem computer vision berbasis Python yang mengenali Bahasa Isyarat Indonesia (BISINDO) untuk meningkatkan aksesibilitas komunikasi digital.',
                'qa_focus' => 'Pengujian akurasi deteksi 21 koordinat 3D hand landmark pada berbagai variasi pencahayaan dan benchmarking latensi pada webcam perangkat edge.',
                'tech_stack' => ['Python 3.x', 'OpenCV', 'Google MediaPipe', 'NumPy', 'TensorFlow / Keras'],
                'demo_video_url' => '',
                'github_web_url' => 'https://github.com/zulfarida0107-crypto',
                'attachment_type' => 'Spesifikasi Model & Benchmark',
                'attachment_image' => '',
                'year' => '2025 - Sekarang',
                'is_featured' => true,
                'order_index' => 3,
            ]
        );

        // 5. Pengalaman Organisasi & Kepemimpinan
        $experiences = [
            [
                'organization' => 'Tim Robotika Universitas Indonesia (TRUI)',
                'role' => 'Staf Pengembangan SDM (PSDM) & Master of Ceremony (MC) Benchmarking',
                'period' => '2024 - 2025',
                'description' => 'Mengelola strategi pengembangan sumber daya manusia internal dan memimpin jalannya acara benchmarking nasional.',
                'highlights' => [
                    'Mengelola strategi pengembangan kapasitas anggota tim riset robotika nasional.',
                    'Bertugas sebagai Master of Ceremony (MC) pada acara Benchmarking resmi TRUI bersama Universitas Siliwangi (UNSIL).',
                ],
                'activity_photos' => [
                    ['title' => 'Dokumentasi Tim TRUI', 'image' => '/images/activities/trui-team.jpg'],
                ],
                'order_index' => 1,
            ],
            [
                'organization' => 'Komunitas Android CCIT FTUI (KOMANDRO)',
                'role' => 'Public Relations Officer & Event Coordinator',
                'period' => '2024 - 2026',
                'description' => 'Memimpin saluran komunikasi eksternal dan mengkoordinasikan kegiatan komunitas pengembang.',
                'highlights' => [
                    'Memimpin saluran komunikasi eksternal dan bertugas sebagai MC Pemilihan Ketua KOMANDRO.',
                    'Mengetuai kepanitiaan PR yang mengkoordinasikan panel temu alumni dan workshop teknis pengembang.',
                ],
                'activity_photos' => [
                    ['title' => 'Dokumentasi MC Seminar KOMANDRO', 'image' => '/images/activities/mc-komandro.jpg'],
                ],
                'order_index' => 2,
            ],
            [
                'organization' => 'MABIM Orientasi Mahasiswa Baru & CIFEST',
                'role' => 'Mentor Mahasiswa Baru & Koordinator Divisi Acara CIFEST',
                'period' => '2025',
                'description' => 'Membimbing mahasiswa baru dan menyusun manajemen alur festival teknologi.',
                'highlights' => [
                    'Membimbing mahasiswa baru dalam beradaptasi dengan kurikulum coding akademik.',
                    'Ditunjuk sebagai Koordinator Divisi Acara CIFEST, memimpin alur operasional rundown dan blueprint agenda.',
                ],
                'activity_photos' => [],
                'order_index' => 3,
            ],
            [
                'organization' => 'Kepanitiaan Summit & Festival Skala Besar',
                'role' => 'Volunteer D\'Futuro Futurist Summit & Tim Logistik/Medis CSFEST',
                'period' => '2024',
                'description' => 'Kontribusi aktif dalam penyelenggaraan event teknologi skala nasional.',
                'highlights' => [
                    'Penyambut tamu dan volunteer di D\'Futuro Futurist Summit 2024 menyambut para inovator nasional.',
                    'Petugas tim logistik dan medis untuk CSFEST 2024 yang dihadiri ratusan peserta.',
                ],
                'activity_photos' => [],
                'order_index' => 4,
            ],
        ];
        foreach ($experiences as $exp) {
            Experience::updateOrCreate(['organization' => $exp['organization']], $exp);
        }

        // 6. Sertifikasi & Penghargaan
        $certifications = [
            [
                'title' => 'CCNA: Introduction to Networks',
                'issuer' => 'Cisco Networking Academy',
                'year' => '2025',
                'type' => 'Sertifikasi Jaringan Komputer',
                'badge_color' => 'blue',
                'icon_name' => 'router',
                'credential_url' => '/images/certifications/ccna-cert.jpg',
                'order_index' => 1,
            ],
            [
                'title' => 'Copywriting AI for Digital Ads',
                'issuer' => 'Komdigi Digital Talent Scholarship (DTS)',
                'year' => '2025',
                'type' => 'Sertifikasi AI & Komunikasi',
                'badge_color' => 'cyan',
                'icon_name' => 'psychology',
                'credential_url' => '/images/certifications/ai-cert.jpg',
                'order_index' => 2,
            ],
            [
                'title' => 'Social Media Management & Digital Analytics',
                'issuer' => 'Komdigi Digital Talent Scholarship (DTS)',
                'year' => '2025',
                'type' => 'Sertifikasi Media Digital',
                'badge_color' => 'indigo',
                'icon_name' => 'campaign',
                'credential_url' => '/images/certifications/smm-cert.jpg',
                'order_index' => 3,
            ],
            [
                'title' => 'Diploma Teknik Informatika (Full Stack Track)',
                'issuer' => 'Politeknik Negeri Jakarta × CEP-CCIT FTUI',
                'year' => '2024 - Sekarang',
                'type' => 'Pendidikan Formal Akademik',
                'badge_color' => 'emerald',
                'icon_name' => 'school',
                'credential_url' => '',
                'order_index' => 4,
            ],
        ];
        foreach ($certifications as $cert) {
            Certification::updateOrCreate(['title' => $cert['title']], $cert);
        }
    }
}
