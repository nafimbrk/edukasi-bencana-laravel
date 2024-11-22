<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posttest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PosttestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $hasPosttest = Posttest::where('user_id', $user->id)->exists();

        if ($hasPosttest) {
            return redirect('/');
        }
        
        
        return view('posttest', [
        'hasPosttest' => $hasPosttest,
    ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $hasPosttest = Posttest::where('user_id', $user->id)->exists();

        if ($hasPosttest) {
            return redirect('/');
        }
        
        

        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'pelatihan_kebencanaan' => 'required|string',
            'bencana_alam_adalah' => 'required|string',
            'banjir_adalah_air' => 'required|string',
            'curah_hujan_tinggi' => 'required|string',
            'upaya_untuk_mencegah' => 'required|string',
            'ciri_ciri_daerah' => 'required|string',
            'agar_resiko_bencana' => 'required|string',
            'gempa_adalah_peristiwa' => 'required|string',
            'saat_terjadi_gempa' => 'required|string',
            'tindakan_pencegahan_gempa' => 'required|string',
            'kebakaran_adalah_reaksi' => 'required|string',
            'mematikan_jaringan_listrik' => 'required|string',
            'upaya_mencegah_kebakaran' => 'required|string',
            'penyebab_kebakaran_dari' => 'required|string',
            'apakah_anda_akan' => 'required|string',
            'apakah_ditempat_anda_tersedia_peta' => 'required|string',
            'apakah_ditempat_anda_tersedia_kotak' => 'required|string',
            'apakah_ditempat_anda_tersedia_alat' => 'required|string',
            'apakah_anda_mempersiapkan' => 'required|string',
            'apakah_di_tempat' => 'required|string',
            'apakah_anda_memperoleh' => 'required|string',
            'pernakah_anda_mengikuti' => 'required|string',
            'pasokan_makanan_dan' => 'required|string',
            'baterai_tambahan' => 'required|string',
            'radio_bertenaga_baterai' => 'required|string',
            'senter_yang_dioperasikan_baterai' => 'required|string',
            'peralatan_p3k' => 'required|string',
            'peluit' => 'required|string',
            'sepatu_bot' => 'required|string',
            'jas_hujan' => 'required|string',
            'uang_untuk_keadaan_darurat' => 'required|string',
            'mengetahui_ancaman_bencana' => 'required|string',
            'mengetahui_bagian_mana' => 'required|string',
            'mengetahui_cara_melindungi' => 'required|string',
            'mengetahui_sistem_peringatan' => 'required|string',
            'mengetahui_lokasi_evakuasi' => 'required|string',
            'mengadakan_pertemuan_untuk' => 'required|string',
            'memiliki_rencana_tentang' => 'required|string',
            'mempraktikkan_rencana_tanya' => 'required|string',
            'menyesuaikan_rencana_sesuai' => 'required|string',
            'membahas_rencana_komunikasi' => 'required|string',
            'mencatat_nomor_anggota' => 'required|string',
            'menuliskan_nomor_penting' => 'required|string',
            'menuliskan_nomor_telepon' => 'required|string'
        ]);
        
        
        
        
        
        
$score_pengetahuan = 0;
$fields = [
    'bencana_alam_adalah', 'banjir_adalah_air', 'curah_hujan_tinggi',
    'upaya_untuk_mencegah', 'ciri_ciri_daerah', 'agar_resiko_bencana',
    'gempa_adalah_peristiwa', 'saat_terjadi_gempa', 'tindakan_pencegahan_gempa',
    'kebakaran_adalah_reaksi', 'mematikan_jaringan_listrik', 'upaya_mencegah_kebakaran',
    'penyebab_kebakaran_dari'
];

$fields2 = [
    'apakah_anda_akan', 'apakah_ditempat_anda_tersedia_peta',
    'apakah_ditempat_anda_tersedia_kotak', 'apakah_ditempat_anda_tersedia_alat',
    'apakah_anda_mempersiapkan', 'apakah_di_tempat', 'apakah_anda_memperoleh',
    'pernakah_anda_mengikuti'
];

foreach ($fields as $field) {
    if ($request->$field == 'Benar') {
        $score_pengetahuan += 1;
    }
}

