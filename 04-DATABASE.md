# Database / Data Structure
## Portfolio Website — Zulfarida

Karena versi awal website bersifat static (belum pakai backend/database sungguhan), "database" di sini berupa file data terstruktur (JSON) yang jadi sumber konten untuk komponen React/Next.js. Kalau nanti mau upgrade ke versi dinamis (CMS/backend sendiri), struktur ini bisa langsung dipetakan jadi tabel database sungguhan.

## 1. Entity Relationship (Konsep)
```
Profile (1) ──< Projects (many)
Profile (1) ──< Experience (many)
Profile (1) ──< Certifications (many)
Project (1) ──< Repositories (many)   // 1 proyek bisa punya beberapa repo, contoh: Final Project
```

## 2. Schema: `profile.json`
```json
{
  "name": "Zulfarida",
  "headline": "Informatics Engineering Student | Full Stack Developer Track | IT Project Coordination & Organization Management",
  "location": "Depok, West Java, Indonesia",
  "phone": "+62 857-5874-1217",
  "email": "afafaridaz91@gmail.com",
  "linkedin": "linkedin.com/in/zulfa-rida-685714322",
  "github": "github.com/zulfarida0107-crypto",
  "summary": "Informatics Engineering student (Full Stack Developer track, Politeknik Negeri Jakarta in collaboration with CEP-CCIT FTUI, Universitas Indonesia) with hands-on experience delivering 15+ academic and independent software projects across web development, mobile applications, database design, systems security, and DevOps practices. Proven cross-functional collaborator with 2+ years of organizational leadership experience.",
  "cv_file": "/cv.pdf"
}
```

## 3. Schema: `projects.json`
Field per proyek:
- `id` (string, unique)
- `title` (string)
- `category` (enum: "final-project" | "group-project" | "independent-project" | "coursework")
- `description` (string)
- `role` (string) — kontribusi spesifik
- `tech_stack` (array of string)
- `repos` (array of objects: `{ name, url }`)
- `year` (string)
- `status` (enum: "completed" | "in-progress")
- `image` (string, path screenshot, opsional)

### Data lengkap (siap isi):

