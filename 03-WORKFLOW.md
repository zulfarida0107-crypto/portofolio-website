# Workflow
## Portfolio Website — Zulfarida

## 1. User Flow (Pengunjung Website)

```
[Recruiter/HR buka link portfolio]
        │
        ▼
[Landing/Hero] → lihat nama, headline, ringkasan
        │
        ├──► Klik "Download CV" → dapat file PDF langsung
        │
        ├──► Klik "Lihat Proyek" ──► [Projects Section]
        │                               │
        │                               ├─ Filter by kategori (Final Project/Group/Independent/Coursework)
        │                               ├─ Klik card proyek → lihat detail (tech stack, peran, screenshot)
        │                               └─ Klik "Lihat Kode" → redirect ke GitHub repo
        │
        ├──► Scroll ke "Skills" → lihat technical & professional skills
        │
        ├──► Scroll ke "Experience" → lihat timeline organisasi/leadership
        │
        ├──► Scroll ke "Certifications" → lihat sertifikat yang dimiliki
        │
        └──► Klik "Hubungi Saya" ──► [Contact]
                                        ├─ Isi form kontak, atau
                                        └─ Klik langsung email/LinkedIn/WhatsApp
```

## 2. Development Workflow (Proses Pembuatan Website)

### Tahap 1 — Persiapan Konten (sebelum coding)
1. Rapikan README di semua repo GitHub utama (pakai template README yang sudah dibahas)
2. Kumpulkan screenshot/demo tiap proyek (min. 1 gambar per proyek utama)
3. Susun data proyek dalam format terstruktur (lihat `03-DATABASE.md`)
4. Siapkan foto profil (opsional) dan file CV PDF versi terbaru

### Tahap 2 — Setup & Struktur
1. Init project (Next.js/React + Tailwind)
2. Buat struktur folder sesuai blueprint
3. Buat file data (`projects.json`, `experience.json`, `certifications.json`)

### Tahap 3 — Build Komponen
1. Navbar & Hero section
2. Project Card component + filter logic
3. Timeline component (experience)
4. Skill badges & Certification cards
5. Contact section + form

### Tahap 4 — Integrasi Konten
1. Masukkan semua data dari CV ke masing-masing komponen
2. Hubungkan tombol "Lihat Kode" ke link GitHub repo yang sesuai
3. Hubungkan tombol "Download CV" ke file PDF

### Tahap 5 — Testing
1. Cek responsiveness (mobile, tablet, desktop)
2. Cek semua link (GitHub, LinkedIn, email) berfungsi
3. Cek loading speed
4. Minta feedback dari 2-3 orang (teman/mentor) sebelum publish

### Tahap 6 — Deploy & Maintenance
1. Deploy ke Vercel/Netlify
2. Tambahkan link portfolio ke CV & LinkedIn
3. Update berkala setiap ada proyek baru atau sertifikat baru

## 3. Content Update Workflow (setelah live)
```
Proyek baru selesai
   │
   ▼
Update README repo GitHub-nya
   │
   ▼
Tambahkan entry baru di projects.json
   │
   ▼
Push ke GitHub → auto-deploy ke website
   │
   ▼
Update juga di CV & LinkedIn (opsional, biar konsisten)
```

## 4. Prioritas Pengerjaan (kalau waktu terbatas)
1. **MVP dulu:** Hero + Projects (semua proyek, minimal versi ringkas) + Contact + Download CV
2. **Fase 2:** Timeline Experience + Skills + Certifications lengkap
3. **Fase 3:** Polish design, animasi, custom domain, tambahan blog/case study
