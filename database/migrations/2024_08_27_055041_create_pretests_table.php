<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pretests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan tabel users
            $table->string('nama')->nullable();
            $table->integer('umur')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pelatihan_kebencanaan')->nullable();
            $table->string('bencana_alam_adalah')->nullable();
            $table->string('banjir_adalah_air')->nullable();
            $table->string('curah_hujan_tinggi')->nullable();
            $table->string('upaya_untuk_mencegah')->nullable();
            $table->string('ciri_ciri_daerah')->nullable();
            $table->string('agar_resiko_bencana')->nullable();
            $table->string('gempa_adalah_peristiwa')->nullable();
            $table->string('saat_terjadi_gempa')->nullable();
            $table->string('tindakan_pencegahan_gempa')->nullable();
            $table->string('kebakaran_adalah_reaksi')->nullable();
            $table->string('mematikan_jaringan_listrik')->nullable();
            $table->string('upaya_mencegah_kebakaran')->nullable();
            $table->string('penyebab_kebakaran_dari')->nullable();
            $table->string('apakah_anda_akan')->nullable();
            $table->string('apakah_ditempat_anda_tersedia_peta')->nullable();
            $table->string('apakah_ditempat_anda_tersedia_kotak')->nullable();
            $table->string('apakah_ditempat_anda_tersedia_alat')->nullable();
            $table->string('apakah_anda_mempersiapkan')->nullable();
            $table->string('apakah_di_tempat')->nullable();
            $table->string('apakah_anda_memperoleh')->nullable();
            $table->string('pernakah_anda_mengikuti')->nullable();
            $table->string('pasokan_makanan_dan')->nullable();
            $table->string('baterai_tambahan')->nullable();
            $table->string('radio_bertenaga_baterai')->nullable();
            $table->string('senter_yang_dioperasikan_baterai')->nullable();
            $table->string('peralatan_p3k')->nullable();
            $table->string('peluit')->nullable();
            $table->string('sepatu_bot')->nullable();
            $table->string('jas_hujan')->nullable();
            $table->string('uang_untuk_keadaan_darurat')->nullable();
            $table->string('mengetahui_ancaman_bencana')->nullable();
            $table->string('mengetahui_bagian_mana')->nullable();
            $table->string('mengetahui_cara_melindungi')->nullable();
            $table->string('mengetahui_sistem_peringatan')->nullable();
            $table->string('mengetahui_lokasi_evakuasi')->nullable();
            $table->string('mengadakan_pertemuan_untuk')->nullable();
            $table->string('memiliki_rencana_tentang')->nullable();
            $table->string('mempraktikkan_rencana_tanya')->nullable();
            $table->string('menyesuaikan_rencana_sesuai')->nullable();
            $table->string('membahas_rencana_komunikasi')->nullable();
            $table->string('mencatat_nomor_anggota')->nullable();
            $table->string('menuliskan_nomor_penting')->nullable();
            $table->string('menuliskan_nomor_telepon')->nullable();
            $table->date('tanggal');
            $table->time('waktu');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pretests');
    }
};