```json
[
  {
    "id": "final-project-coffeeshop",
    "title": "Coffee Shop Integrated Information System (Undergraduate Thesis)",
    "category": "final-project",
    "description": "Multi-platform information system for coffee shop operations, comprising a customer website, an admin mobile application, and a REST API backend.",
    "role": "Requirements analysis, MySQL database & system architecture design, UI/UX wireframes (Figma), full-stack development, black-box testing.",
    "tech_stack": ["CodeIgniter 4", "Flutter", "Spring Boot", "MySQL", "Figma"],
    "repos": [
      { "name": "ta-ci4-web-coffeeshop", "url": "https://github.com/zulfarida0107-crypto/ta-ci4-web-coffeeshop" },
      { "name": "ta-flutter-aplikasi-coffeeshop", "url": "https://github.com/zulfarida0107-crypto/ta-flutter-aplikasi-coffeeshop" },
      { "name": "ta-server-coffeeshop", "url": "https://github.com/zulfarida0107-crypto/ta-server-coffeeshop" }
    ],
    "year": "2025-2026",
    "status": "in-progress",
    "image": ""
  },
  {
    "id": "group-aras",
    "title": "Coffee Shop Decision Support System (ARAS Method)",
    "category": "group-project",
    "description": "Decision support system implementing the ARAS decision-making method for coffee shop business decisions.",
    "role": "Group academic project.",
    "tech_stack": ["PHP", "MySQL"],
    "repos": [{ "name": "ci4-aras-metode", "url": "https://github.com/zulfarida0107-crypto/ci4-aras-metode" }],
    "year": "2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "group-admin-dashboard",
    "title": "Coffee Shop Admin Dashboard",
    "category": "group-project",
    "description": "Admin dashboard built with CodeIgniter 4 for managing coffee shop operations.",
    "role": "Group academic project.",
    "tech_stack": ["CodeIgniter 4", "MySQL"],
    "repos": [{ "name": "CI4-coffeeshop-admin-dashboard", "url": "https://github.com/zulfarida0107-crypto/CI4-coffeeshop-admin-dashboard" }],
    "year": "2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "group-midtrans",
    "title": "Coffee Shop Payment Integration (Midtrans)",
    "category": "group-project",
    "description": "Web application integrated with the Midtrans payment gateway for online transactions.",
    "role": "Group academic project.",
    "tech_stack": ["CodeIgniter 4", "Midtrans API"],
    "repos": [{ "name": "midtrans-coffee-web", "url": "https://github.com/zulfarida0107-crypto/midtrans-coffee-web" }],
    "year": "2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "group-sqa-testing",
    "title": "Software Quality Assurance Testing — Coffee Shop Web App",
    "category": "group-project",
    "description": "Black-box testing conducted on the coffee shop web application to validate functionality and quality.",
    "role": "Group academic project — testing & QA.",
    "tech_stack": ["Black-Box Testing", "CodeIgniter 4"],
    "repos": [{ "name": "ci4-coffeeshop-testing-sqa", "url": "https://github.com/zulfarida0107-crypto/ci4-coffeeshop-testing-sqa" }],
    "year": "2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "group-mini-photoshop",
    "title": "Mini Photoshop",
    "category": "group-project",
    "description": "Image editing application project, currently in progress.",
    "role": "Group project.",
    "tech_stack": ["TBD"],
    "repos": [{ "name": "Mini-Photoshop", "url": "https://github.com/zulfarida0107-crypto/Mini-Photoshop" }],
    "year": "2025-2026",
    "status": "in-progress",
    "image": ""
  },
  {
    "id": "independent-bisindo",
    "title": "BISINDO Gesture Recognition",
    "category": "independent-project",
    "description": "Python-based Indonesian Sign Language (BISINDO) gesture recognition project, currently in progress.",
    "role": "Independent project.",
    "tech_stack": ["Python"],
    "repos": [{ "name": "BISINDO-Gesture-Recognition", "url": "https://github.com/zulfarida0107-crypto/" }],
    "year": "2025-2026",
    "status": "in-progress",
    "image": ""
  },
  {
    "id": "independent-soroban",
    "title": "Soroban Task Tracker",
    "category": "independent-project",
    "description": "Personal task management application.",
    "role": "Independent project — full development.",
    "tech_stack": ["TBD"],
    "repos": [{ "name": "Soroban-Task-Tracker", "url": "https://github.com/zulfarida0107-crypto/" }],
    "year": "2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-playstation-rental",
    "title": "IT Implementation for a PlayStation Rental Business",
    "category": "coursework",
    "description": "Information systems analysis for implementing IT solutions in a PlayStation rental business.",
    "role": "Coursework — Information Systems Analysis.",
    "tech_stack": ["IS Analysis"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-apple-architecture",
    "title": "Business Architecture Analysis of Apple Inc.",
    "category": "coursework",
    "description": "Information systems strategy and business architecture analysis case study on Apple Inc.",
    "role": "Coursework — IT Business Architecture Analysis.",
    "tech_stack": ["Business Analysis"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-linux-windows",
    "title": "Linux CentOS Server Configuration & Windows 11 Memory Management",
    "category": "coursework",
    "description": "Operating systems coursework covering Linux CentOS server setup and Windows 11 memory management.",
    "role": "Coursework — Operating Systems.",
    "tech_stack": ["Linux (CentOS)", "Windows Server"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-mis-manufacturing",
    "title": "Management Information Systems Integration — Manufacturing Case Studies",
    "category": "coursework",
    "description": "Two coursework projects on MIS integration applied to manufacturing case studies.",
    "role": "Coursework — Management Information Systems.",
    "tech_stack": ["MIS"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-movie-booking",
    "title": "Java Movie Theatre Booking Application",
    "category": "coursework",
    "description": "Object-oriented movie theatre ticket booking application.",
    "role": "Coursework — Object-Oriented Programming.",
    "tech_stack": ["Java", "OOP"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-travel-website",
    "title": "Travel Destination Website",
    "category": "coursework",
    "description": "Website showcasing travel destinations, built for Internet & Web Programming coursework.",
    "role": "Coursework — Internet & Web Programming.",
    "tech_stack": ["HTML/CSS", "JavaScript"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-cinema-db",
    "title": "Cinema Database Design",
    "category": "coursework",
    "description": "Database schema design for a cinema management system.",
    "role": "Coursework — Database Management.",
    "tech_stack": ["MySQL", "Database Design"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-digital-signature",
    "title": "Digital Signature & X.509 Certificate Authentication Analysis in SSL/TLS",
    "category": "coursework",
    "description": "Analysis of digital signature and X.509 certificate authentication within SSL/TLS protocols.",
    "role": "Coursework — System & Computer Security.",
    "tech_stack": ["PKI", "X.509", "SSL/TLS"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  },
  {
    "id": "coursework-todo-hci",
    "title": "Todo List Application (HCI Redesign)",
    "category": "coursework",
    "description": "Redesign of a todo list application applying Human-Computer Interaction principles.",
    "role": "Coursework — Human-Computer Interaction.",
    "tech_stack": ["HCI Design"],
    "repos": [],
    "year": "2024-2025",
    "status": "completed",
    "image": ""
  }
]
```

