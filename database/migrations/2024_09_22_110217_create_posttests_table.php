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
        Schema::create('posttests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan tabel users
            $table->string('nama');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('pelatihan_kebencanaan');
            $table->string('bencana_alam_adalah');
            $table->string('banjir_adalah_air');
            $table->string('curah_hujan_tinggi');
            $table->string('upaya_untuk_mencegah');
            $table->string('ciri_ciri_daerah');
            $table->string('agar_resiko_bencana');
            $table->string('gempa_adalah_peristiwa');
            $table->string('saat_terjadi_gempa');
            $table->string('tindakan_pencegahan_gempa');
            $table->string('kebakaran_adalah_reaksi');
            $table->string('mematikan_jaringan_listrik');
            $table->string('upaya_mencegah_kebakaran');
            $table->string('penyebab_kebakaran_dari');
            $table->string('apakah_anda_akan');
            $table->string('apakah_ditempat_anda_tersedia_peta');
            $table->string('apakah_ditempat_anda_tersedia_kotak');
            $table->string('apakah_ditempat_anda_tersedia_alat');
            $table->string('apakah_anda_mempersiapkan');
            $table->string('apakah_di_tempat');
            $table->string('apakah_anda_memperoleh');
            $table->string('pernakah_anda_mengikuti');
            $table->string('pasokan_makanan_dan');
            $table->string('baterai_tambahan');
            $table->string('radio_bertenaga_baterai');
            $table->string('senter_yang_dioperasikan_baterai');
            $table->string('peralatan_p3k');
            $table->string('peluit');
            $table->string('sepatu_bot');
            $table->string('jas_hujan');
            $table->string('uang_untuk_keadaan_darurat');
            $table->string('mengetahui_ancaman_bencana');
            $table->string('mengetahui_bagian_mana');
            $table->string('mengetahui_cara_melindungi');
            $table->string('mengetahui_sistem_peringatan');
            $table->string('mengetahui_lokasi_evakuasi');
            $table->string('mengadakan_pertemuan_untuk');
            $table->string('memiliki_rencana_tentang');
            $table->string('mempraktikkan_rencana_tanya');
            $table->string('menyesuaikan_rencana_sesuai');
            $table->string('membahas_rencana_komunikasi');
            $table->string('mencatat_nomor_anggota');
            $table->string('menuliskan_nomor_penting');
            $table->string('menuliskan_nomor_telepon');
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
        Schema::dropIfExists('posttests');
    }
};
