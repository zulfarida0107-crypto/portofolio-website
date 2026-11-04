# Product Requirements Document (PRD)
## Portfolio Website — Zulfarida

## 1. Overview
**Product Name:** Zulfarida Portfolio Website
**Owner:** Zulfarida
**Purpose:** Website portofolio yang menjadi *single hub* untuk menampilkan seluruh proyek IT, pengalaman organisasi, sertifikasi, dan kontak — digunakan untuk mendukung proses melamar kerja di posisi teknis (Full Stack Developer) maupun non-teknis (IT Project Coordination, Business/Systems Analysis).

## 2. Goals
- Menjadi bukti kerja yang lebih kaya konteks dibanding CV/GitHub saja (ada narasi, visual, dan proses berpikir).
- Menunjukkan kemampuan full-stack development sekaligus soft skill organisasi/leadership.
- Fleksibel — bisa dilirik recruiter teknis (developer) maupun non-teknis (project/product/BA role), karena posisi yang dilamar masih fleksibel.
- Menampilkan **seluruh proyek GitHub** (bukan cuma pilihan), supaya recruiter melihat portofolio secara lengkap dan konsisten.

## 3. Target Audience
| Persona | Kebutuhan |
|---|---|
| HR/Recruiter non-teknis | Scan cepat: siapa kamu, skill utama, achievement, kontak |
| Tech Lead/Engineering Manager | Detail teknis: tech stack, arsitektur, kontribusi spesifik per proyek, link ke kode |
| Project/Product stakeholder | Bukti kemampuan koordinasi, dokumentasi, dan manajemen proyek |

## 4. Scope (Fitur yang Ditampilkan)

### 4.1 Halaman Wajib
1. **Home / Landing**
   - Nama, headline (Informatics Engineering Student | Full Stack Developer Track | IT Project Coordination & Organization Management)
   - Ringkasan singkat (professional summary versi 2-3 kalimat)
   - CTA: Lihat Proyek, Download CV, Hubungi Saya
2. **About**
   - Professional summary lengkap
   - Foto profil (opsional)
   - Highlight: 15+ proyek, 2+ tahun pengalaman organisasi, 21 repo publik/230+ kontribusi GitHub
3. **Projects / Portfolio** *(paling penting — tampilkan SEMUA proyek)*
   - Dikelompokkan per kategori (lihat struktur data di 4.2)
   - Tiap proyek: judul, deskripsi singkat, tech stack, peran/kontribusi, link GitHub, (screenshot jika ada)
   - Filter/tag berdasarkan kategori: Final Project, Group Project, Independent Project, Coursework
4. **Skills**
   - Technical Skills (Programming, Frameworks, Database, Security, Tools, Business Analysis, Networking, Digital Marketing)
   - Professional/Soft Skills
5. **Experience & Organization**
   - Timeline pengalaman organisasi (TRUI, KOMANDRO, CSFEST, D'Futuro, MABIM, PMR, dst)
   - Highlight peran kepemimpinan & MC/public speaking
6. **Certifications**
   - CCNA, Copywriting AI, Social Media Management, Mandarin, English
7. **Contact**
   - Email, WhatsApp/phone, LinkedIn, GitHub
   - Form kontak (opsional, atau cukup mailto/link)
8. **CV Download**
   - Tombol download CV (PDF) yang selalu update

### 4.2 Konten Proyek yang Wajib Ditampilkan (Lengkap, Semua Repo)
**Final Project (Undergraduate Thesis) — Coffee Shop Integrated Information System (2025–2026)**
- Deskripsi: sistem informasi multi-platform (website customer, mobile admin, REST API)
- Peran: requirements analysis, database & system architecture design, UI/UX Figma, black-box testing
- Sub-repo: `ta-ci4-web-coffeeshop`, `ta-flutter-aplikasi-coffeeshop`, `ta-server-coffeeshop`
- Tech: CodeIgniter 4, Flutter, Spring Boot, MySQL, Figma

**Group Academic Projects**
- Coffee Shop Decision Support System (ARAS method) — `ci4-aras-metode`
- Coffee Shop Admin Dashboard (CodeIgniter 4) — `CI4-coffeeshop-admin-dashboard`
- Coffee Shop Payment Integration (Midtrans) — `midtrans-coffee-web`
- SQA Testing — Black-box testing — `ci4-coffeeshop-testing-sqa`
- Mini Photoshop (in progress) — `Mini-Photoshop`

**Independent Projects**
- BISINDO Gesture Recognition (Python, in progress)
- Soroban Task Tracker (personal task management app)

**Other Academic Coursework**
- IT Implementation — PlayStation Rental Business (IS Analysis)
- Business Architecture Analysis of Apple Inc.
- Linux CentOS Server Config & Windows 11 Memory Management
- MIS Integration — Manufacturing Case Studies (2 proyek)
- Java Movie Theatre Booking App (OOP)
- Travel Destination Website
- Cinema Database Design
- Digital Signature & X.509/SSL-TLS Analysis
- Todo List App (HCI Redesign)

> Catatan: proyek yang belum ada README lengkap di GitHub perlu dibenahi dulu sebelum website live (lihat README template yang sudah dibahas sebelumnya), supaya link "Lihat Kode" tidak mengarah ke repo kosong.

## 5. Non-Goals (di luar scope versi awal)
- Blog/artikel teknis (bisa ditambahkan fase berikutnya)
- E-commerce/payment
- Multi-language (ID/EN) — opsional fase 2, prioritaskan bilingual EN untuk ATS-friendly, tapi bisa 1 bahasa dulu

## 6. Success Metrics
- Semua 15+ proyek tampil dengan deskripsi & link yang valid
- Loading time < 3 detik
- Mobile-friendly (recruiter sering buka dari HP)
- CV & LinkedIn konsisten dengan info di website

## 7. Keyword/SEO Consideration (ATS-friendly, fleksibel)
Karena posisi yang dilamar masih fleksibel, gunakan keyword campuran teknis + non-teknis di seluruh halaman:
`Full Stack Developer`, `Software Engineer`, `IT Project Coordinator`, `Business/Systems Analyst`, `Java`, `Spring Boot`, `Flutter`, `MySQL`, `Database Design`, `REST API`, `UI/UX`, `Project Coordination`, `Stakeholder Communication`, `Technical Documentation`.

## 8. Constraints
- Budget rendah/gratis → hosting: GitHub Pages / Vercel / Netlify (gratis)
- Timeline: bertahap (bisa MVP dulu: Home + Projects + Contact, lalu lengkapi halaman lain)
- Konten sertifikat & foto proyek perlu dikumpulkan lebih dulu (screenshot dari repo/TA)
