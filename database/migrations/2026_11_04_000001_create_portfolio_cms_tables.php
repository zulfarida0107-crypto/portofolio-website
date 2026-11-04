<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: Membuat seluruh tabel Layer 1 (CMS Website Portofolio)
     */
    public function up(): void
    {
        // 1. Tabel Profil Utama (Data Diri & Hero)
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('badge_status', 150)->default('Available for QA & Systems Analyst Roles');
            $table->string('headline', 200);
            $table->string('subheadline', 255)->nullable();
            $table->string('tagline', 255)->nullable();
            $table->string('education', 200)->nullable();
            $table->string('location', 100)->default('Depok & Jakarta, Indonesia');
            $table->string('email', 100);
            $table->string('whatsapp_number', 50)->nullable();
            $table->string('whatsapp_url', 255)->nullable();
            $table->string('linkedin_url', 255)->nullable();
            $table->string('github_url', 255)->nullable();
            $table->string('photo_path', 255)->nullable();
            $table->string('cv_path', 255)->nullable();
            $table->text('bio_summary');
            $table->text('extended_summary')->nullable();
            $table->timestamps();
        });

        // 2. Tabel Metrik Traksi & Statistik (Counter Bar)
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->string('value', 50); // Contoh: "1st Winner", "15+", "200+"
            $table->string('label', 100); // Contoh: "Juara 1 CCIT Venture Studio"
            $table->string('subtext', 150)->nullable(); // Contoh: "Batch #1 Manggala"
            $table->string('badge_tag', 50)->nullable(); // Contoh: "VS #1", "Open Source"
            $table->string('icon', 50)->nullable(); // Material icon atau emoji
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 3. Tabel Pilar Kompetensi & Kapabilitas
        Schema::create('competencies', function (Blueprint $table) {
            $table->id();
            $table->string('category', 150); // Contoh: "Quality Assurance & Testing"
            $table->text('description');
            $table->string('icon', 50)->nullable();
            $table->json('skills'); // Array list skill teknis
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 4. Tabel Proyek & Studi Kasus
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->unique();
            $table->string('title', 200);
            $table->string('badge', 150)->nullable(); // Contoh: "🏆 1st Winner CCIT Venture Studio"
            $table->string('category', 50); // flagship, capstone, qa-testing, independent, coursework
            $table->string('category_label', 100);
            $table->string('role_title', 200)->nullable();
            $table->text('summary');
            $table->text('qa_focus')->nullable(); // Fokus skenario uji & analisis
            $table->json('tech_stack'); // Array teknologi
            $table->string('demo_video_url', 255)->nullable();
            $table->string('github_web_url', 255)->nullable();
            $table->string('github_desktop_url', 255)->nullable();
            $table->string('attachment_type', 150)->nullable();
            $table->string('attachment_image', 255)->nullable();
            $table->string('year', 50);
            $table->boolean('is_featured')->default(false);
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 5. Tabel Galeri & Modal Interaktif Proyek (Khusus CuitBox Modal Tabs)
        Schema::create('project_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
            $table->string('tab_title', 150); // Desktop Kiosk UI, Admin Dashboard, etc.
            $table->string('tag_badge', 100)->nullable(); // "Low-Latency Hardware Buffer"
            $table->text('challenge_solved')->nullable();
            $table->string('image_path', 255)->nullable();
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 6. Tabel Pengalaman Organisasi & Kepemimpinan
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('organization', 200); // TRUI, KOMANDRO, dll.
            $table->string('role', 200); // Public Relations Officer, MC, etc.
            $table->string('period', 100); // "2024 - Sekarang"
            $table->text('description')->nullable();
            $table->json('highlights'); // Poin kontribusi/tanggung jawab
            $table->json('activity_photos')->nullable(); // Foto dokumentasi acara/kegiatan
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 7. Tabel Sertifikasi & Penghargaan
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('issuer', 200);
            $table->string('year', 50);
            $table->string('type', 100); // "Achievement / Award", "Technical Certification"
            $table->string('badge_color', 50)->default('blue');
            $table->string('icon_name', 50)->nullable();
            $table->string('credential_url', 255)->nullable();
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });

        // 8. Tabel Pesan Kontak Masuk (Inquiries Pengunjung)
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('subject', 200)->nullable();
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi: Hapus tabel-tabel secara urut
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('project_galleries');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('competencies');
        Schema::dropIfExists('metrics');
        Schema::dropIfExists('profiles');
    }
};
