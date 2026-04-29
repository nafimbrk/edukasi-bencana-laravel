<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Models\Prize;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();



// Setiap Senin 00:00 WIB
Schedule::call(function () {
    $lastWeek = now()->subWeek()->format('Y-W');
    $currentWeek = now()->format('Y-W');

    // Nonaktifkan hadiah minggu lalu
    Prize::where('week', $lastWeek)->update(['is_active' => false]);
    
    // Aktifkan hadiah minggu ini (jika sudah di-setup admin)
    Prize::where('week', $currentWeek)->update(['is_active' => true]);

    Log::info("Weekly prize reset: {$lastWeek} → {$currentWeek}");
})->weeklyOn(1, '0:00')->timezone('Asia/Jakarta');