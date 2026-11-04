# Blueprint (Site Architecture & Tech Stack)
## Portfolio Website — Zulfarida

## 1. Sitemap
```
/ (Home)
├── /about
├── /projects
│   ├── /projects/final-project        → Coffee Shop Integrated Information System
│   ├── /projects/group-projects       → 5 proyek kelompok
│   ├── /projects/independent-projects → BISINDO, Soroban Task Tracker
│   └── /projects/coursework           → 10 proyek tugas kuliah
├── /skills
├── /experience                        → Organisasi & kepemimpinan (timeline)
├── /certifications
└── /contact
```
Untuk MVP (versi awal), bisa disederhanakan jadi **1 halaman (single-page scroll)** dengan section: Hero → About → Projects → Skills → Experience → Certifications → Contact. Ini lebih cepat dibangun dan tetap mencakup semua konten wajib di PRD.

## 2. Tech Stack Recommendation

| Layer | Pilihan | Alasan |
|---|---|---|
| Frontend | React + Vite, atau Next.js | Kamu sudah familiar full-stack; Next.js lebih baik untuk SEO (server-side rendering) |
| Styling | Tailwind CSS | Cepat, konsisten, mudah maintain |
| Hosting | Vercel / Netlify / GitHub Pages | Gratis, auto-deploy dari GitHub |
| Data Proyek | JSON/Markdown lokal (bukan database eksternal dulu) | Simpel untuk MVP, tidak perlu backend terpisah |
| Form Kontak | Formspree / EmailJS (gratis) | Tidak perlu bikin backend sendiri untuk kirim email |
| Domain | Subdomain gratis (vercel.app/netlify.app) atau domain murah (.my.id, .com) | Opsional, upgrade belakangan |

> Karena kamu juga menguasai Spring Boot & CodeIgniter (backend), bisa juga jadi nilai plus kalau nanti mau bikin versi dengan backend sendiri (misalnya untuk CMS proyek) — tapi untuk versi awal, static site sudah cukup dan lebih cepat rilis.

## 3. Design System (ringkas)
- **Tone visual:** clean, modern, profesional — hindari terlalu ramai
- **Warna:** 1 warna utama (brand color) + 1 aksen + neutral (putih/abu/hitam)
- **Tipografi:** 1 font untuk heading, 1 font untuk body (contoh: Inter, Poppins, atau Sora)
- **Komponen reusable:**
  - Project Card (judul, tag kategori, tech stack badges, tombol "Lihat Kode" & "Live Demo")
  - Timeline item (untuk pengalaman organisasi)
  - Skill badge/chip
  - Certification card

## 4. Page-Level Wireframe Blueprint

### Hero (Home)
```
[Nama + Headline]
[Ringkasan 2-3 kalimat]
[Tombol: Lihat Proyek] [Tombol: Download CV] [Tombol: Hubungi Saya]
[Social icons: GitHub, LinkedIn, Email]
```

### Projects Section
```
[Filter Tabs: All | Final Project | Group | Independent | Coursework]
[Grid of Project Cards]
  - Card: Title, short desc, tech badges, role, [GitHub] [Demo]
```

### Experience Section (Timeline)
```
2024 ──● PSDM Member – TRUI
2024 ──● MC – TRUI x MAUNC Benchmarking
2024 ──● Logistics & Medical – CSFEST
2024 ──● Greeter – D'Futuro Summit
2024–25──● PR Officer – KOMANDRO
2025 ──● Mentor – MABIM
2026 ──● PR Committee – KOMANDRO Reunion
```

## 5. Deployment Flow
1. Push kode ke GitHub repo (misal: `portfolio-website`)
2. Connect repo ke Vercel/Netlify
3. Auto-deploy tiap kali push ke branch `main`
4. Tambahkan custom domain (opsional, fase 2)

## 6. Folder Structure (contoh React/Next.js)
```
portfolio-website/
├── src/
│   ├── components/
│   │   ├── ProjectCard.jsx
│   │   ├── Timeline.jsx
│   │   ├── SkillBadge.jsx
│   │   └── Navbar.jsx
│   ├── data/
│   │   ├── projects.json
│   │   ├── experience.json
│   │   └── certifications.json
│   ├── pages/ (atau sections/ untuk single-page)
│   └── assets/ (screenshot proyek, foto)
├── public/
│   └── cv.pdf
└── README.md
```
