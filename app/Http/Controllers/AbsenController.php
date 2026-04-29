<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $today = now()->toDateString(); 

    $hasAbsen = Absen::where('user_id', $user->id)
                    ->whereDate('tanggal', $today)
                    ->exists();

    return view('/', compact('hasAbsen'));
}

public function store(Request $request)
    {
        $user = Auth::user();
        $today = now()->toDateString();

        $alreadyAbsen = Absen::where('user_id', $user->id)
                            ->whereDate('tanggal', $today)
                            ->exists();

        if (!$alreadyAbsen) {
            Absen::create([
                'user_id' => $user->id,
                'tanggal' => $today,
                'waktu' => now()->toTimeString(),
            ]);

            Alert::success('Berhasil!', 'Absen masuk berhasil dicatat.');
        } else {
            Alert::info('Informasi', 'Anda sudah absen hari ini.');
        }

        return redirect()->back();
    }

}



















