<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PretestFactory extends Factory
{
    public function definition()
    {
        // Pilih user random atau buat baru
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        
        // Tentukan minggu (70% minggu ini, 30% minggu lalu untuk testing filter)
        $week = $this->faker->boolean(70) ? now()->format('Y-W') : now()->subWeek()->format('Y-W');
        $randomDate = $this->faker->dateTimeBetween('-7 days', 'now');

        // --- FIELD PENGETAHUAN (13 soal Benar/Salah + 8 soal Ya/Tidak) ---
        $knowledgeFields = [
            'bencana_alam_adalah', 'banjir_adalah_air', 'curah_hujan_tinggi',
            'upaya_untuk_mencegah', 'ciri_ciri_daerah', 'agar_resiko_bencana',
            'gempa_adalah_peristiwa', 'saat_terjadi_gempa', 'tindakan_pencegahan_gempa',
            'kebakaran_adalah_reaksi', 'mematikan_jaringan_listrik', 'upaya_mencegah_kebakaran',
            'penyebab_kebakaran_dari',
            'apakah_anda_akan', 'apakah_ditempat_anda_tersedia_peta',
            'apakah_ditempat_anda_tersedia_kotak', 'apakah_ditempat_anda_tersedia_alat',
            'apakah_anda_mempersiapkan', 'apakah_di_tempat', 'apakah_anda_memperoleh',
            'pernakah_anda_mengikuti'
        ];

        // --- FIELD KESIAPSIAGAAN (22 soal persentase) ---
        $readinessFields = [
            'pasokan_makanan_dan', 'baterai_tambahan', 'radio_bertenaga_baterai',
            'senter_yang_dioperasikan_baterai', 'peralatan_p3k', 'peluit',
            'sepatu_bot', 'jas_hujan', 'uang_untuk_keadaan_darurat',
            'mengetahui_ancaman_bencana', 'mengetahui_bagian_mana',
            'mengetahui_cara_melindungi', 'mengetahui_sistem_peringatan',
            'mengetahui_lokasi_evakuasi', 'mengadakan_pertemuan_untuk',
            'memiliki_rencana_tentang', 'mempraktikkan_rencana_tanya',
            'menyesuaikan_rencana_sesuai', 'membahas_rencana_komunikasi',
            'mencatat_nomor_anggota', 'menuliskan_nomor_penting',
            'menuliskan_nomor_telepon'
        ];

        $data = [];

        // Generate jawaban pengetahuan
        foreach ($knowledgeFields as $i => $field) {
            $isBenarSalah = $i < 13;
            $data[$field] = $this->faker->randomElement($isBenarSalah ? ['Benar', 'Salah'] : ['Ya', 'Tidak']);
        }

        // Generate jawaban kesiapsiagaan
        foreach ($readinessFields as $field) {
            $data[$field] = $this->faker->randomElement(['25%', '50%', '75%', '100%', 'Belum Ada']);
        }

        // --- HITUNG SKOR OTOMATIS (SAMA PERSIS DENGAN CONTROLLER KAMU) ---
        $score_pengetahuan = 0;
        foreach (array_slice($knowledgeFields, 0, 13) as $f) {
            if ($data[$f] == 'Benar') $score_pengetahuan++;
        }
        foreach (array_slice($knowledgeFields, 13, 8) as $f) {
            if ($data[$f] == 'Ya') $score_pengetahuan++;
        }

        $score_kesiapsiagaan = 0;
        foreach ($readinessFields as $f) {
            if (in_array($data[$f], ['25%', '50%', '75%', '100%'])) $score_kesiapsiagaan++;
        }

        $grade_pengetahuan = $score_pengetahuan <= 7 ? 'Cukup' : ($score_pengetahuan <= 14 ? 'Sedang' : 'Baik');
        $grade_kesiapsiagaan = $score_kesiapsiagaan <= 7 ? 'Cukup' : ($score_kesiapsiagaan <= 14 ? 'Sedang' : 'Baik');

        return array_merge($data, [
            'user_id' => $user->id,
            'nama' => $user->name,
            'umur' => $this->faker->numberBetween(15, 65),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'pendidikan' => $this->faker->randomElement(['SD', 'SMP', 'SMA/SMK', 'D3', 'S1', 'S2', 'S3']),
            'pelatihan_kebencanaan' => $this->faker->randomElement(['Pernah', 'Belum Pernah']),
            'tanggal' => $randomDate->format('Y-m-d'),
            'waktu' => $randomDate->format('H:i:s'),
            'score_pengetahuan' => $score_pengetahuan,
            'grade_pengetahuan' => $grade_pengetahuan,
            'score_kesiapsiagaan' => $score_kesiapsiagaan,
            'grade_kesiapsiagaan' => $grade_kesiapsiagaan,
            'total_score' => $score_pengetahuan + $score_kesiapsiagaan,
            'week' => $week,
        ]);
    }
}