<?php

use App\Models\Certification;
use App\Models\Competency;
use App\Models\Experience;
use App\Models\Metric;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    // Jika database sudah dimigrasi & di-seed, ambil dari Database MySQL Laragon
    $hasDb = false;
    try {
        $hasDb = Schema::hasTable('profiles');
    } catch (\Throwable $e) {
        $hasDb = false;
    }

    if ($hasDb && Profile::count() > 0) {
        $profile = Profile::first();
        $metrics = Metric::orderBy('order_index')->get();
        $competencies = Competency::orderBy('order_index')->get();
        $projects = Project::with('galleries')->orderBy('order_index')->get();
        $experiences = Experience::orderBy('order_index')->get();
        $certifications = Certification::orderBy('order_index')->get();

        return view('welcome', compact('profile', 'metrics', 'competencies', 'projects', 'experiences', 'certifications'));
    }

    // Fallback aman ke data config jika database belum dinyalakan/di-migrate
    return view('welcome');
});