foreach ($fields2 as $field2) {
    if ($request->$field2 == 'Ya') {
        $score_pengetahuan += 1;
    }
}

        
    
        
        
        
        
        if ($score_pengetahuan <= 7) {
            $grade_pengetahuan = 'Cukup';
        } elseif ($score_pengetahuan <= 14) {
            $grade_pengetahuan = 'Sedang';
        } else {
            $grade_pengetahuan = 'Baik';
        }
        
        
        
        
        
        
    
    
    
    
    
    $data = [
            'pasokan_makanan_dan',
            'baterai_tambahan',
            'radio_bertenaga_baterai',
            'senter_yang_dioperasikan_baterai',
            'peralatan_p3k',
            'peluit',
            'sepatu_bot',
            'jas_hujan',
            'uang_untuk_keadaan_darurat',
            'mengetahui_ancaman_bencana',
            'mengetahui_bagian_mana',
            'mengetahui_cara_melindungi',
            'mengetahui_sistem_peringatan',
            'mengetahui_lokasi_evakuasi',
            'mengadakan_pertemuan_untuk',
            'memiliki_rencana_tentang',
            'mempraktikkan_rencana_tanya',
            'menyesuaikan_rencana_sesuai',
            'membahas_rencana_komunikasi',
            'mencatat_nomor_anggota',
            'menuliskan_nomor_penting',
            'menuliskan_nomor_telepon',
            
            
        ];    
    
    
    
    
    
    $score_kesiapsiagaan = 0;

        foreach ($data as $value) {
            switch ($request->$value) {
                case '25%':
                case '50%':
                case '75%':
                case '100%':
    $score_kesiapsiagaan += 1;
                    break;
            }
        }


        if ($score_kesiapsiagaan <= 7) {
            $grade_kesiapsiagaan = 'Cukup';
        } elseif ($score_kesiapsiagaan <= 14) {
            $grade_kesiapsiagaan = 'Sedang';
        } else {
            $grade_kesiapsiagaan = 'Baik';
        }
    
        
        
        
        


        
        
        
        
        
        
        
        
        
        
    $posttest = new Posttest;

    $posttest->user_id = Auth::id();
    $posttest->nama = $request->nama;
    $posttest->umur = $request->umur;
    $posttest->jenis_kelamin = $request->jenis_kelamin;
    $posttest->pendidikan = $request->pendidikan;
    $posttest->pelatihan_kebencanaan = $request->pelatihan_kebencanaan;
    $posttest->bencana_alam_adalah = $request->bencana_alam_adalah;
    $posttest->banjir_adalah_air = $request->banjir_adalah_air;
    $posttest->curah_hujan_tinggi = $request->curah_hujan_tinggi;
    $posttest->upaya_untuk_mencegah = $request->upaya_untuk_mencegah;
    $posttest->ciri_ciri_daerah = $request->ciri_ciri_daerah;
    $posttest->agar_resiko_bencana = $request->agar_resiko_bencana;
    $posttest->gempa_adalah_peristiwa = $request->gempa_adalah_peristiwa;
    $posttest->saat_terjadi_gempa = $request->saat_terjadi_gempa;
    $posttest->tindakan_pencegahan_gempa = $request->tindakan_pencegahan_gempa;
    $posttest->kebakaran_adalah_reaksi = $request->kebakaran_adalah_reaksi;
    $posttest->mematikan_jaringan_listrik = $request->mematikan_jaringan_listrik;
    $posttest->upaya_mencegah_kebakaran = $request->upaya_mencegah_kebakaran;
    $posttest->penyebab_kebakaran_dari = $request->penyebab_kebakaran_dari;
    $posttest->apakah_anda_akan = $request->apakah_anda_akan;
    $posttest->apakah_ditempat_anda_tersedia_peta = $request->apakah_ditempat_anda_tersedia_peta;
    $posttest->apakah_ditempat_anda_tersedia_kotak = $request->apakah_ditempat_anda_tersedia_kotak;
    $posttest->apakah_ditempat_anda_tersedia_alat = $request->apakah_ditempat_anda_tersedia_alat;
    $posttest->apakah_anda_mempersiapkan = $request->apakah_anda_mempersiapkan;
    $posttest->apakah_di_tempat = $request->apakah_di_tempat;
    $posttest->apakah_anda_memperoleh = $request->apakah_anda_memperoleh;
    $posttest->pernakah_anda_mengikuti = $request->pernakah_anda_mengikuti;
    $posttest->pasokan_makanan_dan = $request->pasokan_makanan_dan;
    $posttest->baterai_tambahan = $request->baterai_tambahan;
    $posttest->radio_bertenaga_baterai = $request->radio_bertenaga_baterai;
    $posttest->senter_yang_dioperasikan_baterai = $request->senter_yang_dioperasikan_baterai;
    $posttest->peralatan_p3k = $request->peralatan_p3k;
    $posttest->peluit = $request->peluit;
    $posttest->sepatu_bot = $request->sepatu_bot;
    $posttest->jas_hujan = $request->jas_hujan;
    $posttest->uang_untuk_keadaan_darurat = $request->uang_untuk_keadaan_darurat;
    $posttest->mengetahui_ancaman_bencana = $request->mengetahui_ancaman_bencana;
    $posttest->mengetahui_bagian_mana = $request->mengetahui_bagian_mana;
    $posttest->mengetahui_cara_melindungi = $request->mengetahui_cara_melindungi;
    $posttest->mengetahui_sistem_peringatan = $request->mengetahui_sistem_peringatan;
    $posttest->mengetahui_lokasi_evakuasi = $request->mengetahui_lokasi_evakuasi;
    $posttest->mengadakan_pertemuan_untuk = $request->mengadakan_pertemuan_untuk;
    $posttest->memiliki_rencana_tentang = $request->memiliki_rencana_tentang;
    $posttest->mempraktikkan_rencana_tanya = $request->mempraktikkan_rencana_tanya;
    $posttest->menyesuaikan_rencana_sesuai = $request->menyesuaikan_rencana_sesuai;
    $posttest->membahas_rencana_komunikasi = $request->membahas_rencana_komunikasi;
    $posttest->mencatat_nomor_anggota = $request->mencatat_nomor_anggota;
    $posttest->menuliskan_nomor_penting = $request->menuliskan_nomor_penting;
    $posttest->menuliskan_nomor_telepon = $request->menuliskan_nomor_telepon;
    
$posttest->tanggal = now()->toDateString();
$posttest->waktu = now()->toTimeString();
    $posttest->score_pengetahuan = $score_pengetahuan;
    $posttest->grade_pengetahuan = $grade_pengetahuan;
    $posttest->score_kesiapsiagaan = $score_kesiapsiagaan;
    $posttest->grade_kesiapsiagaan = $grade_kesiapsiagaan;

    $posttest->save();
        
        
        
        
        
        
        
        
        
        
        
        
    
return redirect()->route('posttest.result', ['user_id' => $user->id]);
    }

  public function result($user_id)
{
    $posttest = Posttest::where('user_id', $user_id)->firstOrFail();
    return view('posttest.result', compact('posttest'));
}




}







