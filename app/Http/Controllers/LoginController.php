<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Models\Pretest;

// class LoginController extends Controller
// {
//     public function index()
//     {
//         return view('login.index');
//     }

//     public function authenticate(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required'
//         ]);

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();

//             $userId = Auth::id();
//             $hasPretest = Pretest::where('user_id', $userId)->exists();

//             if ($hasPretest) {
//                 return redirect('/')->with('error', 'Anda sudah mengisi pretest dan tidak dapat mengaksesnya lagi.');
//             }

//             return redirect('pretest');
//         }

//         return back()->with('loginError', 'Ada kesalahan saat melakukan login!');
//     }

//     public function logout()
//     {
//         Auth::logout();
//         request()->session()->invalidate();
//         request()->session()->regenerateToken();
//         return redirect('login');
//     }
// }




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pretest;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Cari pengguna berdasarkan email
    $user = User::where('email', $credentials['email'])->first();

    // Periksa apakah pengguna ada dan kata sandi cocok
    if ($user && $user->password === $credentials['password']) {
        
        // 🔐 Login user
        Auth::login($user);
        $request->session()->regenerate();

        // 🎯 CEK: Jika admin, langsung redirect ke home
        if ($user->is_admin) {
            return redirect('/')->with('success', 'Selamat datang, Admin! 👋');
        }

        // 👤 Untuk user biasa: cek apakah sudah isi pretest
        $hasPretest = Pretest::where('user_id', $user->id)->exists();

        if ($hasPretest) {
            return redirect('/')->with('info', 'Anda sudah mengisi pretest.');
        }

        return redirect('pretest');
    }

    return back()->with('loginError', 'Ada kesalahan saat melakukan login!');
}

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('login');
    }
}