> Catatan: `repos` dengan url kosong (`github.com/zulfarida0107-crypto/`) perlu dilengkapi dengan nama repo asli sesuai akun GitHub kamu. Untuk coursework yang tidak diupload ke GitHub, field `repos` dikosongkan (`[]`) atau bisa ditambahkan link Google Drive/dokumen kalau ada.

## 4. Schema: `experience.json`
```json
[
  {
    "id": "psdm-trui",
    "role": "Human Resource Development (PSDM) Member",
    "organization": "University of Indonesia Robotics Team (TRUI)",
    "period": "2024-2025",
    "description": "Managed internal and external communications among team members; organized benchmarking visits, member inaugurations, and development programs."
  },
  {
    "id": "mc-trui-maunc",
    "role": "Master of Ceremony",
    "organization": "TRUI x MAUNC (Universitas Siliwangi) Robotics Benchmarking Event",
    "period": "2024",
    "description": "Hosted a cross-institution technical exchange event, ensuring structured session transitions and audience engagement."
  },
  {
    "id": "csfest-logistics",
    "role": "Logistics & Medical Division Staff",
    "organization": "Computer Science Festival (CSFEST) 2024 Committee",
    "period": "2024",
    "description": "Supported event logistics and provided on-site medical readiness during a large-scale campus technology festival."
  },
  {
    "id": "dfuturo-greeter",
    "role": "Greeter & Volunteer",
    "organization": "D'Futuro Futurist Summit 2024",
    "period": "2024",
    "description": "Managed event access control and ticketing operations; welcomed attendees and provided facility information."
  },
  {
    "id": "komandro-pr",
    "role": "Public Relations Officer",
    "organization": "Android Community CCIT FTUI (KOMANDRO)",
    "period": "2024-2025",
    "description": "Managed internal and external communications and built relationships with external partners."
  },
  {
    "id": "komandro-mc-election",
    "role": "Master of Ceremony",
    "organization": "KOMANDRO Chairman Election",
    "period": "2024-2025",
    "description": "Facilitated structured proceedings from opening to closing, coordinating with committee members and speakers."
  },
  {
    "id": "mabim-mentor",
    "role": "Mentor",
    "organization": "Masa Bimbingan (MABIM) Freshman Orientation Program",
    "period": "2025",
    "description": "Guided new students through campus adaptation; facilitated discussions and monitored participant engagement."
  },
  {
    "id": "komandro-reunion",
    "role": "Public Relations Committee",
    "organization": "KOMANDRO Alumni Reunion (2013-2025 Cohorts)",
    "period": "2026",
    "description": "Coordinated cross-generational event planning, participant logistics, and technical requirements."
  },
  {
    "id": "pmr-member",
    "role": "Member, Indonesian Red Cross Youth (PMR)",
    "organization": "SMA Negeri 12 Kota Depok",
    "period": "2023-2024",
    "description": "Competed as a participant in the Women's Stretcher (Tandu Putri) competition."
  },
  {
    "id": "selaras-committee",
    "role": "Event Committee Member",
    "organization": "SELARAS (Semarak Kepalangmerahan Indonesia), PMR SMAN 12 Depok",
    "period": "2024",
    "description": "Served on the organizing committee for a Red Cross-themed inter-school competition; contributed to event planning and execution."
  }
]
```

