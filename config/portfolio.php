<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data Profil Pribadi & Kontak Sosmed
    |--------------------------------------------------------------------------
    | Ubah data diri, link media sosial, dan kontak Anda di sini.
    | Data ini akan otomatis tampil di seluruh halaman website.
    */
    'profile' => [
        'name'          => 'Zulfarida',
        'badge_status'  => 'Available for QA & Systems Analyst Roles',
        'headline'      => 'Software Quality Assurance & Systems Analyst',
        'subheadline'   => 'Full-Stack Technical Foundation • Enterprise Systems QA • AI-Assisted Workflow',
        'education'     => 'Informatics Engineering (Full Stack Track, CEP-CCIT FTUI × Politeknik Negeri Jakarta)',
        'location'      => 'Depok, Jawa Barat, Indonesia',
        'email'         => 'afafaridaz91@gmail.com',
        'whatsapp'      => 'https://wa.me/6285758741217',
        'whatsapp_display' => '+62 857-5874-1217',
        'linkedin'      => 'https://linkedin.com/in/zulfa-rida-685714322',
        'github'        => 'https://github.com/zulfarida0107-crypto',
        'photo'         => '/images/profile.jpg', // Taruh foto Anda di public/images/profile.jpg
        'cv_file'       => '/files/CV_Zulfarida_QA.pdf', // Taruh file CV di public/files/CV_Zulfarida_QA.pdf
        'summary'       => 'Informatics Engineering student (Full Stack Developer track, CEP-CCIT FTUI × State Polytechnic of Jakarta) with hands-on experience in systems analysis, multi-platform software project coordination, end-to-end quality assurance, and technical documentation — demonstrated through real-world projects including CuitBox (1st Winner, CCIT Venture Studio Batch #1) and a multi-platform Coffee Shop Information System (Undergraduate Thesis).',
        'extended_summary' => 'Equipped with a full-stack technical background that enables deep understanding of system architecture, API flows, database structure, and software lifecycle — allowing me to design precise test scenarios, communicate technical issues clearly to developer teams, and identify system risks early. AI-assisted workflow practitioner with proven ability to accelerate QA documentation, test planning, and bug triage processes. Open to opportunities in Software Quality Assurance (QA) supporting digital transformation in Telco, BFSI, and Enterprise sectors.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Highlight Statistik / Metrik Utama
    |--------------------------------------------------------------------------
    */
    'metrics' => [
        ['value' => '15+', 'label' => 'Proyek IT & Pengujian', 'desc' => 'Web, Mobile, REST API, & QA'],
        ['value' => '1st', 'label' => 'Juara 1 Venture Studio', 'desc' => 'CuitBox CCIT Batch #1'],
        ['value' => '2+', 'label' => 'Tahun Leadership', 'desc' => 'Koordinasi Tim & Public Speaking'],
        ['value' => '100%', 'label' => 'End-to-End QA Focus', 'desc' => 'Skenario Uji, API, & Database'],
    ],

    /*
    |--------------------------------------------------------------------------
    | 4 Pilar Kompetensi Inti
    |--------------------------------------------------------------------------
    */
    'competencies' => [
        [
            'category' => 'Quality Assurance & Testing',
            'icon' => 'shield-check',
            'description' => 'Merancang skenario uji presisi, memetakan edge-case, dan menjamin keandalan sistem sebelum rilis.',
            'skills' => ['Test Scenario & Test Cases', 'Black-box & Boundary Value Analysis', 'API Testing (Postman)', 'Bug Triage & Root Cause Analysis', 'Regression Testing', 'Software Testing Life Cycle (STLC)']
        ],
        [
            'category' => 'Systems Analysis & Design',
            'icon' => 'cpu-chip',
            'description' => 'Menganalisis kebutuhan bisnis, alur proses data, dan arsitektur sistem berskala multi-platform.',
            'skills' => ['System Architecture Mapping', 'REST API Contract & Swagger', 'ERD & Database Integrity (MySQL/PostgreSQL)', 'Business Process Modeling (BPMN)', 'SRS / BRD Documentation', 'UI/UX Wireframing (Figma)']
        ],
        [
            'category' => 'Full-Stack Technical Foundation',
            'icon' => 'code-bracket',
            'description' => 'Pemahaman mendalam di level kode sehingga mampu berkomunikasi sejajar dan cepat dengan tim developer.',
            'skills' => ['Laravel & CodeIgniter 4 (PHP)', 'Flutter (Dart)', 'Spring Boot (Java)', 'SQL Query Optimization', 'Git & Version Control', 'Web & Mobile Lifecycle']
        ],
        [
            'category' => 'AI-Assisted Workflow & Tools',
            'icon' => 'sparkles',
            'description' => 'Memanfaatkan akselerasi AI modern untuk meningkatkan kecepatan dan ketajaman dokumentasi QA.',
            'skills' => ['AI-Assisted Test Planning', 'Automated Bug Report Drafting', 'Test Data Synthetic Generation', 'Jira / Trello Workflows', 'Prompt Engineering for QA', 'Markdown & Tech Specs']
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proyek & Studi Kasus QA (Featured & Full List)
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'cuitbox-venture-studio',
            'title' => 'CuitBox — Smart Interactive Platform',
            'badge' => '🏆 1st Winner — CCIT Venture Studio Batch #1',
            'category' => 'flagship',
            'category_label' => 'Flagship & Awarded',
            'featured' => true,
            'summary' => 'Platform inovatif pemenang Juara 1 inkubasi CCIT Venture Studio Batch #1. Berperan dalam analisis kebutuhan sistem, pemodelan proses bisnis, dokumentasi teknis, serta validasi end-to-end quality assurance.',
            'qa_focus' => 'Validasi alur bisnis, user acceptance criteria, skenario pengujian fungsionalitas inti, dan koordinasi kelayakan sistem.',
            'tech_stack' => ['System Analysis', 'QA Verification', 'Product Design', 'Technical Documentation'],
            'demo_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Ganti dengan link video demo Anda
            'github' => 'https://github.com/khanzaen/Photobox_Website',
            'github_web' => 'https://github.com/khanzaen/Photobox_Website',
            'github_desktop' => 'https://github.com/Aidan-Joe/Photobox',
            'attachment_type' => 'Penghargaan & Dokumentasi',
            'attachment_image' => '/images/certifications/cuitbox-award.jpg',
            'year' => '2025',
        ],
        [
            'id' => 'final-project-coffeeshop',
            'title' => 'Coffee Shop Multi-Platform Information System',
            'badge' => '🎓 Tugas Akhir / Skripsi',
            'category' => 'final-project',
            'category_label' => 'Tugas Akhir / Skripsi',
            'featured' => true,
            'summary' => 'Sistem informasi terintegrasi lintas platform yang terdiri dari Website Pelanggan (CI4), Aplikasi Mobile Kasir/Admin (Flutter), dan Backend REST API (Spring Boot & MySQL).',
            'qa_focus' => 'Pengujian integrasi multi-platform (Web-Mobile-API), validasi payload JSON, pengujian integritas transaksi kasir, dan penanganan edge-case koneksi jaringan.',
            'tech_stack' => ['CodeIgniter 4', 'Flutter', 'Spring Boot', 'MySQL', 'Postman API', 'Figma'],
            'demo_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Ganti dengan link video demo
            'github' => 'https://github.com/zulfarida0107-crypto/ta-ci4-web-coffeeshop',
            'repos' => [
                ['name' => 'Web (CI4)', 'url' => 'https://github.com/zulfarida0107-crypto/ta-ci4-web-coffeeshop'],
                ['name' => 'Mobile (Flutter)', 'url' => 'https://github.com/zulfarida0107-crypto/ta-flutter-aplikasi-coffeeshop'],
                ['name' => 'Server API', 'url' => 'https://github.com/zulfarida0107-crypto/ta-server-coffeeshop'],
            ],
            'attachment_type' => 'Diagram Arsitektur & Skenario Uji',
            'attachment_image' => '/images/projects/coffeeshop-arch.png',
            'year' => '2025 - 2026',
        ],
        [
            'id' => 'group-sqa-testing',
            'title' => 'Software Quality Assurance Testing — Coffee Shop Web App',
            'badge' => '🧪 Dedicated QA Project',
            'category' => 'qa-testing',
            'category_label' => 'QA & Testing',
            'featured' => true,
            'summary' => 'Proyek pengujian kualitas perangkat lunak secara komprehensif menggunakan metode Black-Box Testing, Equivalence Partitioning, dan Boundary Value Analysis.',
            'qa_focus' => 'Penyusunan Test Matrix, Test Case Execution, identifikasi defect/bug, dan pelaporan rekomendasi perbaikan kualitas sistem.',
            'tech_stack' => ['Black-Box Testing', 'Test Case Design', 'Bug Reporting', 'CodeIgniter 4'],
            'demo_video' => '',
            'github' => 'https://github.com/zulfarida0107-crypto/ci4-coffeeshop-testing-sqa',
            'attachment_type' => 'Dokumen Test Case Matrix',
            'attachment_image' => '/images/projects/test-matrix-sample.png',
            'year' => '2025',
        ],
        [
            'id' => 'group-midtrans',
            'title' => 'Payment Gateway Integration & Transaction Verification',
            'badge' => '💳 Financial Integration',
            'category' => 'group-project',
            'category_label' => 'Proyek Kelompok',
            'featured' => false,
            'summary' => 'Integrasi sistem pembayaran online Midtrans Snap & Core API pada transaksi web coffee shop, memastikan callback pembayaran tercatat secara aman dan konsisten.',
            'qa_focus' => 'Pengujian skenario pembayaran sukses, gagal, pending, dan verifikasi keamanan signature token.',
            'tech_stack' => ['Midtrans API', 'CodeIgniter 4', 'MySQL', 'Webhook Testing'],
            'demo_video' => '',
            'github' => 'https://github.com/zulfarida0107-crypto/midtrans-coffee-web',
            'year' => '2025',
        ],
        [
            'id' => 'group-aras',
            'title' => 'Decision Support System (ARAS Method)',
            'badge' => '📊 Decision Support System',
            'category' => 'group-project',
            'category_label' => 'Proyek Kelompok',
            'featured' => false,
            'summary' => 'Sistem pendukung keputusan menggunakan metode ARAS untuk evaluasi dan pemilihan keputusan bisnis coffee shop berbasis multi-kriteria.',
            'qa_focus' => 'Verifikasi akurasi matematis matriks keputusan dan pengujian batas bobot kriteria.',
            'tech_stack' => ['PHP', 'MySQL', 'ARAS Algorithm', 'Algorithm Verification'],
            'demo_video' => '',
            'github' => 'https://github.com/zulfarida0107-crypto/ci4-aras-metode',
            'year' => '2025',
        ],
        [
            'id' => 'independent-bisindo',
            'title' => 'BISINDO Indonesian Sign Language Recognition',
            'badge' => '🤖 Machine Learning & AI',
            'category' => 'independent-project',
            'category_label' => 'Independent Project',
            'featured' => false,
            'summary' => 'Aplikasi pengenalan gestur Bahasa Isyarat Indonesia (BISINDO) berbasis Python dan Computer Vision untuk mendukung aksesibilitas komunikasi.',
            'qa_focus' => 'Pengujian akurasi deteksi landmark tangan pada berbagai kondisi pencahayaan dan sudut kamera.',
            'tech_stack' => ['Python', 'OpenCV', 'Computer Vision', 'Model Evaluation'],
            'demo_video' => '',
            'github' => 'https://github.com/zulfarida0107-crypto',
            'year' => '2025 - 2026',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Rekam Jejak Pengalaman Organisasi & Kepemimpinan
    |--------------------------------------------------------------------------
    */
    'experience' => [
        [
            'organization' => 'TRUI (Tim Robotika Universitas Indonesia)',
            'role' => 'Divisi Hubungan Masyarakat & Sponsorship',
            'period' => '2024 - Sekarang',
            'highlights' => [
                'Mengkoordinasikan komunikasi eksternal dan kolaborasi sponsor untuk mendukung riset serta kompetisi robotika tingkat nasional.',
                'Menyusun proposal sponsorship dan presentasi kerja sama kemitraan profesional.',
            ],
            'activity_photos' => [
                ['title' => 'Dokumentasi Tim TRUI', 'image' => '/images/activities/trui-team.jpg'],
            ],
        ],
        [
            'organization' => 'KOMANDRO (Komunitas Android CCIT FTUI)',
            'role' => 'Divisi Public Relations & Event Organizer / Master of Ceremony (MC)',
            'period' => '2024 - Sekarang',
            'highlights' => [
                'Memimpin jalannya acara teknis, seminar teknologi, dan workshop sebagai Master of Ceremony (MC).',
                'Mengatur alur rundown teknis, koordinasi antar divisi, dan dokumentasi evaluasi kepuasan peserta.',
            ],
            'activity_photos' => [
                ['title' => 'Dokumentasi MC Seminar KOMANDRO', 'image' => '/images/activities/mc-komandro.jpg'],
            ],
        ],
        [
            'organization' => 'CSFEST & Kepanitiaan Kampus',
            'role' => 'Divisi Acara & Koordinator Lapangan',
            'period' => '2024 - 2025',
            'highlights' => [
                'Manajemen jadwal, mitigasi kendala operasional live event, dan komunikasi lintas fungsi.',
            ],
            'activity_photos' => [],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Sertifikasi & Prestasi
    |--------------------------------------------------------------------------
    */
    'certifications' => [
        [
            'title' => 'Juara 1 CCIT Venture Studio Batch #1 (CuitBox)',
            'issuer' => 'CEP-CCIT Fakultas Teknik Universitas Indonesia',
            'year' => '2025',
            'type' => 'Achievement / Award',
            'credential_url' => '/images/certifications/cuitbox-cert.jpg',
            'badge_color' => 'amber',
        ],
        [
            'title' => 'Cisco Certified Network Associate (CCNA) Modules',
            'issuer' => 'Cisco Networking Academy',
            'year' => '2024 - 2025',
            'type' => 'Technical Networking Certification',
            'credential_url' => '/images/certifications/ccna-cert.jpg',
            'badge_color' => 'blue',
        ],
        [
            'title' => 'Copywriting & Content Strategy with Generative AI',
            'issuer' => 'Professional AI Certification',
            'year' => '2024',
            'type' => 'AI & Communication',
            'credential_url' => '/images/certifications/ai-cert.jpg',
            'badge_color' => 'cyan',
        ],
        [
            'title' => 'Social Media Management & Digital Analytics',
            'issuer' => 'Digital Skill Certification',
            'year' => '2024',
            'type' => 'Digital Media',
            'credential_url' => '/images/certifications/smm-cert.jpg',
            'badge_color' => 'indigo',
        ],
    ],
];