## 5. Schema: `certifications.json`
```json
[
  {
    "id": "ccna",
    "name": "CCNA: Introduction to Networks",
    "issuer": "Cisco Networking Academy, State Polytechnic of Jakarta",
    "year": "2025"
  },
  {
    "id": "copywriting-ai",
    "name": "Copywriting AI for Digital Advertising",
    "issuer": "Digital Talent Scholarship, Ministry of Communication and Digital Affairs (Komdigi)",
    "year": "2025"
  },
  {
    "id": "social-media-mgmt",
    "name": "Social Media Management for Digital Brands",
    "issuer": "Digital Talent Scholarship, Ministry of Communication and Digital Affairs (Komdigi)",
    "year": "2025"
  },
  {
    "id": "mandarin",
    "name": "Mandarin Language Course, Beginner Level",
    "issuer": "Brilliant English Course (Brilliant EC)",
    "year": "2024"
  },
  {
    "id": "english",
    "name": "English Course, Beginner Level",
    "issuer": "The Eagle English Course",
    "year": "2022"
  }
]
```

## 6. Schema: `skills.json`
```json
{
  "programming_languages": ["Java", "Python", "PHP", "Dart", "JavaScript"],
  "frameworks_platforms": ["Spring Boot", "Flutter"],
  "databases": ["MySQL", "Database Design", "Management Information Systems (MIS)"],
  "security_infrastructure": ["Digital Signature & PKI", "X.509 Certificate Authentication", "SSL/TLS Protocol Analysis", "Linux (CentOS)", "Windows Server Administration"],
  "software_engineering": ["OOP", "Software Quality Assurance (SQA) & Testing", "DevOps", "HCI Design"],
  "tools": ["Git", "GitHub"],
  "business_analysis": ["IT Business Architecture Analysis", "Information Systems Integration", "Technical Documentation"],
  "networking": ["Cisco CCNA"],
  "digital_marketing": ["AI-Assisted Copywriting", "Social Media Management"],
  "professional_skills": [
    "Cross-Functional Team Coordination and Stakeholder Communication",
    "Public Speaking, Event Facilitation, and MC Experience",
    "Initiative, Ownership, and High Responsibility",
    "Mentoring, Training, and Peer Guidance",
    "Organizational Leadership and Cross-Divisional Collaboration"
  ]
}
```

## 7. Kalau Nanti Upgrade ke Database Sungguhan (opsional, fase lanjut)
Struktur tabel SQL yang setara (kalau mau pakai backend Spring Boot/CodeIgniter + MySQL — sesuai skill kamu):

```sql
CREATE TABLE projects (
  id VARCHAR(50) PRIMARY KEY,
  title VARCHAR(255),
  category ENUM('final-project','group-project','independent-project','coursework'),
  description TEXT,
  role TEXT,
  year VARCHAR(20),
  status ENUM('completed','in-progress'),
  image_url VARCHAR(255)
);

CREATE TABLE project_tech_stack (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project_id VARCHAR(50),
  tech_name VARCHAR(100),
  FOREIGN KEY (project_id) REFERENCES projects(id)
);

CREATE TABLE project_repos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project_id VARCHAR(50),
  repo_name VARCHAR(255),
  repo_url VARCHAR(255),
  FOREIGN KEY (project_id) REFERENCES projects(id)
);

CREATE TABLE experience (
  id VARCHAR(50) PRIMARY KEY,
  role VARCHAR(255),
  organization VARCHAR(255),
  period VARCHAR(50),
  description TEXT
);

CREATE TABLE certifications (
  id VARCHAR(50) PRIMARY KEY,
  name VARCHAR(255),
  issuer VARCHAR(255),
  year VARCHAR(20)
);
```
